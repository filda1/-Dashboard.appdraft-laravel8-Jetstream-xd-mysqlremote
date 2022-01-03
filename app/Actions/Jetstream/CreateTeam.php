<?php

namespace App\Actions\Jetstream;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Contracts\CreatesTeams;
use Laravel\Jetstream\Events\AddingTeam;
use Laravel\Jetstream\Jetstream;
/** **/
class CreateTeam implements CreatesTeams
{
    /***
     * Validate and create a new team for the given user.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return mixed
     */
    public function create($user, array $input)
    {

        /*$user_name = Auth::user()->name;

        if( $user_name == "Admin"){

        Gate::forUser($user)->authorize('create', Jetstream::newTeamModel());

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'serverdb_name' => ['required', 'string', 'max:255'],
            'serverdb_alias' => ['required', 'string', 'max:255'],
            'serverdb_ip' => ['required', 'string', 'max:255'],
            'serverdb_user' => ['required', 'string', 'max:255'],
            'serverdb_password' => ['required', 'string', 'max:255'],
            'serverdb_db' => ['required', 'string', 'max:255'],
            'serverdb_port' => ['required', 'integer'],
        ])->validateWithBag('createTeam');

        AddingTeam::dispatch($user);

        $user->switchTeam($team = $user->ownedTeams()->create([
            'name' => $input['name'],
            'serverdb_name' => $input['serverdb_name'],
            'serverdb_alias' => $input['serverdb_alias'],
            'serverdb_ip' => $input['serverdb_ip'],
            'serverdb_port' => $input['serverdb_port'],
            'serverdb_user' => $input['serverdb_user'],
            'serverdb_password' => $input['serverdb_password'],
            'serverdb_db' => $input['serverdb_db'],
            'personal_team' => false,
        ]));

        return $team;
    
        }
        else{

            return Redirect::back();
        } */



        Gate::forUser($user)->authorize('create', Jetstream::newTeamModel());

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'serverdb_name' => ['required', 'string', 'max:255'],
            'serverdb_alias' => ['required', 'string', 'max:255'],
            'serverdb_ip' => ['required', 'string', 'max:255'],
            'serverdb_user' => ['required', 'string', 'max:255'],
            'serverdb_password' => ['required', 'string', 'max:255'],
            'serverdb_db' => ['required', 'string', 'max:255'],
            'serverdb_port' => ['required', 'integer'],
        ])->validateWithBag('createTeam');

        AddingTeam::dispatch($user);

        $user->switchTeam($team = $user->ownedTeams()->create([
            'name' => $input['name'],
            'serverdb_name' => $input['serverdb_name'],
            'serverdb_alias' => $input['serverdb_alias'],
            'serverdb_ip' => $input['serverdb_ip'],
            'serverdb_port' => $input['serverdb_port'],
            'serverdb_user' => $input['serverdb_user'],
            'serverdb_password' => $input['serverdb_password'],
            'serverdb_db' => $input['serverdb_db'],
            'personal_team' => false,
        ]));

        return $team;
    }
}
