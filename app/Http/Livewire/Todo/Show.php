<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Helpers\helper;
use App\Models\Team;

class Show extends Component
{
    //public $system;
    //public $state;


    //public $selectedState = NULL;

    public function mount()
    {
       // $this->system;
        //$this->state;
    }

    public function render()
    {  
        $team_id = Auth::user()->currentTeam->id;

        $curreny_team = Team::Where("id", $team_id)->first();

        $company = Auth::user()->currentTeam->name;
        $personal = $curreny_team->personal_team;

        try {
            $resDocid= getDOCID();
            $values = array(23, 34);
            $values_month = 12;

            for ($i = 0; $i< count($values); $i++) {
                $values_month = $values_month. ',' .$values[$i] ;
            }

            $conta = count($resDocid);
        }
        catch(\Exception $e){
            $resDocid  = "null";
            //$resDocid  = $e->getMessage();
             //$arrUser = "Disculpe, há problemas de conexão, tente mais tarde";
             $values_month = 0;

             $conta = 0;
        }


        /*return view('livewire.todo.show', [ 'docid' => $resDocid ], [ 'company' => $company ], 
                                          [ 'conta' => $conta ], [ 'datas' => date("Y-m-d") ] );*/

                                    

        return view('livewire.todo.show')
                    ->with('docid', $resDocid )
                    ->with('conta', $conta )
                    ->with('datas', date("Y-m-d"))
                    ->with('personal', $personal)
                    ->with('company',  $company);

                                        
    }


    public function saved()
    {
        $this->render();
    }



    public function selectDGID( $valor)
    {
        //dd($valor);

         /*return view('livewire.todo.show')
                    ->with('docid', "null" )
                    ->with('conta', 0 )
                    ->with('datas', date("Y-m-d"))
                    ->with('personal', 0)
                    ->with('company', $valor);*/

        //$this->state = $valor;
    }


}
