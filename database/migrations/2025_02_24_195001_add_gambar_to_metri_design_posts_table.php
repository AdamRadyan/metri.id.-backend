<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            $table->string('gambar_1')->nullable()->after('slug');
            $table->string('gambar_2')->nullable()->after('gambar_1');
            $table->string('gambar_3')->nullable()->after('gambar_2');
            $table->string('gambar_4')->nullable()->after('gambar_3');
        });
    }

    public function down()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            $table->dropColumn(['gambar_1', 'gambar_2', 'gambar_3', 'gambar_4']);
        });
    }
};
