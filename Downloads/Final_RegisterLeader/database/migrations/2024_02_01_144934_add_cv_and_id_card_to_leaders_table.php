<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCvAndIdCardToLeadersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('leaders', function (Blueprint $table) {
            $table->string('cv')->nullable()->after('github');
            $table->string('id_card')->nullable()->after('cv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('leaders', function (Blueprint $table) {
            $table->dropColumn(['cv', 'id_card']);
        });
    }
};
