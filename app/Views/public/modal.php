<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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
</head>
<body>
    <!--__________________ Modal -->
    <p><?= $benda['nama_benda']; ?></p>
    <p id="penemu">Ditemukan Oleh <?= $benda['penemu']; ?></p>
    <p id="Ditemukan di">Ditemukan di <?= $benda['lokasi_penemuan']; ?></p>
    <p id="tglpenemuan">Ditemukan pada tanggal <?= $benda['tanggal_penemuan']; ?></p>


    
    <!-- <div
                class="modals fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modals-dialog">
                  <div class="modasl-content">
                    <div class="modals-header">
                      
                      <h5 class="modals-title" id="exampleModalLabel">
                      ?= $benda['nama_benda']; ?>
                      </h5>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <p id="penemu">Ditemukan Oleh bapak ?= $benda['penemu']; ?></p>
                        <p id="Ditemukan di">Ditemukan di ?= $benda['lokasi_penemuan']; ?></p>
                        <p id="tglpenemuan">Ditemukan pada tanggal ?= $benda['tanggal_penemuan']; ?></p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-transparant"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
               -->
    
    
     <!-- <div class="container bg-light"> 
         <p>?= $benda['nama_benda']; ?></p>
         <h5  class="title" >
            ?= $benda['nama_benda']; ?>
        </h5> -->
        <!-- <p id="penemu">Ditemukan Oleh bapak ?= $benda['penemu']; ?></p>
        <p id="Ditemukan di">Ditemukan di ?= $benda['lokasi_penemuan']; ?></p>
        <p id="tglpenemuan">Ditemukan pada tanggal ?= $benda['tanggal_penemuan']; ?></p> --

     /div>-->
   



</body>
</html>