<x-layout>
    <x-section>
        <div class="grid md:grid-cols-2 max-w-4xl">
            <div class="capitalize text-slate-800 self-center">
                <h1 class="text-8xl font-black tracking-tighter mb-8">i'm raffy</h1>
                <h2 class="text-2xl">
                    Web Developer
                </h2>
                <p class="text-lg mb-4">turning ideas into interactive reality</p>
                <div class="flex gap-2 group place-self-start">
                    <a href="/"
                        class="inline-block group-hover:bg-transparent border-1 border-slate-800 py-1 px-2 rounded hover:bg-slate-800 hover:text-slate-50 hover:translate-y-[-2px] hover:shadow-lg active:bg-transparent active:text-slate-800 active:translate-y-0 transition-all duration-300">
                        See
                        Projects</a>
                    <a href="/"
                        class="inline-block group-hover:bg-transparent group-hover:text-slate-800 border-1 border-slate-800 bg-slate-800 text-slate-50 py-1 px-2 rounded hover:!bg-slate-700 hover:!text-slate-50 hover:translate-y-[-2px] hover:shadow-lg active:bg-transparent active:text-slate-800 active:translate-y-0 transition-all duration-300">Contact
                        Me</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('storage/' . $image->image_path) ?? '' }}" alt="homepage image">
            </div>

        </div>
    </x-section>
</x-layout>
