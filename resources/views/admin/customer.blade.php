<x-admin>

    <x-navbar_admin dash='' cust=true daft='' datap='' datau=''></x-navbar_admin>



    <div class="w-[100%] ps-[220px] py-5 flex flex-col bg-white">
        <div class="flex flex-row justify-start items-center">
            <p class="text-[20px] font-bold ps-3 border-s-[5px] border-[#1b2543]">Customer</p>
            <p class="text-[15px] text-white w-[25px] h-[25px] flex justify-center items-center rounded-[5px] ms-4 bg-[#7c89b0]">{{ $countCustomer }}</p>
        </div>
        <p class="text-[13px] mt-1 ms-5">Customer yang suudah terdaftar akan ditampilkan di halaman ini!</p>

        <div class="w-[100%] flex flex-row justify-between mt-[50px]">
            <div class=" flex flex-row">
                <a href="{{ route('all.by') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#1e1442] hover:text-[#1e1442] hover:border-[#1e1442] rounded-full me-1 text-[12px]">All</a>
                <a href="{{ route('urut.total.by') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">Top</a>
                <a href="{{ route('urut.by.id') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">New</a>
                <a href="{{ route('all.by') }}" class="px-[15px] py-[5px] pt-[8px] border-[1px] border-[#acc5d6] text-[#acc5d6] rounded-full me-1 hover:text-[#1e1442] hover:border-[#1e1442] text-[12px]">Last</a>
                <form action="{{ route('cari.by') }}" method="get">
                    <input type="search" name="cari" class="px-[15px] py-[4px] text-[13px] w-[300px] ms-3 border-[1px] border-[#1e1442] rounded-full">
                    <button id="tomser" type="submit"><i id="search" class="fa-solid fa-magnifying-glass -ms-[50px]"></i></button>
                </form>
            </div>
            <div class="me-4">
                <form action="{{ route('urut.by') }}">
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
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">customer</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">no telpon</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">alamat</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">email</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">total order</th>
                <th class="text-[13px] py-2 border-y-[1px] border-[#acc5d6]">aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach($customers as $cus)
            <tr>
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
        </table>

    </div>

</x-admin>