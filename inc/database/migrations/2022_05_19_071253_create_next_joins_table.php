<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_joins', function (Blueprint $table) {
            $table->id();
            $table->string('nid');
            $table->string('mobile');
            $table->string('email');
            $table->string('blood_group');
            $table->string('marital_status');
            $table->boolean('status')->default(0);
            $table->string('total_family_members');
            $table->string('income');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('birth_date');
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
        Schema::dropIfExists('next_joins');
    }
}
