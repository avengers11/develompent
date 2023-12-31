<?php

namespace Database\Seeders;

use App\Models\WebPentaForceAiSlide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebPentaForceAiSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Slide 1
        $pentaForceAiSlide = new WebPentaForceAiSlide();
        $pentaForceAiSlide->title = 'Advanced Dashboard';
        $pentaForceAiSlide->image = 'new_assets/images/slider_img_1.png';
        $pentaForceAiSlide->color = '#8D9DD8';
        $pentaForceAiSlide->description = 'Track a wide range of data points, including user traffic and sales.';
        $pentaForceAiSlide->save();


        // Slide 2
        $pentaForceAiSlide = new WebPentaForceAiSlide();
        $pentaForceAiSlide->title = 'Payment Gateways';
        $pentaForceAiSlide->image = 'new_assets/images/slider_img_2.png';
        $pentaForceAiSlide->color = '#E9506C';
        $pentaForceAiSlide->description = 'Securely process credit card or other electronic payment methods.';
        $pentaForceAiSlide->save();
    }
}
