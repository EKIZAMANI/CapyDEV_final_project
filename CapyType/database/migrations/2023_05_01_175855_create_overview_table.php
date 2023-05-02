<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('overview', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('wpm');
            $table->float('accuracy', 5, 2); //5 decimal 2 angka belakang koma
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('overview');
    }
};
