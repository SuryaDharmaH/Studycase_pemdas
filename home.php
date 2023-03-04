<?php 

$paraproduct = array (
    array("pakan ikan otomatis ", "beri makan ikan tanpa repot dengan pakan ikan otomatis produk dari jurusan rpl ",100000,"ikan.jpg"),
    array("WEBSITE COMPANY PROFILE ", "Zaman now masih belum punya website percayakan pembuatan website pada kula koding smkn 2 banjarmasin ",500000,"sk.jpg"),
    array("Kursi Jati", "Kursi estetik dengan bahan jati dibuat oleh jurusan Teknik Furniture ",50000,"krusi.jpg"),
    array("Sabun Laundry ", "mewangikan pakaian menggunakan bahan yang aman untuk pakaian produksi dari jurusan kimia industri",20000,"bunsa.jpg"),
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="landing.css">
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Home</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-brand">
        <a class="navbar-brand" href="transaksi.php">Transaksi</a>
        </li>
      </ul>
      <div class="navbar-text">
      <a class="navbar-brand" href="login.php">Logout</a>
      </div>
    </div>
  </div>
    </nav>  
    
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><center>
      <img src="img/gg.png" 
        class="d-block img-fluid" style="height: 200px;" alt="...">
        </center> 
    </div>
  </div>
</div>

<h3 class="mt-4 ms-4">Produk Technopark</h3>

    <div class="container-fluid mt-3 mb-4">
        <div class="row">
        <?php foreach ($paraproduct  as $values =>$value) {?>
            <div class="col-md-3">
                <div class="card  mt-2">
                <img src="<?php echo $value[3]; ?>" class="card-img-top" alt="...">
                    <div class="card-body tescard">
                        <p><?php echo $value[0]; ?></p>
                        <p><?php echo $value[1]; ?></p>
                        <p><?php echo $value[2]; ?></p>
                    </div>
                </div>
                <form class="" action="transaksi.php" method="post">
                    
                    <input type="hidden" name="data1" id="data" value="<?php echo $value[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $value[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $value[2] ?>">
                    <button class=" btn btn-secondary mt-2" style="width:100%;">
                        Pilih Produk
                    </button>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>

    <footer class="mt-auto py-3 bg-dark text-center ">
        <div class="container">
            <span class="text-white">@Copyright: Surya Dharma Halim</span>
        </div>
    </footer>
</body>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>