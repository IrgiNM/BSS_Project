<x-app-layout>
    @include('layouts.navbar')
    <div id="blok" class="hidden fixed palingdepan w-full h-full bg-[#2168b9] opacity-60"></div>

    <div class="w-[80%] h-[200px] pt-[100px] flex flex-col m-auto">
        <div class="relative w-full h-auto flex items-center">
            <p class="w-[30px] h-[30px] me-3 fa-solid fa-paint-roller text-white text-[13px] rounded-full bg-[#ff4684] flex justify-center items-center"></p>
            <p class="text-[20px] lilita-one-regular font-bold">Sablon Page</p>
        </div>
        <p class="text-[13px] text-justify mt-5">Selamat datang di BUMMI Sablon Studio, tempat terbaik untuk memenuhi semua kebutuhan sablon Anda! Kami bangga menawarkan dua jenis layanan sablon yang dapat disesuaikan dengan kebutuhan dan preferensi Anda. Mari wujudkan kreativitas Anda bersama BUMMI Sablon Studio! Kunjungi toko kami atau hubungi kami untuk konsultasi lebih lanjut. Kami siap membantu Anda menciptakan produk sablon yang luar biasa! <b>Pilih metode sablon dibawah ini !!!</b></p>
    </div>

    <div class="w-[100%] flex flex-row justify-center mt-[50px]">
        <a id="aimg" href="#" class="group relative opacity-30 hover:opacity-100 transition-all duration-300 w-[40%] h-[270px] rounded-[10px] me-8 border-[3px] flex flex-col items-center border-[#9e2065] pt-[20px]">
            <div class="w-full h-auto flex flex-row items-center">
                <img id="imgs" src="{{ asset('images/SABLONPICON.png') }}" alt="" class="w-[150px] h-[150px] mx-[50px]">
                <div class="w-[70%] h-full flex flex-col">
                    <p class="text-[15px] lilita-one-regular font-bold">Sablon Printing</p>
                    <p class="text-[13px] mt-1 me-[50px] text-justify">Dengan teknologi canggih dan tinta berkualitas tinggi, sablon printing kami menjamin hasil yang tajam dan tahan lama. Cocok untuk desain yang kompleks dengan berbagai warna. Pilihan sempurna untuk keperluan promosi, seragam, dan merchandise.</p>
                </div>
            </div>
            <div class="w-full h-[30px] group-hover:h-[40px] transition-all duration-300 absolute bottom-0 flex justify-center items-center bg-[#9e2065] rounded-b-[6px]">
                <p class="text-[13px] me-5 text-white">Pilih</p>
                <i class="fa-solid fa-arrow-right-long text-white text-[15px]"></i>
            </div>
        </a>

        <a id="aimg2" href="#" class="group relative opacity-30 hover:opacity-100 transition-all duration-300 w-[40%] h-[270px] rounded-[10px] me-8 border-[3px] flex flex-col items-center border-[#9e2065] pt-[20px]">
            <div class="w-full h-auto flex flex-row items-center">
                <img id="imgs2" src="{{ asset('images/SABLONICON.png') }}" alt="" class="w-[150px] h-[150px] mx-[50px]">
                <div class="w-[70%] h-full flex flex-col">
                    <p class="text-[15px] lilita-one-regular font-bold">Sablon Manual</p>
                    <p class="text-[13px] mt-1 me-[50px] text-justify">Bagi Anda yang menghargai sentuhan tangan dan keunikan setiap cetakan, sablon manual adalah pilihan terbaik. Proses ini dilakukan dengan teliti oleh tim ahli kami, menghasilkan produk dengan sentuhan personal yang tak tertandingi. Ideal untuk desain custom dengan jumlah terbatas.</p>
                </div>
            </div>
            <div class="w-full h-[30px] group-hover:h-[40px] transition-all duration-300 absolute bottom-0 flex justify-center items-center bg-[#9e2065] rounded-b-[6px]">
                <p class="text-[13px] me-5 text-white">Pilih</p>
                <i class="fa-solid fa-arrow-right-long text-white text-[15px]"></i>
            </div>
        </a>
    </div>


    <div class="w-full h-auto mt-[50px] flex flex-col items-center">
        <div id="manual" class="hidden w-full h-auto mt-[50px] flex-col items-center">
            @include('components.sablon_manual')
        </div>
        <div id="printing" class="hidden w-full h-auto mt-[50px]  flex-col items-center">
            @include('components.sablon_printing')
        </div>
    </div>

    


    <x-footer></x-footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('gambarkaos').addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
            document.getElementById('fileName').textContent = fileName;
        });
        document.getElementById('gambarkaos2').addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : 'Tidak ada file yang dipilih';
            document.getElementById('fileName2').textContent = fileName;
        });
    </script>
        <script>

            // TOMBOL KIRIM DATA
            // document.addEventListener('DOMContentLoaded', function() {
            //     var yakin = document.querySelectorAll('#yakin');
            //     var close = document.querySelectorAll('#close');
            //     var blok = document.querySelectorAll('#blok');
            //     var kirimdata = document.querySelectorAll('#kirimdata');

            //     var divjk = document.querySelectorAll('#divjk');
            //     var divwk = document.querySelectorAll('#divwk');
            //     var divposisi = document.querySelectorAll('#divposisi');
            //     var divmetode = document.querySelectorAll('#divmetode');

            //     var jeniskaos = document.querySelectorAll('#jeniskaos');
            //     var warnakaos = document.querySelectorAll('#warnakaos');
            //     var posisikaos = document.querySelectorAll('#posisikaos');
            //     var metodekaos = document.querySelectorAll('#metodekaos');

            //     var konten = document.querySelectorAll('#konten');

            //     kirimdata.addEventListener('click', function() {
            //         blok.classList.toggle('hidden');
            //         blok.classList.toggle('flex');
            //         yakin.classList.toggle('hidden');
            //         yakin.classList.toggle('flex');

            //         if (divmetode.classList.contains('manual')) {
            //             metodekaos.value = 'manual';
            //         } else if (divmetode.classList.contains('printing')) {
            //             metodekaos.value = 'printing';
            //         }
            //         console.log('metode :' + metodekaos.value);

            //         if (divjk.classList.contains('jkpendekd')) {
            //             jeniskaos.value = 'lengan pendek depan';
            //         } else if (divjk.classList.contains('jkpendekb')) {
            //             jeniskaos.value = 'lengan pendek belakang';
            //         } else if (divjk.classList.contains('jkpanjangd')) {
            //             jeniskaos.value = 'lengan panjang depan';
            //         } else if (divjk.classList.contains('jkpanjangb')) {
            //             jeniskaos.value = 'lengan panjang belakang';
            //         }
            //         console.log('jenis :' + jeniskaos.value);

            //         if (divwk.classList.contains('wkwhite')) {
            //             warnakaos.value = 'kaos putih';
            //         } else if (divwk.classList.contains('wkblack')) {
            //             warnakaos.value = 'kaos hitam';
            //         } else if (divwk.classList.contains('wkred')) {
            //             warnakaos.value = 'kaos merah';
            //         } else if (divwk.classList.contains('wkpurple')) {
            //             warnakaos.value = 'kaos ungu';
            //         }
            //         console.log('warna :' + warnakaos.value);

            //         if (divposisi.classList.contains('jkpendekd')) {
            //             posisikaos.value = 'lengan pendek depan';
            //         } else if (divposisi.classList.contains('jkpendekb')) {
            //             posisikaos.value = 'lengan pendek belakang';
            //         } else if (divposisi.classList.contains('jkpanjangd')) {
            //             posisikaos.value = 'lengan panjang depan';
            //         } else if (divposisi.classList.contains('jkpanjangb')) {
            //             posisikaos.value = 'lengan panjang belakang';
            //         }
            //         console.log('posisi :' + posisikaos.value);

            //         html2canvas(konten).then(function(canvas) {
            //             // Mengonversi kanvas menjadi Blob
            //             canvas.toBlob(function(blob) {
            //                 // Membuat objek File baru dari Blob
            //                 var file = new File([blob], 'content.jpg', { type: 'image/jpeg' });

            //                 // Membuat objek DataTransfer dan menambahkan File ke dalamnya
            //                 var dataTransfer = new DataTransfer();
            //                 dataTransfer.items.add(file);

            //                 // Mengatur properti files dari elemen input
            //                 var input = document.getElementById('gambarjadi');
            //                 input.files = dataTransfer.files;

            //                 // Mengunduh gambar sebagai file JPG
            //                 var imgData = canvas.toDataURL('image/jpeg');
            //                 var link = document.createElement('a');
            //                 link.href = imgData;
            //                 link.download = 'content.jpg';
            //                 document.body.appendChild(link);
            //                 link.click();
            //                 document.body.removeChild(link);
            //             }, 'image/jpeg');
            //         });

            //     });

            //     close.addEventListener('click', function() {
            //         blok.classList.toggle('hidden');
            //         blok.classList.toggle('flex');
            //         yakin.classList.toggle('hidden');
            //         yakin.classList.toggle('flex');
            //     });
            // });
             $(document).ready(function() {
                var $yakin = $('#yakin');
                var $close = $('#close');
                var $blok = $('#blok');
                var $kirimdata = $('#kirimdata');

                var $divjk = $('#divjk');
                var $divwk = $('#divwk');
                var $divposisi = $('#divposisi');
                var $divmetode = $('#divmetode');

                var $jeniskaos = $('#jeniskaos');
                var $warnakaos = $('#warnakaos');
                var $posisikaos = $('#posisikaos');
                var $metodekaos = $('#metodekaos');

                var $konten = $('#konten');

                $kirimdata.on('click', function() {
                    $blok.toggleClass('hidden flex');
                    $yakin.toggleClass('hidden flex');

                    if($divmetode.hasClass('manual')){
                        $metodekaos.val('manual');
                    }
                    else if($divmetode.hasClass('printing')){
                        $metodekaos.val('printing');
                    }
                    console.log('metode :'+$metodekaos.val());

                    if($divjk.hasClass('jkpendekd')){
                        $jeniskaos.val('lengan pendek depan');
                    }
                    else if($divjk.hasClass('jkpendekb')){
                        $jeniskaos.val('lengan pendek belakang');
                    }
                    else if($divjk.hasClass('jkpanjangd')){
                        $jeniskaos.val('lengan panjang depan');
                    }
                    else if($divjk.hasClass('jkpanjangb')){
                        $jeniskaos.val('lengan panjang belakang');
                    }
                    console.log('jenis :'+$jeniskaos.val());

                    if($divwk.hasClass('wkwhite')){
                        $warnakaos.val('kaos putih');
                    }
                    else if($divwk.hasClass('wkblack')){
                        $warnakaos.val('kaos hitam');
                    }
                    else if($divwk.hasClass('wkred')){
                        $warnakaos.val('kaos merah');
                    }
                    else if($divwk.hasClass('wkpurple')){
                        $warnakaos.val('kaos ungu');
                    }
                    console.log('warna :'+$warnakaos.val());

                    if($divposisi.hasClass('posisi1')){
                        $posisikaos.val('posisi 1');
                    }
                    else if($divposisi.hasClass('posisi2')){
                        $posisikaos.val('posisi 2');
                    }
                    else if($divposisi.hasClass('posisi3')){
                        $posisikaos.val('posisi 3');
                    }
                    else if($divposisi.hasClass('posisi4')){
                        $posisikaos.val('posisi 4');
                    }
                    else if($divposisi.hasClass('posisi5')){
                        $posisikaos.val('posisi 5');
                    }
                    console.log('posisi :'+$posisikaos.val());

                    html2canvas($konten[0]).then(function(canvas) {
                        
                    });

                    html2canvas($konten[0]).then(function(canvas) {
                        // Mengonversi kanvas menjadi Blob
                        canvas.toBlob(function(blob) {
                            // Membuat objek File baru dari Blob
                            var file = new File([blob], 'content.jpg', { type: 'image/jpeg' });

                            // Membuat objek DataTransfer dan menambahkan File ke dalamnya
                            var dataTransfer = new DataTransfer();
                            dataTransfer.items.add(file);

                            // Mengatur properti files dari elemen input
                            var input = document.getElementById('gambarjadi');
                            input.files = dataTransfer.files;

                            // Mengunduh gambar sebagai file JPG
                            var imgData = canvas.toDataURL('image/jpeg');
                            var link = document.createElement('a');
                            link.href = imgData;
                            link.download = 'content.jpg';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        }, 'image/jpeg');
                    });

                });

                $close.on('click', function() {
                    $blok.toggleClass('hidden flex');
                    $yakin.toggleClass('hidden flex');
                });
            });
            $(document).ready(function() {
                var $yakin2 = $('#yakin2');
                var $close2 = $('#close2');
                var $blok2 = $('#blok');
                var $kirimdata2 = $('#kirimdata2');

                var $divjk2 = $('#divjk2');
                var $divwk2 = $('#divwk2');
                var $divposisi2 = $('#divposisi2');
                var $divmetode2 = $('#divmetode2');

                var $jeniskaos2 = $('#jeniskaos2');
                var $warnakaos2 = $('#warnakaos2');
                var $posisikaos2 = $('#posisikaos2');
                var $metodekaos2 = $('#metodekaos2');

                var $konten2 = $('#konten2');

                $kirimdata2.on('click', function() {
                    $blok2.toggleClass('hidden flex');
                    $yakin2.toggleClass('hidden flex');

                    if($divmetode2.hasClass('manual')){
                        $metodekaos2.val('manual');
                    }
                    else if($divmetode2.hasClass('printing')){
                        $metodekaos2.val('printing');
                    }
                    console.log('metode :' + $metodekaos2.val());

                    if($divjk2.hasClass('jkpendekd')){
                        $jeniskaos2.val('lengan pendek depan');
                    }
                    else if($divjk2.hasClass('jkpendekb')){
                        $jeniskaos2.val('lengan pendek belakang');
                    }
                    else if($divjk2.hasClass('jkpanjangd')){
                        $jeniskaos2.val('lengan panjang depan');
                    }
                    else if($divjk2.hasClass('jkpanjangb')){
                        $jeniskaos2.val('lengan panjang belakang');
                    }
                    console.log('jenis :' + $jeniskaos2.val());

                    if($divwk2.hasClass('wkwhite')){
                        $warnakaos2.val('kaos putih');
                    }
                    else if($divwk2.hasClass('wkblack')){
                        $warnakaos2.val('kaos hitam');
                    }
                    else if($divwk2.hasClass('wkred')){
                        $warnakaos2.val('kaos merah');
                    }
                    else if($divwk2.hasClass('wkpurple')){
                        $warnakaos2.val('kaos ungu');
                    }
                    console.log('warna :' + $warnakaos2.val());

                    if($divposisi2.hasClass('posisi1')){
                        $posisikaos2.val('posisi 1');
                    }
                    else if($divposisi2.hasClass('posisi2')){
                        $posisikaos2.val('posisi 2');
                    }
                    else if($divposisi2.hasClass('posisi3')){
                        $posisikaos2.val('posisi 3');
                    }
                    else if($divposisi2.hasClass('posisi4')){
                        $posisikaos2.val('posisi 4');
                    }
                    else if($divposisi2.hasClass('posisi5')){
                        $posisikaos2.val('posisi 5');
                    }
                    console.log('posisi :' + $posisikaos2.val());

                    html2canvas($konten2[0]).then(function(canvas) {
                        // Optional: you can do something with the canvas here
                    });

                    html2canvas($konten2[0]).then(function(canvas) {
                        // Mengonversi kanvas menjadi Blob
                        canvas.toBlob(function(blob) {
                            // Membuat objek File baru dari Blob
                            var file = new File([blob], 'content.jpg', { type: 'image/jpeg' });

                            // Membuat objek DataTransfer dan menambahkan File ke dalamnya
                            var dataTransfer = new DataTransfer();
                            dataTransfer.items.add(file);

                            // Mengatur properti files dari elemen input
                            var input = document.getElementById('gambarjadi2');
                            input.files = dataTransfer.files;

                            // Mengunduh gambar sebagai file JPG
                            var imgData = canvas.toDataURL('image/jpeg');
                            var link = document.createElement('a');
                            link.href = imgData;
                            link.download = 'content.jpg';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        }, 'image/jpeg');
                    });

                });

                $close2.on('click', function() {
                    $blok2.toggleClass('hidden flex');
                    $yakin2.toggleClass('hidden flex');
                });
            });


            // TOMBOL EDIT & DATA
            // document.addEventListener('DOMContentLoaded', function() {
            //     var edit = document.querySelector('#edit');
            //     var data = document.querySelector('#data');
            //     var divedit = document.querySelector('#divedit');
            //     var divdata = document.querySelector('#divdata');

            //     edit.addEventListener('click', function() {
            //         edit.classList.toggle('opacity-100');
            //         edit.classList.toggle('opacity-30');
            //         if (data.classList.contains('opacity-100')) {
            //             data.classList.toggle('opacity-100');
            //             data.classList.toggle('opacity-30');
            //         }
            //         if (divdata.classList.contains('w-auto')) {
            //             divdata.classList.toggle('w-auto');
            //             divdata.classList.toggle('w-[150px]');
            //         }
            //         divedit.classList.toggle('w-auto');
            //         divedit.classList.toggle('w-[150px]');
            //     });

            //     data.addEventListener('click', function() {
            //         data.classList.toggle('opacity-100');
            //         data.classList.toggle('opacity-30');
            //         if (edit.classList.contains('opacity-100')) {
            //             edit.classList.toggle('opacity-100');
            //             edit.classList.toggle('opacity-30');
            //         }
            //         if (divedit.classList.contains('w-auto')) {
            //             divedit.classList.toggle('w-auto');
            //             divedit.classList.toggle('w-[150px]');
            //         }
            //         divdata.classList.toggle('w-auto');
            //         divdata.classList.toggle('w-[150px]');
            //     });
            // });
            $(document).ready(function() {
                var $edit = $('#edit');
                var $data = $('#data');
                var $divedit = $('#divedit');
                var $divdata = $('#divdata');

                $edit.on('click', function() {
                    $edit.toggleClass('opacity-100 opacity-30');
                    if ($data.hasClass('opacity-100')) {
                        $data.toggleClass('opacity-100 opacity-30');
                    }
                    if($divdata.hasClass('w-auto')){
                        $divdata.toggleClass('w-auto w-[150px]');
                    }
                    $divedit.toggleClass('w-auto w-[150px]');
                });

                $data.on('click', function() {
                    $data.toggleClass('opacity-100 opacity-30');
                    if ($edit.hasClass('opacity-100')) {
                        $edit.toggleClass('opacity-100 opacity-30');
                    }
                    if($divedit.hasClass('w-auto')){
                        $divedit.toggleClass('w-auto w-[150px]');
                    }
                    $divdata.toggleClass('w-auto w-[150px]');
                });
            });
            $(document).ready(function() {
                var $edit2 = $('#edit2');
                var $data2 = $('#data2');
                var $divedit2 = $('#divedit2');
                var $divdata2 = $('#divdata2');

                $edit2.on('click', function() {
                    $edit2.toggleClass('opacity-100 opacity-30');
                    if ($data2.hasClass('opacity-100')) {
                        $data2.toggleClass('opacity-100 opacity-30');
                    }
                    if($divdata2.hasClass('w-auto')){
                        $divdata2.toggleClass('w-auto w-[150px]');
                    }
                    $divedit2.toggleClass('w-auto w-[150px]');
                });

                $data2.on('click', function() {
                    $data2.toggleClass('opacity-100 opacity-30');
                    if ($edit2.hasClass('opacity-100')) {
                        $edit2.toggleClass('opacity-100 opacity-30');
                    }
                    if($divedit2.hasClass('w-auto')){
                        $divedit2.toggleClass('w-auto w-[150px]');
                    }
                    $divdata2.toggleClass('w-auto w-[150px]');
                });
            });


            // GAMBAR PRINTING & MANUAL
            // document.addEventListener('DOMContentLoaded', function() {
            //     var aimg = document.querySelector('#aimg');
            //     var imgs = document.querySelector('#imgs');
            //     var aimg2 = document.querySelector('#aimg2');
            //     var imgs2 = document.querySelector('#imgs2');
            //     var manual = document.querySelector('#manual');
            //     var printing = document.querySelector('#printing');
            //     var divmetode = document.querySelector('#divmetode');

            //     aimg.addEventListener('mouseenter', function() {
            //         imgs.classList.toggle('fa-bounce');
            //     });

            //     aimg.addEventListener('mouseleave', function() {
            //         imgs.classList.toggle('fa-bounce');
            //     });

            //     aimg2.addEventListener('mouseenter', function() {
            //         imgs2.classList.toggle('fa-bounce');
            //     });

            //     aimg2.addEventListener('mouseleave', function() {
            //         imgs2.classList.toggle('fa-bounce');
            //     });

            //     aimg.addEventListener('click', function() {
            //         aimg.classList.toggle('opacity-100');
            //         aimg.classList.toggle('opacity-30');
            //         if (aimg2.classList.contains('opacity-100')) {
            //             aimg2.classList.toggle('opacity-100');
            //             aimg2.classList.toggle('opacity-30');
            //         }
            //         printing.classList.toggle('hidden');
            //         printing.classList.toggle('flex');
            //         if (manual.classList.contains('flex')) {
            //             manual.classList.toggle('hidden');
            //             manual.classList.toggle('flex');
            //         }
            //         divmetode.classList.remove('manual');
            //         divmetode.classList.add('printing');
            //     });

            //     aimg2.addEventListener('click', function() {
            //         aimg2.classList.toggle('opacity-100');
            //         aimg2.classList.toggle('opacity-30');
            //         if (aimg.classList.contains('opacity-100')) {
            //             aimg.classList.toggle('opacity-100');
            //             aimg.classList.toggle('opacity-30');
            //         }
            //         manual.classList.toggle('hidden');
            //         manual.classList.toggle('flex');
            //         if (printing.classList.contains('flex')) {
            //             printing.classList.toggle('hidden');
            //             printing.classList.toggle('flex');
            //         }
            //         divmetode.classList.remove('printing');
            //         divmetode.classList.add('manual');
            //     });
            // });
            $(document).ready(function() {
                var $aimg = $('#aimg');
                var $imgs = $('#imgs');
                var $aimg2 = $('#aimg2');
                var $imgs2 = $('#imgs2');
                var $manual = $('#manual');
                var $printing = $('#printing');
                var $divmetode = $('#divmetode');

            
                $aimg.hover(function() {
                    $imgs.toggleClass('fa-bounce');
                });

                $aimg2.hover(function() {
                    $imgs2.toggleClass('fa-bounce');
                });

                $aimg.on('click', function() {
                    $aimg.toggleClass('opacity-100 opacity-30');
                    if ($aimg2.hasClass('opacity-100')) {
                        $aimg2.toggleClass('opacity-100 opacity-30');
                    }
                    $printing.toggleClass('hidden flex');
                    if ($manual.hasClass('flex')) {
                        $manual.toggleClass('hidden flex');
                    }
                    $divmetode.removeClass('manual');
                    $divmetode.addClass('printing');
                });

                $aimg2.on('click', function() {
                    $aimg2.toggleClass('opacity-100 opacity-30');
                    if ($aimg.hasClass('opacity-100')) {
                        $aimg.toggleClass('opacity-100 opacity-30');
                    }
                    $manual.toggleClass('hidden flex');
                    if ($printing.hasClass('flex')) {
                        $printing.toggleClass('hidden flex');
                    }
                    $divmetode.removeClass('printing');
                    $divmetode.addClass('manual');
                });
            });
            


            // UPLOAD GAMBAR
            // document.addEventListener('DOMContentLoaded', function() {
            //     var gambarkaos = document.querySelector('#gambarkaos');
            //     var imgsablon = document.querySelector('#imgsablon');

            //     gambarkaos.addEventListener('change', function(event) {
            //         // Hapus gambar preview sebelumnya
            //         imgsablon.innerHTML = '';

            //         // Ambil file gambar yang dipilih
            //         var file = event.target.files[0];

            //         // Pastikan file adalah gambar
            //         if (file && file.type.startsWith('image/')) {
            //             var reader = new FileReader();

            //             // Ketika file sudah dibaca, tampilkan gambarnya
            //             reader.onload = function(e) {
            //                 var img = document.createElement('img');
            //                 img.src = e.target.result;
            //                 img.alt = 'Image Preview';
            //                 img.classList.add('w-full');

            //                 // Tambahkan gambar ke dalam div #imgsablon
            //                 imgsablon.appendChild(img);
            //             };

            //             // Membaca file sebagai URL data
            //             reader.readAsDataURL(file);
            //         } else {
            //             imgsablon.innerHTML = '<p>File yang dipilih bukan gambar.</p>';
            //         }
            //     });
            // });
            $(document).ready(function() {
                $('#gambarkaos').on('change', function(event) {
                    // Hapus gambar preview sebelumnya
                    $('#imgsablon').empty();

                    // Ambil file gambar yang dipilih
                    var file = event.target.files[0];

                    // Pastikan file adalah gambar
                    if (file && file.type.startsWith('image/')) {
                        var reader = new FileReader();
                        
                        // Ketika file sudah dibaca, tampilkan gambarnya
                        reader.onload = function(e) {
                            var img = $('<img>', {
                                src: e.target.result,
                                alt: 'Image Preview',
                                class: 'w-full'
                            });

                            // Tambahkan gambar ke dalam div #imgsablon
                            $('#imgsablon').append(img);
                        };

                        // Membaca file sebagai URL data
                        reader.readAsDataURL(file);
                    } else {
                        $('#imgsablon').append('<p>File yang dipilih bukan gambar.</p>');
                    }
                });
            });
            $(document).ready(function() {
                $('#gambarkaos2').on('change', function(event) {
                    // Hapus gambar preview sebelumnya
                    $('#imgsablon2').empty();

                    // Ambil file gambar yang dipilih
                    var file = event.target.files[0];

                    // Pastikan file adalah gambar
                    if (file && file.type.startsWith('image/')) {
                        var reader = new FileReader();

                        // Ketika file sudah dibaca, tampilkan gambarnya
                        reader.onload = function(e) {
                            var img = $('<img>', {
                                src: e.target.result,
                                alt: 'Image Preview',
                                class: 'w-full'
                            });

                            // Tambahkan gambar ke dalam div #imgsablon2
                            $('#imgsablon2').append(img);
                        };

                        // Membaca file sebagai URL data
                        reader.readAsDataURL(file);
                    } else {
                        $('#imgsablon2').append('<p>File yang dipilih bukan gambar.</p>');
                    }
                });
            });


            // NARBAR EDIT
            // document.addEventListener('DOMContentLoaded', function() {
            //     var editjenis = document.querySelector('#editjenis');
            //     var editwarna = document.querySelector('#editwarna');
            //     var editgambar = document.querySelector('#editgambar');
            //     var editposisi = document.querySelector('#editposisi');
            //     var divwk = document.querySelector('#divwk');
            //     var divjk = document.querySelector('#divjk');
            //     var divimg = document.querySelector('#divimg');
            //     var divposisi = document.querySelector('#divposisi');

            //     function toggleClass(element, class1, class2) {
            //         if (element.classList.contains(class1)) {
            //             element.classList.remove(class1);
            //             element.classList.add(class2);
            //         } else if (element.classList.contains(class2)) {
            //             element.classList.remove(class2);
            //             element.classList.add(class1);
            //         }
            //     }

            //     function handleClick(selectedEdit, otherEdits, selectedDiv, otherDivs) {
            //         selectedEdit.addEventListener('click', function() {
            //             otherEdits.forEach(function(edit) {
            //                 if (edit.classList.contains('text-[#2168b9]')) {
            //                     toggleClass(edit, 'text-[#2168b9]', 'text-blue-200');
            //                 }
            //             });
            //             toggleClass(selectedEdit, 'text-[#2168b9]', 'text-blue-200');

            //             otherDivs.forEach(function(div) {
            //                 if (div.classList.contains('flex')) {
            //                     toggleClass(div, 'flex', 'hidden');
            //                 }
            //             });
            //             toggleClass(selectedDiv, 'flex', 'hidden');
            //         });
            //     }

            //     handleClick(editjenis, [editwarna, editgambar, editposisi], divjk, [divwk, divimg, divposisi]);
            //     handleClick(editwarna, [editjenis, editgambar, editposisi], divwk, [divjk, divimg, divposisi]);
            //     handleClick(editgambar, [editjenis, editwarna, editposisi], divimg, [divjk, divwk, divposisi]);
            //     handleClick(editposisi, [editjenis, editwarna, editgambar], divposisi, [divjk, divwk, divimg]);
            // });
            $(document).ready(function() {
                var $editjenis = $('#editjenis');
                var $editwarna = $('#editwarna');
                var $editgambar = $('#editgambar');
                var $editposisi = $('#editposisi');
                var $divwk = $('#divwk');
                var $divjk = $('#divjk');
                var $divimg = $('#divimg');
                var $divposisi = $('#divposisi');

                $editjenis.on('click', function(){
                    if ($editwarna.hasClass('text-[#2168b9]')) {
                        $editwarna.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar.hasClass('text-[#2168b9]')) {
                        $editgambar.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi.hasClass('text-[#2168b9]')) {
                        $editposisi.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editjenis.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divwk.hasClass('flex')) {
                        $divwk.toggleClass('flex hidden');
                    }
                    else if($divimg.hasClass('flex')) {
                        $divimg.toggleClass('flex hidden');
                    }
                    else if($divposisi.hasClass('flex')) {
                        $divposisi.toggleClass('flex hidden');
                    }
                    $divjk.toggleClass('flex hidden');
                });
                $editwarna.on('click', function(){
                    if ($editjenis.hasClass('text-[#2168b9]')) {
                        $editjenis.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar.hasClass('text-[#2168b9]')) {
                        $editgambar.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi.hasClass('text-[#2168b9]')) {
                        $editposisi.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editwarna.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk.hasClass('flex')) {
                        $divjk.toggleClass('flex hidden');
                    }
                    else if($divimg.hasClass('flex')) {
                        $divimg.toggleClass('flex hidden');
                    }
                    else if($divposisi.hasClass('flex')) {
                        $divposisi.toggleClass('flex hidden');
                    }
                    $divwk.toggleClass('flex hidden');
                });
                $editgambar.on('click', function(){
                    if ($editjenis.hasClass('text-[#2168b9]')) {
                        $editjenis.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editwarna.hasClass('text-[#2168b9]')) {
                        $editwarna.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi.hasClass('text-[#2168b9]')) {
                        $editposisi.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editgambar.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk.hasClass('flex')) {
                        $divjk.toggleClass('flex hidden');
                    }
                    else if($divwk.hasClass('flex')) {
                        $divwk.toggleClass('flex hidden');
                    }
                    else if($divposisi.hasClass('flex')) {
                        $divposisi.toggleClass('flex hidden');
                    }
                    $divimg.toggleClass('flex hidden');
                });
                $editposisi.on('click', function(){
                    if ($editjenis.hasClass('text-[#2168b9]')) {
                        $editjenis.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editwarna.hasClass('text-[#2168b9]')) {
                        $editwarna.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar.hasClass('text-[#2168b9]')) {
                        $editgambar.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editposisi.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk.hasClass('flex')) {
                        $divjk.toggleClass('flex hidden');
                    }
                    else if($divwk.hasClass('flex')) {
                        $divwk.toggleClass('flex hidden');
                    }
                    else if($divimg.hasClass('flex')) {
                        $divimg.toggleClass('flex hidden');
                    }
                    $divposisi.toggleClass('flex hidden');
                });
            });
            $(document).ready(function() {
                var $editjenis2 = $('#editjenis2');
                var $editwarna2 = $('#editwarna2');
                var $editgambar2 = $('#editgambar2');
                var $editposisi2 = $('#editposisi2');
                var $divwk2 = $('#divwk2');
                var $divjk2 = $('#divjk2');
                var $divimg2 = $('#divimg2');
                var $divposisi2 = $('#divposisi2');

                $editjenis2.on('click', function(){
                    if ($editwarna2.hasClass('text-[#2168b9]')) {
                        $editwarna2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar2.hasClass('text-[#2168b9]')) {
                        $editgambar2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi2.hasClass('text-[#2168b9]')) {
                        $editposisi2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editjenis2.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divwk2.hasClass('flex')) {
                        $divwk2.toggleClass('flex hidden');
                    }
                    else if($divimg2.hasClass('flex')) {
                        $divimg2.toggleClass('flex hidden');
                    }
                    else if($divposisi2.hasClass('flex')) {
                        $divposisi2.toggleClass('flex hidden');
                    }
                    $divjk2.toggleClass('flex hidden');
                });
                $editwarna2.on('click', function(){
                    if ($editjenis2.hasClass('text-[#2168b9]')) {
                        $editjenis2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar2.hasClass('text-[#2168b9]')) {
                        $editgambar2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi2.hasClass('text-[#2168b9]')) {
                        $editposisi2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editwarna2.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk2.hasClass('flex')) {
                        $divjk2.toggleClass('flex hidden');
                    }
                    else if($divimg2.hasClass('flex')) {
                        $divimg2.toggleClass('flex hidden');
                    }
                    else if($divposisi2.hasClass('flex')) {
                        $divposisi2.toggleClass('flex hidden');
                    }
                    $divwk2.toggleClass('flex hidden');
                });
                $editgambar2.on('click', function(){
                    if ($editjenis2.hasClass('text-[#2168b9]')) {
                        $editjenis2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editwarna2.hasClass('text-[#2168b9]')) {
                        $editwarna2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editposisi2.hasClass('text-[#2168b9]')) {
                        $editposisi2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editgambar2.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk2.hasClass('flex')) {
                        $divjk2.toggleClass('flex hidden');
                    }
                    else if($divwk2.hasClass('flex')) {
                        $divwk2.toggleClass('flex hidden');
                    }
                    else if($divposisi2.hasClass('flex')) {
                        $divposisi2.toggleClass('flex hidden');
                    }
                    $divimg2.toggleClass('flex hidden');
                });
                $editposisi2.on('click', function(){
                    if ($editjenis2.hasClass('text-[#2168b9]')) {
                        $editjenis2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editwarna2.hasClass('text-[#2168b9]')) {
                        $editwarna2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    else if($editgambar2.hasClass('text-[#2168b9]')) {
                        $editgambar2.toggleClass('text-[#2168b9] text-blue-200');
                    }
                    $editposisi2.toggleClass('text-[#2168b9] text-blue-200');

                    if ($divjk2.hasClass('flex')) {
                        $divjk2.toggleClass('flex hidden');
                    }
                    else if($divwk2.hasClass('flex')) {
                        $divwk2.toggleClass('flex hidden');
                    }
                    else if($divimg2.hasClass('flex')) {
                        $divimg2.toggleClass('flex hidden');
                    }
                    $divposisi2.toggleClass('flex hidden');
                });
            });


            // WARNA KAOS
            // document.addEventListener('DOMContentLoaded', function() {
            //     var wkwhite = document.querySelector('#wkwhite');
            //     var wkblack = document.querySelector('#wkblack');
            //     var wkred = document.querySelector('#wkred');
            //     var wkpurple = document.querySelector('#wkpurple');

            //     var imgkaos = document.querySelector('#imgkaos');
            //     var divwk = document.querySelector('#divwk');
            //     var divjk = document.querySelector('#divjk');

            //     function handleClick(button, colorClass, imagePath) {
            //         button.addEventListener('click', function() {
            //             if (divjk.classList.contains('jkpendekd')) {
            //                 imgkaos.src = `{{ asset('${imagePath}D.png') }}`;
            //             } else if (divjk.classList.contains('jkpendekb')) {
            //                 imgkaos.src = `{{ asset('${imagePath}B.png') }}`;
            //             } else if (divjk.classList.contains('jkpanjangd')) {
            //                 imgkaos.src = `{{ asset('${imagePath}D.png') }}`;
            //             } else if (divjk.classList.contains('jkpanjangb')) {
            //                 imgkaos.src = `{{ asset('${imagePath}B.png') }}`;
            //             }

            //             button.classList.toggle('opacity-100');
            //             button.classList.toggle('opacity-30');
            //             button.classList.toggle('fa-bounce');

            //             divwk.className = '';
            //             divwk.classList.add(colorClass);

            //             [wkwhite, wkblack, wkred, wkpurple].forEach(function(otherButton) {
            //                 if (otherButton !== button && otherButton.classList.contains('opacity-100')) {
            //                     otherButton.classList.toggle('opacity-100');
            //                     otherButton.classList.toggle('opacity-30');
            //                     otherButton.classList.toggle('fa-bounce');
            //                 }
            //             });
            //         });
            //     }

            //     handleClick(wkwhite, 'wkwhite', 'images/KAOSPE');
            //     handleClick(wkblack, 'wkblack', 'images/KAOSPAB');
            //     handleClick(wkred, 'wkred', 'images/KAOSPABRED');
            //     handleClick(wkpurple, 'wkpurple', 'images/KAOSPABPURPLE');
            // });
            $(document).ready(function() {
                var $wkwhite = $('#wkwhite');
                var $wkblack = $('#wkblack');
                var $wkred = $('#wkred');
                var $wkpurple = $('#wkpurple');

                var $imgkaos = $('#imgkaos');
                var $inputwk = $('#warnakaos');
                var $valjk = $('#jeniskaos').val();

                var $divwk = $('#divwk');
                var $divjk = $('#divjk');


                $wkblack.on('click', function(){
                    if($divjk.hasClass('jkpendekd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDBLACK.png') }}');
                    }
                    else if($divjk.hasClass('jkpendekb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBBLACK.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADBLACK.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABBLACK.png') }}');
                    }

                    $wkblack.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk.removeClass('wkwhite');
                    $divwk.removeClass('wkred');
                    $divwk.removeClass('wkpurple');
                    $divwk.addClass('wkblack');

                    if ($wkwhite.hasClass('opacity-100')) {
                        $wkwhite.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred.hasClass('opacity-100')) {
                        $wkred.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple.hasClass('opacity-100')) {
                        $wkpurple.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkwhite.on('click', function(){
                    if($divjk.hasClass('jkpendekd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPED.png') }}');
                    }
                    else if($divjk.hasClass('jkpendekb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEB.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPAD.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPAB.png') }}');
                    }

                    $wkwhite.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk.removeClass('wkblack');
                    $divwk.removeClass('wkred');
                    $divwk.removeClass('wkpurple');
                    $divwk.addClass('wkwhite');

                    if ($wkblack.hasClass('opacity-100')) {
                        $wkblack.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred.hasClass('opacity-100')) {
                        $wkred.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple.hasClass('opacity-100')) {
                        $wkpurple.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkred.on('click', function(){
                    if($divjk.hasClass('jkpendekd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDRED.png') }}');
                    }
                    else if($divjk.hasClass('jkpendekb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBRED.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADRED.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABRED.png') }}');
                    }

                    $wkred.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk.removeClass('wkwhite');
                    $divwk.removeClass('wkblack');
                    $divwk.removeClass('wkpurple');
                    $divwk.addClass('wkred');

                    if ($wkblack.hasClass('opacity-100')) {
                        $wkblack.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkwhite.hasClass('opacity-100')) {
                        $wkwhite.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple.hasClass('opacity-100')) {
                        $wkpurple.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkpurple.on('click', function(){
                    if($divjk.hasClass('jkpendekd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDPURPLE.png') }}');
                    }
                    else if($divjk.hasClass('jkpendekb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBPURPLE.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangd')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADPURPLE.png') }}');
                    }
                    else if($divjk.hasClass('jkpanjangb')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABPURPLE.png') }}');
                    }

                    $wkpurple.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk.removeClass('wkwhite');
                    $divwk.removeClass('wkred');
                    $divwk.removeClass('wkblack');
                    $divwk.addClass('wkpurple');

                    if ($wkblack.hasClass('opacity-100')) {
                        $wkblack.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkwhite.hasClass('opacity-100')) {
                        $wkwhite.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred.hasClass('opacity-100')) {
                        $wkred.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
            });
            $(document).ready(function() {
                var $wkwhite2 = $('#wkwhite2');
                var $wkblack2 = $('#wkblack2');
                var $wkred2 = $('#wkred2');
                var $wkpurple2 = $('#wkpurple2');

                var $imgkaos2 = $('#imgkaos2');
                var $inputwk2 = $('#warnakaos2');
                var $valjk2 = $('#jeniskaos2').val();

                var $divwk2 = $('#divwk2');
                var $divjk2 = $('#divjk2');

                $wkblack2.on('click', function(){
                    if($divjk2.hasClass('jkpendekd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDBLACK.png') }}');
                    }
                    else if($divjk2.hasClass('jkpendekb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBBLACK.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADBLACK.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABBLACK.png') }}');
                    }

                    $wkblack2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk2.removeClass('wkwhite');
                    $divwk2.removeClass('wkred');
                    $divwk2.removeClass('wkpurple');
                    $divwk2.addClass('wkblack');

                    if ($wkwhite2.hasClass('opacity-100')) {
                        $wkwhite2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred2.hasClass('opacity-100')) {
                        $wkred2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple2.hasClass('opacity-100')) {
                        $wkpurple2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkwhite2.on('click', function(){
                    if($divjk2.hasClass('jkpendekd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPED.png') }}');
                    }
                    else if($divjk2.hasClass('jkpendekb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEB.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPAD.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPAB.png') }}');
                    }

                    $wkwhite2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk2.removeClass('wkblack');
                    $divwk2.removeClass('wkred');
                    $divwk2.removeClass('wkpurple');
                    $divwk2.addClass('wkwhite');

                    if ($wkblack2.hasClass('opacity-100')) {
                        $wkblack2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred2.hasClass('opacity-100')) {
                        $wkred2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple2.hasClass('opacity-100')) {
                        $wkpurple2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkred2.on('click', function(){
                    if($divjk2.hasClass('jkpendekd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDRED.png') }}');
                    }
                    else if($divjk2.hasClass('jkpendekb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBRED.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADRED.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABRED.png') }}');
                    }

                    $wkred2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk2.removeClass('wkwhite');
                    $divwk2.removeClass('wkblack');
                    $divwk2.removeClass('wkpurple');
                    $divwk2.addClass('wkred');

                    if ($wkblack2.hasClass('opacity-100')) {
                        $wkblack2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkwhite2.hasClass('opacity-100')) {
                        $wkwhite2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkpurple2.hasClass('opacity-100')) {
                        $wkpurple2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $wkpurple2.on('click', function(){
                    if($divjk2.hasClass('jkpendekd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDPURPLE.png') }}');
                    }
                    else if($divjk2.hasClass('jkpendekb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBPURPLE.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangd')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADPURPLE.png') }}');
                    }
                    else if($divjk2.hasClass('jkpanjangb')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABPURPLE.png') }}');
                    }

                    $wkpurple2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divwk2.removeClass('wkwhite');
                    $divwk2.removeClass('wkred');
                    $divwk2.removeClass('wkblack');
                    $divwk2.addClass('wkpurple');

                    if ($wkblack2.hasClass('opacity-100')) {
                        $wkblack2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkwhite2.hasClass('opacity-100')) {
                        $wkwhite2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($wkred2.hasClass('opacity-100')) {
                        $wkred2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
            });


            // JENIS KAOS
            // document.addEventListener('DOMContentLoaded', function() {
            //     var jkpendekd = document.querySelector('#jkpendekd');
            //     var jkpendekb = document.querySelector('#jkpendekb');
            //     var jkpanjangd = document.querySelector('#jkpanjangd');
            //     var jkpanjangb = document.querySelector('#jkpanjangb');

            //     var imgkaos = document.querySelector('#imgkaos');
            //     var divwk = document.querySelector('#divwk');
            //     var divjk = document.querySelector('#divjk');

            //     function handleClick(button, imagePath, jkClass) {
            //         button.addEventListener('click', function() {
            //             var wkClass = divwk.classList.value;

            //             if (wkClass === 'wkwhite') {
            //                 imgkaos.src = `{{ asset('${imagePath}PED.png') }}`;
            //             } else if (wkClass === 'wkblack') {
            //                 imgkaos.src = `{{ asset('${imagePath}PEDBLACK.png') }}`;
            //             } else if (wkClass === 'wkred') {
            //                 imgkaos.src = `{{ asset('${imagePath}PEDRED.png') }}`;
            //             } else if (wkClass === 'wkpurple') {
            //                 imgkaos.src = `{{ asset('${imagePath}PEDPURPLE.png') }}`;
            //             }

            //             button.classList.toggle('opacity-100');
            //             button.classList.toggle('opacity-30');
            //             button.classList.toggle('fa-bounce');
                        
            //             // Toggle the selected jk class and reset others
            //             divjk.className = '';
            //             divjk.classList.add(jkClass);

            //             [jkpendekd, jkpendekb, jkpanjangd, jkpanjangb].forEach(function(otherButton) {
            //                 if (otherButton !== button && otherButton.classList.contains('opacity-100')) {
            //                     otherButton.classList.toggle('opacity-100');
            //                     otherButton.classList.toggle('opacity-30');
            //                     otherButton.classList.toggle('fa-bounce');
            //                 }
            //             });
            //         });
            //     }

            //     // Handle each button click with specific class and image path
            //     handleClick(jkpendekd, 'KAOSPED', 'jkpendekd');
            //     handleClick(jkpendekb, 'KAOSPEB', 'jkpendekb');
            //     handleClick(jkpanjangd, 'KAOSPAD', 'jkpanjangd');
            //     handleClick(jkpanjangb, 'KAOSPAB', 'jkpanjangb');
            // });
            $(document).ready(function(){

                var $jkpendekd = $('#jkpendekd');
                var $jkpendekb = $('#jkpendekb');
                var $jkpanjangd = $('#jkpanjangd');
                var $jkpanjangb = $('#jkpanjangb');

                var $imgkaos = $('#imgkaos');
                var $inputjk = $('#jeniskaos');
                var $valwk = $('#warnakaos').val();

                var $divwk = $('#divwk');
                var $divjk = $('#divjk');

                $jkpendekd.on('click', function(){
                    if($divwk.hasClass('wkwhite')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPED.png') }}');
                    }
                    else if($divwk.hasClass('wkblack')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDBLACK.png') }}');
                    }
                    else if($divwk.hasClass('wkred')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDRED.png') }}');
                    }
                    else if($divwk.hasClass('wkpurple')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEDPURPLE.png') }}');
                    }
                    
                    $jkpendekd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk.removeClass('jkpendekb');
                    $divjk.removeClass('jkpanjangd');
                    $divjk.removeClass('jkpanjangb');
                    $divjk.addClass('jkpendekd');

                    if ($jkpendekb.hasClass('opacity-100')) {
                        $jkpendekb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd.hasClass('opacity-100')) {
                        $jkpanjangd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb.hasClass('opacity-100')) {
                        $jkpanjangb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $jkpendekb.on('click', function(){
                    if($divwk.hasClass('wkwhite')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEB.png') }}');
                    }
                    else if($divwk.hasClass('wkblack')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBBLACK.png') }}');
                    }
                    else if($divwk.hasClass('wkred')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBRED.png') }}');
                    }
                    else if($divwk.hasClass('wkpurple')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPEBPURPLE.png') }}');
                    }
                    
                    $jkpendekb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk.removeClass('jkpendekd');
                    $divjk.removeClass('jkpanjangd');
                    $divjk.removeClass('jkpanjangb');
                    $divjk.addClass('jkpendekb');

                    if ($jkpendekd.hasClass('opacity-100')) {
                        $jkpendekd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd.hasClass('opacity-100')) {
                        $jkpanjangd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb.hasClass('opacity-100')) {
                        $jkpanjangb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $jkpanjangd.on('click', function(){
                    if($divwk.hasClass('wkwhite')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPAD.png') }}');
                    }
                    else if($divwk.hasClass('wkblack')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADBLACK.png') }}');
                    }
                    else if($divwk.hasClass('wkred')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADRED.png') }}');
                    }
                    else if($divwk.hasClass('wkpurple')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPADPURPLE.png') }}');
                    }
                    
                    $jkpanjangd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk.removeClass('jkpendekb');
                    $divjk.removeClass('jkpendekd');
                    $divjk.removeClass('jkpanjangb');
                    $divjk.addClass('jkpanjangd');

                    if ($jkpendekd.hasClass('opacity-100')) {
                        $jkpendekd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpendekb.hasClass('opacity-100')) {
                        $jkpendekb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb.hasClass('opacity-100')) {
                        $jkpanjangb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
                $jkpanjangb.on('click', function(){
                    if($divwk.hasClass('wkwhite')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPAB.png') }}');
                    }
                    else if($divwk.hasClass('wkblack')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABBLACK.png') }}');
                    }
                    else if($divwk.hasClass('wkred')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABRED.png') }}');
                    }
                    else if($divwk.hasClass('wkpurple')){
                        $imgkaos.attr('src', '{{ asset('images/KAOSPABPURPLE.png') }}');
                    }
                    
                    $jkpanjangb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk.removeClass('jkpendekb');
                    $divjk.removeClass('jkpanjangd');
                    $divjk.removeClass('jkpendekd');
                    $divjk.addClass('jkpanjangb');

                    if ($jkpendekd.hasClass('opacity-100')) {
                        $jkpendekd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpendekb.hasClass('opacity-100')) {
                        $jkpendekb.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd.hasClass('opacity-100')) {
                        $jkpanjangd.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
            });
            $(document).ready(function(){
                var $jkpendekd2 = $('#jkpendekd2');
                var $jkpendekb2 = $('#jkpendekb2');
                var $jkpanjangd2 = $('#jkpanjangd2');
                var $jkpanjangb2 = $('#jkpanjangb2');

                var $imgkaos2 = $('#imgkaos2');
                var $inputjk2 = $('#jeniskaos2');
                var $valwk2 = $('#warnakaos2').val();

                var $divwk2 = $('#divwk2');
                var $divjk2 = $('#divjk2');

                $jkpendekd2.on('click', function(){
                    if($divwk2.hasClass('wkwhite')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPED.png') }}');
                    }
                    else if($divwk2.hasClass('wkblack')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDBLACK.png') }}');
                    }
                    else if($divwk2.hasClass('wkred')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDRED.png') }}');
                    }
                    else if($divwk2.hasClass('wkpurple')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEDPURPLE.png') }}');
                    }

                    $jkpendekd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk2.removeClass('jkpendekb');
                    $divjk2.removeClass('jkpanjangd');
                    $divjk2.removeClass('jkpanjangb');
                    $divjk2.addClass('jkpendekd');

                    if ($jkpendekb2.hasClass('opacity-100')) {
                        $jkpendekb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd2.hasClass('opacity-100')) {
                        $jkpanjangd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb2.hasClass('opacity-100')) {
                        $jkpanjangb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });

                $jkpendekb2.on('click', function(){
                    if($divwk2.hasClass('wkwhite')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEB.png') }}');
                    }
                    else if($divwk2.hasClass('wkblack')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBBLACK.png') }}');
                    }
                    else if($divwk2.hasClass('wkred')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBRED.png') }}');
                    }
                    else if($divwk2.hasClass('wkpurple')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPEBPURPLE.png') }}');
                    }

                    $jkpendekb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk2.removeClass('jkpendekd');
                    $divjk2.removeClass('jkpanjangd');
                    $divjk2.removeClass('jkpanjangb');
                    $divjk2.addClass('jkpendekb');

                    if ($jkpendekd2.hasClass('opacity-100')) {
                        $jkpendekd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd2.hasClass('opacity-100')) {
                        $jkpanjangd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb2.hasClass('opacity-100')) {
                        $jkpanjangb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });

                $jkpanjangd2.on('click', function(){
                    if($divwk2.hasClass('wkwhite')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPAD.png') }}');
                    }
                    else if($divwk2.hasClass('wkblack')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADBLACK.png') }}');
                    }
                    else if($divwk2.hasClass('wkred')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADRED.png') }}');
                    }
                    else if($divwk2.hasClass('wkpurple')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPADPURPLE.png') }}');
                    }

                    $jkpanjangd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk2.removeClass('jkpendekb');
                    $divjk2.removeClass('jkpendekd');
                    $divjk2.removeClass('jkpanjangb');
                    $divjk2.addClass('jkpanjangd');

                    if ($jkpendekd2.hasClass('opacity-100')) {
                        $jkpendekd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpendekb2.hasClass('opacity-100')) {
                        $jkpendekb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangb2.hasClass('opacity-100')) {
                        $jkpanjangb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });

                $jkpanjangb2.on('click', function(){
                    if($divwk2.hasClass('wkwhite')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPAB.png') }}');
                    }
                    else if($divwk2.hasClass('wkblack')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABBLACK.png') }}');
                    }
                    else if($divwk2.hasClass('wkred')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABRED.png') }}');
                    }
                    else if($divwk2.hasClass('wkpurple')){
                        $imgkaos2.attr('src', '{{ asset('images/KAOSPABPURPLE.png') }}');
                    }

                    $jkpanjangb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $divjk2.removeClass('jkpendekb');
                    $divjk2.removeClass('jkpanjangd');
                    $divjk2.removeClass('jkpendekd');
                    $divjk2.addClass('jkpanjangb');

                    if ($jkpendekd2.hasClass('opacity-100')) {
                        $jkpendekd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpendekb2.hasClass('opacity-100')) {
                        $jkpendekb2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($jkpanjangd2.hasClass('opacity-100')) {
                        $jkpanjangd2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                });
            });


            // posisi KAOS
            // document.addEventListener('DOMContentLoaded', function() {
            //     var psButtons = [
            //         document.querySelector('#ps1'),
            //         document.querySelector('#ps2'),
            //         document.querySelector('#ps3'),
            //         document.querySelector('#ps4'),
            //         document.querySelector('#ps5')
            //     ];

            //     var imgsablon = document.querySelector('#imgsablon');
            //     var divposisi = document.querySelector('#divposisi');

            //     var positions = [
            //         { width: '100px', top: '80px', class: 'posisi 1' },
            //         { width: '50px', top: '60px', class: 'posisi 2' },
            //         { width: '50px', top: '90px', left: '130px', class: 'posisi 3' },
            //         { width: '50px', top: '90px', right: '130px', class: 'posisi 4' },
            //         { width: '150px', top: '80px', class: 'posisi 5' }
            //     ];

            //     psButtons.forEach(function(button, index) {
            //         button.addEventListener('click', function() {
            //             // Toggle button opacity and animation
            //             button.classList.toggle('opacity-100');
            //             button.classList.toggle('opacity-30');
            //             button.classList.toggle('fa-bounce');

            //             // Reset image and apply new position
            //             imgsablon.className = '';  // Remove all previous classes
            //             var position = positions[index];
            //             imgsablon.style.width = position.width;
            //             imgsablon.style.top = position.top;
            //             if (position.left) imgsablon.style.left = position.left;
            //             if (position.right) imgsablon.style.right = position.right;

            //             // Toggle other buttons and reset their states
            //             psButtons.forEach(function(otherButton, otherIndex) {
            //                 if (otherButton !== button && otherButton.classList.contains('opacity-100')) {
            //                     otherButton.classList.toggle('opacity-100');
            //                     otherButton.classList.toggle('opacity-30');
            //                     otherButton.classList.toggle('fa-bounce');
            //                 }
            //             });

            //             // Reset and set new position class
            //             divposisi.className = ''; // Remove all previous position classes
            //             divposisi.classList.add(position.class);
            //         });
            //     });
            // });
            $(document).ready(function(){

                var $ps1 = $('#ps1');
                var $ps2 = $('#ps2');
                var $ps3 = $('#ps3');
                var $ps4 = $('#ps4');
                var $ps5 = $('#ps5');
                var $divposisi = $('#divposisi');

                var $imgsablon = $('#imgsablon');


                $ps1.on('click', function(){
                    $ps1.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon.addClass('w-[100px] absolute top-[80px]');

                    if ($ps2.hasClass('opacity-100')) {
                        $ps2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps3.hasClass('opacity-100')) {
                        $ps3.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps4.hasClass('opacity-100')) {
                        $ps4.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps5.hasClass('opacity-100')) {
                        $ps5.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    
                    $divposisi.removeClass('posisi2');
                    $divposisi.removeClass('posisi3');
                    $divposisi.removeClass('posisi4');
                    $divposisi.removeClass('posisi5');
                    $divposisi.addClass('posisi1');
                });

                $ps2.on('click', function(){
                    $ps2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon.addClass('w-[50px] absolute top-[60px]');

                    if ($ps1.hasClass('opacity-100')) {
                        $ps1.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps3.hasClass('opacity-100')) {
                        $ps3.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps4.hasClass('opacity-100')) {
                        $ps4.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps5.hasClass('opacity-100')) {
                        $ps5.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi.removeClass('posisi1');
                    $divposisi.removeClass('posisi3');
                    $divposisi.removeClass('posisi4');
                    $divposisi.removeClass('posisi5');
                    $divposisi.addClass('posisi2');
                });

                $ps3.on('click', function(){
                    $ps3.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon.addClass('w-[50px] absolute top-[90px] left-[130px]');

                    if ($ps1.hasClass('opacity-100')) {
                        $ps1.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps2.hasClass('opacity-100')) {
                        $ps2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps4.hasClass('opacity-100')) {
                        $ps4.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps5.hasClass('opacity-100')) {
                        $ps5.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi.removeClass('posisi2');
                    $divposisi.removeClass('posisi1');
                    $divposisi.removeClass('posisi4');
                    $divposisi.removeClass('posisi5');
                    $divposisi.addClass('posisi3');
                });

                $ps4.on('click', function(){
                    $ps4.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon.addClass('w-[50px] absolute top-[90px] right-[130px]');

                    if ($ps1.hasClass('opacity-100')) {
                        $ps1.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps2.hasClass('opacity-100')) {
                        $ps2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps3.hasClass('opacity-100')) {
                        $ps3.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps5.hasClass('opacity-100')) {
                        $ps5.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi.removeClass('posisi2');
                    $divposisi.removeClass('posisi3');
                    $divposisi.removeClass('posisi1');
                    $divposisi.removeClass('posisi5');
                    $divposisi.addClass('posisi4');
                });

                $ps5.on('click', function(){
                    $ps5.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon.addClass('w-[150px] absolute top-[80px]');

                    if ($ps1.hasClass('opacity-100')) {
                        $ps1.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps2.hasClass('opacity-100')) {
                        $ps2.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps3.hasClass('opacity-100')) {
                        $ps3.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps4.hasClass('opacity-100')) {
                        $ps4.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi.removeClass('posisi2');
                    $divposisi.removeClass('posisi3');
                    $divposisi.removeClass('posisi4');
                    $divposisi.removeClass('posisi1');
                    $divposisi.addClass('posisi5');
                });
            });
            $(document).ready(function(){

                var $ps12 = $('#ps12');
                var $ps22 = $('#ps22');
                var $ps32 = $('#ps32');
                var $ps42 = $('#ps42');
                var $ps52 = $('#ps52');
                var $divposisi2 = $('#divposisi2');

                var $imgsablon2 = $('#imgsablon2');


                $ps12.on('click', function(){
                    $ps12.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon2.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon2.addClass('w-[100px] absolute top-[80px]');

                    if ($ps22.hasClass('opacity-100')) {
                        $ps22.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps32.hasClass('opacity-100')) {
                        $ps32.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps42.hasClass('opacity-100')) {
                        $ps42.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps52.hasClass('opacity-100')) {
                        $ps52.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    
                    $divposisi2.removeClass('posisi2');
                    $divposisi2.removeClass('posisi3');
                    $divposisi2.removeClass('posisi4');
                    $divposisi2.removeClass('posisi5');
                    $divposisi2.addClass('posisi1');
                });

                $ps22.on('click', function(){
                    $ps22.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon2.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon2.addClass('w-[50px] absolute top-[60px]');

                    if ($ps12.hasClass('opacity-100')) {
                        $ps12.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps32.hasClass('opacity-100')) {
                        $ps32.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps42.hasClass('opacity-100')) {
                        $ps42.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps52.hasClass('opacity-100')) {
                        $ps52.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi2.removeClass('posisi1');
                    $divposisi2.removeClass('posisi3');
                    $divposisi2.removeClass('posisi4');
                    $divposisi2.removeClass('posisi5');
                    $divposisi2.addClass('posisi2');
                });

                $ps32.on('click', function(){
                    $ps32.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon2.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon2.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon2.addClass('w-[50px] absolute top-[90px] left-[130px]');

                    if ($ps12.hasClass('opacity-100')) {
                        $ps12.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps22.hasClass('opacity-100')) {
                        $ps22.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps42.hasClass('opacity-100')) {
                        $ps42.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps52.hasClass('opacity-100')) {
                        $ps52.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi2.removeClass('posisi2');
                    $divposisi2.removeClass('posisi1');
                    $divposisi2.removeClass('posisi4');
                    $divposisi2.removeClass('posisi5');
                    $divposisi2.addClass('posisi3');
                });

                $ps42.on('click', function(){
                    $ps42.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon2.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon2.removeClass('w-[150px] absolute top-[80px]');
                    $imgsablon2.addClass('w-[50px] absolute top-[90px] right-[130px]');

                    if ($ps12.hasClass('opacity-100')) {
                        $ps12.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps22.hasClass('opacity-100')) {
                        $ps22.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps32.hasClass('opacity-100')) {
                        $ps32.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps52.hasClass('opacity-100')) {
                        $ps52.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi2.removeClass('posisi2');
                    $divposisi2.removeClass('posisi3');
                    $divposisi2.removeClass('posisi1');
                    $divposisi2.removeClass('posisi5');
                    $divposisi2.addClass('posisi4');
                });

                $ps52.on('click', function(){
                    $ps52.toggleClass('opacity-100 opacity-30 fa-bounce');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] right-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[90px] left-[130px]');
                    $imgsablon2.removeClass('w-[50px] absolute top-[60px]');
                    $imgsablon2.removeClass('w-[100px] absolute top-[80px]');
                    $imgsablon2.addClass('w-[150px] absolute top-[80px]');

                    if ($ps12.hasClass('opacity-100')) {
                        $ps12.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps22.hasClass('opacity-100')) {
                        $ps22.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps32.hasClass('opacity-100')) {
                        $ps32.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }
                    else if($ps42.hasClass('opacity-100')) {
                        $ps42.toggleClass('opacity-100 opacity-30 fa-bounce');
                    }

                    $divposisi2.removeClass('posisi2');
                    $divposisi2.removeClass('posisi3');
                    $divposisi2.removeClass('posisi4');
                    $divposisi2.removeClass('posisi1');
                    $divposisi2.addClass('posisi5');
                });
            });


        </script>



</x-app-layout>