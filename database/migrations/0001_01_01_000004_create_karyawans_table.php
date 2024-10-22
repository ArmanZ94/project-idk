<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ruangan;
use App\Models\Jabatan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
            //$table->foreignId('ruangan_id')->nullable()->constrained();
            //$table->foreignId('jabatan_id')->nullable()->constrained();
            $table->foreignIdFor(Ruangan::class)->nullable()->constrained();
            $table->foreignIdFor(Jabatan::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
