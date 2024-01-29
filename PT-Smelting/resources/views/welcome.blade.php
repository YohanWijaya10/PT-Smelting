<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/index.css">
    <style>
        :root{
            --white-muted: #ffffff1a;
        }
        nav {
            background-color: transparent;
            backdrop-filter: blur(0.25rem) !important;
            -webkit-backdrop-filter: blur(0.25rem) !important;

        }

        .Countainer1{
            margin-top: -100px; 
        }
        .imgProfile{

            width: 80%;
            margin-top: 10%;
            
        }
        .textProfile{
            margin-top: 5%;
        }
        
    </style>
</head>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light  sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logosmelting.png" width="70" height="70" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="Countainer1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img src="/img/imgCarousel1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/img/coba1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/imgCarousel1.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

       
          <div class="div">
            
          </div>
          <div class="container-sm d-flex justify-content-center  ">
            <div class="row ">
              <div class="col-md-6 text-center">
                <img class="imgProfile" src="img/coba1.jpg"   >
              </div>
              <div class="col-md-6 textProfile  ">
                <div class="row">
                    <h2>Profile</h2>
                </div>
                <div class="row">
                    <p>PT. Smelting is the first copper smelter and refinery in Indonesia. PT. Smelting use Mitsubishi technology in Copper smelting process and ISA technology in copper refining process. Mitsubishi process is a continuous process of smelting and converting, with a friendly environment and economically.</p>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"><button type="button" class="btn btn-success">Success</button>
                    </div>


                </div>
              </div>
              
            </div>
          </div>
    </div>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>