<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->foreign('name')->references('name')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->string('universitas');
            $table->foreign('universitas')->references('universitas')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->string('angkatan');
            $table->foreign('angkatan')->references('angkatan')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_members');
    }
}
