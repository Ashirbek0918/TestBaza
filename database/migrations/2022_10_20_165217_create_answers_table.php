<?php

use App\Models\Test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->foreignIdFor(Test::class);
            $table->enum('javob',['true','false']);
            $table->timestamps();
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
