<?php

namespace Database\Seeders;

use App\Models\WebSiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = ['Home', 'Features', 'Testimonials', 'Pricing', 'FAQ'];
        $menu = json_encode($menus);
        $nameAndColors = [
            [
                'name' => 'Digital Agencies',
                'color' => '#E9506C',
            ],
            [
                'name' => 'Product Designers',
                'color' => '#9E84DA',
            ],
            [
                'name' => 'Enterpreneurs',
                'color' => '#8AC6C4',
            ],
            [
                'name' => 'Copywriters',
                'color' => '#9E84DA',
            ],
            [
                'name' => 'Digital Marketers',
                'color' => '#84A872',
            ],
            [
                'name' => 'Developers',
                'color' => '#FA7120',
            ],
        ];

        WebSiteContent::create([
            'nav_logo' => 'new_assets/images/logo.png',
            'nav_menu' => $menu,
            'header_title' => 'Unleash the Power of Ai',
            'header_slug' => 'PentaForce',
            'header_description' => 'All-in-one platform to generate AI content and start making money in minutes.',
            'future_ai_categories' => json_encode($nameAndColors),
            'service_title' => 'The future of Ai.',
            'service_description' => 'All-in-one platform to generate AI content and start making money in minutes.',
            'penta_force_ai_description' => 'PentaForce AI has all the tools you need to create and manage your SaaS platform.',
            'footer_title' => 'Subscribe Newsletter',
            'footer_description_left' => 'Subscribe to our newsletter and unlock a world of exclusive benefits. Be the first to know about our latest products, special promotions, and exciting updates.',
            'footer_description_right' => 'For advanced students, we offer a semi-automatic money management system for futures trading. This tool, available exclusively to Pentacoin holders, allows students to effectively apply the strategies they learn, setting them up for success in their trading endeavors.',
            'footer_app_store_url' => 'https://www.apple.com/app-store/',
            'footer_google_play_url' => 'https://play.google.com/store/apps',
            'nav_footer_title' => 'PentaForce © 2023 All rights reserved',
        ]);
    }
}
