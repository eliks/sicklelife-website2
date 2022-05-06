<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();

            $table->boolean('published')->default(1);
            $table->string('title', 256)->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id')->default(1)->unsigned();
            $table->integer('image_id')->default(1)->unsigned();
            $table->integer('author_id')->default(1)->unsigned();
            $table->integer('added_by_id')->default(1)->unsigned();
            $table->string('listing_date',16)->nullable();

            $table->softDeletes();
            $table->timestamp('created_at')->default(date('y-m-d H:i:s', strtotime('now')));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
