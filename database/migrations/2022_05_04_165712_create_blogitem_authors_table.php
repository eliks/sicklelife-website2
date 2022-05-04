<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogitemAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogitem_authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('blogitem_id')->unsigned()->index();
            $table->integer('author_id')->unsigned()->index();
            $table->integer('added_by_id')->unsigned()->index();

            $table->softDeletes();
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
        Schema::dropIfExists('blogitem_authors');
    }
}
