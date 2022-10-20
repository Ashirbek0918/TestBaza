<?php

use App\Models\Variant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Variant::class);
            $table->mediumText('question');
            $table->string('image_url');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
