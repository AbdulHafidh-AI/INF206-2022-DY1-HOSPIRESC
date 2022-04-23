     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2F303A">
         <div class="container-fluid">
             <a class="navbar-brand font-brand" href="#">
                 <img src="/assets/icon/Logo.png" alt="" width="50" height="45" class="d-inline-block align-text-top">
                 HOSPIRESC</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link active" href="tentang kami"> <span
                                 class="{{ $title == 'Tentang Kami' ? 'blue' : '' }}"> TENTANG <br> KAMI </span> </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="kontak"> <span
                                 class="{{ $title == 'Kontak' ? 'blue' : '' }}">KONTAK</span> </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="forum"> <span class="{{ $title == 'forum' ? 'blue' : '' }}">
                                 FORUM </span> </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="riwayat"> <span
                                 class="{{ $title == 'riwayat' ? 'blue' : '' }}">
                                 RIWAYAT </span> </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" href="beranda"> <span
                                 class="{{ $title == 'Beranda' ? 'blue' : '' }}">
                                 BERANDA </span> </a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle namaRS" href="/profile" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="\assets\images\profil-rumah-sakit.jpeg" alt="Avatar" class="avatar"> {{ $_SESSION['name'] }} </a>
                        </a>
                        <ul class="dropdown-menu" style="background-color: #2F303A" aria-labelledby="navbarDropdown">
                            <div class="text-center">

                                <li><a class="dropdown-item fiturProfile" href="profile">PROFILE</a></li>
                                <li><hr class="dropdown-divider fiturProfle"</li>
                                <li><a class="dropdown-item fiturProfile"  href="logout">LOGOUT</a></li>
                            </div>
                        </ul>
                    </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- End Of Navbar-->
