      <!-- Navbar -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

          <!-- Logo -->
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo-tambah-pd-full.png"
                      class="mr-2" alt="logo" /></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-tambah-pd-head.png"
                      alt="logo" /></a>
          </div>
          <!-- Logo -->

          <!-- Judul -->
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <p class="page-title"><?= $halaman; ?></p>
          </div>
          <!-- Judul -->

          <div class="navbar-brand-wrapper d-flex align-items-center justify-content-end px-3">

              <!-- Search -->
              <div class=" d-flex align-items-center mx-2">
                  <form class="d-flex search" role="search">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-search color-dark"></i></span>
                      <input class="form-control me-2" type="search" placeholder="Search here.." aria-label="Search">
                  </form>
              </div>
              <!-- Search -->

              <!-- Notification -->
              <div class=" d-flex align-items-center mx-2 navbar-notif">
                  <i class="fas fa-bell"></i>
              </div>
              <!-- Notification -->

              <!-- Foto Profil -->
              <div class=" d-flex align-items-center mx-2 navbar-profil">
                  <img src="images/faces/face28.jpg" alt="profile" class="profil" />
              </div>
              <!-- Foto Profil -->
          </div>
      </nav>