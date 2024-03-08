<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--boostrap 4  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg- border-bottom p-4 fixed-top">
        <div class="container-fluid">
            <a href="index.php"><img src="img/lapak.png" alt="" style="height: 2rem;"></a>
            <form class="d-flex gap-4" role="search">
                <input type="text" class="form-control" style="width: 30rem;">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Produk Virtual
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Investasi</a></li>
                            <li><a class="dropdown-item" href="#">Pinjaman</a></li>
                            <li><a class="dropdown-item" href="#">Travel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori Barang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Elektronik</a></li>
                            <li><a class="dropdown-item" href="#">Sepeda</a></li>
                            <li><a class="dropdown-item" href="#">Olahraga</a></li>
                            <li><a class="dropdown-item" href="#">Handphone</a></li>
                            <li><a class="dropdown-item" href="#">Komputer</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
            <div class="d-flex text-secondary">
                <h5>Daftar</h5>
                <h5 class="mx-4">Login</h5>
            </div>
        </div>
    </nav>
    <!--  -->
    <section class="container-fluid">
        <div class="row mx-5 border-bottom pt-5 pb-4" style="margin-top: 4rem;">
            <small class="text-secondary">Home > Sepeda > Fullbike > MTB > <span class="text-danger"> MTB 27.5 POLYGON
                    PREMIER 4 - SEPEDA
                    POLYGON PREMIER ....</span></small>
        </div>
        <div class="row mx-5 mt-5">
            <div class="col-4 me-5">
                <img src="img/spd.webp" alt="" style="width: 100%; height: 30rem;">
                <div class="d-flex justify-content-between gap-2 mt-3">
                    <div class="co">
                        <img src="img/hijau.png" alt="" style="width: 6rem;">
                    </div>
                    <div class="co">
                        <img src="img/hijau.png" alt="" style="width: 6rem;">
                    </div>
                    <div class="co">
                        <img src="img/hijau.png" alt="" style="width: 6rem;">
                    </div>
                </div>
                <div class="d-flex mt-4 ms-5 mb-3">
                    <h5 class="ms-5 fw-normal"><i class="fa-regular fa-heart"></i> Favoritkan</h5>
                    <h5 class="ms-5 fw-normal"> | </h5>
                    <h5 class="ms-5 fw-normal"><i class="fa-solid fa-share-nodes"></i> Bagikan</h5>
                </div>
                <h5 class="fw-semibold">Diskon Menanti Kamu di App !</h5>
                <div class="row gap-5">
                    <div class="col-6">
                        <small>Scan kodenya untuk bayar di</small><br>
                        <small>app. Ada banyak voucher untuk</small>
                    </div>
                    <div class="col border  border-3 rounded-2 pt-2 text-center" style=" height: 2.5rem;">
                        <h5 class="fw-semibold"><i class="fa-solid fa-qrcode"></i>QR-Code</h5>
                    </div>
                </div>

            </div>
            <div class="col ">
                <img src="img/ban.png" alt="" style="height: 12rem; width: 100%;">
                <h3 class="mt-4">MTB 27.5 Polygon Premier 4 - Sepeda Polygon Premier 4 2023</h3>
                <div class="d-flex mb-5">
                    <small><i class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                            class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star-half"
                            style="color: #d4950c;"></i> </small>
                    <small class="ms-3 ">117 Ulasan</small>
                    <small class="ms-3 "><i class="fa-solid fa-circle" style="color: rgb(157, 165, 165);"></i> 128
                        Terjual</small>
                </div>
                <small class="text-secondary" style="text-decoration: line-through 1px black;">Rp6.800.000</small>
                <div class="d-flex pb-5 border-bottom">
                    <h1 class="text-danger"><b> Rp5.000.000</b></h1>
                    <small class="text-danger mt-3 ms-2">Hemat 20%</small>
                </div>
                <div class="d-flex">
                    <p class="me-3  mt-4"><b>Size Frame</b></p>
                    <select class="custom-select mt-4" id="inputGroupSelect01" style="width: 8rem; height: 2.5rem;">
                        <option selected>pilih jenis....</option>
                        <option value="1">s 15</option>
                        <option value="2">m 17</option>
                    </select>
                </div>
                <small class="text-danger mt-5">Stok Terbatas! Sisa 3 lagi!</small>
                <div class="row border-top mt-4">
                    <div class="col-3 mt-4">
                        <p><b>Pengiriman</b></p>
                    </div>
                    <div class="col-3 mt-4">
                        <small class="text-secondary">Lokasi Pelapak</small>
                        <p>Kab.Bogor</p>
                    </div>
                    <div class="col mt-4">
                        <small class="text-secondary">Tujuan Pengiriman</small>
                        <p style="border-bottom:3px dotted; width: 8rem;">Pilih lokasi anda </p>
                    </div>
                </div>
                <div class="d-flex ms-5 justify-content-center mb-4">
                    <div class="co ms-5">
                        <select class="custom-select" id="inputGroupSelect01" style="width: 25rem;">
                            <option selected>J&T Reguler</option>
                            <option value="1">JNE Reguler</option>
                            <option value="2">JNE Trucking</option>
                            <option value="3">AMBIL Sendiri</option>
                        </select>
                    </div>
                    <div class="co ms-3 mt-1 me-5">
                        <small>Tersedia 4 kurir</small>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Informasi Barang -->
    <section class="container-fluid ">
        <div class="row mx-5  mb-5">
            <div class="col-4 me-5 mt-5">
                <h4 class="mt-5">Informasi Barang</h4>
            </div>
            <div class="col border-top">
                <div class="d-flex mt-3 gap-2 mb-5">
                    <button type="button" class="btn btn-outline-primary"><i
                            class="fa-solid fa-comment-dots"></i>Chat</button>
                    <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i>Masukan
                        Keranjang</button>
                    <button type="button" class="btn btn-danger">Beli Sekarang</button>
                </div>
                <p class="mb-4 text-secondary fw-semibold">Kondisi Barang <br><span
                        class="badge text-bg-danger ">Baru</span></p>
                <p class="text-secondary fw-semibold">Spesifikasi</p>
                <small class="text-secondary">
                    <table>
                        <tbody>
                            <tr>
                                <td class="pe-5">Kategori</td>
                                <td class="ps-5 pe-2">:</td>
                                <td class="text-danger">MTB</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Berat</td>
                                <td class="ps-5 pe-2">:</td>
                                <td>20 Kilogram</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Asal Barang</td>
                                <td class="ps-5 pe-2">:</td>
                                <td>Lokal</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Bahan</td>
                                <td class="ps-5 pe-2">:</td>
                                <td>Alloy</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Brand</td>
                                <td class="ps-5 pe-2">:</td>
                                <td class="text-danger">United</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Type</td>
                                <td class="ps-5 pe-2">:</td>
                                <td>XC (Cross Country)</td>
                            </tr>
                            <tr>
                                <td class="pe-5">Ukuran</td>
                                <td class="ps-5 pe-2">:</td>
                                <td>s m</td>
                            </tr>
                        </tbody>
                    </table>
                </small>
                <div class="mb-3">
                    <p class="mt-4 text-secondary fw-semibold">Deskripsi</p>
                    <small class="text-secondary">Carglos CF Retro Helm Face Black Doff + Visor Bogo Flat</small>
                </div>
                <div class="mb-3">
                    <small class="text-secondary">Helm half face berbahan ABS Thermoplstic yang sangat kuat dan aman, di
                        desain bergaya retro
                        dengan tambahan Visor Bogo agar dapat melindungi anda dari debu saat berkendara, dilengkapi
                        dengan
                        sistem pengait Quick Release Buckle, Knockdown ( Busa bantalan pipi dan pembungkus kepala dapat
                        dilepas dan di cuci ), Telah berstandar SNI ( Standar Nasional Indonesia).</small>
                </div>
                <div class="mb-4">
                    <small class="text-secondary">SPESIFIKASI : frame alloy boost Fork venom air boost Crank single
                        speed
                        34t hollowtech 2 Rd
                        shimano deore 5100 11 speed Sproket 11 speed</small><br>
                    <small class="text-secondary">WARBA : GREY BLACK</small>
                </div>
                <p class="fw-semibold"> Tags</p>
                <div class="d-flex gap-3">
                    <div class="border rounded-2 py-1 px-2 text-center super"
                        style="width: 9rem; height: 2.5rem; background-color: #efefef;">
                        <p>Sepeda</p>
                    </div>
                    <div class="border rounded-2 py-1 px-2 text-center super"
                        style="width: 9rem; height: 2.5rem; background-color: #efefef;">
                        <p>MTB</p>
                    </div>
                    <div class="border rounded-2 py-1 px-2 text-center super"
                        style="width: 9rem; height: 2.5rem; background-color: #efefef;">
                        <p>Polygon</p>
                    </div>
                    <div class="border rounded-2 py-1 px-2 text-center super"
                        style="width: 9rem; height: 2.5rem; background-color: #efefef;">
                        <p>Premier</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Informasi pelapak -->
    <section class="container-fluid border-top border-bottom">
        <div class="row mx-5 mt-4 mb-4 d-flex">
            <div class="col me-4">
                <h4>informasi Pelapak</h4>
            </div>
            <div class="col ms-5">
                <div class="d-flex">
                    <img src="img/merah.png" alt="" style="width: 10rem;">
                    <div class="d-block ms-3">
                        <p class="fw-semibold">Samsul Store <br>
                            <small class="fw-semibold text-secondary"> Kabupaten Bogor</small>
                        </p>

                        <img src="img/super.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="border  border-3 rounded-2 py-1 px-1 text-center lapak"
                    style="width: 12rem; height: 2.5rem;">
                    <p><b><i class="fa-solid fa-store pe-2"></i>Kunjungi Lapak</b></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Ulasan Barang -->
    <section class="container-fluid border-bottom">
        <div class="row mt-5 mx-5 mb-4 ">
            <div class="col-4 me-5">
                <h4>Ulasan Barang</h4>
            </div>
            <div class="col">
                <div class="row border-bottom pb-3">
                    <div class="col">
                        <p class="fw-semibold">Daftar Ulasan</p>
                        <div class="d-flex gap-3 mb-3">
                            <div class="border border-danger rounded-2 py-2 px-2 text-center danger"
                                style="width: 5rem;">
                                <small>Semua</small>
                            </div>
                            <div class="border rounded-2 py-2 px-2 text-center lapakin" style="width: 7.5rem;">
                                <small>Dengan Foto</small>
                            </div>
                            <div class="border rounded-2 py-2 px-2 text-center lapakin" style="width: 10rem;">
                                <small>Dengan Deskripsi</small>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-4">
                            <div class="border rounded-2 py-2 text-center lapakin" style="width: 4.1rem ;">
                                <small><i class="fa-solid fa-star" style="color: #d4950c;"></i> 1</small>
                            </div>
                            <div class="border rounded-2 pt-2 text-center lapakin" style="width: 4.1rem ;">
                                <small><i class="fa-solid fa-star" style="color: #d4950c;"></i> 2</small>
                            </div>
                            <div class="border rounded-2 pt-2 text-center lapakin" style="width: 4.1rem ;">
                                <small><i class="fa-solid fa-star" style="color: #d4950c;"></i> 3</small>
                            </div>
                            <div class="border rounded-2 pt-2 text-center lapakin" style="width: 4.1rem ;">
                                <small><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4</small>
                            </div>
                            <div class="border rounded-2 pt-2  text-center lapakin" style="width: 4.1rem ;">
                                <small><i class="fa-solid fa-star" style="color: #d4950c;"></i> 5</small>
                            </div>
                        </div>
                        <i class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                            class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i>
                        <p class="fw-semibold mb-5">Barang Bagus Banget !
                            <br><small class="text-secondary fw-normal">Ditulis 15 jan,2023</small>
                        </p>
                        <small class="text-secondary"><i class="fa-solid fa-circle me-1"></i>Ecep Suracep</small>
                    </div>
                    <div class="col" style="margin-top: 12rem;">
                        <div class="d-flex justify-content-end mb-4">
                            <img src="img/biru.png" alt="" style="width: 6rem;">
                        </div>
                        <div class="d-flex justify-content-end ms-4">
                            <small class="text-secondary me-2"><i class="fa-solid fa-thumbs-up"></i> 0</small>
                            <small class="text-secondary"><i class="fa-solid fa-thumbs-down"></i> 0 </small>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 border-bottom pb-3">
                    <div class="col">
                        <i class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                            class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i>
                        <p class="fw-semibold mb-5">Mantap Surantap Slur !
                            <br><small class="text-secondary fw-normal">Ditulis 20 jan,2023</small>
                        </p>
                        <small class="text-secondary"><i class="fa-solid fa-circle me-1"></i>Bejo Paijo</small>

                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end  mt-4 mb-4">
                            <img src="img/biru.png" alt="" style="width: 6rem;">
                        </div>
                        <div class="d-flex justify-content-end ms-4">
                            <small class="text-secondary me-2"><i class="fa-solid fa-thumbs-up"></i> 0</small>
                            <small class="text-secondary"><i class="fa-solid fa-thumbs-down"></i> 0 </small>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <i class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                            class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                            style="color: #d4950c;"></i>
                        <p class="fw-semibold mb-5">Barange Juoos Tenan !
                            <br><small class="text-secondary fw-normal">Ditulis 28 jan,2023</small>
                        </p>
                        <small class="text-secondary"><i class="fa-solid fa-circle me-1"></i>Suparman Abadi</small>

                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end  mt-4 mb-4">
                            <img src="img/biru.png" alt="" style="width: 6rem;">
                        </div>
                        <div class="d-flex justify-content-end ms-4">
                            <small class="text-secondary me-2"><i class="fa-solid fa-thumbs-up"></i> 0</small>
                            <small class="text-secondary"><i class="fa-solid fa-thumbs-down"></i> 0 </small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Pilihan lain untukmu -->
    <section class="container-fluid">
        <div class="row mt-5 mx-5 ">
            <div class="col">
                <h4 class="">Pilihan Lain Untukmu</h4>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <div class="border border-2 rounded-2 py-2 px-1 mb-5 text-center lapakin"
                        style="width: 10rem; height: 2.5rem;">
                        <p><i class="fa-solid fa-grip"></i> Lihat Semua</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5">
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card">
                    <img src="img/biru.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Populer</p>
                        <h5>Rp45.900 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp18.000
                            </small>
                            <small class="text-danger ms-2">-78%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.3
                            <small class="ps-3">Terjual 145</small></small>
                    </div>
                </div>
            </div>
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card ">
                    <img src="img/hijau.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Populer</p>
                        <h5>Rp120.000 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp60.000
                            </small>
                            <small class="text-danger ms-2">-50%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.0
                            <small class="ps-3">Terjual 129</small></small>
                    </div>
                </div>
            </div>
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card ">
                    <img src="img/biru.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Populer</p>
                        <h5>Rp50.000 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp10.000
                            </small>
                            <small class="text-danger ms-2">-90%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 5.0
                            <small class="ps-3">Terjual 900</small></small>
                    </div>
                </div>
            </div>
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card ">
                    <img src="img/hijau.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Populer</p>
                        <h5>Rp100.900 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp70.000
                            </small>
                            <small class="text-danger ms-2">-30%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.1
                            <small class="ps-3">Terjual 150</small></small>
                    </div>
                </div>
            </div>
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card ">
                    <img src="img/biru.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Populer</p>
                        <h5>Rp99.900 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp30.900
                            </small>
                            <small class="text-danger ms-2">-30%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.1
                            <small class="ps-3">Terjual 105</small></small>
                    </div>
                </div>
            </div>
            <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="card ">
                    <img src="img/hijau.png" alt="" class="card-img-top">
                    <div class="p-3">
                        <p>Produk Popler</p>
                        <h5>Rp200.900 <br>
                            <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp99.900
                            </small>
                            <small class="text-danger ms-2">-52%</small>
                        </h5>
                        <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.4
                            <small class="ps-3">Terjual 199</small></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5 mt-5">
            <div class="d-flex">
                <p class="fw-medium me-3"> Pencarian Terkait:</p>
                <p class="fw-medium text-danger me-3"> Promo Sepeda Lipat Listrik </p>
                <p class="fw-medium text-danger me-3"> Sepeda Listrik Battery Samsung</p>
                <p class="fw-medium text-danger me-3">T5 Sepeda Lipat Listrik</p>
                <p class="fw-medium text-danger me-3">Es T5 Sepeda Lipat Listrik</p>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class="container-fluid">
        <div class="row d-flex  border-bottom border-top mb-5 px-5">
            <div class="col pt-3 pb-3">
                <img src="img/lapak.png" alt="" style="width: 10rem;">
                <small class="ps-4 pt-2 text-secondary"><b>situs jual beli online mudah & terpercaya</b></small>
            </div>
            <div class="col d-flex pt-3 pb-2 justify-content-end">
                <p class="me-3">Temukan kami di :</p>
                <img src="img/medos.png" alt="" height="25rem">
            </div>
        </div>
        <div class="row d-flex mb-5 px-5 text-secondary">
            <div class="col-3">
                <div class="card mb-3 py-2 text-center popwe" style="width: 17rem;">
                    <h5 class="fw-normal">Bantuan (Hubungi Kami)</h5>
                </div>
                <div class="card py-2 mb-3 text-center popwe" style="width: 15rem;">
                    <h5 class="fw-normal">FAQ (Tanya Jawab)</h5>
                </div>
                <div class="card py-2 text-center popwe" style="width: 15rem;">
                    <h5 class="fw-normal">Panduan keamanan</h5>
                </div>
            </div>
            <div class="col-2">
                <p><b>Lapakin</b></p>
                <small>Tentang Lapakin</small><br>
                <small>Aturan Pengguanaan</small><br>
                <small>Kebijakan Privasi</small><br>
                <small>Blog Lapakin</small><br>
                <small>Karir di Lapakin</small>
            </div>
            <div class="col">
                <p><b>Pelapak</b></p>
                <small>Cara Berjualan</small><br>
                <small>Keuntungan Jualan</small><br>
                <small>Index Merk</small>
            </div>
            <div class="col">
                <p><b>Pembeli</b></p>
                <small>Cara Belanja</small><br>
                <small>Pembayaran</small><br>
                <small>Jaminan Aman</small><br>
                <small>Jasa Pengadaan</small><br>
                <small>Halaman Tag</small>
            </div>
            <div class="col">
                <img src="img/google.png" alt="">
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <section class="container-fluid border-top pt-3 pb-3">
        <small class="text-secondary mx-5">&copy; 2023 Hak Cipta Terpelihara PT.Lapakin.com</small>
    </section>





    <!-- boostrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1362f867b8.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f420dea23.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>