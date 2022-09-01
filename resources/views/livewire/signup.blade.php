<div>
    {{-- Stop trying to control. --}}
    <div class="p-10">
        <div class="box-decoration-slice bg-[#D9E2F8] ">
            <div class="pl-12 pb-10 pt-10">
                <h1 class="text-3xl font-thin ">Signup</h1>
            </div>

            <form class="pl-10 rounded-2xl" method="post" action="{{ url('/signup-auth') }}">
                @csrf
                <div class="pb-10 ">
                    <input type="text" name="name"
                           class="p-5 pl-12 text-3xl text-black bg-white rounded-2xl"
                           placeholder="Name"  size="50" required="">
                </div>

                <div class="pb-10 ">
                    <input type="email" name="email"
                           class="p-5 pl-12 text-3xl text-black bg-white rounded-2xl"
                           placeholder="Email"  size="50" required="">
                </div>

                <div class="pb-10 ">
                    <input type="password" name="password"
                           class="p-5 pl-12 text-3xl text-black bg-white rounded-2xl"
                           placeholder="Password"  size="50" required="">
                </div>

                <div class="pb-10 ">
                    <input type="password" name="confirm-password"
                           class="p-5 pl-12 text-3xl text-black bg-white rounded-2xl"
                           placeholder="Confirm Password"  size="50" required="">
                </div>

                <div class="pb-10 ">
                    <input type="submit"
                           class="p-5 text-3xl text-white font-thin bg-blue-900 w-100 rounded-2xl"
                           value="Signup">
                </div>
            </form>
        </div>
    </div>

</div>
