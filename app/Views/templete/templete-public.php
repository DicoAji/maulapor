<!-- heeder -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="/favicon.ico"
      type="image/x-icon"
    />
    <!-- style.css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <!-- bootstraps -->
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

</script>
    
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="position:sticky;top:0" >
      <div class="container">
        <img src="/assets/img/logo/logo.png" class="logo-nav" alt="" />
        <button
          class="navbar-toggler"
          style="color: transparent !important;"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon kuning" 
            ><i class="fas fa-bars"></i
          ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
            <li class="nav-item"  >
              <a class="nav-link <?= ($title == 'Beranda-MauLapor') ? 'public-nav-active' : '' ?>" id="nav_beranda" href="/Umum/index">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= ($title == 'Koleksi-MauLapor') ? 'public-nav-active' : '' ?>"  id="nav_koleksi" href="/Umum/koleksi">Koleksi</a>
            </li>
            <li class="nav-item" >
            
              <a class="nav-link <?= ($title == 'Laporkan-MauLapor') ? 'public-nav-active' : '' ?> " data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="nav_laporkan" href="/Umum/laporkan">Laporkan</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/Admin/index">Admin</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

<!-- end header -->


<?= $this->renderSection('content'); ?>




 <!-- footer -->
 <footer class="bg-hitam">
      <div class="p-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12">
              <img src="/assets/img/logo/logo.png" alt="" />
              <a href="https://disdikbud.batangkab.go.id/">
                <p class="kuning mt100">
                  <i class="fas fa-globe kuning"></i>
                  Dinas Pendidikan dan Kebudayaan Kabupaten Batang
                </p>
              </a>
            </div>
            <div class="col-lg-6 col-12 mt-sm-4">
              <div class="row mt-md-3 mt-sm-3">
                <div class="col-lg-6 mt-sm-3 ">
                  <p class="kuning"><strong>KONTAK KAMI</strong></p>
                  <ul>
                    <li>
                      <p class="kuning">
                        <i class="fas fa-home kuning me-2"></i>Jalan Slamet
                        Riyadi No. 29 Batang
                      </p>
                    </li>
                    <li>
                      <p class="kuning">
                        <i class="fas fa-phone-alt kuning me-2"></i>(0285)
                        391321 Ext. 22
                      </p>
                    </li>
                    <li>
                      <p class="kuning">
                        <i class="fas fa-print kuning me-2"></i>(0285) 391321
                      </p>
                    </li>
                    <li>
                      <p class="kuning">
                        <i class="fas fa-envelope kuning me-2"></i
                        >disdikbud@batangkab.go.id
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <p class="kuning"><strong>MENU</strong></p>
                  <ul>
                    <li>
                      <a href="/Umum">Beranda</a>
                    </li>
                    <li>
                      <a href="/Umum/koleksi">Koleksi</a>
                    </li>
                    <li>
                      <a href="/Umum/laporkan" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Laporkan</a>
                    </li>
                    <li>
                      <a href="/Umum/index#tentang" class="tentang-about">Tentang</a>
                    </li>
                    <!-- <li class="hitam">
                      <a class="hitam" href="/Admin/index">Admin</a>
                    </li> -->
                    <!-- <li class="hitam">
                      <a class="hitam" href="/Admin/lupapassword">lupapassword</a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <!-- Modal konfirmasi laporan-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="tengah">
            <h2 class="modal-title text-danger" id="staticBackdropLabel">Perhatian</h2>

          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <div class="tengah">
            <img src="/assets/img/danger.png" alt="danger">
          </div>
          <ul class="mt10"> Jangan asal lapor telitilah benda yang kamu temukan terlebih dahulu </ul>
        </div>
        <div class="modal-footer">
          <a href="/Umum/laporkan" type="button" class="btn btn-success">Lanjutkan</a>
          <!-- <button type="button" class="btn btn-danger" >Close</button> -->
          
        </div>
      </div>
    </div>
  </div>





    <!-- link jquery -->
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-1.7.1.js"
    ></script>
    <!--------------------script index ---------------------------->
    <script src="/assets/jspublic/scriptspublic.js"></script>

     <!-- validasi laporan -->
     <script>
      (function () {
        "use strict";

        var forms = document.querySelectorAll(".needs-validation");

        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
      })();
    </script>

    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
    <script>
      document.querySelector('#public-form-laporan').onsubmit = function(){
        Swal.fire({
        // position: 'top',
        icon: 'success',
        html: '<h2>Terima kasih sudah melapor</h2>',
        // title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1000
        })

      }
    </script>

    <!-- <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
    </script> -->
    
  </body>
</html>