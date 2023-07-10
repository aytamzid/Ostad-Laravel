<main>
    <div class="max-w-[1200px] pt-10 ml-5">
        <h2 class="text-xl font-semibold  mb-9">Featured Posts</h2>
        {{-- Each Post Starts Here --}}
        <a href="{{ url('/article') }}" class="group">
            <div
                class=" flex flex-row items-center  bg-slate-100 mb-5 rounded-xl overflow-hidden shadow-md shadow-slate-300 group-hover:shadow-slate-500 group-focus:shadow-slate-500 group-hover:opacity-60">
                <img src="{{ asset('https://via.placeholder.com/800x800') }}" alt="Thumbnail" class="h-36 w-48 ">
                <div class="ml-5 w-3/5 ">
                    <h5 class="font-bold font-serif text-lg">This is a title of the post.</h5>
                    <div class="flex flex-row">
                        <p class="font-semibold">Tamzid Sam
                        </p>
                        <span class="mx-3">&middot;</span>
                        <p class="text-cyan-700">12-December, 2015</p>
                    </div>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod,
                    </p>
                </div>
            </div>

        </a>
        {{-- Each Post Ends Here --}}
</main>
