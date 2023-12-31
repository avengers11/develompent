<section id="section-1" class="mt-9 lg:mt-0">
    <x-bolt-shadow
        class="top-0 z-[-1] 2xl:h-[900px] xl:h-[700px] absolute left-0 2xl:top-0 xl:block xl:w-[300px] xl:opacity-60 2xl:opacity-70" />

    <div class="container flex flex-col gap-8 md:flex-row md:justify-between md:items-center lg:mt-6 xl:mt-9">
        {{-- Info Details Div --}}
        <div class=" text-center md:text-left 2xl:mt-9 md:w-1/2 2xl:-translate-y-[40px]">
            <div class="text-gray-400">
                <div class="text-[1.8rem] md:text-[2rem] lg:text-5xl">{{ site_content('header_slug') }}</div>
                <h1
                    class="text-[3.25rem] md:text-[3.5rem] leading-none lg:text-6xl font-bold max-w-xs md:max-w-sm lg:max-w-md 2xl:text-7xl max-md:mx-auto">
                    <strong>{{ site_content('header_title') }}</strong>
                </h1>
            </div>
            <p class="text-gray-700 mt-4 text-[1.4rem] leading-8 md:max-w-[375px]  xl:max-w-[75%] 2xl:text-3xl">
                {{ site_content('header_description') }}</p>

            <a target="_BLANK" href="{{ site_content('header_btn_link') }}"
                class="mb-6 mt-6 items-center justify-center px-4 py-2 text-base font-semibold border rounded-full border-emerald-500 text-neutral-500 inline-flex hover:bg-gradient-to-l from-teal-400 to-emerald-500 hover:text-white">
                <svg class="w-4 xl:w-6 mr-3" viewBox="0 0 37 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.0853 23.0513H21.0669V0.523926L0.0410156 32.063H15.0594V54.5903L36.0853 23.0513Z"
                        fill="currentColor" />
                </svg>
                @lang(site_content('header_btn'))
            </a>

            <div id="icons_wrapper" class="lg:hidden">
                <a target="_BLANK" href="{{ site_content('header_bminl_1') }}" class="wrap">
                    <img style="width: 8rem" class="logo" src="{{ asset(site_content('header_bmin_1')) }}" alt="">
                    <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
                </a>

                <a target="_BLANK" href="{{ site_content('header_bminl_2') }}" class="wrap">
                    <img style="width: 7.2rem" class="logo" src="{{ asset(site_content('header_bmin_2')) }}" alt="">
                    <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
                </a>

                <a target="_BLANK" href="{{ site_content('header_bminl_3') }}" class="wrap">
                    <img style="width: 8.3rem" class="logo" src="{{ asset(site_content('header_bmin_3')) }}" alt="">
                    <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
                </a>

                <a target="_BLANK" href="{{ site_content('header_bminl_4') }}" class="wrap">
                    <img style="width: 12rem"  class="logo" src="{{ asset(site_content('header_bmin_4')) }}" alt="">
                </a>
            </div>

        </div>


        {{-- Image Div --}}
        <div class="flex justify-center md:w-1/2 h-80 md:h-96 lg:h-[400px] xl:h-[470px] ">
            <img src="{{ asset('/images/hero-image.png') }}" alt="Hero Image" class="object-contain h-full">
        </div>
    </div>

    <div class="container md:hidden">
        <div id="icons_wrapper">
            <a target="_BLANK" href="{{ site_content('header_bminl_1') }}" class="wrap">
                <img style="width: 8rem" class="logo" src="{{ asset(site_content('header_bmin_1')) }}" alt="">
                <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
            </a>

            <a target="_BLANK" href="{{ site_content('header_bminl_2') }}" class="wrap">
                <img style="width: 7.2rem" class="logo" src="{{ asset(site_content('header_bmin_2')) }}" alt="">
                <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
            </a>

            <a target="_BLANK" href="{{ site_content('header_bminl_3') }}" class="wrap">
                <img style="width: 8.3rem" class="logo" src="{{ asset(site_content('header_bmin_3')) }}" alt="">
                <img class="bar" src="{{ asset('assets\img\home\bar.png') }}" alt="">
            </a>

            <a target="_BLANK" href="{{ site_content('header_bminl_4') }}" class="wrap">
                <img style="width: 9.3rem"  class="logo" src="{{ asset(site_content('header_bmin_4')) }}" alt="">
            </a>
        </div>
    </div>


</section>
