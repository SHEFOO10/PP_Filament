<x-filament-panels::page>
    @push('styles')
    @vite('resources/css/app.css')
    @endpush
    
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-1 col-end-5 w-full rounded-lg ring-1 ring-gray-300 px-6">
            <div class="w-full">
                <figure class="max-w-3xl mx-auto my-4 flex flex-col justify-center">
                    <img class="w-full h-full rounded-lg" src="https://bernskioldmedia.com/en/wp-content/uploads/sites/2/2022/05/laravel-teaser-1024x576.jpg" alt="image description">
                </figure>
                <div class="flex flex-col justify-start px-2 pt-2">
                    <h2 class="text-3xl font-bold font-sans">{{$this->course['title']}}</h2>
                    <p class="block py-4 px-6 font-sans text-lg leading-relaxed text-inherit">{{$this->course['description']}}</p>
                    <h4 class="text-xl font-bold font-sans pb-4">Chapters</h4>
                    <div class="block pb-8">
                        @for($i = 0; $i < 8; $i++)
                            <div class="mx-6 mb-3 rounded-md ring-1 ring-gray-300 max-w-2xl">
                                <button id="expand-button" type="button" class="inline-flex w-full justify-between gap-x-1.5 bg-white px-4 py-2 text-sm font-semibold rounded-md text-gray-900" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Chapter {{$i}}: Introduction to Laravel
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


        </div>
        <div class="col-start-5 col-end-7 w-full ">
            <div>
                <div class="relative flex m-auto flex-col bg-clip-border rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 shadow-md w-full max-w-[20rem] p-8">
                    <div class="p-0">
                        <ul class="flex flex-col gap-4">
                            <li class="flex items-center gap-4">
                                <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg></span>
                                <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                                    Duration {{$this->course['duration']}} hrs
                                </p>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg></span>
                                <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                                    45 lessons
                                </p>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg></span>
                                <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                                    4 Guided Projects
                                </p>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg></span>
                                <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                                    Level Intermidate
                                </p>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg></span>
                                <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                                    Price Free
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="p-0 mt-12">
                        <a class="text-black align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm py-3.5 px-7 rounded-lg bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02] focus:scale-[1.02] active:scale-100"
                        href="{{route('course_enroll', $this->course)}}">
                            Enroll Now
                        </a>
                    </div>
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
