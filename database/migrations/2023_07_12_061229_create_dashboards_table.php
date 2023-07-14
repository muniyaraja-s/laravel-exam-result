<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reg_no');
            $table->string('mark_one');
            $table->string('mark_two');
            $table->string('mark_three');
            $table->dateTime('exam_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('dashboards');
    }
};
