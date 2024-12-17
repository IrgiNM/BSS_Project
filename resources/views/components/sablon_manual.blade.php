<p id="divmetode" class="text-[20px] lilita-one-regular">Isi Data Sablon Manual</p>
<p class="text-[13px]">silahkan isi data dibawah sesuai yang anda inginkan. <i class="text-[13px] text-[#ff4684]">isi semua data !!</i></p>


<div class="relative w-full h-[650px] mt-[30px] pt-[50px] flex flex-row justify-center items-start gap-5 bg-blue-100">
    <button id="kirimdata" class="text-[13px] text-[#2168b9] flex justify-center items-center w-[1100px] h-[50px] rounded-[10px] absolute top-[560px] border-[2px] border-b-[7px] border-[#2168b9] bg-[#cdf5ff] hover:bg-[#46daff]">Kirim data <i class="fa-solid fa-arrow-right-long text-[13px] text-[#2168b9] ms-2"></i></button>

    <div id="divedit" class="relative w-auto h-auto p-[20px] rounded-[10px] border-[2px] border-b-[5px] border-[#b1c6de] mt-[30px] flex flex-row justify-center items-center gap-5 bg-white">
        <p id="edit" class="absolute -top-[30px] font-bold text-[13px] text-white px-[10px] py-[5px] rounded-t-[10px] bg-[#2168b9]">Edit</p>
        <div class="w-[70px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white flex flex-col items-center pt-3 gap-2">
            <button id="editjenis" class="fa-solid fa-shirt text-[#2168b9] w-[40px] h-[40px] rounded-full hover:border-blue-200 hover:border-[2px]"></button>
            <button id="editwarna" class="fa-solid fa-palette text-blue-200 w-[40px] h-[40px] rounded-full hover:border-blue-200 hover:border-[2px]"></button>
            <button id="editgambar" class="fa-solid fa-image text-blue-200 w-[40px] h-[40px] rounded-full hover:border-blue-200 hover:border-[2px]"></button>
            <button id="editposisi" class="fa-solid fa-up-down-left-right text-blue-200 w-[40px] h-[40px] rounded-full hover:border-blue-200 hover:border-[2px]"></button>
        </div>

        <div id="konten" class="relative w-[400px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#d8eaff] bg-white flex justify-center items-center">
            <img id="imgkaos" src="{{ asset('images/KAOSPED.png') }}" alt="" class="opacity-70 w-[350px] h-[350px]">
            <div id="imgsablon" class="h-auto w-[100px] absolute top-[80px]">
                
            </div>
        </div>

        <div id="divjk" class="jkpendekd w-[300px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white p-[20px] flex flex-col">
            @include('components.edit_jeniskaos')
        </div>
        <div id="divwk" class="wkwhite hidden w-[300px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white p-[20px] flex-col">
            @include('components.edit_warnakaos')
        </div>
        <div id="divimg" class="hidden w-[300px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white p-[20px] flex-col">
            @include('components.edit_gambarkaos')
        </div>
        <div id="divposisi" class="hidden w-[300px] h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white p-[20px] flex-col">
            @include('components.edit_posisikaos')
        </div>
    </div>

    <div id="divdata" class="relative w-auto h-auto p-[20px] rounded-[10px] border-[2px] border-b-[5px] border-[#b1c6de] mt-[30px] flex flex-row justify-center items-center pt-3 gap-5 bg-white">
        <form action="{{ route('order.sablon') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input required type="text" name="jeniskaos" id="jeniskaos" class="hidden" value="d">
        <input required type="text" name="warnakaos" id="warnakaos" class="hidden" value="d">
        <input required type="file" name="gambarkaos" id="gambarkaos" class="hidden">
        <input required type="file" name="gambarjadi" id="gambarjadi" class="hidden" value="">
        <input required type="text" name="posisikaos" id="posisikaos" class="hidden" value="d">
        <input required type="text" name="metodekaos" id="metodekaos" class="hidden" value="d">
        <input required type="text" name="status" id="status" class="hidden" value="tunggu harga">

        <div id="yakin" class="hidden fixed palingdepanlagi top-[150px] w-[300px] h-[300px] bg-white rounded-[15px] right-[550px] flex-col justify-end items-center p-[20px]">
            <p id="close" class="absolute cursor-pointer -top-4 -right-4 fa-solid fa-xmark flex justify-center items-center w-[40px] h-[40px] rounded-full border-[3px] border-[#9e2065] text-[#9e2065] bg-white hover:bg-[#9e2065] hover:text-white"></p>
            <img src="{{ asset('images/SABLONICON.png') }}" alt="" class="w-[150px] h-[150px]">
            <p class="text-[15px]">Yakin ingin memesan ?</p>
            <button type="submit" name="submit" id="submit" class="w-full h-[50px] mt-5 border-[2px] border-b-[5px] text-[13px] rounded-[10px] border-[#9e2065] text-[#9e2065] hover:bg-[#ff4684] font-bold hover:text-white py-2">Pesan</button>
        </div>
        
        <p id="data" class="absolute -top-[30px] font-bold text-[13px] text-white px-[10px] py-[5px] rounded-t-[10px] bg-[#2168b9]">Data</p>

        <div class="w-auto h-[400px] rounded-[10px] border-[2px] border-b-[5px] border-[#2168b9] bg-white flex flex-col items-center pt-3 gap-2">
            <div class="w-[300px] h-[50px] ps-5 flex flex-row justify-start items-center gap-2">
                <i class="fa-solid fa-arrow-up-1-9 text-[#2168b9] w-[30px] h-[30px] bg-blue-200 rounded-[10px] flex justify-center items-center"></i>
                <label for="jumlahkaos" class="text-[11px] w-[90px]">Jumlah Kaos :</label>
                <input required type="number" name="jumlahkaos" id="jumlahkaos" class="w-[130px] h-[30px] border-[2px] rounded-[10px] text-[13px] border-[#2168b9]">
            </div>
            <div class="w-[300px] h-[50px] ps-5 flex flex-row justify-start items-center gap-2">
                <i class="fa-solid fa-paint-roller text-[#ff4684] w-[30px] h-[30px] bg-[#ffc4d8] rounded-[10px] flex justify-center items-center"></i>
                <label for="warnasablon" class="text-[11px] w-[90px]">Warna Sablon :</label>
                <input required type="text" placeholder="isi 3 warna" name="warnasablon" id="warnasablon" class="w-[130px] h-[30px] text-[13px] border-[2px] rounded-[10px] border-[#2168b9]">
            </div>
            <div class="w-[300px] h-[50px] ps-5 flex flex-row justify-start items-center gap-2">
                <i class="fa-solid fa-l text-[#263643] w-[30px] h-[30px] bg-[#c8dced] rounded-[10px] flex justify-center items-center"></i>
                <label for="ukurankaos" class="text-[11px] w-[90px]">Ukuran Kaos :</label>
                <select class="w-[130px] text-[13px] border-[2px] rounded-[10px] border-[#2168b9]" name="ukurankaos" id="ukurankaos">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
        </div>
        </form>
    </div>
</div>