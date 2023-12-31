@php
    $locales = collect(LaravelLocalization::getSupportedLocales());
    $languages = \App\Models\SettingTwo::first()->languages();
@endphp
<nav class="py-4">
    <div class="container flex justify-between items-center !py-2 relative">
        {{-- Logo --}}
        <a href="{{ url('/') }}">
            <img src="{{asset(site()['primary_logo'])}}" alt="{{ config('app.name') }}" class="w-[100px] md:w-[120px] lg:w-[140px]">
        </a>

        {{-- Sign in, Join Club,Language, Hamburger Div --}}
        <div class="flex items-center xl:!pr-[49px] 2xl:!pr-[40px]">
            {{-- Navigation div --}}
            <div class="hidden gap-4 mr-4 font-medium lg:flex text-zinc-800">
                @foreach (site_content('navMenus') as $item)
                    <a href="#section-{{ $loop->iteration }}"
                        class="px-2 py-1 rounded-md hover:bg-gradient-to-l from-teal-400 to-emerald-500 hover:text-white">{{ $item }}</a>
                @endforeach
            </div>

            {{-- Sign In link --}}
            <a href="{{ route('login') }}"
                class="inline-flex items-center justify-center px-4 py-2 text-base font-semibold text-white border border-transparent rounded-full bg-gradient-to-l from-teal-400 to-emerald-500 hover:bg-none hover:text-neutral-500 hover:border-emerald-500">
                @lang('Sign In')
            </a>

            {{-- Join Club link --}}
            <a href="{{ route('register') }}"
                class="items-center justify-center hidden px-4 py-2 ml-4 text-base font-semibold border rounded-full border-emerald-500 text-neutral-500 md:inline-flex hover:bg-gradient-to-l from-teal-400 to-emerald-500 hover:text-white">
                @lang('Join Hub')
            </a>

            {{-- Language Dropdown --}}
            <div class="relative flex items-center">
                @if (count($languages) > 1)
                    {{-- Language Dropdown Button --}}
                    <button
                        class="items-center justify-center hidden p-2.5 ml-4 border rounded-full languageBtn lg:flex border-emerald-500 aspect-square hover:bg-gray-100">
                        <svg class="w-5" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.7768 0.0137879C17.7333 0.0116667 17.693 0 17.6495 0C17.6336 0 17.6188 0.00530303 17.6029 0.00530303C17.5689 0.00530303 17.535 0 17.5011 0C7.85061 0 0 7.85061 0 17.5C0 27.1494 7.85061 35 17.5 35C17.5339 35 17.5679 34.9947 17.6018 34.9947C17.6177 34.9947 17.6326 35 17.6485 35C17.692 35 17.7333 34.9873 17.7758 34.9862C27.2968 34.8367 34.9989 27.0561 34.9989 17.5C34.9989 7.94394 27.2979 0.164394 17.7768 0.0137879ZM30.2591 11.1364H25.078C24.6421 8.56227 23.9358 6.17909 22.977 4.28061C26.1609 5.60424 28.7212 8.06909 30.2591 11.1364ZM17.6145 3.19349C17.6485 3.19349 17.6792 3.20303 17.7132 3.20303C19.1227 3.28682 20.948 6.23318 21.8548 11.1364H13.4421C14.3553 6.19924 16.2018 3.23909 17.6145 3.19349ZM3.18182 17.5C3.18182 16.4033 3.33136 15.3448 3.56576 14.3182H9.82333C9.73742 15.3745 9.69394 16.4415 9.69394 17.5C9.69394 18.5585 9.73742 19.6255 9.82333 20.6818H3.56576C3.33136 19.6552 3.18182 18.5967 3.18182 17.5ZM4.74091 23.8636H10.22C10.6655 26.4908 11.393 28.9142 12.3826 30.8318C9.04061 29.5442 6.33288 27.0423 4.74091 23.8636ZM10.22 11.1364H4.74091C6.33394 7.95879 9.04061 5.45576 12.3826 4.16818C11.393 6.0847 10.6644 8.50924 10.22 11.1364ZM17.7132 31.797C17.6792 31.797 17.6485 31.8065 17.6145 31.8065C16.2018 31.7609 14.3553 28.8008 13.4421 23.8636H21.8548C20.948 28.7668 19.1217 31.7132 17.7132 31.797ZM22.2897 20.6818H13.0083C12.9245 19.6753 12.8758 18.6147 12.8758 17.5C12.8758 16.3853 12.9235 15.3247 13.0083 14.3182H22.2897C22.3735 15.3247 22.4223 16.3853 22.4223 17.5C22.4223 18.6147 22.3745 19.6753 22.2897 20.6818ZM22.977 30.7194C23.9358 28.8209 24.6421 26.4377 25.078 23.8636H30.2591C28.7223 26.9309 26.162 29.3958 22.977 30.7194ZM25.4736 20.6818C25.5595 19.6255 25.603 18.5585 25.603 17.5C25.603 16.4415 25.5595 15.3745 25.4736 14.3182H31.4332C31.6676 15.3448 31.8171 16.4033 31.8171 17.5C31.8171 18.5967 31.6676 19.6552 31.4332 20.6818H25.4736Z"
                                fill="#706F6F" />
                        </svg>
                    </button>

                    {{-- Language Dropdown Div --}}
                    <div class="absolute language-dropdown w-max right-0 top-[145%] bg-white shadow-lg">
                        @foreach ($locales->only($languages) as $lang => $locale)
                            <a href="{{ LaravelLocalization::getLocalizedURL($lang, null, [], true) }}"
                                class="flex justify-center px-4 py-2 text-lg font-normal border border-gray-200 text-zinc-800">{{ $locale['name'] }}</a>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Hamburger Button --}}
            <button class="ml-4 nav-burger lg:hidden">
                <svg id="line" class="w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <svg class="hidden w-7" id="cross" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </button>
        </div>

        {{-- HamBurger Dropdown Div --}}
        <div class="absolute burger-dropdown w-full left-0 top-[102%] bg-white shadow-lg z-50">
            @foreach (site_content('navMenus') as $item)
                <a href="#section-{{ $loop->iteration }}"
                    class="flex justify-center py-2 text-lg font-normal border border-gray-200 text-zinc-800">{{ $item }}</a>
            @endforeach
            <a href="{{ route('register') }}"
                class="flex justify-center py-2 text-lg font-normal border-b border-gray-200 text-neutral-500 md:hidden">@lang('Join Hub')</a>
        </div>
    </div>
</nav>

<script>
    jQuery(document).ready(function($) {

        // Navbar-Dropdown Toggle
        $('.nav-burger').click(function() {
            if ($('.burger-dropdown').css('max-height') == '0px') {
                $('.burger-dropdown').css('max-height', '310px');
                $('#cross').show();
                $('#line').hide();
                $(document).mouseup(function(e) {
                    if ($(e.target).closest(".burger-dropdown").length === 0) {
                        $('.burger-dropdown').css('max-height', '0px');
                        $('#cross').hide();
                        $('#line').show();
                    }
                });
            } else {
                $('.burger-dropdown').css('max-height', '0px');
                $('#cross').hide();
                $('#line').show();
            }
        });

        // When click any of the a tag in burger-dropdown, it will close the dropdown
        $('.burger-dropdown a').click(function() {
            var $burgerDropdown = $('.burger-dropdown');
            var $cross = $('#cross');
            var $line = $('#line');

            $burgerDropdown.css('max-height', '0px');
            $cross.hide();
            $line.show();
        });

        // Language-Dropdown Toggle
        $('.languageBtn').click(function() {
            if ($('.language-dropdown').css('max-height') == '0px') {
                $('.language-dropdown').css({
                    'max-height': '225px',
                    'overflow-y': 'scroll'
                });


                $(document).mouseup(function(e) {
                    if ($(e.target).closest(".language-dropdown").length === 0) {
                        $('.language-dropdown').css('max-height', '0px');
                        $('#cross').hide();
                        $('#line').show();
                    }
                });
            } else {
                $('.language-dropdown').css('max-height', '0px');

            }
        });
    });
</script>
