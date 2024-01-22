@extends('layouts.index')
@section('content')
    
   
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To SMK TERPUT 2 BEKASI!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">SELANJUTNYA</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontak kami</h2>
                    
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <h4 class="my-3">Alamat</h4>
                        <p class="text-muted"> jl.rajawali v jl.anggrek raya no.29,rt005/rw023,kayuringin jaya,kec.bekasi selatan kota bks,jawa barat 17144</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <h4 class="my-3">Email</h4>
                        <p class="text-muted">terput2@gmail.com</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <h4 class="my-3">no.tlp</h4>
                        <p class="text-muted">0218894749</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">jurusan</h2>
                    <h3 class="section-subheading text-muted">akutansi,pemasaran,administrasi perkantoran,perbankan,rekayasa perangkat lunak,multimedia</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                               
                                <img class="img-fluid" src="https://www.cerdika.com/wp-content/uploads/2018/01/Gambar-Siswa-SMK-Telkom-Jurusan-RPL.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">RPL</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">

                                <img class="img-fluid" src="https://4.bp.blogspot.com/-oMQ-p3OsMI8/WoB2H8Y4lzI/AAAAAAAAAEs/lkzcFoQ2fnAuLTLSd9K-hva4RQMQYnrUACLcBGAs/s1600/akuntansi5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">AKUTANSI</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                               
                                <img class="img-fluid" src="https://www.quipper.com/id/blog/wp-content/uploads/2019/09/Template-Image-Blog-white-20.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PERBANKAN</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                
                                <img class="img-fluid" src="https://th.bing.com/th/id/OIP.6ZTh-LxOpm_QQOnF0TA3qQHaE9?pid=ImgDet&rs=1" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ADMINISTRASI PERKANTORAN</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                               
                                <img class="img-fluid" src="https://ppdb.smkpgrituren.sch.id/wp-content/uploads/2020/11/DSCF4583-1536x864.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PEMASARAN</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                               
                                <img class="img-fluid" src="https://th.bing.com/th/id/R.fd5bc39d4916718f99f3f6e88b301ed9?rik=slTiO%2fbF5u7mjw&riu=http%3a%2f%2fsmknidaeladabi.sch.id%2fwp-content%2fuploads%2fgambar-ninddya-no-background.png&ehk=Afd2%2b%2f6%2bgepQ93%2bHAZpS%2f4wqx9FqmWtRO6oSFf1Ielo%3d&risl=&pid=ImgRaw&r=0" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MULTIMEDIA</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">tentang kami</h2>
                    
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://jsb.co.id/wp-content/uploads/2020/06/visi.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>visi</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Menjadi yayasan pendidikan berkualitas terbaik dan berwawasan global</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://3.bp.blogspot.com/-YUX6gJtsxUQ/V8SgM1UPQ6I/AAAAAAAAAM0/EI65WcqFvZcAcSlBIl0YrmC2u4itiovJQCLcB/s1600/misi.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misi</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Mewujudkan SDM yang kompeten,sarana prasaran memadai,sistem mutakhir dan fokus pada keberhasilan siswa</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="https://img.lovepik.com/element/40051/3448.png_1200.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>moto</h4>
                                
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Berakhlak mulia dan inovatif</p></div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">galeri siswa</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/X.jpg" alt="..." />
                            <h4>X RPL</h4>
                           
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/XI.jpg" alt="..." />
                            <h4>XI RPL</h4>
                            
                        
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/XII.jpg" alt="..." />
                            <h4>XII RPL</h4>
                            
                           
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        
        
       @endsection  