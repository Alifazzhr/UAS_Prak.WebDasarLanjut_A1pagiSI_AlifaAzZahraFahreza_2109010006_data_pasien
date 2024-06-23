<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('umur')->nullable();
            $table->timestamps();
        });
        DB::table('pasien')->insert([
            [
                'nama' => 'Natasha Putri',
                'alamat' => 'Jl. Johor Indah 1',
                'nomor_telepon' => '081245678923',
                'umur' => '20',
            ],
            [
                'nama' => 'Imam Habibie',
                'alamat' => 'Jl. Asoka',
                'nomor_telepon' => '081275395178',
                'umur' => '21',
            ],
            [
                'nama' => 'Najjia Dinda',
                'alamat' => 'Jl. Karya Wisata',
                'nomor_telepon' => '081379468525',
                'umur' => '16',
            ],
            [
                'nama' => 'Ari Hayati',
                'alamat' => 'Jl. Kemang',
                'nomor_telepon' => '08986854792',
                'umur' => '28',
            ],
            [
                'nama' => 'Vania Hanifa',
                'alamat' => 'Jl. Cempaka Indah 8',
                'nomor_telepon' => '08765432109',
                'umur' => '22',
            ],
            [
                'nama' => 'Toto Sugiarto',
                'alamat' => 'Jl. Batalyon',
                'nomor_telepon' => '082345675689',
                'umur' => '27',
            ],
            [
                'nama' => 'Ali Amran',
                'alamat' => 'Jl. Sei Asahan',
                'nomor_telepon' => '08123450987',
                'umur' => '50',
            ],
            [
                'nama' => 'Rita Astima',
                'alamat' => 'Jl. Ringroad',
                'nomor_telepon' => '0856789589',
                'umur' => '45',
            ],
            [
                'nama' => 'Fityatul Haqqi',
                'alamat' => 'Jl. Puskemas 1',
                'nomor_telepon' => '0811789753',
                'umur' => '22',
            ],
            [
                'nama' => 'Abidara Fatya',
                'alamat' => 'Jl. Abdul Hakim',
                'nomor_telepon' => '0812654954',
                'umur' => '23',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
