<x-basic>

    {{-- KEMBALI --}}
    <div class="kembali absolute left-12 top-12">
        <a href="#" class="fa-solid fa-arrow-left w-10 h-10 bg-white rounded-full text-center border-2 border-[#4681ff] text-[20px] text-[#4681ff] hover:bg-[#4681ff] hover:text-white pt-[7px] transition duration-300"></a>
    </div>
    
    {{-- GAMBAR KIRI --}}
    <div class="container w-[40%] h-[500px] bg-white border-black absolute left-[150px] top-[60px]">
        <p class="text-[#14005e] text-[20px] font-poppins font-bold mb-0">BUMMI Sablon Studio
            <a href="/login_admin" class=" font-poppins font-bold text-[13px] text-[#d9cfff] hover:text-[#ff4684] ms-3">admin</a>
        </p>
        <p class="text-[35px] text-[#14005e] font-bold font-poppins -mt-1">Sablon High Quality</p>
        <img src="{{ asset('images/LOGIN_PAGE.png') }}" alt="ilustrasi_sablon" class="absolute top-[30px] w-[90%]">
        <p class="absolute bottom-[50px] left-[20px] text-[13px] text-[#14005e]">Ingin tampil beda dengan gaya yang unik? Pesan kaos sablon dari kami sekarang!</p>
        <div class="absolute bottom-[-10px] left-[110px] flex flex-row gap-5 text-[15px]">
            <a href="https://www.instagram.com/bummi.sablon/" class="text-[#c7bbff] hover:text-[#4681ff] text-[13px]">Instagram</a><p class="text-[#c7bbff]">|</p>
            <a href="https://www.tokopedia.com/kaosgaming" class="text-[#c7bbff] hover:text-[#4681ff] text-[13px]">Tokopedia</a><p class="text-[#c7bbff]">|</p>
            <a href="#" class="text-[#c7bbff] hover:text-[#4681ff] text-[13px]">Facebook</a>
        </div>
    </div>

    {{-- BG KANAN --}}
    <div class="absolute top-[0px] right-[0px] w-[45%] h-[100%] bg-[#a0beff]">
        <img class="w-[100%] h-[100%] opacity-[.4]" src="{{ asset('images/WhatsApp Image 2024-06-05 at 19.57.18.jpeg') }}" alt="">
    </div>

    {{-- FORM LOGIN --}}
    <div class="absolute top-[40px] right-[110px] w-[30%] h-[550px] rounded-[10px] border-[.5px] border-[#4681ff] bg-white p-10">
        <p class="text-[30px] font-bold mb-5 text-[#4681ff] w-[100%] text-left">Log In</p>
        <p class="text-[13px] mb-7 text-[#14005e]">Masukkan username dan password yang sudah anda daftarkan.</p>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div>
                <x-input-label for="username" warnaborder="#14005e">Username :</x-input-label>
                <x-text-input id="username" class="block mt-1 w-full font-bold" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                <i class="fa-solid fa-user absolute right-[60px] top-[207px] text-[#c7bbff] "></i>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" warnaborder="#14005e">Password :</x-input-label>
                <x-text-input id="password" class="block mt-1 w-full font-bold" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <i class="fa-solid fa-key absolute right-[60px] top-[293px] text-[#c7bbff]"></i>
            </div>

            <div class="w-[100%] flex flex-row justify-between mt-10">
                <!-- Remember Me -->
                <div class="mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 text-[13px]" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                {{-- Forgot Password --}}
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-[13px] mb-2 text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            

            <x-primary-button class="mt-1 bg-[#4681ff] hover:bg-[#2752af] hover:border-[#2752af] w-[100%] text-white">
                {{ __('Log in') }}
            </x-primary-button>
        </form>

        <p class="text-[13px] text-[#14005e] mt-5">jika anda belum meiliki akun, maka silahkan daftar terlebih dahulu. 
            <a href="/signup2" class="text-[13px] text-[#ff4684]">Sign Up</a>
        </p>
    </div>

</x-basic>