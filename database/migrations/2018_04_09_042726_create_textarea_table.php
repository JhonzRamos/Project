<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateTextAreaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('textarea',function(Blueprint $table){
            $table->increments("id");
            $table->string("password")->nullable();
            $table->text("sEditor")->nullable();
            $table->text("sNotEditor")->nullable();
            $table->integer("user_id")->references("id")->on("user");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('textarea');
    }

}