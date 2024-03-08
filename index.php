<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Praktikum</title>
  <!-- boostrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light border-bottom p-4 fixed-top">
    <div class="container-fluid">
      <img src="img/lapak.png" alt="" style="height: 2rem;">
      <form class="d-flex gap-4" role="search">
        <input type="text" class="form-control" style="width: 30rem;">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produk Virtual
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Investasi</a></li>
              <li><a class="dropdown-item" href="#">Pinjaman</a></li>
              <li><a class="dropdown-item" href="#">Travel</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 5rem;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.webp" class="d-block " alt="..."
            style="width: 100rem; height: 37rem; margin-left: 3rem;">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.webp" class="d-block " alt="..."
            style="width: 100rem; height: 37rem; margin-left: 3rem;">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.webp" class="d-block " alt="..."
            style="width: 100rem; height: 37rem; margin-left: 3rem;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>

  <!--  -->
  <section class="container-fluid">
    <div class="row mx-5">
      <div class="d-flex justify-content-around mt-5 text-center mb-5">
        <div class="as">
          <i class="fa-solid fa-medal p-3 rounded-4"
            style="color: #d4950c; font-size: 2rem; background-color:#e5e6fa; "></i>
          <p class="super"><b>Super Seller</b></p>
        </div>
        <div class="as">
          <i class="fas fa-gamepad p-3 rounded-4"
            style="color: #f0051c; font-size: 2rem; background-color:  #e5e6fa;"></i>
          <p class="super"><b>Voucher Game</b></p>
        </div>
        <div class="as">
          <i class="fa-solid fa-bag-shopping p-3 rounded-4"
            style="color: #16a8c5; font-size: 2rem; background-color: #e5e6fa;"></i>
          <p class="super"><b>Belanja Hemat</b></p>
        </div>
        <div class="as">
          <i class="fa-solid fa-tags  p-3 rounded-4"
            style="color: #1ba737;  font-size: 2rem; background-color: #e5e6fa;"></i>
          <p class="super"><b>Bazar s.d 90%</b></p>
        </div>
        <div class="as">
          <i class="fa fa-headphones  p-3 rounded-4"
            style="color: #0f5ee6; font-size: 2rem; background-color: #e5e6fa;"></i>
          <p class="super"><b>Aksesoris</b></p>
        </div>
        <div class="as">
          <i class="fab fa-microsoft  p-3 rounded-4"
            style=" color: #41474e; font-size: 2rem; background-color: #e5e6fa;"></i>
          <p class="super"><b>Semua Menu</b></p>
        </div>
      </div>
    </div>
  </section>
  <!-- kategori pilihan -->
  <section class="container-fluid">
    <div class="row mx-5 mb-4">
      <div class="col-6 mt-2">
        <h5 class="mb-3 fw-semibold">Kategori Pilihan</h5>
        <div class="row gap-4 ">
          <div class="col border justify-content-center">
            <img src="img/aks.webp" alt="Aksesoris" style="width: 9rem; height: 11rem;">
          </div>
          <div class="col border">
            <img src="img/bk.jpg" alt="buku" style="width: 9rem; height: 11rem;">
          </div>
          <div class="col border">
            <img src="img/supp.webp" alt="suplement" style="width: 9rem; height: 11rem;">
          </div>
          <div class="col border">
            <img src="img/gm.webp" alt="gym" style="width: 9rem; height: 11rem;">
          </div>
        </div>
      </div>
      <div class="col-6 mt-2 ">
        <div class="row">
          <div class="col">
            <div class="d-flex ">
              <h5 class="fw-semibold">TopUp & Tagihan </h5>
              <p class="text-danger ms-3 fw-semibold"> Lihat Semua</p>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="tabbable" id="tabs-838249">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active show" href="#tab1" data-toggle="tab">Pulsa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#tab2" data-toggle="tab">Paket Data</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#tab3" data-toggle="tab">Listrik PLN</a>
                    </li>
                  </ul>
                  <div class="tab-content ">
                    <div class="tab-pane active mt-3" id="tab1">
                      <div class="row ">
                        <div class="col-5 mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Nomor Telpon</b></small></label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-5 mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Nominal</b></small></label>
                          <select class="form-select" aria-label=" select example">
                            <option hidden></option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                            <option value="5">Pilihan 5</option>
                          </select>
                        </div>
                        <div class="col-2 mt-5">
                          <button class="btn text-white" style="background-color: #5cb85f;">Kirim</button>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane mt-3" id="tab2">
                      <div class="row ">
                        <div class="col-5 mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Nomor Telpon</b></small></label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-5 mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Nominal</b></small></label>
                          <select class="form-select" aria-label=" select example">
                            <option hidden></option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                            <option value="5">Pilihan 5</option>
                          </select>
                        </div>
                        <div class="col-2 mt-5">
                          <button class="btn text-white" style="background-color: #5cb85f;">Kirim</button>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane mt-3" id="tab3">
                      <div class="row ">
                        <div class="col-4 mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Jenis Produk Listrik</b></small></label>
                          <select class="form-select" aria-label=" select example">
                            <option hidden></option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                            <option value="5">Pilihan 5</option>
                          </select>
                        </div>
                        <div class="col mt-3">
                          <label for="" style="color:#6c747d;"><small><b>No.Meter</b></small></label>
                          <select class="form-select" aria-label=" select example">
                            <option hidden></option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                            <option value="5">Pilihan 5</option>
                          </select>
                        </div>
                        <div class="col mt-3">
                          <label for="" style="color:#6c747d;"><small><b>Nominal</b></small></label>
                          <select class="form-select" aria-label=" select example">
                            <option hidden></option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            <option value="4">Pilihan 4</option>
                            <option value="5">Pilihan 5</option>
                          </select>
                        </div>
                        <div class="col-2 mt-5">
                          <button class="btn text-white" style="background-color: #5cb85f;">Kirim</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- produk palugada terlaris -->
  <section class="container-fluid ">
    <div class="row mx-5 border-top mt-5 mb-5">
      <div class="d-flex mt-5 mb-2">
        <h4 class="fw-semibold">Produk Palugada Terlaris</h4>
        <p class="text-danger ms-3 mt-1 fw-semibold">Lihat Semua</p>
      </div>

      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/spd.webp" alt="" class="card-img-top">
          <div class="p-3">
            <a href="detail.php" style="text-decoration: none;">
              <p class="text-dark">Sepeda MTB</p>
            </a>
            <h5>Rp45.900 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp18.000 <span
                  class="badge text-bg-danger ms-2">-78%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i> 4.3 <small
                class="ps-3">Terjual 145</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/lp.webp" alt="" class="card-img-top">
          <div class="p-3">
            <p>Bardi Emergency</p>
            <h5>Rp 120.000 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp60.000 <span
                  class="badge text-bg-danger ms-2">-50%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.0 <small
                class="ps-3">Terjual 129</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/kn.webp" alt="" class="card-img-top">
          <div class="p-3">
            <p>Batik Pekalongan</p>
            <h5>Rp50.000 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp10.000 <span
                  class="badge text-bg-danger ms-2">-90%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 5.0 <small
                class="ps-3">Terjual 900</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/spt.webp" alt="" class="card-img-top">
          <div class="p-3">
            <p>Sepatu Pria</p>
            <h5>Rp100.900 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp70.000 <span
                  class="badge text-bg-danger ms-2">-30%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.1 <small
                class="ps-3">Terjual 150</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/sl.webp" alt="" class="card-img-top">
          <div class="p-3">
            <p>Sleeping Bag </p>
            <h5>Rp99.900 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp30.900 <span
                  class="badge text-bg-danger ms-2">-15%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.1 <small
                class="ps-3">Terjual 105</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3 " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/bj.webp" alt="" class="card-img-top">
          <div class="p-3">
            <p>Kemeja Pendek</p>
            <h5>Rp200.900 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp99.900 <span
                  class="badge text-bg-danger ms-2">-52%</span></small>
            </h5>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.4 <small
                class="ps-3">Terjual 199</small></small>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- flash sale -->
  <section class="container-fluid">
    <div class="row px-5 py-5" style="background-color: #dae2e4;">
      <div class="col-4 mt-5" data-aos="fade-right">
        <h2><i class="fa-solid fa-bolt-lightning me-1" style="color: #d4950c;"></i> <b> Flash Sale </b></h2>
        <p class="text-secondary">Berakhir Dalam 03:50:25</p>
        <h4 style="margin-top: 9rem;">Diskon Setiap Hari Sampai 70%</h4>
        <p>Mau nikmatin <b>Flash Sale?</b> Download dulu aplikasi Lapakin</p>
        <button class="btn text-white" style=" background-color: #5cb85f;">Mau download dong</button>
      </div>
      <div class="col mt-4" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
        <div class="card">
          <img src="img/data.webp" alt="" class="card-img-top">
          <div class="card-body">
            <p>Chil School Gold</p>
            <h5> <b class="fw-semibold">Rp0</b>
              <br><span class="text-secondary" style="text-decoration: line-through  2px black;">Rp99.900</span><span
                class="text-danger"> -52%</span>
            </h5>
            <p class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                class="fa-solid fa-star-half" style="color: #d4950c;"></i> <small>(120)</small> </p>

          </div>
        </div>
        <div class="progress mt-4" role="progressbar" aria-label="Danger striped example" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="90">
          <div class="progress-bar progress-bar-striped bg-danger" style="width: 90%"></div>
        </div>
        <small class="text-secondary">Tersisa : 5</small>
      </div>
      <div class="col mt-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card">
          <img src="img/data2.webp" alt="" class="card-img-top">
          <div class="card-body">
            <p>Dell Cell Velo</p>
            <h5><b class="fw-semibold">Rp0</b>
              <br><span class="text-secondary" style="text-decoration: line-through 2px black;">Rp120.900</span><span
                class="text-danger"> -79%</span>
            </h5>
            <p class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i> <small>(90)</small> </p>

          </div>
        </div>
        <div class="progress mt-4" role="progressbar" aria-label="Danger striped example" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="90">
          <div class="progress-bar progress-bar-striped bg-danger" style="width: 97%"></div>
        </div>
        <small class="text-secondary">Tersisa : 3</small>
      </div>
      <div class="col mt-4" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
        <div class="card">
          <img src="img/data3.webp" alt="" class="card-img-top">
          <div class="card-body">
            <p>Spotec RedBull</p>
            <h5><b class="fw-semibold">Rp0</b>
              <br><span class="text-secondary" style="text-decoration: line-through 2px black;">Rp18.900</span><span
                class="text-danger"> -88%</span>
            </h5>
            <p class="text-secondary"><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                class="fa-solid fa-star" style="color: #d4950c;"></i><i class="fa-solid fa-star"
                style="color: #d4950c;"></i><i class="fa-solid fa-star" style="color: #d4950c;"></i><i
                class="fa-solid fa-star-half" style="color: #d4950c;"></i> <small>(280)</small> </p>

          </div>
        </div>
        <div class="progress mt-4" role="progressbar" aria-label="warning striped example" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="70">
          <div class="progress-bar progress-bar-striped bg-warning" style="width: 70%"></div>
        </div>
        <small class="text-secondary">Tersisa : 20</small>
      </div>
    </div>
  </section>
  <!--pencarianmu  -->
  <section class="container-fluid">
    <div class="row mx-5 border-bottom mb-4 pb-4">
      <div class="d-flex mt-3 mb-3">
        <h4 class="fw-semibold">Berdasarkan pencarianmu</h4>
        <p class="text-danger ms-3 mt-1 fw-semibold">Lihat Semua</p>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/stk.jpg" alt="" class="card-img-top">
          <div class="p-3">
            <p>Stiker Design</p>
            <h5>Rp45.900 <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp18.000 </small><small
                class="badge text-bg-white text-danger">-78%</small>
            </h5>
            <div class="badge text-white" style="background-color: #5bba59;">Grosir</div>
            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.3 <small
                class="ps-3">Terjual 145</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/bl.jpg" alt="" class="card-img-top">
          <div class="p-3">
            <p>Pull Up Bar</p>
            <h5><b>Rp120.000 </b><br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp60.000 </small><small
                class="badge text-bg-white text-danger">-50%</small>
            </h5>
            <div class="badge text-white" style="background-color: #5bba59;">Grosir</div>
            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.0 <small
                class="ps-3">Terjual 129</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/js.jpg" alt="" class="card-img-top">
          <div class="p-3">
            <p>Jas Pria</p>
            <h5><b>Rp50.000 </b><br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp10.000 </small><small
                class="badge text-bg-white text-danger">-90%</small>
            </h5>
            <div class="badge text-white" style="background-color: #5bba59;">Cashback</div>
            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 5.0 <small
                class="ps-3">Terjual 900</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/hmp.png" alt="" class="card-img-top">
          <div class="p-3">
            <p>Produk Populer</p>
            <h5><b>Rp100.900</b> <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp70.000 </small><small
                class="badge text-bg-white text-danger">-30%</small>
            </h5>

            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.1 <small
                class="ps-3">Terjual 150</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/mdl.jpg" alt="" class="card-img-top">
          <div class="p-3">
            <p>Mendali Wisuda</p>
            <h5><b>Rp99.900 </b><br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp30.900 </small><small
                class="badge text-bg-white text-danger">-78%</small>
            </h5>
            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.1 <small
                class="ps-3">Terjual 105</small></small>
          </div>
        </div>
      </div>
      <div class="col-2 mb-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="card palu">
          <img src="img/hj.png" alt="" class="card-img-top">
          <div class="p-3">
            <p>Hampers Package</p>
            <h5><b>Rp200.900</b> <br>
              <small class="text-secondary" style="text-decoration: line-through 2px black; ">Rp99.000 </small><small
                class="badge text-bg-white text-danger">-52%</small>
            </h5>
            <div class="badge text-white" style="background-color: #5bba59;">Grosir</div>
            <br>
            <small class="text-secondary"><i class="fa-solid fa-star" style="color:  #d4950c;"></i> 4.4 <small
                class="ps-3">Terjual 199</small></small>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- pencarian populer -->
  <section class="container-fluid">
    <div class="row mx-5 mb-5 mt-5">
      <h4 class=" mb-4"><b>Pencarian Populer</b></h4>
      <div class="d-flex gap-4 mb-4">
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 9rem; height: 2.5rem;">
          <p>Samsung A10</p>
        </div>
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 9rem; height: 2.5rem;">
          <p>Kalung Masker</p>
        </div>
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 8rem; height: 2.5rem;">
          <p>Jas Hujan</p>
        </div>
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 10rem; height: 2.5rem;">
          <p>Kompor Portable</p>
        </div>
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 10rem; height: 2.5rem;">
          <p>Masker Dusckbill</p>
        </div>
        <div class="border  border-3 rounded-2 py-1 px-2 text-center pop" style="width: 9rem; height: 2.5rem;">
          <p>Laptop Asus</p>
        </div>

      </div>
      <div class="col-4 text-secondary mt-4">
        <h5>Handphone & Aksesoris</h5>
        <small>HP xiaomi | HP Samsung | HP Oppo | Iphone | HP Asus | HP Vivo | HP Lenovo | Power Bank Vivan | Power bank
          Wellcomm | Powe Bank Robot | Power Bank Samsung | Headset Sennseiser | Earphone Jabra | Headphone & Aksesoris
        </small>
        <h5 class="mt-5">komputer & Kamera</h5>
        <small>Laptop Asus | Laptop Acer | Macbook | Laptop Lenopo | Laptop Dell | Laptop HP | Laptop MSI | Komputer
          Lainnya | Printer Epson | Printer Canon | Mouse Logiteck | Kamera GoPro | Canon DSLR | Nikon Tripod Exel |
          Kamera Lainnya </small>
      </div>
      <div class="col-4 text-secondary mt-4">
        <h5>Elektronik</h5>
        <small>TV Polytron | TV Sharp | TV Samsung | TV LG | AC Panasonic | AC Daikin | AC Sharp | Kulkas LG | Kulkas
          Sharp | Kulkas Polytron | Mesin Cuci Sharp | Mesin Cuci LG | Mesin Cuci Samsung | mesin Cuci Polytron |
          Elaktronik Lainnya </small>
        <h5 class="mt-5">Kesehatan & Kecantikan</h5>
        <small>Makeup Maybelline | Wardah | Sari Ayu | Parfum bvlgari | Produk Kesehatan | Produk Kecantikan</small>
      </div>
      <div class="col-4 text-secondary mt-4">
        <h5>Sepeda</h5>
        <small>
          Sepeda Polygon | Sepeda United | Sepeda Wimcycle | Sepeda Fullbike | Sepeda Lipat | Sepeda MTB | Sepeda BMX |
          Sepeda Roadbike | Sepeda City bike | Sepeda Fixie | Sepeda Onthel | Sepeda Terbaru</small>
        <h5 class="mt-5">Hobi Koleksi & Olahraga</h5>
        <small>
          Yonex | Eiger | Adidas | Nike | Sepatu Bola Specs | Sepatu Futsal Puma | Bola Mikasa | Bola Basket Spalding |
          Sepatu League | Gitar
          Yamaha | Boneka Doraemon | Action Figure Bandai | Diecast Hot Wheels | Bass Fender |Hobi koleksi lainnya |
          Perlengkapan
          olahraga</small>
      </div>
    </div>
    <div class="row text-secondary mx-5">
      <small>Tunggu apa lagi? Kembangkan toko online Anda dengan mempromosikan produk-produk unggulan Anda di Bukalapak!
        Selain itu, Bukalapak juga bekerja sama dengan brand-brand terkemuka dengan menghadirkan toko resmi brand
        terbaik untuk kategori elektronik hingga fashion sehingga Anda dapat memastikan produk yang Anda beli merupakan
        produk original 100%. Produk lengkap, berkualitas, harga murah dengan promo diskon setiap hari, serta sistem
        pembayaran dan pengiriman yang aman menjadikan Bukalapak sebagai e-commerce terpercaya dan terkemuka andalan
        masyarakat Indonesia.Jadi Pastikan Anda memiliki online shop di Bukalapak, Tempat Jual Beli Online Terpercaya di
        Indonesia

      </small>
    </div>
    <div class="row mx-5 mt-5 mb-5 text-secondary">
      <div class="col-2">
        <img src="img/6.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>Jaminan 100% Aman</b></p>
        <small>Payment system Bukalapak menjamin keamanan uang Anda dalam bertransaksi. Pelajari amannya
          Bukalapak</small>
      </div>
      <div class="col-2">
        <img src="img/5.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>Kemudahan Pembayaran</b></p>
        <small>Lapakin menyediakan berbagai metode pembayaran untuk bertransaksi</small>
      </div>
      <div class="col-2">
        <img src="img/4.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>Professional CS</b></p>
        <small>Customer Support Bukalapak siap membantu Anda melalui Lapakbantuan</small>
      </div>
      <div class="col-2">
        <img src="img/3.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>Jasa pengiriman</b></p>
        <small>Bukalapak menyediakan berbagai pilihan jasa pengiriman dengan jangkauan nasional</small>
      </div>
      <div class="col-2">
        <img src="img/2.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>6 Manfaat untuk Pelapak</b></p>
        <small>Dapatkan keuntungan seperti akses ke komunitas Bukalapak serta tips dan trik berjualan online</small>
      </div>
      <div class="col-2">
        <img src="img/1.png" alt="" style="width: 5rem;" class="mb-5">
        <p><b>Kemudahan Akses Mobile</b></p>
        <small>Download aplikasi Bukalapak di Android dan iOS. Nikmati kemudahan jual beli dari gadget Anda</small>
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
        <div class="card mb-3 pt-2 text-center popwe" style="width: 18rem;">
          <h5 class="fw-normal">Bantuan (Hubungi Kami)</h5>
        </div>
        <div class="card pt-2 mb-3 text-center popwe" style="width: 15rem;">
          <h5 class="fw-normal">FAQ (Tanya Jawab)</h5>
        </div>
        <div class="card pt-2 text-center popwe " style="width: 15rem;">
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
  <section class="container-fluid border-top pt-3 pb-3 ">
    <small class="text-secondary mx-5">&copy; 2023 Hak Cipta Terpelihara PT.Lapakin.com</small>
  </section>


  <!-- Bootstrap 4
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script> -->
  <!-- Bootstrap 4 -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
  <!-- boostrap 5 -->
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