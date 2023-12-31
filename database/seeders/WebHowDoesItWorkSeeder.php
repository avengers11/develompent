<?php

namespace Database\Seeders;

use App\Models\WebHowDoesItWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebHowDoesItWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webHowDoesItWork = new WebHowDoesItWork();
        $webHowDoesItWork->title = 'So, how does it work?';
        $webHowDoesItWork->description = 'MagicAI has all the tools you need to create and manage your SaaS platform.';
        $contents = [
            'Simply explain what your content is about and adjust settings according to your needs.',
            'Simply input some basic information or keywords about your brand or product, and let our AI algorithms do the rest.',
            'Simply input some basic information or keywords about your brand or product, and let our AI algorithms do the rest.',
        ];
        $webHowDoesItWork->contents = json_encode($contents);
        $webHowDoesItWork->save();
    }
}
