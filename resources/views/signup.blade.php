<x-basic>

    {{-- KEMBALI --}}
    <div class="kembali absolute left-12 top-12">
        <a href="#" class="fa-solid fa-arrow-left w-10 h-10 bg-white rounded-full text-center border-2 border-[#ff4684] text-[20px] text-[#ff4684] hover:bg-[#ff4684] hover:text-white pt-[7px] transition duration-300"></a>
    </div>





    {{-- GAMBAR KIRI --}}
    <div class="container w-[40%] h-[500px] bg-white border-black absolute left-[150px] top-[60px]">
        <p class="text-[#14005e] text-[20px] font-poppins font-bold mb-0">BUMMI Sablon Studio</p>
        <p class="text-[35px] text-[#14005e] font-bold font-poppins -mt-1">Sablon High Quality</p>
        <img src="{{ asset('images/LOGIN_PAGE.png') }}" alt="ilustrasi_sablon" class="absolute top-[30px] w-[90%]">
        <p class="absolute bottom-[50px] left-[20px] text-[13px] text-[#14005e]">Ingin tampil beda dengan gaya yang unik? Pesan kaos sablon dari kami sekarang!</p>
        <div class="absolute bottom-[-10px] left-[110px] flex flex-row gap-5 text-[15px]">
            <a href="https://www.instagram.com/bummi.sablon/" class="text-[#c7bbff] hover:text-[#ff4684] text-[13px]">Instagram</a><p class="text-[#c7bbff]">|</p>
            <a href="https://www.tokopedia.com/kaosgaming" class="text-[#c7bbff] hover:text-[#ff4684] text-[13px]">Tokopedia</a><p class="text-[#c7bbff]">|</p>
            <a href="#" class="text-[#c7bbff] hover:text-[#ff4684] text-[13px]">Facebook</a>
        </div>
    </div>






    {{-- BG KANAN --}}
    <div class="absolute top-[0px] right-[0px] w-[48%] h-[100%] bg-[#ff98ba]">
        <img class="w-[100%] h-[100%] opacity-[.4]" src="{{ asset('images/WhatsApp Image 2024-06-05 at 19.57.18.jpeg') }}" alt="">
    </div>






    {{-- FORM LOGIN --}}
    <div class="absolute top-[40px] right-[40px] w-[40%] h-[550px] rounded-[10px] border-[.5px] border-[#ff4684] bg-white p-10">
        <p class="text-[30px] font-bold mb-5 text-[#ff4684] w-[100%] text-left">Sign Up</p>
        <p class="text-[13px] mb-7 text-[#14005e]">Daftarkan akun anda untuk mengakses halaman utama.</p>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="w-[100%] mt-[50px] flex flex-row justify-between">
                <!-- Username -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">Username :</x-input-label>
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    <i class="fa-solid fa-user absolute right-[295px] top-[212px] text-[#c7bbff] "></i>
                </div>

                <!-- No.Hp -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">No.Hp :</x-input-label>
                    <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required autofocus autocomplete="no_hp" />
                    <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                    <i class="fa-solid fa-phone absolute right-[55px] top-[212px] text-[#c7bbff] "></i>
                </div>
            </div>
            

            <div class="w-[100%] mt-2 flex flex-row justify-between">
                <!-- Alamat -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">Alamat :</x-input-label>
                    <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    <i class="fa-solid fa-location-dot absolute right-[295px] top-[285px] text-[#c7bbff] "></i>
                </div>

                <!-- Email Address -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">Email :</x-input-label>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <i class="fa-solid fa-at absolute right-[55px] top-[285px] text-[#c7bbff] "></i>
                </div>
            </div>
            

            <div class="w-[100%] mt-2 mb-[40px] flex flex-row justify-between">
                <!-- Password -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">Password :</x-input-label>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <i class="fa-solid fa-key absolute right-[295px] top-[360px] text-[#c7bbff] "></i>
                </div>

                <!-- Confirm Password -->
                <div class="w-[48%]">
                    <x-input-label for="password" warnaborder="#14005e">Confirm Password :</x-input-label>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    <i class="fa-solid fa-key absolute right-[55px] top-[360px] text-[#c7bbff] "></i>
                </div>
            </div>


                <a class="underline text-[13px] text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login2">
                    {{ __('Already registered?') }}
                </a>
    
                <x-primary-button class="mt-3 bg-[#ff4684] border-[#ff4684] hover:bg-[#d12a62] hover:border-[#d12a62] w-[100%] text-white">
                    {{ __('Register') }}
                </x-primary-button>
            

        </form>

    </div>

</x-basic>