<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivationTokensTable extends Migration
{
    public function up()
    {
        Schema::create('activation_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('token');
            $table->timestamp('expire_at');

            $table->foreign('user_id')
                  ->references('id')
                  ->on(config('generic.user_table'))
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activation_tokens');
    }
}
