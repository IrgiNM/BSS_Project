<x-app-layout>

        {{-- JUDUL DEPAN --}}
        <div class="w-full h-[680px] py-[60px] px-[160px]">
            <div class="absolute w-[45%] h-[95%] flex flex-col justify-center items-start gap-0 div">
                <p class="text-[15px] italic text-[#ff4684] font-bold">Bummi Sablon Studio</p>
                <p class="text-[50px] lilita-one-regular font-bold text-[#2168b9]">HARGA UMUM</p>
                <p class="text-[50px] lilita-one-regular font-bold text-[#2168b9] mt-[-20px]">KUALITAS PREMIUM</p>
                <P class="text-[13px] w-[75%] mb-[50px] text-justify">Bummi Sablon Studio adalah penyedia jasa sablon dan produk baju lusinan. toko buka dari hari senin - jumat. silahkan klik tombol dibawah untuk memesan sablon.</P>
                <a href="{{ route('sablon.p') }}" class="text-[13px] px-[35px] py-[10px] border-2 border-[#ff4684] text-[#ff4684] font-semibold rounded-full hover:px-[45px] transition-all duration-300">Order Now <i class="fa-bounce fa-solid fa-cart-shopping ms-3 text-[#ff4684]"></i></a>
            </div>
            <img src="{{ asset('images/gambar-judul.png') }}" class="div absolute top-[100px] right-[150px] w-[500px] h-[500px] bg-cover" alt="">
            <img src="{{ asset('images/bg-judul.png') }}" class="backim w-[100%] absolute top-[50px] left-0 bg-cover opacity-[.2]" alt="">
        </div>


        
        <div class="w-[100%] flex flex-col items-center mt-[50px] mb-[50px]">
            <p class="text-[20px] lilita-one-regular mb-1">APA KATA MEREKA <i class="text-[30px] lilita-one-regular text-[#2168b9]">?</i></p>
            <p class="text-[13px]">Inilah yang dikatakan oleh pelanggan kami tentang pengalaman mereka.
                <button id="ulasan" class="text-[#ff4684]">lihat semua...</button>
            </p>
        
            <div id="divul" class="w-[1100px] h-[250px] overflow-hidden flex flex-row flex-wrap justify-between mt-6 mx-auto">
                @foreach ($ulasans as $ul)
                    <div id="imgul" class="w-[350px] h-[200px] mb-[50px]"> 
                        <div @isset($ul->gambar)id="gambarul"@endisset class="w-[350px] h-[50px] overflow-hidden border-[#2168b9] bg-[#e1f4ff] rounded-[10px] border-[2px] text-[13px] flex flex-row justify-center items-center mb-3 cursor-pointer transition-all duration-500 ease-in-out">
                            @isset($ul->gambar)
                                <img id="imageul" class="w-full object-cover rounded-[10px] transition-all duration-500 ease-in-out" src="{{ asset('storage/'.$ul->gambar) }}" alt="{{ $ul->gambar }}">
                            @else
                                <i class="fa-regular fa-image text-[20px] text-[#88bfff]"></i>
                                <i class="fa-solid fa-ban ms-1 text-[20px] text-[#88bfff]"></i>
                            @endisset
                        </div>
                        <p class="w-[350px] h-[100px] rounded-[10px] p-[20px] border-[2px] text-[13px]">
                            <i class="text-[13px] fa-solid fa-quote-right me-1"></i>
                            {{ $ul->ulasan }}
                            <i class="text-[13px] fa-solid fa-quote-right ms-1"></i>
                        </p>
                        <div class="w-[350px] h-[50px] flex flex-row mt-[10px]">
                            @if($ul->order == 'kaos')
                                <p class="w-[40px] h-[40px] me-3 fa-solid fa-shirt text-white text-[15px] rounded-full bg-[#007bff] flex justify-center items-center"></p>
                            @elseif($ul->order == 'sablon')
                                <p class="w-[40px] h-[40px] me-3 fa-solid fa-paint-roller text-white text-[15px] rounded-full bg-[#ff4684] flex justify-center items-center"></p>
                            @elseif($ul->order == 'desain')
                                <p class="w-[40px] h-[40px] me-3 fa-solid fa-pen-nib text-white text-[15px] rounded-full bg-[#ffc341] flex justify-center items-center"></p>
                            @elseif($ul->order == 'produk')
                                <p class="w-[40px] h-[40px] me-3 fa-solid fa-store text-white text-[15px] rounded-full bg-[#007bff] flex justify-center items-center"></p>
                            @endif
        
                            <div class="w-[190px] h-[40px] flex flex-col justify-start items-start gap-0">
                                <p class="text-[13px] font-bold">{{ $ul->nama_user }}</p>
                                <p class="text-[13px]">{{ $ul->email_user }}</p>
                            </div>
                            <div class="w-[100px] h-[40px] flex flex-row justify-end items-start">
                                @if($ul->bintang == 1)
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341]"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                @elseif($ul->bintang == 2)
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341]"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                @elseif($ul->bintang == 3)
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341]"></i>
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                @elseif($ul->bintang == 4)
                                    <i class="fa-regular fa-star text-[13px] text-[#ffc341]"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                @elseif($ul->bintang == 5)
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341]"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                    <i class="fa-solid fa-star text-[13px] text-[#ffc341] ms-1"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
        </div>
        
        


        

        <div id="xstore" class="w-[100%] flex flex-col items-center">
            @include('components.storemenu')
        </div>
        <div id="xsablon" class="hidden w-[100%] flex-col items-center">
            @include('components.sablonmenu')
        </div>
        <div id="xkaos" class=" hidden w-[100%] flex-col items-center">
            @include('components.kaosmenu')
        </div>
        <div id="xdesain" class="hidden w-[100%] flex-col items-center">
            @include('components.desainmenu')
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            var lihat = document.querySelector('#ulasan');
            var divul = document.querySelector('#divul');
            var imgul = document.querySelector('#imgul');
            var imageul = document.querySelector('#imageul');
            var gambarul = document.querySelector('#gambarul');
        
            $(lihat).on('click', function(){
                // Hapus kelas 'h-[250px]'
                $(divul).toggleClass('h-[250px]');
                
                // Tambahkan kelas 'h-auto'
                $(divul).toggleClass('h-auto');
                $(imgul).toggleClass('h-auto');
                $(imgul).toggleClass('h-[200px]');
                
                // Toggle kelas 'overflow-hidden'
                $(divul).toggleClass('overflow-hidden');
            });
        
            $(gambarul).on('click', function(){
                // Hapus kelas 'h-[250px]'
                $(gambarul).toggleClass('h-[50px]');
                
                // Tambahkan kelas 'h-auto'
                $(gambarul).toggleClass('h-[250px]');
                $(imageul).toggleClass('h-[247px]');
                
                // Toggle kelas 'overflow-hidden'
                $(gambarul).toggleClass('overflow-hidden');
            });


            $(document).ready(function() {
                var kiri = $('.kiri');

                // Fungsi untuk menangani event click berdasarkan ID yang diklik
                function handleClick(currentId, currentId2, currentId3, kiribr, target1, target2, target3, target4) {
                    if (kiri.attr('id') == currentId) {
                        $(target1).toggleClass('hidden flex');
                        $(target2).toggleClass('hidden flex');
                    } else if(kiri.attr('id') == currentId2) {
                        $(target3).toggleClass('hidden flex');
                        $(target1).toggleClass('hidden flex');
                    } else if(kiri.attr('id') == currentId3) {
                        $(target4).toggleClass('hidden flex');
                        $(target1).toggleClass('hidden flex');
                    }
                    kiri.attr('id', kiribr);
                }

                // Menggunakan querySelectorAll untuk memilih semua elemen dengan ID yang sama
                var desain = document.querySelectorAll('#desainmenu');
                var store = document.querySelectorAll('#storemenu');
                var sablon = document.querySelectorAll('#sablonmenu');
                var kaos = document.querySelectorAll('#kaosmenu');

                // Menambahkan event listener ke setiap elemen dengan ID yang sama
                desain.forEach(function(element) {
                    $(element).on('click', function() {
                        handleClick('desainmenu', 'storemenu', 'sablonmenu', 'kaosmenu', '#xdesain', '#xstore', '#xsablon', '#xkaos');
                    });
                });

                store.forEach(function(element) {
                    $(element).on('click', function() {
                        handleClick('storemenu', 'sablonmenu', 'kaosmenu', 'desainmenu', '#xstore', '#xsablon', '#xkaos', '#xdesain');
                    });
                });

                sablon.forEach(function(element) {
                    $(element).on('click', function() {
                        handleClick('sablonmenu', 'kaosmenu', 'desainmenu', 'storemenu', '#xsablon', '#xkaos', '#xdesain', '#xstore');
                    });
                });

                kaos.forEach(function(element) {
                    $(element).on('click', function() {
                        handleClick('kaosmenu', 'desainmenu', 'storemenu', 'sablonmenu', '#xkaos', '#xdesain', '#xstore', '#xsablon');
                    });
                });
            });
        </script>
        

        <div class="w-[100%] h-[600px] mt-[200px] flex flex-col items-center">
            <p class="text-[13px] font-bold">Apa yang Membuat Kualitas Sablon Kami Unggul?</p>
            <p class="text-[30px] lilita-one-regular w-[50%] p2 text-center mt-[10px]">BERIKUT BEBERAPA PENJELASAN DARI <i class="text-[30px] lilita-one-regular text-[#ff4684]">KUALITAS</i> SABLON <i class="text-[30px] lilita-one-regular text-[#ff4684]">UNGGULAN KAMI</i> .</p>

            <div class="w-[100%] flex justify-center items-center gap-[70px] mt-[70px]">
                <a id="aabout" href="#" class="group relative w-[250px] h-[370px] rounded-[10px] border-[2px] shadow-md  flex flex-col items-center p-[30px] hover:border-[#202f9e] hover:border-b-[7px] transition-all duration-400">
                    <img id="imgab" class="w-[150px] h-[150px]" src="{{ asset('images/BAHANICON.png') }}" alt="">
                    <p class="p text-[15px] font-bold text-center mt-3 ">Material Premium untuk Hasil Sablon Berkualitas</p>
                    <p class="mt-5 text-[10px] w-[100px] px-[10px] py-[5px] border-[1px] rounded-full text-center text-[#2168b9] border-[#2168b9] mb-[20px]">material</p>
                    <i class="absolute bottom-[20px] fa-solid fa-arrow-right w-[30px] h-[30px] text-[15px] text-[#d0e6ff] text-center pt-[6px] rounded-full border-[2px] border-[#d0e6ff] group-hover:border-[#2168b9] group-hover:text-[#2168b9]"></i>
                </a>

                <a id="aabout2" href="#" class="group relative w-[250px] h-[370px] rounded-[10px] border-[2px] shadow-md  flex flex-col items-center p-[30px] hover:border-[#202f9e] hover:border-b-[7px] transition-all duration-400">
                    <img id="imgab2" class="w-[150px] h-[150px]" src="{{ asset('images/UKURICON.png') }}" alt="">
                    <p class="p text-[15px] font-bold text-center mt-3 ">Ukuran Kaos yang Pas dan Nyaman Dipakai</p>
                    <p class="mt-5 text-[10px] w-[100px] px-[10px] py-[5px] border-[1px] rounded-full text-center text-[#2168b9] border-[#2168b9] mb-[20px]">ukuran</p>
                    <i class="absolute bottom-[20px] fa-solid fa-arrow-right w-[30px] h-[30px] text-[15px] text-[#d0e6ff] text-center pt-[6px] rounded-full border-[2px] border-[#d0e6ff] group-hover:border-[#2168b9] group-hover:text-[#2168b9]"></i>
                </a>

                <a id="aabout3" href="#" class="group relative w-[250px] h-[370px] rounded-[10px] border-[2px] shadow-md  flex flex-col items-center p-[30px] hover:border-[#202f9e] hover:border-b-[7px] transition-all duration-400">
                    <img id="imgab3" class="w-[150px] h-[150px]" src="{{ asset('images/GAMBARICON.png') }}" alt="">
                    <p class="p text-[15px] font-bold text-center mt-3 ">Pilihan Model Kaos yang Stylish dan Modern</p>
                    <p class="mt-5 text-[10px] w-[100px] px-[10px] py-[5px] border-[1px] rounded-full text-center text-[#2168b9] border-[#2168b9] mb-[20px]">model</p>
                    <i class="absolute bottom-[20px] fa-solid fa-arrow-right w-[30px] h-[30px] text-[15px] text-[#d0e6ff] text-center pt-[6px] rounded-full border-[2px] border-[#d0e6ff] group-hover:border-[#2168b9] group-hover:text-[#2168b9]"></i>
                </a>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var $aabout = $('#aabout');
                var $aabout2 = $('#aabout2');
                var $aabout3 = $('#aabout3');
                var $imgab = $('#imgab');
                var $imgab2 = $('#imgab2');
                var $imgab3 = $('#imgab3');

                $aabout.hover(function() {
                    $imgab.toggleClass('fa-bounce');
                });

                $aabout2.hover(function() {
                    $imgab2.toggleClass('fa-bounce');
                });

                $aabout3.hover(function() {
                    $imgab3.toggleClass('fa-bounce');
                });

            });
        </script>



        <div class="relative w-[100%] h-auto flex justify-center items-center mt-[150px]">
            <img src="{{ asset('images/ABOUTICON.png') }}" alt="" class="div w-[30%] h-[30%] me-[100px] backim">
            <img src="{{ asset('images/TQ.png') }}" alt="" class="absolute top-0 right-0 w-[1350px] h-[400px] belakang opacity-[4%] backim">
            <div class="w-[40%] h-[300px] flex flex-col div">
                <p class="text-[30px] font-bold lilita-one-regular mb-4">MENGENAL <i class="text-[30px] lilita-one-regular text-[#ff4684]">BSS</i> LEBIH DEKAT</p>
                <p class="text-[13px] mb-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, magni saepe. Magnam magni alias error neque eos exercitationem aspernatur asperiores repellendus, soluta hic quas, et cumque sequi non perferendis pariatur tempora incidunt. Saepe molestias minus cupiditate a praesentium, nulla dignissimos excepturi, obcaecati esse veniam, eum ex illum! Voluptatibus magnam aliquid non culpa cum, fugit necessitatibus ipsum, quasi nam esse aperiam provident atque corrupti quam consequuntur veritatis minus id debitis fugiat saepe. Expedita magnam laboriosam sit animi fugiat commodi illo ab repellendus eligendi, numquam saepe, quam eos recusandae? Suscipit tempora corporis labore maiores in facere. Officiis blanditiis consequatur cum similique nesciunt.</p>
                <a href="#" class="text-[13px] w-[200px] text-center py-[10px] border-2 border-[#202f9e] text-[#202f9e] font-semibold rounded-full hover:w-[250px] transition-all duration-300">lihat lebih <i class="fa-solid fa-question ms-3 text-[#202f9e]"></i></a>
            </div>
        </div>

        <x-footer></x-footer>

        
</x-app-layout>
