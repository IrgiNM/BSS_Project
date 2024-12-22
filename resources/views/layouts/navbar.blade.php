<div class="depan fixed bg-white w-[100%] h-[70px] mt-0 border-b-[.3px] border-[#e7e1ff] flex flex-row justify-evenly items-center px-4">




    {{-- PEMBAYARAN --}}
    <div id="blockbayar" class="notif hidden w-[100%] h-[100%] bg-[#1e1442] opacity-[50%] backdrop-blur-sm fixed top-0 right-0 left-0 bottom-0 "></div>
    <div id="pembayaran" class="hidden notif w-[400px] h-[450px] absolute m-auto top-[100px] rounded-[10px] bg-white flex-col">
        <div class="relative w-full h-[50px] px-[20px] flex flex-row items-center justify-center border-b-[2px]">
            <p class="text-[15px] font-bold">Pembayaran</p>
            <i id="xbayar" class="absolute right-3 fa-solid fa-xmark w-[30px] h-[30px] flex justify-center items-center rounded-[5px] bg-blue-50 hover:text-white hover:bg-[#ff4684] cursor-pointer transition-all duration-200"></i>
        </div>
        <form action="{{ route('pembayaran') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full border-b-[2px] flex flex-col px-[50px] py-[30px]">
                <input required type="text" name="status" id="status" value="menunggu konfirmasi" class="hidden">
                <input required type="number" name="harga" id="harga" value="0" class="hidden">
                <input required type="text" name="id_sab" id="id_sab" value="0" class="hidden">
                <label for="alamat" class="text-[13px] font-bold flex flex-row items-center"><i class="fa-solid fa-location-dot fa-bounce text-[13px] w-[30px] h-[30px] rounded-full text-[#2168b9] bg-blue-100 flex justify-center items-center me-3"></i> Alamat</label>
                <input required type="text" name="alamat" id="alamat" value="indramayu" class="w-full text-[13px] border-b-[3px] border-[2px] border-[#2168b9] rounded-[5px] mt-3 mb-6">
                <p class="text-[13px] font-bold flex flex-row items-center"><i class="fa-solid fa-file-lines fa-bounce text-[13px] w-[30px] h-[30px] rounded-full bg-blue-100 text-[#2168b9] flex justify-center items-center me-3"></i> Gambar bukti pembayaran</p>
                <label for="gambar" class="w-full h-[100px] rounded-[5px] border-dotted border-[3px] border-[#2168b9] mt-3 bg-[#d7e9ff] flex flex-col items-center justify-center cursor-pointer">
                    <i class="fa-regular fa-plus text-[30px] text-[#5ea9ff]"></i>
                    <p id="masukgambar" class="text-[10px] text-[#5ea9ff]">masukkan gambar bukti</p>
                </label>
                <input required type="file" name="gambar" id="gambar" class="hidden">
            </div>
            <div class="w-full h-auto flex flex-row justify-between items-center px-[50px] py-[30px]">
                <div class="w-auto flex flex-col">
                    <p class="text-[10px] ">Total Pembayaran :</p>
                    <p class="total-harga font-bold text-[12px] ">Rp.0</p>
                </div>
                <button type="submit" class="px-3 py-2 rounded-[5px] text-white bg-[#ff4684] text-[13px]">Kirim <i class="fa-solid fa-angle-right text-[13px] text-white ms-3"></i></button>
            </div>
        </form>
    </div>




    {{-- NOTIF --}}
    @if (session('notif'))
        <div id="cart" class="absolute right-[148px] top-[80px] w-[300px] h-auto h-max-[300px] flex flex-row items-center justify-center rounded-[5px] bg-white border-[2px] border-b-[5px] p-2">
            <i class="absolute -top-6 right-[128px] text-[#dbdde1] text-[30px] fa-solid fa-caret-up"></i>
            <p class="text-[10px]">{{ session('notif') }}</p>
            <i class="fa-solid fa-check w-[20px] h-[20px] flex justify-center items-center bg-green-200 text-[#2cb379] rounded-full text-[8px] ms-3"></i>
        </div>
    @endif

    <div id="notif" class="hidden absolute right-[148px] top-[80px] w-[300px] h-auto h-max-[300px] rounded-[5px] bg-white border-[2px]">
        <i class="absolute -top-6 right-[128px] text-[#dbdde1] text-[30px] fa-solid fa-caret-up"></i>
        {{-- Notif Card --}}
        @foreach ($notif as $not)
        <div class="w-full border-b-[2px] flex flex-col p-3">
            <div class="w-full flex flex-row items-center">
                @if ($not->type == "menunggu konfirmasi")
                    <i class="fa-solid fa-clipboard-check text-[13px] me-4 w-[30px] h-[30px] rounded-full bg-green-200 flex justify-center items-center text-[#2cb379]"></i>
                @endif
                <a href="#" class="w-[150px] font-bold text-[12px] me-6">{{ $not->judul }}</a>
                <p class="w-[50px] text-[10px]">{{ $not->created_at }}</p>
            </div>
            <div class="w-full h-auto px-[45px]">
                <p class="text-[12px]">{{ $not->isi }}</p>
            </div>
        </div>
        @endforeach
    </div>





    {{-- KERANJANG NOTIF --}}
    @if (session('success'))
        <div id="cart" class="absolute right-[95px] top-[80px] w-[300px] h-auto h-max-[300px] flex flex-row items-center justify-center rounded-[5px] bg-white border-[2px] border-b-[5px] p-2">
            <i class="absolute -top-6 right-[128px] text-[#dbdde1] text-[30px] fa-solid fa-caret-up"></i>
            <i class="fa-solid fa-cart-plus w-[20px] h-[20px] flex justify-center items-center bg-[#ffc8db] text-[#ff4684] rounded-full text-[8px] me-3"></i>
            <p class="text-[10px]">{{ session('success') }}</p>
            <i class="fa-solid fa-check w-[20px] h-[20px] flex justify-center items-center bg-green-200 text-[#2cb379] rounded-full text-[8px] ms-3"></i>
        </div>
    @endif

    <div id="divcart" class="hidden absolute w-full top-[70px] h-[1000px]">
        <div id="block" class="div w-[100%] h-[100%] bg-[#1e1442] opacity-[50%] backdrop-blur-sm absolute top-0 right-0 left-0 bottom-0 "></div>
        <div class="w-[50px] absolute top-0 right-[465px] p-6 flex flex-col">
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#d0e0f0] hover:bg-[#ffffff] hover:text-[#2168b9] font-bold items-center text-[15px] w-auto h-auto">all</button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#d0e0f0] hover:bg-[#2168b9] items-center fa-solid fa-store text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#f0d0e2] hover:bg-[#ff4684] items-center fa-solid fa-paint-roller text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#d0e0f0] hover:bg-[#2168b9] items-center fa-solid fa-shirt text-[15px] w-auto h-auto"></button>
            <button class="div flex justify-center pe-7 ps-5 py-3 rounded-s-full text-white bg-[#f0e7d0] hover:bg-[#ffc341] items-center fa-solid fa-pen-nib text-[15px] w-auto h-auto"></button>
        </div>
        <div class="div absolute right-0 top-0 w-[450px] h-[1000px] flex flex-col items-center bg-[#f9fdff]">
            <div class="w-full h-[360px] overflow-y-scroll flex flex-col gap-4 items-center pb-[100px] pt-5">
                @if(isset($cartsablon) && $cartsablon->isNotEmpty())
                @foreach ($cartsablon as $sab)
                <div class="w-full h-auto flex flex-row justify-center items-center">
                    <i id="check{{ $sab->id }}" class="fa-regular fa-square me-3" data-price="{{ $sab->harga ?? 0 }}" data-sab-id="{{ $sab->id }}"></i>
                    <div class="w-[300px] p-2 rounded-[5px] border-[2px] border-b-[5px] border-[#ff4684] bg-white flex flex-row items-center">
                        <img src="{{ asset('storage/'.$sab->gambar_jadi) }}" alt="" class="w-[50px] h-[50px] rounded-[5px] border-[2px] ">
                        <div class="ms-2 w-full flex flex-col h-[50px]">
                            <div class="w-full flex flex-row items-center justify-between pe-1">
                                <p class="text-[13px] font-bold">Sablon {{ $sab->metode_kaos }}</p>
                                <p class="text-[10px] text-[#ff4684]">{{ $sab->updated_at }}</p>
                            </div>
                            <p class="text-[10px]">{{ $sab->jenis_kaos }}/{{ $sab->warna_kaos }}/{{ $sab->posisi }}/{{ $sab->jumlah_kaos }}/{{ $sab->warna_sablon }}/{{ $sab->ukuran_sablon }}<i class="font-bold ms-2">Rp.{{ $sab->harga }}</i></p>
                        </div>
                    </div>
                    <a href="{{ route('order.sablon.delete', $sab->id) }}" class="fa-solid fa-trash-can w-[30px] h-[30px] rounded-[5px] bg-[#ff9bbc] hover:bg-[#ff4684] text-white flex justify-center items-center ms-2"></a>
                </div>
                @endforeach
                @endif
            </div>
            <div class="notif bg-white absolute top-[380px] shadow-md w-[350px] h-[230px] rounded-[10px] border-[#ff4684] border-[2px] border-b-[5px] flex flex-col">
                <div class="w-full h-auto flex flex-col items-start gap-2 border-b-[2px] p-[15px]">
                    <div class="w-auto h-auto flex flex-row items-center">
                        <i class="fa-solid fa-store w-[20px] h-[20px] flex justify-center items-center bg-[#d0e0f0] text-[#2168b9] rounded-full text-[8px] me-2"></i>
                        <p class="text-[10px] me-4 w-[40px]">Produk :</p>
                        <p class="text-[10px] me-[130px] font-bold">0</p>
                        <p class="text-[10px]">Rp.0</p>
                    </div>
                    <div class="w-auto h-auto flex flex-row items-center">
                        <i class="fa-solid fa-paint-roller w-[20px] h-[20px] flex justify-center items-center bg-[#ffc8db] text-[#ff4684] rounded-full text-[8px] me-2"></i>
                        <p class="text-[10px] me-4 w-[40px]">Sablon :</p>
                        <p class="total-idsab text-[10px] me-[130px] font-bold">0</p>
                        <p class="total-harga text-[10px]">Rp.0</p>
                    </div>
                    <div class="w-auto h-auto flex flex-row items-center">
                        <i class="fa-solid fa-shirt w-[20px] h-[20px] flex justify-center items-center bg-[#d0e0f0] text-[#2168b9] rounded-full text-[8px] me-2"></i>
                        <p class="text-[10px] me-4 w-[40px]">Kaos :</p>
                        <p class="text-[10px] me-[130px] font-bold">0</p>
                        <p class="text-[10px]">Rp.0</p>
                    </div>
                    <div class="w-auto h-auto flex flex-row items-center">
                        <i class="fa-solid fa-pen-nib w-[20px] h-[20px] flex justify-center items-center bg-[#fff2d3] text-[#f8b82c] rounded-full text-[8px] me-2"></i>
                        <p class="text-[10px] me-4 w-[40px]">Design :</p>
                        <p class="text-[10px] me-[130px] font-bold">0</p>
                        <p class="text-[10px]">Rp.0</p>
                    </div>
                </div>
                <div class="w-full h-full flex flex-col">
                    <div class="w-full h-auto py-2 px-7 flex flex-row justify-between items-center">
                        <p class="text-[10px]">Total :</p>
                        <p class="total-harga text-[13px] font-bold">Rp.0</p>
                    </div>
                    <button id="bayarbut" class="w-[90%] m-auto py-2 rounded-[5px] bg-[#ff4684] text-white font-bold text-center text-[13px] hover:bg-[#e4306c]">Bayar <i class="fa-solid fa-angle-right text-[13px] text-white ms-3"></i></button>
                </div>
            </div>
        </div>
    </div>
    




    
    <div class="w-[100px] flex flex-row items-center">
        <img src="{{ asset("images/logo_bummi.png") }}" alt="" href="#" class="w-[35px] h-[35px]">
        <p class="text-[20px] font-bold leading-[5px] text-[#14005e] h-2 ms-2 mt-[-5px] p-0">BSS<b class="text-[#ff4684] p-0 leading-[5px] m-0 text-[35px] font-bold">.</b></p>
    </div>
    <div class="flex flex-row gap-8 ms-6">
        <a href="{{ route('dashboard') }}" class="text-[13px] font-bold text-[#ff4684]">Home</a>
        <a href="#" class="text-[13px] font-bold text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Produk</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Cara pesan</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Tentang kami</a>
        <a href="#" class="text-[13px] text-[#ecc3d1] transition-all duration-300 hover:text-[#ff4684]">Kontak</a>
    </div>
    <div class="w-[30%] ms-10 me-1 flex flex-row justify-end" id="divSearch">
        <form method="POST" action="/home2" class="flex flex-row">
            @csrf
            <input id="inputSearch" class="w-[100%] rounded-full border-1 h-[35px] border-[#ff4684] hidden" type="search" name="search" required autofocus autocomplete="search" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
            <button id="tomser"><i id="search" class="fa-solid fa-magnifying-glass text-[#ecc3d1] ms-[-40px] text-[15px] transition-all duration-300 hover:text-[#ff4684]"></i></button>
        </form>
    </div>
    <button id="bell" class="fa-regular fa-bell text-[20px] me-3 text-[#ff4684]"></button>
    <button id="keranjang" class="fa-solid fa-cart-shopping text-[17px] me-3 text-[#ff4684]"></button>
    <p class="absolute top-[47px] text-[#ff4684] right-[230px] text-[10px]">{{ $countcartsab }}</p>
    <p class="absolute top-[47px] text-[#ff4684] right-[283px] text-[10px]">{{ $countnotif }}</p>
    @auth
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="px-[15px] py-[5px] rounded-full me-4 border-[2px] text-[13px] border-[#ff4684] text-[#ff4684] hover:bg-gradient-to-b hover:from-[#ff4684] hover:to-[#ff3276] hover:text-white transition-all duration-300">Log out</button>
        </form>
    @endauth
    <img src="" class="w-[35px] h-[35px] hover:border-[3px] hover:border-[#4681ff] hover:w-[38px] hover:h-[38px] bg-[#cec9ca] rounded-full" alt="">
</div>







<script>
    const inser = document.getElementById('inputSearch');
    const divser = document.getElementById('divSearch');
    const aser = document.getElementById('search');
    // JavaScript untuk menangani klik tombol
    aser.addEventListener('click', function() {
        // Membuat elemen baru
        inser.classList.toggle('hidden');
        divser.classList.toggle('flex');
        divser.classList.toggle('flex-row');
        divser.classList.toggle('justify-end');
        aser.classList.toggle('text-[#ff4684]');
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.getElementById('gambar').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
        document.getElementById('masukgambar').textContent = fileName;
    });
</script>
<script>
    $(document).ready(function() {
        // Cek apakah #success-message ada di halaman
        if ($('#cart').length) {
            // Tampilkan div selama 5 detik, kemudian sembunyikan
            setTimeout(function() {
                $('#cart').fadeOut('slow');
            }, 5000); // 5000 milidetik = 5 detik
        }
    });


    $(document).ready(function() {
         // Variabel untuk menyimpan total harga dan ID sab yang dipilih
        let totalHarga = 0;
        let selectedSabIds = [];
        let totalidsab = 0;
        var $harga = $('#harga');
        var $id_sab = $('#id_sab');

        // Seleksi semua elemen dengan id yang dimulai dengan 'check'
        $('[id^=check]').each(function() {
            // Logika yang ingin kamu implementasikan untuk setiap elemen
            $(this).on('click', function() {
                // Dapatkan harga dan ID sab dari elemen yang diklik
                let price = parseFloat($(this).data('price'));
                let sabId = $(this).data('sab-id');

                // Toggle kelas 'fa-square' dengan 'fa-check-square'
                $(this).toggleClass('fa-square fa-check-square');

                // Periksa apakah elemen tersebut dipilih atau tidak
                if ($(this).hasClass('fa-check-square')) {
                    // Tambahkan harga dan ID sab ke total dan daftar
                    totalHarga += price;
                    totalidsab += 1;
                    selectedSabIds.push(sabId);
                } else {
                    // Kurangi harga dan hapus ID sab dari total dan daftar
                    totalHarga -= price;
                    totalidsab -= 1;
                    selectedSabIds = selectedSabIds.filter(id => id !== sabId);
                }

                // Gabungkan ID sab dengan tanda "/"
                let selectedSabIdsString = selectedSabIds.join('/');

                // Update teks di dalam tag <p> dengan total harga
                $('.total-harga').text('Rp.' + totalHarga);
                $('.total-idsab').text(totalidsab);

                $harga.val(totalHarga);
                $id_sab.val(selectedSabIdsString);

                // Output total harga dan ID sab yang dipilih
                console.log('Total Harga: ' + totalHarga);
                console.log('Selected SAB IDs: ' + selectedSabIdsString);
            });
        });
    });


    $(document).ready(function() {
        var $notif = $('#notif');
        var $bell = $('#bell');
        var $keranjang = $('#keranjang');
        var $divcart = $('#divcart');
        var $bayarbut = $('#bayarbut');
        var $pembayaran = $('#pembayaran');
        var $blockbayar = $('#blockbayar');
        var $xbayar = $('#xbayar');

        $bell.on('click', function() {
            $notif.toggleClass('hidden flex');
            if($divcart.hasClass('flex')){
                $divcart.toggleClass('hidden flex');
            }
        });

        $keranjang.on('click', function() {
            $divcart.toggleClass('hidden flex');
            if($notif.hasClass('flex')){
                $notif.toggleClass('hidden flex');
            }
        });

        $bayarbut.on('click', function(){
            $divcart.toggleClass('hidden flex');
            if($notif.hasClass('flex')){
                $notif.toggleClass('hidden flex');
            }
            $pembayaran.toggleClass('hidden flex');
            $blockbayar.toggleClass('hidden flex');
        });

        $xbayar.on('click', function(){
            $pembayaran.toggleClass('hidden flex');
            $blockbayar.toggleClass('hidden flex');
        });
    });
</script>