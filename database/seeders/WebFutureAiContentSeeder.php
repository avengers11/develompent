<?php

namespace Database\Seeders;

use App\Models\WebFutureAiContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebFutureAiContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Intelligent Writing Assistant';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/gn_1.jpg';
        $futureAiContent->color = '#8D9ED8';
        $futureAiContent->description = 'Writer is designed to help you generate high-quality texts instantly, without breaking a sweat. With our intuitive interface and powerful features, you can easily edit, export or publish your AI-generated result.';
        $futureAiContent->save();

        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Generate high quality code in no time.';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/ai_1.jpg';
        $futureAiContent->color = '#E9506C';
        $futureAiContent->description = 'MagicAI is designed to make coding faster, easier, and more efficient than ever before. Whether you’re a seasoned developer or a coding newbie, our tool will help you streamline your coding process and get your projects up and running in no time.';
        $futureAiContent->save();

        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Intelligent Writing Assistant';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/gn_1.jpg';
        $futureAiContent->color = '#8D9ED8';
        $futureAiContent->description = 'Writer is designed to help you generate high-quality texts instantly, without breaking a sweat. With our intuitive interface and powerful features, you can easily edit, export or publish your AI-generated result.';
        $futureAiContent->save();

        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Generate high quality code in no time.';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/ai_1.jpg';
        $futureAiContent->color = '#E9506C';
        $futureAiContent->description = 'MagicAI is designed to make coding faster, easier, and more efficient than ever before. Whether you’re a seasoned developer or a coding newbie, our tool will help you streamline your coding process and get your projects up and running in no time.';
        $futureAiContent->save();


        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Intelligent Writing Assistant';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/gn_1.jpg';
        $futureAiContent->color = '#8D9ED8';
        $futureAiContent->description = 'Writer is designed to help you generate high-quality texts instantly, without breaking a sweat. With our intuitive interface and powerful features, you can easily edit, export or publish your AI-generated result.';
        $futureAiContent->save();

        $futureAiContent = new WebFutureAiContent();
        $futureAiContent->title = 'Generate high quality code in no time.';
        $futureAiContent->slug = 'Say goodbye to writer’s block • AI';
        $futureAiContent->image = 'new_assets/images/ai_1.jpg';
        $futureAiContent->color = '#E9506C';
        $futureAiContent->description = 'MagicAI is designed to make coding faster, easier, and more efficient than ever before. Whether you’re a seasoned developer or a coding newbie, our tool will help you streamline your coding process and get your projects up and running in no time.';
        $futureAiContent->save();
    }
}
