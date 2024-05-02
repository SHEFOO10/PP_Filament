<x-filament-panels::page>
  @vite('resources/css/app.css')
  {{-- <div> --}}
    <div class="flex flex-wrap py-4">
      @foreach(auth()->user()->courses as $course)
      <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96 mx-2 my-8">
        <div class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
          <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
        </div>
        <div class="p-6">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{$course['title']}}
          </h5>
          <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
            The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
          </p>
        </div>
        <div class="p-6 pt-0">
          <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" href="{{route('filament.admin.resources.courses.view', $course['id'])}}">
            View Course
          </a>
        </div>
      </div>
      @endforeach
    </div>
    {{-- @foreach ($this->data as $course)
    <p>{{$course['title']}}</p>
    @endforeach --}}
  {{-- </div> --}}
</x-filament-panels::page>
