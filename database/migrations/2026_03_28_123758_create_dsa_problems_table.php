<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dsa_problems', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('platform')->default('LeetCode'); // LeetCode, CodeStudio, Other
            $table->string('problem_link')->nullable();
            $table->string('difficulty'); // Easy, Medium, Hard
            $table->string('pattern');    // Array, Hashing, Sliding Window, etc.
            $table->string('time_complexity')->nullable();
            $table->string('space_complexity')->nullable();
            $table->text('key_idea')->nullable();
            $table->longText('approach')->nullable();
            $table->longText('code_solution')->nullable();
            $table->text('mistakes_learnings')->nullable();
            $table->date('solved_date');
            $table->integer('status')->default(1); // 1=public, 0=private
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dsa_problems');
    }
};
