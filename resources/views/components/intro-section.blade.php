<section class="w-full h-max bg-gradient-intro lg:mt-0" id="section-2">
    <div class="container text-white md:flex">
        <div class="text-center md:text-left py-9 md:w-1/2 ">
            <h2 class="heading font-bold xl:max-w-[70%] [&_strong]:text-teal-400">
                {!! site_content('service_title') !!}
            </h2>

            <p
                class="text-[1.4rem] text-center md:text-left font-light mt-4 text-2xl md:max-w-[375px] xl:max-w-[70%] 2xl:text-3xl">
                {{ site_content('service_description') }}
            </p>
        </div>
        <div class="relative w-1/2 overflow-visible">
            <img src="{{ asset('/images/the-future-of-ai-mobile.png') }}" alt="{{ site_content('service_title') }}"
                class="absolute hidden md:block w-[300px] scale-[1.1] bottom-0 translate-y-[20px] translate-x-[30px] z-20 lg:scale-[1.15] lg:w-[300px] lg:translate-y-[10px] lg:translate-x-[112px] xl:scale-[1.2] xl:translate-x-[154px] xl:translate-y-[3px] 2xl:scale-[1.3]  2xl:translate-y-[-19px]">
        </div>
    </div>
</section>
