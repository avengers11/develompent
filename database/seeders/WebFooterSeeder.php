<?php

namespace Database\Seeders;

use App\Models\WebFooter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menu

        $menus = ['Terms', 'Privacy', 'Cookies'];

        foreach ($menus as $menu) {
            $webFooter = new WebFooter();
            $webFooter->name = $menu;
            $webFooter->url = '#';
            $webFooter->type = 'menu';
            $webFooter->save();
        }

        // icons

        $icons = ['facebook', 'twitter', 'instagram', 'youtube'];

        foreach ($icons as $icon) {
            $webFooter = new WebFooter();
            $webFooter->name = $icon;
            $webFooter->url = '#';
            $webFooter->type = 'icon';
            $webFooter->save();
        }
    }
}
