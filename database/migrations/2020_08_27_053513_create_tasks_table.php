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
          $table->foreignId('todo_id')->constrained()->cascadeOnDelete();
          $table->string('difficulty');
          $table->text('description');
          $table->string('requested_by')->nullable();
          $table->timestamp('done')->nullable();
          $table->timestamp('deadline')->nullable();
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
