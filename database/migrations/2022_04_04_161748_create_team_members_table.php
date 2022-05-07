<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->increments('id');
            
            $table->text('name')->nullable();
            $table->text('image_url')->nullable();
            $table->text('role')->nullable();
            $table->text('bio')->nullable();
            $table->integer('sort_rank')->nullable();
            $table->text('sm_facebook')->nullable();
            $table->text('sm_twitter')->nullable();
            $table->text('sm_instagram')->nullable();
            $table->text('sm_linkedin')->nullable();
            $table->boolean('displayed_as_teammember')->default(1);
            $table->integer('added_by_id')->default(1)->unsigned();
            $table->integer('image_id')->default(1)->unsigned();

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
        Schema::dropIfExists('team_members');
    }
}
