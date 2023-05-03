<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candies', function (Blueprint $table) {
            $table->id('id');
            $table->string("name");
            $table->text("desc");
            $table->string("image");
            $table->integer("price"); //2500T
            $table->float("amount"); //12
            $table->integer("type"); //1 KG, 2 Piece, 3 box
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candies');
    }
};
