<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gym Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="/js/Chart.js"></script>
    <style>
      .shadow-box {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 20px;
      }

      body {
        font-family: 'Arial', sans-serif;
      }
  </style>
    </head>
    <body >
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow bg-black" style="font-family: Arial, Helvetica, sans-serif;">
        <div class="container">
          <a class="navbar-brand" href="#">Gym Exercise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="beranda.html">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="informasi_pengguna.html">Informasi Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="program_latihan.html">Program Latihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="panduan_nutrisi.html">Panduan Nutrisi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="lokasi_gym.html">Lokasi Gym</a>
              </li>
          </div>
        </div>
      </nav>
    <!-- end -->

    <!--foto profile-->
    <div class="container rounded ">
      <div class="shadow-box rounded row-gap-3">
      <div class="text-center mt-5">
        <img id="gambarUtama" src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="img-thumbnail rounded-circle" alt="Gambar 1">
      </div>
      <div class="text-center mt-3">
        <button id="gantiGambar" class="btn btn-secondary">Ganti Gambar</button>
      </div>
      </div>
    </div>

    
  <script>
    $(document).ready(function() {
      // Fungsi untuk mengganti gambar saat tombol diklik
      $("#gantiGambar").click(function() {
        // Ganti gambar dengan gambar yang baru
        $("#gambarUtama").attr("src", "gambar2.jpg");
      });
    });
  </script>
  <!-- End -->

  <!-- form -->
<div class="container rounded ">
  <div class="shadow-box gap-0 row-gap-3 rounded">
  <div class="container mt-3 mx-5">
    <div class="row gap-0 row-gap-3 mx-5">
      <div class="col-md-6 mx-auto">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Input text">
          <label for="floatingInput" style="color: black;">Nama</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
          <button class="btn btn-secondary h-75 p-3">
            &#9997;
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 mx-5">
    <div class="row mx-5">
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Input text">
          <label for="floatingInput" style="color: black;">Tujuan Kebugaran</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
          <button class="btn btn-secondary h-75 p-3">
            &#9997;
          </button>
        </div>
      </div>
    </div>
  </div>

  
    <div class="container mt-3 mx-5">
      <div class="row mx-5">
        <div class="col-md-6 mx-auto">
          <div class="form-floating mb-3">
            <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Input text">
            <label for="floatingInput" style="color: black;">No Telepon</label>
          </div>
        </div>
  
        <div class="col-md-6">
          <div class="input-group mb-3">
            <button class="btn btn-secondary h-75 p-3">
              &#9997;
            </button>
          </div>
        </div>
      </div>
    </div>
  
  <div class="container mt-3 mx-5">
    <div class="row mx-5">
      <div class="col-md-6" style="padding-top: 10px;">
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-sm" placeholder="Tinggi Badan" size="10">
          <div class="input-group-prepend">
            <span class="input-group-text h-100">CM</span>
          </div>
          <button class="btn btn-secondary ml-2 h-75 m-1 p-3">
            &#9997;
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 mx-5">
    <div class="row mx-5">
      <div class="col-md-6" style="padding-top: 10px;">
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-sm" placeholder="Berat Badan" size="10">
          <div class="input-group-prepend">
            <span class="input-group-text h-100">KG</span>
          </div>
          <button class="btn btn-secondary ml-2 h-75 m-1 p-3">
            &#9997;
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3 mx-5">
    <div class="row mx-5">
        <div class="col-md-6" style="padding-top: 10px;">
        <div class="form-group mb-3">
          <label for="inputEmail">Email address:</label>
          <input type="email" class="form-control form-control-auto" id="inputEmail" placeholder="Enter email" size="20">
        </div>
        
        <button class="btn btn-secondary ml-2 h-15 m-1 p-3">
          &#9997;
        </button>
        <div class="form-group mb-3">
          <label for="inputPassword">Password:</label>
          <input type="password" class="form-control form-control-auto" id="inputPassword" placeholder="Enter password">
        </div>
        <button class="btn btn-secondary ml-2 h-15 m-1 p-3">
          &#9997;
        </button>
        </div>
      </form>
    </div>
  </div>
<!--END-->

<!--button-->
<div class="container mt-5 align-items-center">

  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoutModal">
    Logout
  </button>

  
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
    Hapus Akun
  </button>
</div>


<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Logout</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteAccountModalLabel">Konfirmasi Hapus Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus akun? Tindakan ini tidak dapat dibatalkan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus Akun</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs5kWN7UCRJ9ex+6Fdy8gpx0dIvdyu4cPfFVmpIVj7UbiA/U6HT5oHlvG7L8Z5o" crossorigin="anonymous"></script>
</div>
</div>
<!--end-->

<!-- Kalender --> 
<style type="text/css">
  body{
    font-family: roboto;
  }
</style>

<h1><center>Laporan Harian Gym</center></h1>



<div style="container: pading 500px;">
<div style="width: 1000px;height: 500px">
  <canvas id="myChart"></canvas>
</div>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');

  // Data untuk grafik
  var data = {
    labels: ["S", "S", "R", "K", "J", "S", "M"],
    datasets: [{
      label: 'Laporan kalori harian',
      data: [1200, 1978, 1666, 1444, 1222, 1333, 1800],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };

  // Opsi untuk grafik
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  };

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });

  // Fungsi untuk menggeser data per minggu
  function shiftData() {
    // Geser data ke kiri
    data.labels.push(data.labels.shift());
    data.datasets[0].data.push(data.datasets[0].data.shift());

    // Update grafik
    myChart.update();
  }

  // Set interval untuk menggeser data setiap minggu
  setInterval(shiftData, 7 * 24 * 60 * 60 * 1000); // 7 hari * 24 jam * 60 menit * 60 detik * 1000 milidetik
</script>
</div>

    </body>
</html>