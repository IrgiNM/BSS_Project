<x-admin>

    <x-navbar_admin dash='' cust='' daft='' datap=true datau=''></x-navbar_admin>

    @isset($sablons)
        <div id="block" class="div w-[100%] h-[100%] bg-[#1e1442] opacity-[50%] backdrop-blur-sm absolute top-0 right-0 left-0 bottom-0 "></div>
        <div id="divadd" class="fixed depan top-[250px] right-[500px] depan w-[300px] h-auto flex flex-col items-center p-[20px] rounded-[10px] bg-white">
            <form action="{{ route('update.orsab', $sablons->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input required type="text" name="jeniskaos" id="jeniskaos" class="hidden" value="{{ $sablons->jenis_kaos }}">
                <input required type="text" name="customer" id="customer" class="hidden" value="{{ $sablons->id_customer }}">
                <input required type="text" name="warnakaos" id="warnakaos" class="hidden" value="{{ $sablons->warna_kaos }}">
                <input required type="text" name="gambarkaos" id="gambarkaos" class="hidden" value="{{ $sablons->gambar }}">
                <input required type="text" name="gambarjadi" id="gambarjadi" class="hidden" value="{{ $sablons->gambar_jadi }}">
                <input required type="text" name="posisikaos" id="posisikaos" class="hidden" value="{{ $sablons->posisi }}">
                <input required type="text" name="metodekaos" id="metodekaos" class="hidden" value="{{ $sablons->metode_kaos }}">
                <input required type="text" name="ukurankaos" id="ukurankaos" class="hidden" value="{{ $sablons->ukuran_sablon }}">
                <input required type="number" name="jumlahkaos" id="jumlahkaos" class="hidden" value="{{ $sablons->jumlah_kaos }}">
                <input required type="text" name="warnasablon" id="warnasablon" class="hidden" value="{{ $sablons->warna_sablon }}">
                <input required type="text" name="created" id="created" class="hidden" value="{{ $sablons->created_at }}">

                <p class="text-[13px] font-bold"><i class="fa-regular fa-pen-to-square text-[13px] me-2"></i>Edit</p>
                <select name="status" id="status" class="w-full mt-3 mb-2 border-[2px] rounded-[5px] text-[13px]" value="{{ $sablons->status }}">
                    <option value="tunggu harga">tunggu harga</option>
                    <option value="dikonfirmasi">dikonfirmasi</option>
                    <option value="diproses">diproses</option>
                    <option value="siap diambil">siap diambil</option>
                </select>
                <input required type="number" name="harga" id="harga" class="w-full border-[2px] rounded-[5px] text-[13px]" value="0">
                <button type="submit" id="submit" class="w-full mt-4 rounded-[5px]  py-2 bg-blue-500 text-white ">Kirim</button>
            </form>
        </div>
        <button id="closeadd" class=" w-[30px] h-[30px] bg-white border-[3px] rounded-full border-[#1e1442] fixed depan top-[240px] right-[490px] fa-solid fa-xmark text-[17px] text-center text-[#1e1442] hover:bg-[#1e1442] hover:text-white "></button>
    @endisset
    

    <div class="w-[100%] px-[240px] py-5 flex flex-col bg-white">
        <div class="flex flex-row justify-start items-center w-[100%] h-[50px]">
            <div class="flex flex-col">
                <p class="text-[20px] font-bold mb-1 flex flex-row items-center"><i class="w-[30px] h-[30px] me-3 fa-solid fa-paint-roller text-white text-[13px] rounded-full bg-[#ff4684] flex justify-center items-center"></i>Order {{ $judul }}</p>
                <p class="text-[11px]">halaman ini adalah halaman dashboard untuk data pemesanan.</p>
            </div>
            <p class="text-[13px] absolute right-[250px]">Link :</p>
            <a href="#" class="fa-solid fa-store text-[15px] flex justify-center items-center absolute right-[190px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#2168b9] hover:text-[#2168b9] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-paint-roller text-[15px] flex justify-center items-center absolute right-[140px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#ff4684] hover:text-[#ff4684] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-shirt text-[15px] flex justify-center items-center absolute right-[90px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#2168b9] hover:text-[#2168b9] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-pen-nib text-[15px] flex justify-center items-center absolute right-[40px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#ffc341] hover:text-[#ffc341] transition-all duration-200"></a>
        </div>
    </div>

    <div class="w-[100%] h-[610px] ps-[240px] pe-[40px] bg-[#e5e5f0] flex flex-col">
        <x-totalorder></x-totalorder>
        <div class="w-full h-auto flex flex-row items-center mb-[10px]">
            <p class="text-[10px] font-bold text-[#1b2543]">New</p>
            <div class="w-full h-[2px] bg-[#1b2543] mx-[15px]"></div>
            <p class="text-[10px] font-bold text-[#1b2543]">Old</p>
        </div>

        <div class="w-[100%] h-auto rounded-[5px] p-3 flex flex-row gap-4 flex-wrap">
            <?php $n=1 ?>
            @foreach ($items as $i)
            <div id="divitem" class="relative w-[220px] h-[300px] rounded-s-[5px] flex flex-row shadow-lg bg-white transition-all duration-500">
                <button id="butitem" class="absolute w-[30px] h-[300px] text-[13px] -right-[30px] flex items-center justify-center fa-solid fa-caret-right text-white rounded-e-[5px] bg-[#303f6e] hover:bg-[#1b2543] transition-all duration-200"></button>
                <div class="w-[200px] h-[450px] rounded-[5px] flex flex-col items-center p-3">
                    <img src="{{ asset('storage/'.$i->gambar_jadi) }}" alt="" class="w-[170px] border-[1px] rounded-[5px] object-cover mb-3 bg-blue-500">
                    <img src="{{ asset('storage/'.$i->gambar) }}" alt="" class="w-[170px] h-[50px] border-[1px] rounded-[5px] object-cover bg-blue-500">
                    <a href="{{ route('download.file', $i->id) }}" class="group w-full h-[30px] rounded-[5px] bg-white hover:bg-[#1b2543] border-[2px] border-b-[5px] border-[#1b2543] mt-3 transition-all duration-200 flex justify-center items-center">
                        <i class="fa-solid fa-download group-hover:text-white text-[13px] text-[#1b2543]"></i>
                    </a>
                </div>
                <div id="divdata" class="hidden w-[380px] h-[450px] rounded-[5px] flex-col">
                    <div class="w-full flex items-center">
                        <p class="text-[13px] text-white w-[20px] h-[20px] bg-[#ff83ac] rounded-[5px] me-1 text-center">{{ $n }}</p>
                        <p class="text-[15px] text-left ms-3 mt-4 mb-3 font-bold">Sablon {{ $i->metode_kaos }}</p>
                        <p class="text-[13px] px-[15px] py-[2px] rounded-[5px] text-white bg-[#ff4684] ms-[50px]">{{ $i->updated_at }}</p>
                    </div>
                    <div class="w-full h-auto flex flex-row">
                        <div class="w-[100px] h-auto flex flex-col ms-3">
                            <p class="text-[13px] font-semibold text-[#ff4684]">Customer</p>
                            <p class="text-[13px] font-semibold">jenis kaos</p>
                            <p class="text-[13px] font-semibold">warna kaos</p>
                            <p class="text-[13px] font-semibold">posisi kaos </p>
                            <p class="text-[13px] font-semibold">jumlah kaos</p>
                            <p class="text-[13px] font-semibold">warna sablon</p>
                            <p class="text-[13px] font-semibold">ukuran kaos</p>
                        </div>
                        <div class="w-[20px] h-auto flex flex-col ms-3">
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                        </div>
                        <div class="w-[150px] h-auto flex items-start flex-col ms-3">
                            <p class="text-[13px] text-[#ff4684]">{{ $i->nama_user }}</p>
                            <p class="text-[13px]">{{ $i->jenis_kaos }}</p>
                            <p class="text-[13px]">{{ $i->warna_kaos }}</p>
                            <p class="text-[13px]">{{ $i->posisi }}</p>
                            <p class="text-[13px]">{{ $i->jumlah_kaos }}</p>
                            <p class="text-[13px]">{{ $i->warna_sablon }}</p>
                            <p class="text-[13px]">{{ $i->ukuran_sablon }}</p>
                        </div>
                    </div>
                    <div class="w-[360px] rounded-[5px] flex flex-row border-[2px] border-b-[5px] mt-10 p-2">
                        <div class="w-[100px] h-auto flex flex-col ms-3">
                            <p class="text-[13px] font-semibold">jenis kaos</p>
                            <p class="text-[13px] font-semibold">warna kaos</p>
                        </div>
                        <div class="w-[20px] h-auto flex flex-col ms-3">
                            <p class="text-[13px] font-bold"> : </p>
                            <p class="text-[13px] font-bold"> : </p>
                        </div>
                        <div class="w-[100px] h-auto flex flex-col ms-3">
                            <p class="text-[13px] font-semibold text-[#ff4684]">{{ $i->status }}</p>
                            <p class="text-[13px] font-semibold">Rp.{{ $i->harga }}</p>
                        </div>
                        <a href="{{ route('edit.order.sablon', $i->id) }}" class="fa-solid fa-pen-to-square text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] border-b-[5px] text-[#1b2543] border-[#1b2543] hover:text-white hover:bg-[#1b2543] ms-9"></a>
                    </div>

                </div>
            </div>
            <?php $n++ ?>
            @endforeach
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        @isset($script)
            {{ $script }}
        @endisset
    </script>
    
    <script>
         $(document).ready(function() {
            var $divitem = $('#divitem');
            var $butitem = $('#butitem');
            var $divdata = $('#divdata');
            $butitem.on('click', function() {
                $divitem.toggleClass('w-[220px] w-[565px]');
                $divdata.toggleClass('hidden flex');
                $butitem.toggleClass('fa-caret-right fa-caret-left');
            });

            var $block = $('#block');
            var $divadd = $('#divadd');
            var $closeadd = $('#closeadd');
            $closeadd.on('click', function(){
                $divadd.toggleClass('hidden flex');
                $closeadd.toggleClass('hidden flex');
                $block.toggleClass('hidden flex');
            });
        });
    </script>
</x-admin>