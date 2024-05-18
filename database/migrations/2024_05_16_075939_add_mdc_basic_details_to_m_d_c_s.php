<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMdcBasicDetailsToMDCS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_d_c_s', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('college_name');
            $table->string('college_location');
            $table->string('college_district');
            $table->string('college_address');
            $table->string('funds_allocated');
            $table->string('funds_received');
            $table->string('work_progress');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_d_c_s', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->dropColumn('college_name');
            $table->dropColumn('college_location');
            $table->dropColumn('college_district');
            $table->dropColumn('college_address');
            $table->dropColumn('funds_allocated');
            $table->dropColumn('funds_received');
            $table->dropColumn('work_progress');
            
        });
    }
}
