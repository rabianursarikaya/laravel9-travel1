<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('category',function(Blueprint $table){
//            $table->id();
//            $table->integer('parent_id') -> nullable();
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//            $table->string('title');
//            $table->string('keywords');
//            $table->string('description');
//            $table->string('image');
//            $table->string('status');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
