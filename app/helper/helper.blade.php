<?php

use App\Models\WebSiteContent;

function site_content(string $key, $default = null)
{
    static $siteContent;

    if (! $siteContent) {
        $siteContent = WebSiteContent::first();
        $siteContent->navMenus = json_decode($siteContent->nav_menu);
        $siteContent->futureAiCategories = json_decode($siteContent->future_ai_categories);
    }

    return $siteContent->{$key} ?? $default;
}

function site(){
    return WebSiteContent::first();
}
