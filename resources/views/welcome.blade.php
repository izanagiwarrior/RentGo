@extends('layouts.app')

@section('content')

<!-- Favicon -->
<link href="{{ asset('img/logo.png') }}" rel="icon" type="image/png">

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <h1>Pusat Kerajinan Rotan
            di Kalimantan Tengah</h1>
        <!-- <div class="masthead-heading text-uppercase">di Kalimantan Tengah</div> -->
        <p>Lebih dari 100 produk lokal hasil karya pengerajin dipasarkan dan dilakukan analisasi di Aplikasi ini.</p>
        <a class="btn btn-danger btn-xl text-uppercase rounded" href="#services"> MULAI SEKARANG</a>
    </div>
</header>
<!-- Services-->
<!-- <section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Beberapa layanan yang dapat anda akses dalam laman web kampung rotan diantaranya</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x icon-danger"></i>
                    <i class="fas fa-clipboard-list fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">E-Catalogue</h4>
                <p class="text-muted">Katalog produk perajin rotan di Kota Palangka Raya beserta informasi lengkap masing-masing produk</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x icon-danger"></i>
                    <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Dashboard</h4>
                <p class="text-muted">Dashboard data digital marketing yang telah dilakukan oleh perajin.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x icon-danger"></i>
                    <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Collaboration</h4>
                <p class="text-muted">Portal kolaborasi kerja sama untuk proyek rotan dalam skala mengenah dan besar</p>
            </div>
        </div>
    </div>
</section> -->
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Best Product</h2>
            <h3 class="section-subheading text-muted">Dalam E-katalog terdapat lebih dari 100 produk yang menjadi karya orisinil pengerajin bangsa.</h3>

        </div>
        <div class="row">
            @foreach($product as $pt)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link show-data" href="{{route('detailProduk', $pt->id)}}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" width="100%" src="{{asset('storage/'. $pt->photo)}}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{$pt->title}}</div>
                        <div class="portfolio-caption-subheading text-muted">{{$pt->description}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar1.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>29 September 2021</h4>
                        <h4 class="subheading">Komunikasi Perajin</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Penentuan latar belakang dan pengumpulan data bersama salah satu perwakilan perajin rotan di Kota Palangka Raya</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar2.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>17 Oktober 2021</h4>
                        <h4 class="subheading">Kerja Sama Mitra</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Penandatanganan surat perjanjian kerja sama mitra dengan Kabid IKM Dinas Perindustrian dan Perdagangan Provinsi Kalimantan Tengah</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar3.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>21 Oktober 2021</h4>
                        <h4 class="subheading">Presentasi Kerja Sama</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Presentasi prototype kepada Dinas Perindustrian dan Perdagangan Kota Palangka Raya</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar4.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>21 Oktober 2021</h4>
                        <h4 class="subheading">Kerja sama Mitra</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Penandatanganan surat perjanjian kerja sama mitra dengan Kabid IKM Dinas Perindustrian dan Perdagangan Kota Palangka Raya</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar5.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>21 Oktober 2021</h4>
                        <h4 class="subheading">Koordinasi Mitra Laboratorium</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Koordinasi bersama mitra laboratorium yang terdiri dari Laboratorium EDE, Laboratorium ESD, dan komunitas JCI </p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('img/gambar6.jpg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>29 Oktober 2021</h4>
                        <h4 class="subheading">Survey & Pendataan Perajin</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Survey lapangan dan pendataan toko, sejarah toko, produk, dan sejarah produk yang dibuat dan dipasarkan oleh perajin</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <a style="text-decoration:none; color:black;"  href="#!"><img class="mx-auto rounded-circle" src="{{asset('img/bima.jpg')}}" alt="..." />
                        <h4>Muhammad Rizal Bimantoro</h4>
                        <p class="text-muted">Co-Founder</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/rebimantoro/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/rebimantoro/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/adv.jpg')}}" alt="..." />
                        <h4>Ananda Viamianni</h4>
                        <p class="text-muted">Founder</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/anandaviamianni/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/anandaviamianni/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/nop.jpg')}}" alt="..." />
                        <h4>Naufal Rahmadaffa Ariekananda</h4>
                        <p class="text-muted">Co-Founder</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/naufalr23"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/naufal-rahmadaffa-ariekananda-2078851a2/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="team-member-dev">
                <h2 class="section-heading text-uppercase">Dev Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/dapid.jpg')}}" alt="..." />
                        <h4>David William Da Costa</h4>
                        <p class="text-muted">Frontend Developer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/davdwilliam_/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/david-william-da-costa-800a90184/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/pais.jpg')}}" alt="..." />
                        <h4>M. Faiz Triputra</h4>
                        <p class="text-muted">Backend Developer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/faiz_triputra/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/mfaiztriputra/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/fakhri.jpg')}}" alt="..." />
                        <h4>Fakhri Hassan Maulana</h4>
                        <p class="text-muted">Scrum Master</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/fakhrimln"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/fakhrimln/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/faruq.jpg')}}" alt="..." />
                        <h4>Muhammad Hafeezi Faruqi</h4>
                        <p class="text-muted">Fullstack Developer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/faruqifiiz/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/faruqi-hafiz/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/bim.jpg')}}" alt="..." />
                        <h4>Bimo Agung Fahrizky</h4>
                        <p class="text-muted">UI/UX Designer / Frontend Developer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/bimoagung_/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/bimoagungfahrizky/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/apip.jpg')}}" alt="..." />
                        <h4>Afif Zaky Muhana</h4>
                        <p class="text-muted">UI/UX Designer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/afifzaky/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/afifzakymuhana/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="team-member-dev">
                <h2 class="section-heading text-uppercase">Data Scientist</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#">
                        <img class="mx-auto rounded-circle" src="{{asset('img/ian.jpg')}}" alt="..." />
                        <h4>Alfian Maulana Fardhani</h4>
                        <p class="text-muted">Data Science</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/alfiannnmf/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/ayyub.jpg')}}" alt="..." />
                        <h4>Muhammad Ayyub Ramli</h4>
                        <p class="text-muted">Data Science</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/mhyubr_/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/mhyubr"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="text-center">
            <div class="team-member-dev">
                <h2 class="section-heading text-uppercase">Content Creator</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#">
                        <img class="mx-auto rounded-circle" src="{{asset('img/kk.jpg')}}" alt="..." />
                        <h4>Karisma Nabil Santosa</h4>
                        <p class="text-muted">Content Designer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/kharisma_kun/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/karisma-nabil-a8a78b107/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member-dev">
                    <a style="text-decoration:none; color:black;"  href="#!">
                        <img class="mx-auto rounded-circle" src="{{asset('img/pradita.jpg')}}" alt="..." />
                        <h4>Pradita Cahyani</h4>
                        <p class="text-muted">Content Designer</p>
                    </a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/praditach_/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.linkedin.com/in/pradita-cahyani-388577222/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
        <div class="text-center">
            <div class="team-member-collab">
                <h2 class="section-heading text-uppercase">In Collaboration With</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member-collab mx-auto">
                        <div class="team-member-collab-esd">
                            <img src="{{asset('img/ESD 1.png') }}" alt="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member-collab mx-auto">
                        <div class="team-member-collab-ede">
                            <img src="{{asset('img/2.png') }}" alt="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member-collab mx-auto">
                        <img src="{{asset('img/JCI 1.png') }}" alt="..." />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member-collab mx-auto">
                        <img src="{{asset('img/1.png') }}" alt="..." />
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member-collab mx-auto">
                        <img src="{{asset('img/EDE 1.png') }}" alt="..." class="ede"/>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Contact-->
<section class="page-section bg-contact" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
        </div>
        <div class="row align-items-stretch my-5">
            <div class="col-lg-4 d-flex justify-content-end align-items-center p-3">
                <div class="bg-danger d-flex justify-content-center align-items-center" style="width:50px; height: 50px; border-radius: 50%;">
                <a style="color: white;" href="https://maps.google.com/?q=-2.1730877241966886, 113.87969577301394" target="_blank">
                    <i class="fas fa-map-marker-alt" style="width: 25px; height: 25px;"></i>
                </a>
                </div>
            </div>
            <div class="col-lg-8 p-3">
                    <h3>Disperindag Kota Palangka Raya Bukit Tunggal,<br /> Jekan Raya, Palangka Raya City, <br /> Central Kalimantan 74874</h3>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center p-3">
                <div class="bg-danger d-flex justify-content-center align-items-center" style="width:50px; height: 50px; border-radius: 50%;">
                <a style="color: white;" href="https://wa.me/+6281235864246" target="_blank">
                    <i class="fas fa-phone" style="width: 25px; height: 25px;"></i>
                </a>
                </div>
            </div>
            <div class="col-lg-8 p-3">
                    <h3>+6281235864246</h3>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center p-3">
                <div class="bg-danger d-flex justify-content-center align-items-center" style="width:50px; height: 50px; border-radius: 50%;">
                <i class="fas fa-envelope" style="width: 25px; height: 25px;"></i>
                </div>
            </div>
            <div class="col-lg-8 p-3">
                    <h3>kampungrotanid@gmail.com</h3>
            </div>
        </div>
    </div>
</section>

@section('footer')
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->

@endsection