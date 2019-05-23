<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id')->unsigned();
            $table->string('name');
            $table->string('premiums');
            $table->string('category');
            $table->string('region');
            $table->string('benefit_death');
            $table->string('benefit_pd');
            $table->string('benefit_medical');
            $table->string('benefit_emergencyevacuation');
            $table->string('benefit_emergencyrepatriation');
            $table->string('benefit_followup');
            $table->string('benefit_followup_maxdays');
            $table->string('benefit_hospincome');
            $table->string('benefit_hospincome_maxdays');
            $table->string('benefit_childfund');
            $table->string('benefit_proftreatment');
            $table->string('benefit_quarantinecover');
            $table->string('benefit_quarantinecover_maxdays');
            $table->string('benefit_emergencycontact');
            $table->string('benefit_funeralexpenses');
            $table->string('benefit_repatriation');
            $table->string('benefit_compcare');
            $table->string('benefit_childcare');
            $table->string('benefit_meddispatch');
            $table->string('benefit_altmed');
            $table->string('benefit_tripcancel');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_personaleffects');
            $table->string('benefit_personaleffects_singlearticles');
            $table->string('benefit_personaleffects_notebook');
            $table->string('benefit_personaleffects_bagdamage');
            $table->string('benefit_traveldocs');
            $table->string('benefit_creditcardfraud');
            $table->string('benefit_luggagedelay');
            $table->string('benefit_luggagedelay_minhours');
            $table->string('benefit_dluggagedelay');
            $table->string('benefit_dluggagedelay_minhours');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
            $table->string('benefit_tripcurtail');
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
        Schema::dropIfExists('plans');
    }
}
