@props(['menu', 'socials'])
<div class="w-full">
    <div class="container">
        <div class="gap-8 md:flex lg:pb-8">
            <div class="flex flex-col items-center w-full md:w-1/2 lg:w-2/5 md:items-start">
                <img src="{{ asset(site_content('nav_logo')) }}" alt="{{ config('app.name') }}"
                    class="w-[150px] md:w-[120px] py-5">

                <a href="" class=" border-4 border-[#00a19a] rounded-3xl px-10 py-2 font-extrabold text-lg mb-2">
                    @lang('Contact Us')
                </a>

                <h4 class="py-2 text-2xl font-bold">{{ site_content('footer_title') }}</h4>
                <p class="text-sm font-normal text-center text-gray-500 md:text-left">
                    {{ site_content('footer_description_left') }}
                </p>

                <form action=""
                    class="flex flex-col w-full max-w-md p-1 mt-5 rounded-md lg:bg-gray-200 gap-y-1 lg:flex-row">
                    <input type="email" name="" id="" placeholder="Enter Your Email"
                        class="p-2 bg-gray-200 rounded-md outline-none lg:w-2/3 xl:w-full">
                    <button type="submit"
                        class="px-4 py-3 text-sm text-white uppercase bg-black rounded-md whitespace-nowrap">
                        @lang('Subscribe Now')
                    </button>
                </form>
            </div>
            <div class="relative flex w-full gap-12 px-5 md:w-1/2 lg:w-3/5 md:pt-11 mt-9 md:mt-0">
                <div>
                    <div class="mb-4 text-center md:text-start">
                        <span class="text-[30px] lg:text-[46px] leading-[46px]">@lang('Download the')</span><br>
                        <span
                            class="text-[30px] lg:text-[46px] font-bold text-[rgb(99,51,158)] mb-5 leading-[46px]">@lang('Pentawallet App')</span>
                    </div>

                    <div class="flex justify-center gap-3 mt-2 md:justify-normal">
                        <a href="{{ site_content('footer_app_store_url') }}">
                            <img src="{{ asset('images/Apple.png') }}" alt="">
                        </a>

                        <a href="{{ site_content('footer_google_play_url') }}">
                            <img src="{{ asset('images/Google.png') }}" alt="">
                        </a>
                    </div>

                    <div class="py-5 text-lg font-normal leading-tight text-center text-zinc-800 md:text-start">
                        {{ site_content('footer_description_right') }}
                    </div>
                </div>
                <div
                    class="hidden lg:block h-1 xl:h-[350px] -translate-y-[100px] lg:-translate-y-[115px] xl:-translate-y-[155px] 2xl:-translate-y-[190px]">
                    <img src="{{ asset('images/pentaWalletPhone.png') }}" alt="" class=" w-[1200px] ">
                </div>
            </div>
        </div>

        <div class="hidden lg:block bg-[#00A19A] w-full h-[4px]"></div>

        <div
            class="flex flex-col items-center justify-center w-full gap-8 px-5 mb-5 md:flex-row lg:pt-4 lg:justify-between">

            <div class="hidden lg:block text-[16px] font-medium text-[#00A19A] cursor-pointer">
                {{ site_content('nav_footer_title') }}</div>

            {{-- Terms Part --}}
            <div class="flex gap-3 md:py-3">
                @foreach ($menu as $item)
                    <a href="{{ $item->url }}" class="text-base font-medium text-[#00A19A] cursor-pointer">
                        {{ $item->name }}
                    </a>
                @endforeach
            </div>

            {{-- fa fa icon --}}
            <div class="flex gap-3">
                @foreach ($socials as $item)
                    <a href="{{ $item->url }}"
                        class="h-[35px] w-[35px] bg-[#00A19A] rounded-full flex items-center justify-center cursor-pointer">
                        <i
                            class="fab fa-{{ $item->name . ($item->name == 'facebook' ? '-f' : '') }} text-white h-[15.7px] w-[15.7px] flex items-center justify-center"></i>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="lg:hidden bg-[#00A19A] w-full h-[4px]"></div>
        <div class="flex justify-center w-full py-6 lg:hidden">
            <div class="text-[16px] font-medium text-[#00A19A] cursor-pointer">{{ site_content('nav_footer_title') }}
            </div>
        </div>
    </div>

</div>
