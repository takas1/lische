<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('genre_id')->constrained('genres');
            $table->foreignId('grade_id')->constrained('grades');
            $table->foreignId('status_id')->constrained('statuses');
            // $table->string('genre');
            // $table->string('grade')->nullable();
            $table->date('exam_date')->nullable();
            $table->integer('fee')->nullable();
            // $table->string('status');
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
        Schema::dropIfExists('licenses');
    }
};
