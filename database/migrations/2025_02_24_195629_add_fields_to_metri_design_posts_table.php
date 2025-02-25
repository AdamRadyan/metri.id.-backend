<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            $table->string('client_name')->nullable();
            $table->integer('year')->nullable();
            $table->string('category')->nullable();
            $table->string('industry')->nullable();
            $table->text('concept')->nullable();
            $table->text('objective')->nullable();
            $table->text('challenge')->nullable();
            $table->text('results')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            $table->dropColumn(['client_name', 'year', 'category', 'industry', 'concept', 'objective', 'challenge', 'results']);
        });
    }
};
