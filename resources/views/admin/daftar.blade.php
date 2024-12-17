<x-admin>

    <x-navbar_admin dash='' cust='' daft=true datap='' datau=''></x-navbar_admin>

    <div class="w-[100%] ps-[220px] py-5 flex flex-col bg-white">
        <div class="relative flex flex-row justify-start items-center">
            <p class="text-[20px] font-bold ps-3 border-s-[5px] border-[#1b2543]">Daftar Produk</p>
            <p class="text-[15px] text-white w-[25px] h-[25px] flex justify-center items-center rounded-[5px] ms-4 bg-[#7c89b0]">{{ $countProduk }}</p>
            <button id="addpro" class="px-[10px] py-[10px] pe-[15px] absolute right-5 text-[13px] flex flex-row items-center rounded-full bg-[#1e1442] text-white"><i class="fa-solid fa-circle-plus text-[20px] text-white me-3"></i> Produk</button>
        </div>
        <p class="text-[13px] mt-1 ms-5">Admin bisa menambahkan beberapa produk nya di halaman ini!</p>
    
        <x-block></x-block>
        <x-addpro></x-addpro>
        @if(!empty($script))
            {!! $script !!}
        @endif
        @if(empty($script))
            <script>
                document.getElementById('divadd').classList.add('hidden');
                document.getElementById('block').classList.add('hidden');
                document.getElementById('closeadd').classList.add('hidden');
            </script>
        @endif


        <div class="w-[100%] flex flex-row justify-between mt-[50px]">
            <div class=" flex flex-row">
                <a href="{{ route('daftar.pro') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#1e1442] hover:text-[#1e1442] hover:border-[#1e1442] rounded-full me-1 text-[12px]">All</a>
                <a href="{{ route('urut.produk.top') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">Top</a>
                <a href="{{ route('urut.produk.id') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">New</a>
                <a href="{{ route('daftar.pro') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">Last</a>
                <form action="{{ route('cari.produk.by') }}" method="get">
                    <input type="search" name="cari" class="px-[15px] py-[4px] text-[13px] w-[300px] ms-3 border-[1px] border-[#1e1442] rounded-full">
                    <button id="tomser" type="submit"><i id="search" class="fa-solid fa-magnifying-glass -ms-[50px]"></i></button>
                </form>
            </div>
            <div class="me-4 flex flex-row items-center">
                <a href="{{ route('kaos.produk') }}" class="text-[13px] me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#55a4ff] pb-1 text-[#55a4ff]"><i class="fa-solid fa-shirt text-[15px] text-[#55a4ff] me-2"></i>Kaos</a>

                <a href="{{ route('sticker.produk') }}" class="text-[13px] me-4 border-b-[1px] hover:border-b-[5px] transition-all duration-200 border-[#ff5596] pb-1 text-[#ff5596]"><i class="fa-solid fa-note-sticky text-[15px] text-[#ff5596] me-2"></i>Sticker</a>

                <form action="{{ route('urut.produk') }}">
                    <select name="order" id="order" onchange="this.form.submit()" class="w-[80px] py-[5px] rounded-[5px] text-[13px]">
                        <option value="all">all</option>
                        <option value="asc">a-z</option>
                        <option value="desc">z-a</option>
                    </select>
                </form>
            </div>
        </div>
    
        <table class="mt-5 me-4">
            <tr>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">no</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">gambar</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">nama</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">deskripsi</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">tipe</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">dibeli</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">stok</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">harga</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach($produks as $pro)
            <tr class="border-b-[1px] border-[#acc5d6]">
                <td class="text-center text-[13px] pt-2 pb-2">{{ $i }}</td>
                <td class="text-[13px] pt-2 pb-2">
                    <img class="w-[100px] h-[100px] m-auto bg-cover" src="{{ asset('storage/'.$pro->gambar_produk) }}" alt="{{ $pro->nama_produk }}">
                </td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $pro->nama_produk }}</td>
                <td class="text-center text-[13px] pt-2 pb-2 max-w-[120px] overflow-hidden whitespace-nowrap text-ellipsis">{{ $pro->deskripsi }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $pro->tipe }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $pro->dibeli }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $pro->stok }}</td>
                <td class="text-center text-[13px] pt-2 pb-2">{{ $pro->harga }}</td>
                <td class="text-center text-[13px] pt-2 pb-2 flex flex-row items-center justify-center h-[100px] mt-2">
                    <a href="{{ route('edit.pro', $pro->id) }}" class="fa-solid fa-pen-to-square text-[13px] py-[10px] px-[10px] rounded-[5px] border-[2px] text-[#55a4ff] border-[#55a4ff] hover:text-white hover:bg-[#55a4ff] me-3"></a>
                    <form action="{{ route('delete.pro', $pro->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
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