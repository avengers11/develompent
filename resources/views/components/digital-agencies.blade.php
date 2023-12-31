@php
    $agencies = site_content('futureAiCategories');
    $chunk_size = ceil(count($agencies) / 3);
    [$first, $second, $third] = array_chunk($agencies, $chunk_size);
@endphp
<section class="container py-10 md:py-14 lg:py-20">
    <div class="flex flex-col px-6 lg:flex-row lg:gap-4 lg:justify-center">
        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:justify-start">
            @foreach ($first as $agency)
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 {{ $loop->odd ? 'self-start' : 'self-end' }}"
                    style="color: {{ $agency->color }}">
                    <p>{{ $agency->name }}</p>
                </div>
            @endforeach
        </div>


        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:pt-6 lg:justify-start">
            @foreach ($second as $agency)
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 {{ $loop->odd ? 'self-start' : 'self-end' }}"
                    style="color: {{ $agency->color }}">
                    <p>{{ $agency->name }}</p>
                </div>
            @endforeach
        </div>
        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:pt-3 lg:justify-start">
            @foreach ($third as $agency)
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 {{ $loop->odd ? 'self-start' : 'self-end' }}"
                    style="color: {{ $agency->color }}">
                    <p>{{ $agency->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
