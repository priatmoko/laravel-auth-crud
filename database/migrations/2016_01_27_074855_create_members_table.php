<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->index();
			$table->string("mm_full_name");
			$table->string("mm_nick_name");
			$table->string("mm_nohp", 15);
			$table->string("mm_notelp", 15);
			$table->mediumText("mm_address");
			$table->mediumText("mm_hoby");
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
        Schema::drop('members');
    }
}
