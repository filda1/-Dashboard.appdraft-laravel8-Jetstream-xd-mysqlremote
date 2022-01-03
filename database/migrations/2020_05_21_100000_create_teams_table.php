<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('name');
            $table->boolean('personal_team');
            $table->string('serverdb_name');
            $table->string('serverdb_alias');
            $table->string('serverdb_ip');
            $table->integer('serverdb_port');
            $table->string('serverdb_user');
            $table->string('serverdb_password');
            $table->string('serverdb_db');
            $table->string('username');
            $table->integer('userid');
            $table->string('status');
            $table->string('comment');
            $table->boolean('blocked');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
