<?php

namespace Database\Seeders;

use App\Models\WebServiceContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/ai_generator.svg';
        $service->title = 'AI Generator';
        $service->description = 'Generate text, image, code,
        chat and even more with';
        $service->save();

        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/advanced_dashboard.svg';
        $service->title = 'Advanced Dashboard';
        $service->description = 'Access to valuable user insight, analytics and activity.';
        $service->save();

        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/multi_lingual.svg';
        $service->title = 'Multi-Lingual';
        $service->description = 'Ability to understand and generate content in different languages';
        $service->save();


        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/payment_gateways.svg';
        $service->title = 'Payment Gateways';
        $service->description = 'Securely process credit card, debit card, or other methods.';
        $service->save();

        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/custom_templates.svg';
        $service->title = 'Custom Templates';
        $service->description = 'Add unlimited number of custom prompts for your customers.';
        $service->save();

        $service = new WebServiceContent();
        $service->icon = 'new_assets/svg/support_platform.svg';
        $service->title = 'Support Platform';
        $service->description = 'Access and manage your support tickets from your dashboard.';
        $service->save();
    }
}
