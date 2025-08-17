@props([
    'id' => '',
])

<section id="{{ $id }}" class="h-full p-2 md:px-[96px] md:py-[40px] grid place-items-center">{{ $slot }}
</section>
