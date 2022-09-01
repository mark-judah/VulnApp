<div>
    <div class="p-3.5 sm:grid sm:grid-cols-2 sm:gap-3 md:grid md:grid-cols-3">
        @foreach (array_chunk($books,3) as $chunk)
            @foreach ($chunk as $data)
                    <div class="p-2 pb-8 sm:pl-10">
                        <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg bg-[#6A80B5]">
                            <img class="object-fill h-60 w-96 rounded-2xl"
                                 src="/uploads/book_covers/{{ $data['book_cover'] }}"
                                 alt="">
                            <div class="flex justify-between p-3.5">
                               <div>
                                   <p class="text-2xl mb-2 font-normal ">{{$data['book_title']}}</p>
                               </div>

                                <div class="flex row justify-center">
                                        <a href="/preview/{{$data['book_title']}}">
                                            <img src="/assets/images/preview-svgrepo-com.svg" class="m-2 w-6 h-6">
                                        </a>

                                       <a href="#">
                                           <img src="/assets/images/download-svgrepo-com.svg" class="m-2 w-6 h-6">
                                       </a>

                                </div>
                            </div>

                        </div>
                    </div>
            @endforeach
        @endforeach
    </div>
</div>
