<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('nav_logo')->nullable();
            $table->json('nav_menu')->nullable();
            $table->string('header_title')->nullable();
            $table->string('header_slug')->nullable();
            $table->string('header_description')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_description')->nullable();
            $table->json('future_ai_categories')->nullable();
            $table->string('penta_force_ai_description')->nullable();
            // footer
            $table->string('footer_title')->nullable();
            $table->text('footer_description_left')->nullable();
            $table->string('footer_app_store_url')->nullable();
            $table->string('footer_google_play_url')->nullable();
            $table->text('footer_description_right')->nullable();
            $table->string('nav_footer_title')->nullable();
            // header
            $table->string('header_btn')->nullable();
            $table->string('header_btn_link')->nullable();

            $table->string('header_bminl_1')->nullable();
            $table->string('header_bminl_2')->nullable();
            $table->string('header_bminl_3')->nullable();
            $table->string('header_bminl_4')->nullable();

            $table->string('header_bmin_1')->nullable();
            $table->string('header_bmin_2')->nullable();
            $table->string('header_bmin_3')->nullable();
            $table->string('header_bmin_4')->nullable();

            // lg & sp
            $table->string('lnsp_bmin_1')->nullable();
            $table->string('lnsp_bmin_2')->nullable();
            $table->string('lnsp_bmin_3')->nullable();
            $table->string('lnsp_bmin_4')->nullable();
            $table->string('lnsp_bmin_5')->nullable();

            $table->string('lnsp_bminl_1')->nullable();
            $table->string('lnsp_bminl_2')->nullable();
            $table->string('lnsp_bminl_3')->nullable();
            $table->string('lnsp_bminl_4')->nullable();
            $table->string('lnsp_bminl_5')->nullable();

            // img
            $table->string('primary_logo')->nullable();
            $table->string('favicons')->nullable();

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
        Schema::dropIfExists('web_site_contents');
    }
};
