<div class="w-[60%] mt-[100px] flex flex-col justify-start items-center m-auto">
    <p class="text-[20px] lilita-one-regular">ORDER MENU</p>
    <div class="w-[75%] flex flex-row justify-between items-center mt-3">
        <button id="desainmenu" class="kiri fa-solid fa-caret-left flex justify-center items-center text-[20px] text-[#ecc3d1] w-[30px] h-[30px] border-[2px] border-[#ecc3d1] rounded-full hover:text-[#ff4684] hover:border-[#ff4684]"></button>

        <button id="storemenu" class="px-[15px] py-[7px] rounded-full flex flex-row items-center bg-[#2168b9] hover:bg-[#2168b9]">
            <p class="w-[15px] h-[15px] me-3 fa-solid fa-store text-white"></p>
            <p class="text-[13px] font-bold text-white">Produk</p>
        </button>

        <button id="sablonmenu" class="px-[15px] py-[7px] rounded-full flex flex-row items-center bg-[#f0d0e2] hover:bg-[#ff4684]">
            <p class="w-[15px] h-[15px] me-3 fa-solid fa-paint-roller text-white"></p>
            <p class="text-[13px] font-bold text-white">Sablon</p>
        </button>

        <button id="kaosmenu" class="px-[15px] py-[7px] rounded-full flex flex-row items-center bg-[#d0e0f0] hover:bg-[#2168b9]">
            <p class="w-[15px] h-[15px] me-3 fa-solid fa-shirt text-white"></p>
            <p class="text-[13px] font-bold text-white">Kaos</p>
        </button>

        <button id="desainmenu" class="px-[15px] py-[7px] rounded-full flex flex-row items-center bg-[#f0e7d0] hover:bg-[#ffc341]">
            <p class="w-[15px] h-[15px] me-3 fa-solid fa-pen-nib text-white"></p>
            <p class="text-[13px] font-bold text-white">Design</p>
        </button>

        <button id="sablonmenu" class="kanan fa-solid fa-caret-right flex justify-center items-center text-[20px] text-[#ecc3d1] w-[30px] h-[30px] border-[2px] border-[#ecc3d1] rounded-full hover:text-[#ff4684] hover:border-[#ff4684]"></button>
    </div>
</div>

<div class = 'relative overflow-hidden w-[80%] rounded-[10px] border-[3px] border-b-[7px] border-[#202f9e] h-[400px] m-auto mt-[50px] flex flex-row justify-center items-start pt-[50px]'>
    <div class="div w-[35%] me-[40px] flex flex-col justify-start items-start">
        <p class="lilita-one-regular text-[#2973e2] text-[30px] mb-2">PRODUK READY STOK</p>
        <p class="text-[13px] text-left">Kami juga menyediakan berbagai pilihan baju sablon yang sudah jadi, siap untuk dipakai! Tersedia dalam berbagai desain menarik dan ukuran yang beragam. Dapatkan produk berkualitas dengan harga yang terjangkau hanya di BUMMI Sablon Studio!</p>
        <a href="#" class="text-[13px] text-[#2973e2] font-bold px-[15px] py-[10px] rounded-full border-[2px] border-[#2973e2] mt-7 hover:px-[35px] transition-all duration-300">Order Now <i class="w-[15px] h-[15px] text-[#2973e2] ms-3 fa-solid fa-store"></i></a>
        <div class="w-[100%] h-[70px] overflow-hidden mt-5 flex flex-row justify-start items-center">
            @foreach($gambarpro as $pro)
                <img src="{{ asset('storage/'.$pro->gambar_produk) }}" class="w-[50px] h-[50px]  border-[#2973e2] rounded-[5px] border-[1px] border-b-[5px] ms-3">
            @endforeach   
        </div>
    </div>
    
        @foreach($favpro as $pro)
            <img src="{{ asset('storage/'.$pro->gambar_produk) }}" class="w-[310px] h-[310px] border-b-[7px] object-cover border-[2px] border-[#2973e2] bg-blue-300 ms-[20px] rounded-[10px]"></img>
        @endforeach

    <img src="{{ asset('images/STOREICON.png') }}" alt="" class="w-[700px] h-[700px] absolute backim opacity-10 -left-[100px] -bottom-[150px]">
</div>

<div  class = 'w-[80%] h-[100px] flex flex-row justify-between mt-8'>
    <button id="sablonmenu" class="group w-[32%] h-[100%] rounded-[5px] border-[2px] border-b-[4px] flex flex-row items-center p-[20px] border-[#202f9e] hover:border-[#ff4684] hover:border-b-[7px] -mt-[5px] transition-all duration-200">
        <img src="{{ asset('images/SABLONICON.png') }}" alt="" class="fa-bounce w-[70px] h-[70px]">
        <div class="ms-[20px] w-[650%] h-[100%] flex flex-col items-start">
            <p class="text-[15px] font-bold">Order Sablon</p>
            <p class="text-[13px] text-left">Pesan sablon berkualitas tinggi, cepat, dan terpercaya di sini!</p>
        </div>
    </button>

    <button id="kaosmenu" class="w-[32%] h-[100%] rounded-[5px] border-[2px] border-b-[4px] flex flex-row items-center p-[20px] border-[#202f9e] hover:border-[#2973e2] hover:border-b-[7px] -mt-[5px] transition-all duration-200">
        <img src="{{ asset('images/KAOSICON.png') }}" alt="" class="fa-bounce w-[70px] h-[70px]">
        <div class="ms-[20px] w-[650%] h-[100%] flex flex-col items-start">
            <p class="text-[15px] font-bold">Order Kaos </p>
            <p class="text-[13px] text-left">Pesan kaos custom berkualitas tinggi, nyaman, dan gaya.</p>
        </div>
    </button>

    <button id="desainmenu" class="w-[32%] h-[100%] rounded-[5px] border-[2px] border-b-[4px] flex flex-row items-center p-[20px] border-[#202f9e] hover:border-[#ffc341] hover:border-b-[7px] -mt-[5px] transition-all duration-200">
        <img src="{{ asset('images/DESAINICON.png') }}" alt="" class="fa-bounce w-[70px] h-[70px]">
        <div class="ms-[20px] w-[650%] h-[100%] flex flex-col items-start">
            <p class="text-[15px] font-bold">Order Desain</p>
            <p class="text-[13px] text-left">Pesan desain sekarang melalui halaman order desain kami.</p>
        </div>
    </button>
</div>