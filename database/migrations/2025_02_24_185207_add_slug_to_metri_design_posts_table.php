<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            if (!Schema::hasColumn('metri_design_posts', 'slug')) {
                $table->string('slug')->after('title');
            }
        });
    }

    public function down()
    {
        Schema::table('metri_design_posts', function (Blueprint $table) {
            if (Schema::hasColumn('metri_design_posts', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};

