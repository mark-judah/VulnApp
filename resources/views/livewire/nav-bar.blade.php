<style>

    #my-scrollbar::-webkit-scrollbar {
        width: 1em;
        height: 0.6em;
    }

    #my-scrollbar::-webkit-scrollbar-track {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #my-scrollbar::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #1E3A8A;
        outline: 2px solid slategrey;
    }
</style>
<div>
    <div class="flex justify-between  bg-blue-900 sm:bg-white shadow-2xl">

        <div class="flex justify-start items-center">
            <h1 class="text-xl p-7 hidden sm:block text-blue-900"><a href="/">VulnApp</a></h1>
          @if(session('name'))
            <h1 class="text-xl p-7 hidden sm:block text-blue-900"><a href="/share-book">Share book</a></h1>
            @endif
        </div>

        <div class="flex justify-start items-center">
            @if(session('name'))
            <h1 class="text-xl p-7 hidden sm:block text-blue-900">{{session('name')}}</h1>
            <h1 class="text-xl p-7 hidden sm:block text-blue-900"><a href="/logout">Logout</a></h1>

            @else
                <h1 class="text-xl p-7 hidden sm:block text-blue-900"><a href="/login">Login</a></h1>
                <h1 class="text-xl p-7 hidden sm:block text-blue-900"><a href="/signup">Signup</a></h1>
            @endif

        </div>


        <div class="sm:hidden flex flex row justify-between">
            <button onclick="myFunction()" type="button">
                <div>
                    <img class="w-12 h-12 p-2" src="/assets/images/search-svgrepo-com.svg">
                </div>
            </button>
            <div>
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" type="button">
                    <img class="w-12 h-12 p-2" src="/assets/images/hamburger-menu-white-svgrepo-com.svg">
                </button>
            </div>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden  divide-y divide-gray-100 rounded shadow w-60">
                <ul class="py-1 text-2xl text-white" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="/" class="block px-4 font-thin py-2 bg-[#6A80B5]">VulnApp</a>
                    </li>

                    <li>
                        <a href="/about-us" class="block px-4 font-thin py-2 bg-[#3B5998]">ShareBook</a>
                    </li>

                    <li>
                        <a href="/login" class="block px-4 font-thin py-2 bg-[#6A80B5]">Login</a>
                    </li>

                </ul>
            </div>

        </div>


    </div>


    <div class="p-5">
        @if (session()->has('error'))
            <div class="px-4 sm:px-10">
                <div class="bg-blue-900 text-white font-normal rounded-2xl">
                    <p class="p-5">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        @if (session()->has('message'))
            <div class="px-4 sm:px-10">
                <div class="bg-blue-900 text-white font-normal rounded-2xl">
                    <p class="p-5">{{ session('message') }}</p>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
