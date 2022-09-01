<div>
    {{-- Stop trying to control. --}}
    <div class="p-10">
        <div class="box-decoration-slice bg-[#D9E2F8] rounded-3xl">
            <div class="pl-12 pb-10 pt-10">
                <h1 class="text-4xl font-thin text-center text-blue-900">Share a book</h1>
            </div>

            <form class="pl-10 rounded-2xl" method="post" action="{{ url('/upload-book') }} " enctype="multipart/form-data">
{{--                @csrf--}}
                <label
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300"
                    for="grid-state">
                    Book Title
                </label>
                <div class="pb-10">
                    <input type="text"
                           class="p-2.5 text-xl text-black bg-white rounded-2xl"
                           name="book_title" placeholder="Title"
                           required="">
                </div>



                <label
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300"
                    for="grid-state">
                    Book cover image
                </label>
                <div class="pb-10">

                    <div class="relative">
                        <input
                            class="p-2.5 text-xl text-black bg-white rounded-2xl   "
                            type="file" name="book_cover" required="">

                    </div>
                </div>

                <label
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300"
                    for="grid-state">
                    File
                </label>
                <div class="pb-10">

                    <div class="relative">
                        <input
                            class="p-2.5 text-xl text-black bg-white rounded-2xl   "
                            type="file" name="book_file" required="">

                    </div>
                </div>

                <div class="pb-10">
                    <input type="submit"
                           class="p-5 text-xl text-white font-thin bg-blue-900 w-100 rounded-2xl"
                           value="Share">
                </div>
            </form>
        </div>
    </div>

</div>
