<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfilePicAndCoverPicToUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
        $table->string('profile_pic')->nullable();
        $table->string('cover_pic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
          $table->dropColumn('profile_pic');
          $table->dropColumn('cover_pic');
          });
    }
}
