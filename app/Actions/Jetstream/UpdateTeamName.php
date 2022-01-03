<?php

namespace App\Actions\Jetstream;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Contracts\UpdatesTeamNames;

class UpdateTeamName implements UpdatesTeamNames
{
    /**
     * Validate and update the given team's name.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  array  $input
     * @return void
     */
    public function update($user, $team, array $input)
    {
        Gate::forUser($user)->authorize('update', $team);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'serverdb_name' => ['required', 'string', 'max:255'],
            'serverdb_alias' => ['required', 'string', 'max:255'],
            'serverdb_ip' => ['required', 'string', 'max:255'],
            'serverdb_user' => ['required', 'string', 'max:255'],
            'serverdb_password' => ['required', 'string', 'max:255'],
            'serverdb_db' => ['required', 'string', 'max:255'],
            'serverdb_port' => ['required', 'integer']
        ])->validateWithBag('updateTeamName');

        $team->forceFill([
            'name' => $input['name'],
            'serverdb_name' => $input['serverdb_name'],
            'serverdb_alias' => $input['serverdb_alias'],
            'serverdb_ip' => $input['serverdb_ip'],
            'serverdb_user' =>  $input['serverdb_user'],
            'serverdb_password' =>  $input['serverdb_password'],
            'serverdb_db' =>  $input['serverdb_db'],
            'serverdb_port' =>  $input['serverdb_port']
        ])->save();
    }
}
