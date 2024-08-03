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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nama_masjid');
            $table->mediumText('sejarah_singkat');
            $table->string('alamat');
            $table->string('whatsapp');
            $table->string('telp');
            $table->mediumText('url_map');
            $table->string('email');
            $table->string('channel_yt');
            $table->string('yt');
            $table->string('fb');
            $table->string('ig');
            $table->string('video_profil');
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('seo')->nullable();
            $table->string('seo_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
