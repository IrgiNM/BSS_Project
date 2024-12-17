<x-admin>

    <x-navbar_admin dash=true cust='' daft='' datap='' datau=''></x-navbar_admin>

    <div class="w-[100%] ps-[200px] flex flex-row bg-[#f5f5f7]">
        <div class="relative w-[250px] flex flex-col justify-start ps-[40px] pt-[50px] pe-[40px] me-[30px] border-e-[1px]">
            <div class="flex flex-row justify-start items-center mb-7">
                <div class="w-[5px] h-[25px] bg-[#1b2543]"></div>
                <p class="text-[13px] font-bold ms-2">Daftar Total</p>
            </div>
            
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#55a4ff]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">{{ $countCustomer }}</p>
                <p class="mt-0 text-[13px]">Customer</p>
                <a href="{{ route('all.by') }}" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#aec0d4] pt-[3px] ps-[7px] text-[20px] text-[#aec0d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#1b2543]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">{{ $countProduk }}</p>
                <p class="mt-0 text-[13px]">Daftar produk</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#aec0d4] pt-[3px] ps-[7px] text-[20px] text-[#aec0d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#1b2543]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">{{ $stok }}</p>
                <p class="mt-0 text-[13px]">Stok produk</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#d4aec4] pt-[3px] ps-[7px] text-[20px] text-[#d4aec4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-[40px] flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#ff5596]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">{{ $stokmin }}</p>
                <p class="mt-0 text-[13px]">Stok terkecil</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#d4aec4] pt-[3px] ps-[7px] text-[20px] text-[#d4aec4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>

            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#55a4ff]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">0</p>
                <p class="mt-0 text-[13px]">Order Proses</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#aec0d4] pt-[3px] ps-[7px] text-[20px] text-[#aec0d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#55ff88]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">0</p>
                <p class="mt-0 text-[13px]">Order Finish</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#aed4c2] pt-[3px] ps-[7px] text-[20px] text-[#aed4c2] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#ff5596]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">0</p>
                <p class="mt-0 text-[13px]">Order batal</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#d4aec4] pt-[3px] ps-[7px] text-[20px] text-[#d4aec4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            <div class="mb-4 flex flex-col justify-center items-start py-[10px] px-[20px] rounded-[10px] bg-white shadow-lg border-s-[5px] border-[#1b2543]">
                <p class="text-[20px] h-[25px] font-bold mb-0 ">0</p>
                <p class="mt-0 text-[13px]">Beri Harga</p>
                <a href="#" class="absolute right-[50px] w-[30px] h-[30px] rounded-full border-[2px] border-[#aec0d4] pt-[3px] ps-[7px] text-[20px] text-[#aec0d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
            </div>
            
        </div>

        <div class="w-[550px] flex flex-col ps-[10px] pt-[40px] border-e-[1px]">
            <div class="flex flex-row justify-start items-center mb-4">
                <div class="w-[5px] h-[25px] bg-[#1b2543]"></div>
                <p class="text-[13px] font-bold ms-2">Total Pendapatan</p>
                <select class="px-[15px] py-[3px] ms-5 text-[13px] rounded-[5px] " name="" id="">
                    <option value="all">all</option>
                    <option value="year">year</option>
                    <option value="month">month</option>
                </select>
            </div>
            <div class="w-[500px] px-[30px] py-[20px] rounded-[10px] shadow-lg mb-[30px] bg-white">
                <p class=" text-[20px]">Rp.0.000.000.000.000</p>
            </div>



            {{-- GRAFIK PENDAPATAN PERBULAN --}}

            <!-- Grafik Pendapatan -->
            <div class="flex flex-row justify-start items-center mb-4">
                <div class="w-[5px] h-[25px] bg-[#1b2543]"></div>
                <p class="text-[13px] font-bold ms-2">Grafik Pendapatan</p>
                <select class="px-[15px] py-[3px] ms-5 text-[13px] rounded-[5px]" name="" id="">
                    <option value="all">all</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>

            <div class="w-[500px] h-[250px] px-[20px] py-[20px] rounded-[10px] shadow-lg mb-[30px] bg-white">
                <canvas id="revenueChart" class="w-[97%] h-[97%]"></canvas>
            </div>

            <script>
                // Data dan konfigurasi untuk Chart.js
                const ctx = document.getElementById('revenueChart').getContext('2d');
                const revenueChart = new Chart(ctx, {
                    type: 'bar', // Tipe grafik (bisa juga 'bar', 'pie', dll.)
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Pendapatan Bulanan',
                            data: [3,6,8,2,14,10,5,7,9,3,11,12], // Ganti dengan data dinamis jika ada
                            borderColor: '#2168b9',
                            backgroundColor: '#2168b9',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: '2024'
                                }
                            },
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Pendapatan perjuta'
                                }
                            }
                        }
                    }
                });
            </script>




            {{-- GRAFIK LINGKARAN --}}
            <div class="w-[300px] flex flex-row justify-start items-center mb-4">
                <div class="w-[5px] h-[25px] bg-[#1b2543]"></div>
                <p class="text-[13px] font-bold ms-2">Grafik Pie Order dan Ulasan</p>
                <select class="px-[15px] py-[3px] ms-5 text-[13px] rounded-[5px] " name="" id="">
                    <option value="all">all</option>
                    <option value="year">year</option>
                    <option value="month">month</option>
                </select>
            </div>
            <div class="w-[500px] h-[400px] px-[20px] py-[20px] flex flex-row rounded-[10px] shadow-lg mb-[30px] relative bg-white">
                <div class="ms-2">
                    <svg viewBox="0 0 36 36" class="w-[200px] h-[200px] rounded-full">
                        <!-- Lingkaran total (background) -->
                        <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#e6e6e6" stroke-width="3.2"></circle>
                        <!-- Segment lingkaran untuk setiap kategori -->
                        <circle class="sablon" cx="18" cy="18" r="15.915" fill="transparent" stroke="#ff5596" stroke-width="3.2" stroke-dasharray="45 55" stroke-dashoffset="0"></circle>
                        <circle class="kaos" cx="18" cy="18" r="15.915" fill="transparent" stroke="#31bdfd" stroke-width="3.2" stroke-dasharray="13 87" stroke-dashoffset="-45"></circle>
                        <circle class="produk" cx="18" cy="18" r="15.915" fill="transparent" stroke="#2168b9" stroke-width="3.2" stroke-dasharray="37 63" stroke-dashoffset="-58"></circle>
                        <circle class="design" cx="18" cy="18" r="15.915" fill="transparent" stroke="#ffc341" stroke-width="3.2" stroke-dasharray="5 95" stroke-dashoffset="-95"></circle>
                    </svg>
                    <div class="w-[100%] mt-9">
                        <div class="flex flex-row justify-start items-center">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#ff5596]"></div>
                            <p class="text-[13px] ms-2">Sablon</p>
                            <p class="text-[13px] font-bold ms-2">45%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#31bdfd]"></div>
                            <p class="text-[13px] ms-2">Kaos</p>
                            <p class="text-[13px] font-bold ms-2">13%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#2168b9]"></div>
                            <p class="text-[13px] ms-2">Produk</p>
                            <p class="text-[13px] font-bold ms-2">37%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#ffc341]"></div>
                            <p class="text-[13px] ms-2">Design</p>
                            <p class="text-[13px] font-bold ms-2">5%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                    </div>
                </div>
                <div class="ms-[50px]">
                    <svg viewBox="0 0 36 36" class="w-[200px] h-[200px] rounded-full">
                        <!-- Lingkaran total (background) -->
                        <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#e6e6e6" stroke-width="3.2"></circle>
                        <!-- Segment lingkaran untuk setiap kategori -->
                        <circle class="sablon" cx="18" cy="18" r="15.915" fill="transparent" stroke="#55ffbe" stroke-width="3.2" stroke-dasharray="80 20" stroke-dashoffset="0"></circle>
                        <circle class="kaos" cx="18" cy="18" r="15.915" fill="transparent" stroke="#e9fd31" stroke-width="3.2" stroke-dasharray="10 90" stroke-dashoffset="-80"></circle>
                        <circle class="produk" cx="18" cy="18" r="15.915" fill="transparent" stroke="#f77a32" stroke-width="3.2" stroke-dasharray="7 93" stroke-dashoffset="-90"></circle>
                        <circle class="design" cx="18" cy="18" r="15.915" fill="transparent" stroke="#fd305c" stroke-width="3.2" stroke-dasharray="3 97" stroke-dashoffset="-97"></circle>
                    </svg>
                    <div class="w-[100%] mt-9">
                        <div class="flex flex-row justify-start items-center">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#55ffbe]"></div>
                            <p class="text-[13px] ms-2">Senang</p>
                            <p class="text-[13px] font-bold ms-2">80%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#e9fd31]"></div>
                            <p class="text-[13px] ms-2">Sedang</p>
                            <p class="text-[13px] font-bold ms-2">10%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#f77a32]"></div>
                            <p class="text-[13px] ms-2">Kesal</p>
                            <p class="text-[13px] font-bold ms-2">7%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                        <div class="flex flex-row justify-start items-center mt-1">
                            <div class="w-[15px] h-[15px] rounded-full bg-[#fd305c]"></div>
                            <p class="text-[13px] ms-2">Marah</p>
                            <p class="text-[13px] font-bold ms-2">3%</p>
                            <p class="text-[13px] ms-4">| total : 0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="flex flex-col ps-[40px] pt-[40px]">
            <div class="w-[300px] flex flex-row justify-start items-center mb-4">
                <div class="w-[5px] h-[25px] bg-[#1b2543]"></div>
                <p class="text-[13px] font-bold ms-2">Pesanan Baru</p>
            </div>
            <div class="w-[200px] p-[20px] rounded-[10px] bg-white shadow-lg">
                <div class="w-[100%] mt-2">
                    <div class="flex flex-row justify-start items-center">
                        <div class="w-[15px] h-[15px] rounded-[2px] bg-[#ff5596]"></div>
                        <p class="text-[13px] ms-2">Sablon</p>
                        <p class="text-[13px] font-bold ms-2">2</p>
                        <a href="#" class=" ms-3 text-[20px] text-[#d4aec4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
                        <div class="w-[10px] h-[10px] rounded-full bg-[#ff5596] ms-8"></div>
                    </div>
                    <div class="flex flex-row justify-start items-center mt-1">
                        <div class="w-[15px] h-[15px] rounded-[2px] bg-[#31bdfd]"></div>
                        <p class="text-[13px] ms-2">Kaos</p>
                        <p class="text-[13px] font-bold ms-2">0</p>
                        <a href="#" class=" ms-3 text-[20px] text-[#aec9d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
                    </div>
                    <div class="flex flex-row justify-start items-center mt-1">
                        <div class="w-[15px] h-[15px] rounded-[2px] bg-[#2168b9]"></div>
                        <p class="text-[13px] ms-2">Produk</p>
                        <p class="text-[13px] font-bold ms-2">0</p>
                        <a href="#" class=" ms-3 text-[20px] text-[#aeb1d4] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
                    </div>
                    <div class="flex flex-row justify-start items-center mt-1">
                        <div class="w-[15px] h-[15px] rounded-[2px] bg-[#ffc341]"></div>
                        <p class="text-[13px] ms-2">Design</p>
                        <p class="text-[13px] font-bold ms-2">0</p>
                        <a href="#" class=" ms-3 text-[20px] text-[#d4caae] fa-solid fa-caret-right hover:border-[#1e1442] hover:text-[#1e1442]"></a>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</x-admin>