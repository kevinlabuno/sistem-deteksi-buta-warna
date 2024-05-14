<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Deteksi Buta Warna</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

        <section class="py-5">
                <div class="container px-5">
                    
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <a href="{{route('beranda')}}" class="btn btn-dark btn-lg">Kembali</a>
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"> <img src="assets/eyes.png" alt="..." style="width: 100px; height: auto;"></div>
                            <h1 class="fw-bolder">Hasil Tes Anda</h1>
                        </div>
                        <p class="lead fw-normal text-muted mb-0">ID Tes: &nbsp;&nbsp;&nbsp;<b>{{$data->id}}</b></p>
                        <hr>
                        <p>Nama:&nbsp;&nbsp;&nbsp; <b> {{$data->nama}}</b>  <br> Alamat:&nbsp;&nbsp;&nbsp;<b>{{$data->alamat}}</b>  <br>Umur:&nbsp;&nbsp;&nbsp;<b>{{$data->umur}}</b> <br>Jenis Kelamin:&nbsp;&nbsp;&nbsp;<b>{{$data->jenis}}</b> </p>
                        <hr>

                        <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 1</h4>
                                                     <p>Jawaban: 12</p>
                                                     <p>Jawaban Anda: {{$data->p1}}</p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test1.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                        </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 2</h4>
                                                     <p>Jawaban: 8</p>
                                                     <p>Jawaban Anda:  {{$data->p2}}</p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test2.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 3</h4>
                                                     <p>Jawaban: 29</p>
                                                     <p>Jawaban Anda:  {{$data->p3}}</p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test3.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>


                            <div class="row gx-5 justify-content-center">
                                 <div class="col-lg-11 col-xl-9 col-xxl-8">
                                     <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                         <div class="card-body p-0">
                                             <div class="d-flex align-items-center">
                                                 <div class="p-5">
                                                     <h4 class="fw-bolder">Plate 4</h4>
                                                     <p>Jawaban: 6</p>
                                                     <p>Jawaban Anda:  {{$data->p4}}</p>
                                                       
                                                 </div>
                                                 <img class="img-fluid" src="assets/plate/test4.jpg" alt="..." style="width: 200px; height: auto;">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            
                        </div>
                     </div>
                   </div>
              </section>
   
        </main>

            @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
