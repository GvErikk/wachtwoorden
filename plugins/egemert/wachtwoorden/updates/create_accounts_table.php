<?php namespace Egemert\Wachtwoorden\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('egemert_wachtwoorden_accounts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('egemert_wachtwoorden_accounts');
    }
}
