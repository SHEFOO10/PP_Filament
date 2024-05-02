<x-filament-panels::page>
    @push('styles')
    @vite('resources/css/app.css')
    @endpush
    
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-end-5 w-full rounded-lg ring-1 ring-gray-300 px-6">
            <div class="w-full">
                <figure class="max-w-3xl mx-auto my-4 flex flex-col justify-center">
                    <iframe class ="w-full h-96 rounded-md" width="auto" height="auto" src="https://www.youtube.com/embed/gojeTqXdBH0" title="Linux for Data Engineers | البطريق العضاض يعظ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <iframe class="w-full h-96 rounded-lg" src="https://www.youtube.com/embed/tfKOqgPuS2I?start=20&end=40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                    {{-- <img class="w-full h-full rounded-lg" src="https://bernskioldmedia.com/en/wp-content/uploads/sites/2/2022/05/laravel-teaser-1024x576.jpg" alt="image description"> --}}
                </figure>
                <div class="flex flex-col justify-start px-2 pt-2">
                    <h2 class="text-3xl font-bold font-sans">{{$this->course['title']}}</h2>
                    <p class="block py-4 px-6 font-sans text-lg leading-relaxed text-inherit">{{$this->course['description']}}</p>
                    

                </div>
            </div>


        </div>
        <div class="col-start-5 col-end-7 w-full ">
            <div>
                <h4 class="text-2xl font-bold font-sans pb-6 text-center">Chapters</h4>
                <div class="block pb-8">
                    @for($i = 0; $i < 8; $i++)
                        <div class="mx-6 mb-3 rounded-md ring-1 ring-gray-300 max-w-2xl">
                            <button id="expand-button" type="button" class="inline-flex w-full justify-between gap-x-1.5 bg-white px-4 py-2 text-sm font-semibold rounded-md text-gray-900" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Chapter {{$i}}: Linux Operating System
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="hidden p-4">
                                <p>Overview of Laravel framework
                                    Installation and setup
                                    Understanding MVC architecture
                                    Basic routing and controllers</p>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
        {{-- @for($i = 0; $i < 10; $i++)
            <div class="bg-slate-400">{{$i}}
    </div>
    @endfor --}}
    {{-- </div> --}}
    {{-- <div class="w-full bg-black text-white">
        <p>{{$this->course['title']}}</p>
    </div> --}}
    @push('scripts')
    <script>
        const expandButtons = document.querySelectorAll('#expand-button');
        // console.log(expandButtons);
        expandButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
            });
        });

    </script>
    @endpush
</x-filament-panels::page>
