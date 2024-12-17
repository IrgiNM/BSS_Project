<div class="depan fixed top-0 left-0 w-[200px] h-[100vh] bg-[#1b2543] pt-[30px] ps-[30px] flex flex-col justify-start items-start">
    <div class="w-[100px] flex flex-row mb-[50px] items-center">
        <img src="{{ asset("images/logo_bummi.png") }}" alt="" href="#" class="w-[35px] h-[35px]">
        <p class="text-[20px] font-bold leading-[5px] text-white h-2 ms-2 mt-[-5px] p-0">BSS<b class="text-[#55a4ff] p-0 leading-[5px] m-0 text-[35px] font-bold">.</b></p>
    </div>
    <a href="{{ route('admin') }}" class="group text-[13px] {{ $dash ? 'text-white' : 'text-[#47415e] hover:text-[#b0adbe]' }} mb-5"><i class="fa-solid fa-house-user text-[15px] {{ $dash ? 'text-white' : 'text-[#47415e] group-hover:text-[#b0adbe]' }} mr-2"></i> Dashboard</a>

    <a href="{{ route('all.by') }}" class="group text-[13px] {{ $cust ? 'text-white' : 'text-[#47415e] hover:text-[#b0adbe]' }} mb-5"><i class="fa-solid fa-users text-[15px] mr-2 {{ $cust ? 'text-white' : 'text-[#47415e] group-hover:text-[#b0adbe]' }}"></i> Customer</a>
    
    <a href="{{ route('daftar.pro') }}" class="group text-[13px] {{ $daft ? 'text-white' : 'text-[#47415e] hover:text-[#b0adbe]' }} mb-5"><i class="fa-solid fa-box text-[15px] mr-2 {{ $daft ? 'text-white' : 'text-[#47415e] group-hover:text-[#b0adbe]' }}"></i> Daftar Produk</a>
    
    <a href="{{ route('order.dash') }}" class="group text-[13px] {{ $datap ? 'text-white' : 'text-[#47415e] hover:text-[#b0adbe]' }} mb-5"><i class="fa-solid fa-clipboard-list text-[15px] mr-2 {{ $datap ? 'text-white' : 'text-[#47415e] group-hover:text-[#b0adbe]' }}"></i> Data Pemesanan</a>
    
    <a href="{{ route('ulasan.page') }}" class="group text-[13px] {{ $datau ? 'text-white' : 'text-[#47415e] hover:text-[#b0adbe]' }} mb-5"><i class="fa-solid fa-face-smile text-[15px] mr-2 {{ $datau ? 'text-white' : 'text-[#47415e] group-hover:text-[#b0adbe]' }}"></i> Data Ulasan</a>

    @auth
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="px-[35px] py-[5px] rounded-full mt-[250px] border-[2px] text-[13px] border-white text-white hover:bg-white hover:text-[#1e1442] transition-all duration-300">Log out</button>
        </form>
    @endauth
</div>