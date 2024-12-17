<div id="divadd" class="hidden w-[700px] h-[550px] bg-white rounded-[10px] absolute depan2 top-[50px] right-[250px] p-[20px] ">
    <form action="{{ route('add.pro') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image" class="group w-[100%] h-[100px] bg-[#cae3ff] border-[2px] border-dashed rounded-[10px] flex justify-center flex-col items-center border-[#1e1442] hover:bg-[#aad1ff]">
            <i class="fa-regular fa-image text-[40px] text-[#76a5da] group-hover:text-white"></i>
            <p id="fileName" class="text-[13px] text-[#76a5da] rounded-[5px] py-[3px] px-[7px] mt-[5px] group-hover:text-white">Pilih file</p>
        </label>
        {{-- gambar --}}
        <input type="file" name="image" id="image" class="hidden" >
        {{-- nama --}}
        <input type="text" name="nama" id="nama" placeholder="nama produk" class="text-[13px] mt-[15px] w-[100%] border-[2px] rounded-[10px] border-[#1e1442]" >
        {{-- deskripsi --}}
        <textarea type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi produk" class="text-[13px] mt-[15px] w-[100%] border-[2px] rounded-[10px] border-[#1e1442]" cols="10" rows="5"></textarea>
        {{-- stok --}}
        <div class="w-[100%] flex flex-row gap-2">
            <input type="number" name="stok" id="stok" placeholder="stok produk" class="text-[13px] mt-[15px] flex flex-1 border-[2px] rounded-[10px] border-[#1e1442]" >
            <select name="tipe" id="tipe" class="text-[13px] mt-[15px] flex flex-2 border-[2px] rounded-[10px] border-[#1e1442]" >
                <option value="kaos">kaos</option>
                <option value="sticker">sticker</option>
            </select>
        </div>
        
        {{-- harga --}}
        <input type="number" name="harga" id="harga" placeholder="harga produk" class="text-[13px] mt-[15px] w-[100%] border-[2px] rounded-[10px] border-[#1e1442]">

        <button type="submit" name="sumbit" class="text-[13px] text-white bg-[#55a4ff] hover:bg-[#4793eb] text-center mt-[15px] w-[100%] rounded-[10px] py-[15px]">Kirim</button>
    </form>
    <script>
        document.getElementById('image').addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
            document.getElementById('fileName').textContent = fileName;
        });
    </script>
</div>

<p id="closeadd" class="hidden w-[30px] h-[30px] bg-white border-[3px] rounded-full border-[#1e1442] absolute depan3 top-[40px] right-[240px] fa-solid fa-xmark text-[17px] text-center text-[#1e1442] hover:bg-[#1e1442] hover:text-white pt-1"></p>

<script>
    document.getElementById('addpro').addEventListener('click', function() {
        document.getElementById('divadd').classList.remove('hidden');
        document.getElementById('block').classList.remove('hidden');
        document.getElementById('closeadd').classList.remove('hidden');
    });

    document.getElementById('closeadd').addEventListener('click', function() {
        document.getElementById('divadd').classList.add('hidden');
        document.getElementById('block').classList.add('hidden');
        document.getElementById('closeadd').classList.add('hidden');
    });
</script>