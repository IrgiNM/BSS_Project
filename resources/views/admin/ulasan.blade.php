<x-admin>

    <x-navbar_admin dash='' cust='' daft='' datap='' datau=true></x-navbar_admin>

    <div class="w-[100%] ps-[220px] py-5 flex flex-col bg-white">
        <div class="relative flex flex-row justify-start items-center">
            <p class="text-[20px] font-bold ps-3 border-s-[5px] border-[#1b2543]">Data Ulasan</p>
            <p class="text-[15px] text-white w-[25px] h-[25px] flex justify-center items-center rounded-[5px] ms-4 bg-[#7c89b0]">{{ $ulasanCount }}</p>
        </div>
        <p class="text-[13px] mt-1 ms-5">semua ulasan dari cuustomer bisa dilihat disini.</p>
    


        <div class="w-[100%] flex flex-row justify-between mt-[50px]">
            <div class=" flex flex-row">
                <a href="{{ route('ulasan.page') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#1e1442] hover:text-[#1e1442] hover:border-[#1e1442] rounded-full me-1 text-[12px]">All</a>
                <a href="{{ route('ulasan.page') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">New</a>
                <a href="{{ route('ulasan.last') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">Last</a>
                <form action="{{ route('ulasan.cari') }}" method="get">
                    <input type="search" name="cari" class="px-[15px] py-[4px] text-[13px] w-[300px] ms-3 border-[1px] border-[#1e1442] rounded-full">
                    <button id="tomser" type="submit"><i id="search" class="fa-solid fa-magnifying-glass -ms-[50px]"></i></button>
                </form>
            </div>
            <div class="me-4 flex flex-row items-center">
                <a href="{{ route('ulasan.b1') }}" class="text-[13px] font-bold me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ffc341] pb-1 text-[#ffc341]">1 <i class="fa-solid fa-star text-[15px] text-[#ffc341] me-2"></i></a>
                
                <a href="{{ route('ulasan.b2') }}" class="text-[13px] font-bold me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ffc341] pb-1 text-[#ffc341]">2 <i class="fa-solid fa-star text-[15px] text-[#ffc341] me-2"></i></a>

                <a href="{{ route('ulasan.b3') }}" class="text-[13px] font-bold me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ffc341] pb-1 text-[#ffc341]">3 <i class="fa-solid fa-star text-[15px] text-[#ffc341] me-2"></i></a>

                <a href="{{ route('ulasan.b4') }}" class="text-[13px] font-bold me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ffc341] pb-1 text-[#ffc341]">4 <i class="fa-solid fa-star text-[15px] text-[#ffc341] me-2"></i></a>

                <a href="{{ route('ulasan.b5') }}" class="text-[13px] font-bold me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ffc341] pb-1 text-[#ffc341]">5 <i class="fa-solid fa-star text-[15px] text-[#ffc341] me-2"></i></a>

            </div>
        </div>
    
        <table class="mt-5 me-4">
            <tr>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">no</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">gambar</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">nama</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">ulasan</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">order</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">bintang</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">waktu</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach($ulasans as $ul)
            <tr class="border-b-[1px] border-[#acc5d6]">
                <td class="text-center text-[13px] pt-2 pb-2">{{ $i }}</td>
                <td class="text-[13px] pt-2 pb-2 flex justify-center items-center">
                    @isset($ul->gambar)
                        <img class="w-[100px] h-[100px] m-auto bg-cover" src="{{ asset('storage/'.$ul->gambar) }}" alt="{{ $ul->gambar }}">
                    @else
                        <i class="fa-regular fa-image text-[40px] text-[#acc5d6]"></i>
                    @endisset
                </td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $ul->nama_user }}</td>
                <td class="text-center text-[13px] pt-2 pb-2 max-w-[120px] overflow-hidden whitespace-nowrap text-ellipsis">{{ $ul->ulasan }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $ul->order }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $ul->bintang }} <i class="fa-solid fa-star text-[13px] text-[#ffc341]"></td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $ul->created_at }}</td>
                <td class="text-center text-[13px] pt-2 pb-2 flex flex-row items-center justify-center h-[100px] mt-2">
                    <form action="{{ route('delete.pro', $ul->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fa-solid fa-trash-can text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] text-[#ff5596] border-[#ff5596] hover:text-white hover:bg-[#ff5596]"></button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </table>
    </div>

    

        
    </div>

</x-admin>