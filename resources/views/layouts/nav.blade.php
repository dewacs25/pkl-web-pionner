<nav class="navbar navbar-expand nav-b animate__animated animate__flash d-lg-block d-none">
    <div class="container-fluid ">
        <div class="row w-100">
            <div class="col-lg-2 ba">
                Lokasi Kami
            </div>
            <div class="col-lg-2 ba">
                <i class="fa-solid fa-phone me-2"></i>  0818-0212-2730 
            </div>
            <div class="col-lg-2 ba">
                mail
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow header_nav animate__animated animate__backInDown" style="z-index: 100; height: 100px;">
    <div class="container-fluid">
        <a class="navbar-brand ms-3 " href=""><img src="{{ asset('img/logo.png') }}" class="img-logo" style="width: 250px;"
                alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link ms-lg-5 <?= $active == 'home' ? 'active text-decoration-underline' : '' ?> " aria-current="page"
                        href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-lg-5 <?= $active == 'tentang' ? 'active text-decoration-underline' : '' ?>"
                        href="/tentang">About us</a>
                </li>
                <li class="nav-item dropdown dropdown-1 ms-lg-5">
                    <a class="nav-link dropdown-toggle mainmenubtn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-child animate__animated animate__fadeIn">
                        @foreach ($teknologis as $teknologi)
                            
                        <li><a class="dropdown-item p-3" style="font-size: 13px;" href="/l/{{ strtolower(str_replace(' ','_',$teknologi->nama_teknologi)) }}/{{ $teknologi->id_teknologi }}">{{ $teknologi->nama_teknologi }}</a></li>
                        @endforeach
                  
                    </ul>
                  </li>
          
                <li class="nav-item">
                    <a class="nav-link ms-lg-5 <?= $active == 'portofolio' ? 'active text-decoration-underline' : '' ?> " href="/portofolio">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-lg-5 <?= $active == 'contact' ? 'active text-decoration-underline' : '' ?>" href="/contact">Contac Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-lg-5 border border-warning border-3 text-secondary pe-3 ps-3 no" href="https://wa.me/+6282125246091?text=Halo%20nama%20saya%20nadine" target="_blank">0818-0212-2730 <i class="fa-sharp fa-solid fa-paper-plane ms-1"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
