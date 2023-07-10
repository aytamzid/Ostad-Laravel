<main >
    <div class="mx-5 pt-10 xl:mx-auto xl:max-w-[1150px]">
        {{-- <h2 class="text-xl font-semibold  mb-9">Featured Posts</h2> --}}
        <div class="text-xl font-semibold  mb-9 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
            Featured Posts
          </div>
        {{-- Each Post Starts Here --}}
        <a href="{{ url('/article') }}" class="group">
            <div
                class=" flex flex-row items-center  bg-slate-100 mb-5 rounded-xl overflow-hidden shadow-md shadow-slate-300 group-hover:shadow-slate-500 group-focus:shadow-slate-500 group-hover:opacity-60">
                <img src="{{ asset('https://platinumlist.net/guide/wp-content/uploads/2023/03/8359_img_worlds_of_adventure-big1613913137.jpg-1024x683.webp') }}"
                    alt="Thumbnail" class=" h-36 w-48 object-cover">
                <div class="ml-5 w-3/5 ">
                    <h5 class="font-bold font-serif text-lg">This is a title of the post.</h5>
                    <div class="flex flex-row">
                        <p class="font-semibold">Tamzid Sam
                        </p>
                        <span class="mx-3">&middot;</span>
                        <p class="text-cyan-700">12-December, 2015</p>
                    </div>
                    <p class="text-gray-600 w-full h-7 overflow-hidden">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

        </a>
        {{-- Each Post Ends Here --}}
</main>
