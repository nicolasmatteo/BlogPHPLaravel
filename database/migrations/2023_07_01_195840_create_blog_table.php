<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('AutorId');
            $table->foreign('AutorId')->references('id')->on('usuario');
            $table->string('nombreDelBlog');
            $table->mediumtext('contenidoBlog');
            $table->dateTime('fecha');
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
        Schema::dropIfExists('blog');
    }
}
