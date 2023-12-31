<x-main-layout>
    <x-page-navigation />

    <div class="container pv_tr_ck">
        @php
            echo $information;
        @endphp
    </div>

    <x-footer :menu="$webFooterMenus" :socials="$webFooterIconMenus" />
</x-main-layout>
