<?php

use App\Models\CommonData;
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
        Schema::create('pest_data', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->foreignIdFor(CommonData::class)->constrained()->cascadeOnDelete(); // Foreign key to common_data table

            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 5; $j++) {
                    $table->integer("location{$i}_pest{$j}")->nullable(); // Pest count fields
                }
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pest_data');
    }
};
