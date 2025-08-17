<x-layout>
    <x-section>
        <div>
            <h2 class="font-semibold text-2xl mb-4">Edit Homepage</h2>

            <form method="POST" action="{{ route('home.upload') }}" class="shadow-lg p-4" x-data="{ btnDisabled: false }"
                x-on:submit.prevent="btnDisabled = true; $el.submit()" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex flex-col mb-6">
                    <label for="image" class="mb-2">Upload Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="bg-slate-100 p-2"
                        required>
                    @error('image')
                        <p class="text-xs text-red-500 tracking-wide animate-bounce mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" :disabled="btnDisabled"
                    class="bg-slate-800 text-slate-50 py-1 px-4 hover:bg-slate-500 hover:translate-y-[-2px] hover:shadow-lg active:bg-slate-800 active:translate-y-0 active:shadow-0 transition-all duration-300">
                    <span x-show="!btnDisabled">Submit</span>
                    <span x-show="btnDisabled">Processing...</span>
                </button>
            </form>
        </div>
    </x-section>
</x-layout>
