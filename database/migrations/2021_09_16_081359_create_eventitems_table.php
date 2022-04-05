<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventitems', function (Blueprint $table) {
            $table->id();

            $table->string('title', 64)->nullable();
            $table->text('brief', 16)->nullable();
            $table->text('body', 16)->nullable();
            $table->integer('category_id')->default(1)->unsigned();
            $table->integer('image_id')->default(1)->unsigned();
            $table->integer('author_id')->default(1)->unsigned();
            $table->string('listing_date', 64)->nullable();
            $table->string('ref', 64)->nullable();
            $table->date('show_from_date')->nullable();
            $table->date('show_till_date')->nullable();

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
        Schema::dropIfExists('eventitems');
    }
}
