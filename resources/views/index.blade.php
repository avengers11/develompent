<x-main-layout :setting="$setting">
    <x-navigation />
    <x-hero-section />
    <x-intro-section />
    <x-features :services="$serviceContents" />
    <x-features-slider :services="$futureAiContents" />
    <x-digital-agencies />
    <x-pentaforce-ai />
    <x-footer :menu="$webFooterMenus" :socials="$webFooterIconMenus" />
</x-main-layout>
