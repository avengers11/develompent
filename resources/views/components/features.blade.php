@props(['services'])

<section id="features" class="mb-20 lg:pt-10">
    <div class="container xl:-translate-x-[70px]">
        <div class="flex flex-col p-2 mx-auto mt-4 md:mt-16 lg:w-11/12 md:flex-row md:flex-wrap lg:justify-center">
            @foreach ($services as $service)
                <div class="flex gap-4 w-full justify-between lg:justify-start items-center  md:w-1/2 lg:w-[45%] mb-8 ">
                    <div class="flex items-center justify-center w-1/3">
                        <img src="{{ asset($service->icon) }}" class="lg:w-[130px] w-[90px]" alt="{{ $service->title }}">
                    </div>
                    <div class="w-2/3 lg:w-[50%] text-zinc-800">
                        <h3 class="font-bold text-[1.25rem] lg:text-2xl lg:overflow-visible lg:whitespace-nowrap">
                            {{ $service->title }}</h3>
                        <p class="my-2 lg:text-xl">{{ $service->description }}</p>
                        <div class="w-1/2 border-b-4 border-b-sky-200"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
