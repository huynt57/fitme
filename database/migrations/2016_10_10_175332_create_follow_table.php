<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('follows', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('account_id_1')->unsigned();
            $table->foreign('account_id_1')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');

            $table->integer('account_id_2')->unsigned();
            $table->foreign('account_id_2')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');


            $table->boolean('status')->default(true);
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
        //
        Schema::drop('follows');
    }
}
