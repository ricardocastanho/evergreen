<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->enum('situation', ['Aprovado', 'Reprovado', 'Pendente'])->nullable()->default('Pendente');
            $table->decimal('av1', '3', '1')->nullable();
            $table->decimal('av2', '3', '1')->nullable();
            $table->decimal('av3', '3', '1')->nullable();
            $table->decimal('finalresult', '3', '1')->nullable();
            $table->integer('faults')->default(0);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('student_subjects');
    }
}
