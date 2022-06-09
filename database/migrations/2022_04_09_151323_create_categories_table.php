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
//        Schema::create('categories', function (Blueprint $table) {
//
//            $table->id()->autoIncrement();
//            $table->foreignId(  'parent_id')->default(0);
//            $table->string( 'title', 150);
//            $table->string(  'keywords') -> nullable();
//            $table->string(  'description') -> nullable();
//            $table->string(  'image', 100) -> nullable();
//            $table->string(  'status',  5)->nullable()->default(value: 'False');
//            $table->timestamps();

            Schema::create('category',function(Blueprint $table){
                $table->id()->autoIncrement();
                $table->foreignId('parent_id') ->default(0);
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->string('title');
                $table->string('keywords');
                $table->string('description');
                $table->string('image')->nullable();
                $table->string('status');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('categories');
    }
};
