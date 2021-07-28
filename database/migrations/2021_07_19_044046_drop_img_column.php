<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropImgColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('logo_img');
            $table->dropColumn('home_img');
            $table->dropColumn('user_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('user_img', 100)->default('storage/app/public/system/user.png');
            $table->string('logo_img', 100)->default('storage/app/public/system/logo.png');
            $table->string('home_img', 100)->default('storage/app/public/system/home.png');
        });
    }
}
