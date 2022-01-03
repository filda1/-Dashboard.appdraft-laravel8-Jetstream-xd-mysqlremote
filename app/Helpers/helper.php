<?php
 use Illuminate\Support\Facades\Auth;
 use App\Models\Team;

function connectDB(){
    $team_id = Auth::user()->currentTeam->id;

    $curreny_team = Team::Where("id", $team_id)->first();
  
    /*$hostname = '213.229.123.123';
    $username = 'nsolucoes_staff';
    $password = 'nsolucoes_2021_!';
    $database = 'nsolucoes_tecnica';*/
  
    $hostname = $curreny_team ->serverdb_ip;
    $username = $curreny_team ->serverdb_user;
    $password = $curreny_team ->serverdb_password;
    $database = $curreny_team ->serverdb_db;
  
  
    $con = new \MySQLi($hostname, $username, $password, $database);
    if($con->connect_errno){
        die('Error ' . $this->con->connect_error);
    }

     return $con;

}


 function getDOCID() 
 {
   $con = connectDB();
   
    //NOW
   $time = date("Y-m-d");

   //$time = '2015-11-03';
   
  /*
  * get data from remote database table
  */
  /* ======================================================= SQL DOCID ===========================================================*/
  //$sql = "SELECT id,name FROM users";
  $sql = "Select 
  documentkeyid as 'DOCID',
  round(sum(totaldiscounts),2) as 'Total Descontos',
  CASE
                  WHEN cashierflow = 1 THEN ROUND((SUM(total)),2)
                  WHEN cashierflow = 2 THEN - 1 * ROUND((SUM(total)),2)
                  ELSE 0.00
              END AS 'Total Emitido',
  
  CASE
                  WHEN documentkeyid = 'NC' THEN -1 * (round(sum(total),2))-(round(sum(totaldiscounts),2))
                  ELSE (round(sum(total),2))-(round(sum(totaldiscounts),2))
              END AS 'Total'
  from documentsheaders where date(creationdate)  = '" . $time . "' and documentkeyid in ('FAC', 'FS', 'FR','NC') and deleted = 0
  group by documentkeyid";
  /* ======================================================= SQL DOCID ===========================================================*/

  $result = $con->query($sql);

  $arrDOCID = array();
  $arrTOTALDESC = array();

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
          $row = $row["DOCID"]. " " .$row["Total Descontos"]. " " .$row["Total Emitido"]. " " .$row["Total"] ;
          array_push($arrDOCID , $row);     
      }
  } else {
   
      echo "0 results";
  }
      //return response->json(["message" => "Model status successfully updated!", "data" => $model], 200);
      //return response()->json($newString);
      $data = json_encode($arrDOCID , true);
      //$data1 = htmlspecialchars($arrUser, ENT_COMPAT,'ISO-8859-1', true);
  
       return $arrDOCID ;        
  }

