<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildWelfareInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_welfare_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('target_cdclaa');
            $table->integer('issued_cdlaa');
            $table->integer('received_petitions_cdlclaa');
            $table->integer('endorsed_petitions_nacc');
            $table->integer('papa_presented_rmc');
            $table->integer('papa_not_presented_rmc');
            $table->integer('petition_domestic_adoption_act');
            $table->integer('simulated_birth_records_rectification_act');
            $table->integer('issued_ica_clearance_regular');
            $table->integer('issued_ica_clearance_relative');
            $table->string('target_foster');
            $table->string('foster_care_new_children');
            $table->string('foster_children_subsidized_eligible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_welfare_infos');
    }
}
