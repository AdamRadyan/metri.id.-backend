<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('metri_landing_pages', function (Blueprint $table) {
            $table->id();
            $table->char('angka_1', 1);
            $table->char('angka_2', 1);
            $table->char('angka_3', 1);
            $table->char('angka_4', 1);
            $table->string('youtube_link')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metri_landing_pages');
    }
};
