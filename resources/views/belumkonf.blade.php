<x-app-layout>
    @include('layouts.navbar')

    {{-- PEMBAYARAN --}}
    <div id="blockbayarb" class="notif hidden w-[100%] h-[100%] bg-[#1e1442] opacity-[50%] backdrop-blur-sm fixed top-0 right-0 left-0 bottom-0 "></div>
    <div id="pembayaranb" class="hidden notif w-[400px] h-[450px] absolute right-[500px] m-auto top-[100px] rounded-[10px] bg-white flex-col">
        <div class="relative w-full h-[50px] px-[20px] flex flex-row items-center justify-center border-b-[2px]">
            <p class="text-[15px] font-bold">Pembayaran</p>
            <i id="xbayarb" class="absolute right-3 fa-solid fa-xmark w-[30px] h-[30px] flex justify-center items-center rounded-[5px] bg-blue-50 hover:text-white hover:bg-[#ff4684] cursor-pointer transition-all duration-200"></i>
        </div>
        <form action="{{ route('pembayaran.lunas') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full border-b-[2px] flex flex-col px-[50px] py-[30px]">
                <label for="alamat" class="text-[13px] font-bold flex flex-row items-center"><i class="fa-solid fa-location-dot fa-bounce text-[13px] w-[30px] h-[30px] rounded-full text-[#2168b9] bg-blue-100 flex justify-center items-center me-3"></i> Alamat</label>
                <input required type="text" name="alamatb" id="alamatb" value="indramayu" class="w-full text-[13px] border-b-[3px] border-[2px] border-[#2168b9] rounded-[5px] mt-3 mb-6">
                <p class="text-[13px] font-bold flex flex-row items-center"><i class="fa-solid fa-file-lines fa-bounce text-[13px] w-[30px] h-[30px] rounded-full bg-blue-100 text-[#2168b9] flex justify-center items-center me-3"></i> Gambar bukti pembayaran</p>
                <label for="gambarb" class="w-full h-[100px] rounded-[5px] border-dotted border-[3px] border-[#2168b9] mt-3 bg-[#d7e9ff] flex flex-col items-center justify-center cursor-pointer">
                    <i class="fa-regular fa-plus text-[30px] text-[#5ea9ff]"></i>
                    <p id="masukgambarb" class="text-[10px] text-[#5ea9ff]">masukkan gambar bukti</p>
                </label>
                <input required type="file" name="gambarb" id="gambarb" class="hidden">
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



    @if ($aktif == 'ambil')
    <button id="bayarlun" class="group absolute bottom-4 bg-[#40ff8c] hover:bg-[#303178] right-[600px] text-[13px] text-[#1e1442] hover:text-white flex items-center py-3 px-[50px] rounded-[5px] border-[2px] border-b-[5px] border-[#303178]">Bayar Lunas <i class="fa-solid fa-arrow-right-long text-[13px] text-[#1e1442] opacity-50 mx-5 group-hover:text-white"></i><i class="fa-solid fa-circle-check text-[13px] text-[#1e1442] group-hover:text-white"></i></button>
    @endif





    <div class="w-full pt-[90px]">
        <div class="w-full flex flex-row justify-center items-center gap-2">
            <a href="{{ route('belum.konfirmasi') }}" class="flex justify-center items-center w-[30px] h-[30px] rounded-full {{ $aktif == 'tk' ? 'fa-bounce bg-[#ff4684]' : 'bg-[#303178] opacity-30' }}">
                <i class="fa-solid fa-hourglass-start text-[13px] text-white"></i>
            </a>
            <div class="w-[200px] h-[2px] rounded-full bg-[#303178] opacity-30"></div>
            <a href="{{ route('ngantri') }}" class="flex justify-center items-center w-[30px] h-[30px] {{ $aktif == 'antri' ? 'fa-bounce bg-[#ff4684]' : 'bg-[#303178] opacity-30' }} rounded-full">
                <i class="fa-solid fa-stopwatch text-[13px] text-white"></i>
            </a>
            <div class="w-[200px] h-[2px] rounded-full bg-[#303178] opacity-30"></div>
            <a href="{{ route('order.diproses') }}" class="flex justify-center items-center w-[30px] h-[30px] {{ $aktif == 'pro' ? 'fa-bounce bg-[#ff4684]' : 'bg-[#303178] opacity-30' }} rounded-full">
                <i class="fa-solid fa-hourglass-start text-[13px] text-white"></i>
            </a>
            <div class="w-[200px] h-[2px] rounded-full bg-[#303178] opacity-30"></div>
            <a href="{{ route('siap.diambil') }}" class="flex justify-center items-center w-[30px] h-[30px] {{ $aktif == 'ambil' ? 'fa-bounce bg-[#ff4684]' : 'bg-[#303178] opacity-30' }} rounded-full">
                <i class="fa-solid fa-box text-[13px] text-white"></i>
            </a>
            <div class="w-[200px] h-[2px] rounded-full bg-[#303178] opacity-30"></div>
            <a href="{{ route('order.selesai') }}" class="flex justify-center items-center w-[30px] h-[30px] {{ $aktif == 'sel' ? 'fa-bounce bg-[#ff4684]' : 'bg-[#303178] opacity-30' }} rounded-full">
                <i class="fa-solid fa-circle-check text-[13px] text-white"></i>
            </a>
        </div>
        <div class="w-full flex flex-row items-center mt-3 ps-[160px]">
            <p class="text-[11px] me-[145px]">tunggu konfirmasi</p>
            <p class="text-[11px] me-[169px]">menunggu antrian</p>
            <p class="text-[11px] me-[187px]">diproses</p>
            <p class="text-[11px] me-[194px]">siap diambil</p>
            <p class="text-[11px] me-5">selesai</p>
        </div>
    </div>
    <div class="overflow-x-scroll  w-[90%] rounded-[5px] border-[2px] border-b-[5px] m-auto h-[500px] mt-[20px] border-[#ff4684] flex flex-row items-center ps-[30px]">
        @foreach ($item as $i)
        <div class="relative w-[220px] h-[450px] border-[2px] border-b-[5px] border-[#303178] rounded-[5px] flex flex-col items-center me-5">
            <img src="{{ asset('storage/'.$i->gambar_jadi) }}" alt="" class="w-[160px] h-[160px] rounded-[5px] bg-blue-50 mt-5">
            <p class="w-full text-left ps-10 flex flex-row items-center font-bold text-[13px] mt-3"><i class="fa-solid fa-paint-roller w-[20px] h-[20px] flex justify-center items-center bg-[#ff4684] text-white rounded-full text-[8px] me-2"></i>
            Sablon {{ $i->metode_kaos }}</p>
            <div class="w-full h-auto flex flex-col mt-5 ps-7">
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Customer</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->nama_user }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Jenis</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->jenis_kaos }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Warna</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->warna_kaos }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Posisi</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->posisi }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Jumlah</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->jumlah_kaos }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Cat</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->warna_sablon }}</p>
                </div>
                <div class="w-full flex flex-row items-start">
                    <p class="text-[10px] me-3 w-[100px] font-semibold text-[#ff4684]">Ukuran</p>
                    <p class="text-[10px] me-3 w-[20px] font-bold"> : </p>
                    <p class="text-[10px] me-3 w-[180px] text-[#ff4684]">{{ $i->ukuran_sablon }}</p>
                </div>
            </div>
            <p class="text-[10px] mt-4 mb-1 absolute bottom-10">{{ $i->updated_at }}</p>
            <a href="{{ route('order.sablon.delete', $i->id) }}" class="absolute bottom-2 fa-solid fa-trash-can w-[200px] h-[30px] rounded-[5px] bg-[#ff4684] hover:bg-[#e4326d] text-white flex justify-center items-center"></a>
        </div>
        @endforeach
    </div>
    <div class="w-full h-[67px]"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('gambarb').addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
            document.getElementById('masukgambarb').textContent = fileName;
        });
    </script>
    <script>
            $(document).ready(function() {
                var $bayarlun = $('#bayarlun');
                var $pembayaranb = $('#pembayaranb');
                var $blockbayarb = $('#blockbayarb');
                var $xbayarb = $('#xbayarb');

                $bayarlun.on('click', function(){
                    $pembayaranb.toggleClass('hidden flex');
                    $blockbayarb.toggleClass('hidden flex');
                });
                
                $xbayarb.on('click', function(){
                    $pembayaranb.toggleClass('hidden flex');
                    $blockbayarb.toggleClass('hidden flex');
                });
            });
    </script>
</x-app-layout>