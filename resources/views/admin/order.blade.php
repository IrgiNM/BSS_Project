<x-admin>

    <x-navbar_admin dash='' cust='' daft='' datap=true datau='' ></x-navbar_admin>

    <div class="w-[100%] px-[240px] py-5 flex flex-col bg-white">
        <div class="flex flex-row justify-start items-center w-[100%] h-[50px]">
            <div class="flex flex-col">
                <p class="text-[20px] font-bold mb-1">Order {{ $judul }}</p>
                <p class="text-[11px]">halaman ini adalah halaman dashboard untuk data pemesanan.</p>
            </div>
            <p class="text-[13px] absolute right-[250px]">Link :</p>
            <a href="#" class="fa-solid fa-store text-[15px] flex justify-center items-center absolute right-[190px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#2168b9] hover:text-[#2168b9] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-paint-roller text-[15px] flex justify-center items-center absolute right-[140px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#ff4684] hover:text-[#ff4684] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-shirt text-[15px] flex justify-center items-center absolute right-[90px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#2168b9] hover:text-[#2168b9] transition-all duration-200"></a>

            <a href="#" class="fa-solid fa-pen-nib text-[15px] flex justify-center items-center absolute right-[40px] w-[40px] h-[40px] rounded-full text-[#7c89b0] hover:border-[2px] hover:border-[#ffc341] hover:text-[#ffc341] transition-all duration-200"></a>
        </div>
    </div>

    <div class="w-[100%] h-[1000px] ps-[240px] pe-[40px] bg-[#d6ebff] flex flex-col">
        <x-totalorder countsab="{{ $countsablon }}" countdp="{{ $countbayardp }}" countlunas="{{ $countbayarlunas }}"></x-totalorder>

        <div class="w-[100%] bg-[#1b2543] h-[50px] flex flex-row justify-between px-[50px] items-center rounded-[5px] mt-5">
            <p class="text-[13px] w-[25px] text-center text-white py-2">no</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">customer</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">order</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">status</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">alamat</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">gambar</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">harga</p>
            <p class="text-[13px] w-[120px] text-center text-white py-2">waktu</p>
            {{-- <p class="text-[13px] w-[120px] text-center text-white py-2">aksi</p> --}}
        </div>

        <?php $i=1; ?>
        @foreach($items as $item)
            <div class="w-[100%] mt-3 bg-white h-[50px] flex flex-row justify-between px-[50px] items-center rounded-[5px]">
                <p class="text-[13px] text-white py-2 w-[25px] h-[25px] flex justify-center items-center rounded-[5px] bg-[#1b2543]">{{ $i }}</p>
                <p class="text-[13px] w-[120px] text-center py-2">{{ $item->customer->username }}</p>
                <p class="text-[13px] w-[120px] flex flex-row items-center text-center py-2"><i class="fa-solid fa-paint-roller w-[20px] h-[20px] flex justify-center items-center bg-[#ffc8db] text-[#ff4684] rounded-full text-[8px] me-2"></i>{{ $item->id_sablon }}</p>
                <p class="text-[13px] w-[120px] text-center py-2">{{ $item->status }}</p>
                <p class="text-[13px] w-[120px] text-center py-2 max-w-[120px] overflow-hidden whitespace-nowrap text-ellipsis">{{ $item->alamat }}</p>
                <p class="text-[13px] w-[120px] flex items-center justify-center py-2">
                    <img class="w-[30px] h-[30px] me-2 bg-cover" src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->gambar }}">
                    <a href="{{ route('download.bukti', $item->id) }}" class="fa-solid fa-download w-[30px] h-[30px] rounded-[5px] border-[2px] border-b-[5px] border-[#1b2543] flex justify-center items-center text-[#1b2543]"></a>
                </p>
                <p class="text-[13px] w-[120px] text-center py-2">{{ $item->harga }}</p>
                <p class="text-[13px] w-[120px] text-center py-2">{{ $item->created_at }}</p>
                {{-- <div class="text-center w-[120px] text-[13px] pb-2 flex flex-row items-center justify-center h-[100px] mt-2">
                    <a href="{{ route('edit.pro', $item->id) }}" class="fa-solid fa-pen-to-square text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] text-[#55a4ff] border-[#55a4ff] hover:text-white hover:bg-[#55a4ff] me-3"></a>
                    <form action="{{ route('delete.user', $item->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus customer ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fa-solid fa-trash-can text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] text-[#ff5596] border-[#ff5596] hover:text-white hover:bg-[#ff5596]"></button>
                    </form>
                </div> --}}
            </div>
        <?php $i++; ?>
        @endforeach

        {{-- <table class="mt-5 me-4">
            <tr>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">no</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">customer</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">no telpon</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">alamat</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">email</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">total order</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach($customers as $cus)
            <tr class="bg-white mt-2 rounded-[5px]">
                <td class="text-center text-[13px] pt-2">{{ $i }}</td>
                <td class="text-center text-[13px] pt-2">{{ $cus->username }}</td>
                <td class="text-center text-[13px] pt-2">{{ $cus->no_hp }}</td>
                <td class="text-center text-[13px] pt-2">{{ $cus->alamat }}</td>
                <td class="text-center text-[13px] pt-2">{{ $cus->email }}</td>
                <td class="text-center text-[13px] pt-2">{{ $cus->total_order }}</td>
                <td class="text-center text-[13px] pt-2">
                    <form action="{{ route('delete.user', $cus->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus customer ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fa-solid fa-trash-can text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] text-[#ff5596] border-[#ff5596] hover:text-white hover:bg-[#ff5596]"></button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </table> --}}
    </div>

</x-admin>