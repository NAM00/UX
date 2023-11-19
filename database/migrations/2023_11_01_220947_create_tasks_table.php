<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("sub_task_11")->default(0);
            $table->string("sub_task_12")->default(0);
            $table->string("sub_task_13")->nullable();
            $table->string("sub_task_21")->default(0);
            $table->string("sub_task_22")->default(0);
            $table->string("sub_task_23")->nullable();
            $table->string("sub_task_31")->default(0);
            $table->string("sub_task_32")->default(0);
            $table->string("sub_task_33")->nullable();
            $table->string("sub_task_41")->default(0);
            $table->string("sub_task_42")->default(0);
            $table->string("sub_task_43")->nullable();
            $table->string("session_id")->unique();
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
        Schema::dropIfExists('tasks');
    }
}
