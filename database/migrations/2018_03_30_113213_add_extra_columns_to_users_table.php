<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->longText('about')->nullable();
          $table->string('gender')->nullable();
          $table->string('birthday')->nullable();
          $table->string('marital_status')->nullable();
          $table->string('mobile')->nullable();
          $table->string('address')->nullable();
          $table->string('twitter')->nullable();
          $table->string('skype')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('about');
          $table->dropColumn('gender');
          $table->dropColumn('birthday');
          $table->dropColumn('marital_status');
          $table->dropColumn('mobile');
          $table->dropColumn('address');
          $table->dropColumn('twitter');
          $table->dropColumn('skype');
        });
    }
}
