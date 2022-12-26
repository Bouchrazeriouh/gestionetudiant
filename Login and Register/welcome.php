<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: blue;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: blue;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: blue;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
    :root{
   --blue:#0097e6;
   --orange:#f39c12;
   --red:#e74c3c;
   --white:#fff;
   --light-color:black;
   --black:#87ceeb;
   --light-bg:#333;
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   height: 5px;
   width:10px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   background-color: var(--light-bg);
}

.message{
   position: sticky;
   top:0;
   max-width: 1200px;
   padding:1.5rem 2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
   z-index: 1000;
   background-color: var(--light-bg);
   margin:0 auto;
}

.message span{
   color:var(--white);
   font-size: 2rem;
}

.message i{
   color:var(--red);
   font-size: 2.5rem;
   cursor: pointer;
}

.message i:hover{
   color:var(--white);
}

.title{
   padding:1.5rem 1rem;
   text-align: center;
   background-color: var(--black);
   font-size: 3rem;
   text-transform: uppercase;
   color:var(--white);
}

.title span{
   color:var(--red);
}

.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   border-radius: .5rem;
   color:var(--white);
   font-size: 1.8rem;
   cursor: pointer;
   padding:1rem 3rem;
   text-transform: capitalize;
   text-align: center;
   margin-top: 1rem;
}

.btn{
   background-color: var(--blue);
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--white);
   color:var(--black);
}

.flex-btn{
   display: flex;
   flex-wrap: wrap;
   gap:1rem;
}

.flex-btn > *{
   flex:1;
}

.form-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color: var(--black);
   padding:2rem;
   text-align: center;
}

.form-container form h3{
   font-size: 3rem;
   margin-bottom: 1rem;
   color:var(--white);
   text-transform: uppercase;
}

.form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.4rem;
   font-size: 1.8rem;
   color:var(--white);
   background-color: var(--light-bg);
   margin:1rem 0;
}

.form-container form p{
   font-size: 2.3rem;
   color:var(--light-color);
   padding:1rem 0;
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.profile-container .profile{
   width: 40rem;
   border-radius: .5rem;
   background-color: var(--#87ceeb);
   padding:2rem;
   text-align: center;
}

.profile-container .profile img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: .5rem;
}

.profile-container .profile h3{
   font-size: 2.5rem;
   padding:.5rem 0;
   color:var(--white);
}

.update-profile-container{
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   min-height: 100vh;
}

.update-profile-container form{
   width: 70rem;
   border-radius: .5rem;
   background-color: var(--#87ceeb);
   padding:2rem;
   text-align: center;
}

.update-profile-container form .flex{
   text-align: left;
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
}

.update-profile-container form .flex .inputBox{
   width: 49%;
}

.update-profile-container form img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
   margin-bottom: 1rem;
}

.update-profile-container form .flex .inputBox span{
   font-size: 2rem;
   color:var(--light-color);
   display: block;
   padding-top: 1rem;
}

.update-profile-container form .flex .inputBox .box{
   width: 100%;
   padding:1.2rem 1.4rem;
   border-radius: .5rem;
   font-size: 1.8rem;
   color:var(--white);
   margin:1rem 0;
   background-color: var(--light-bg);
}













/* media queries  */

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .update-profile-container form .flex .inputBox{
      width:100%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

}
</style>
</head>

<body class="bg-light">



    <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand text-primary fw-bold fs-4" href="#">Welcome</a>
            <div class="btn-group">
                <button class="btn btn-primary btn-primary px-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bars"></i>
                Click
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#services">Cards</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <section class="home py-5" id="home">
        <div class="container-lg">
            <div class="row  min-vh-100 align-items-center align-content-center">
                <div class="col-md-16">
                    <div class="home-img text-center">
                    <section class="form-container">

              <form action="" method="post" enctype="multipart/form-data">
              <h3 class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Formulaire</h3>
              <p align="left">Nom:  <span><?=$_SESSION['name'];?></span></p>
              <p align="left">E-mail : <span><?=$_SESSION['username'];?></span></p>
              <input type="Filiére" required placeholder="Enter votre filiére" class="box" name="pass">
              <input type="Niveau" required placeholder="Entrez votre Niveau" class="box" name="cpass">
              <input type="Niveau" required placeholder="Entrez votre Numero de Telephone" class="box" name="cpass">
              <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
              <a href="https://selectpdf.com/export-to-pdf/?" onclick="if(!this.urlAdded)href+='&url='+encodeURIComponent(location.href);this.urlAdded=1"><img src="https://selectpdf.com/buttons/save-as-pdf2.gif"/></a> 
          
            <input type="submit" value="Valider" class="btn" name="submit" href="#View More">
            </form>

</section>

                    </div>
                </div>

            </div>
        </div>
    </section>
                
<section class="services " id="services">
    <div class="container-lg ">
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Cards</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="CD.jpeg" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Bouchra Zeriouh</h3>
                    <a href="https://benevolent-entremet-a759b7.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461AXFU3E-e1672bf6dedc-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Zakariae BELOUADIF </h3>
                    <a href="https://justus.epizy.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="manal.jpeg" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Manal Hmami</h3>
                    <a href="https://long-drawn-out-tail.000webhostapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <img src="touria Daoudi.jpg" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Touria Daoudi</h3>
                    <a href="https://mon-cvdaoudi.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="s.png" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Nissren Errahali</h3>
                    <a href="https://promotive-thermocou.000webhostapp.com/#">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045JAJAXJB-781f469b4cf7-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2" > OUAKRIM Rida</h3>
                    <a href="https://rida-ouakrim.ga/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045W0RR8JZ-fcb6f0b18ab8-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ZALMAT Houda</h3>
                    <a href="http://responsivecv.infinityfreeapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045JALKF71-05571399b6e1-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">BAHI Salma</h3>
                    <a href="https://bahisalma.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045YT1H8SW-e7109c6cf1ea-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">BERRHAZI Mohammed</h3>
                    <a href="https://medberrhazi.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VU8EE77-c6230d62f503-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">AMIMI Soufiane</h3>
                    <a href="http://saicv.rf.gd/?i=1">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U046BG7DX5F-8ec23d335c4c-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">BIBAN Hiba</h3>
                    <a href="https://bibanhiba.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VUA5N8M-7e16cb9c1fb0-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">IDRISSI REGRAGUI Asmaa</h3>
                    <a href="https://asmaa-reg.000webhostapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U046P1HFTNC-a974d6115197-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">BENETTAJ Fatima</h3>
                    <a href="http://fatimabenettajcv.infinityfreeapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-image"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461E3PDQC-2fd338489794-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ELTAYEB Karima</h3>
                    <a href="http://karima.epizy.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461B0UVU4-785b2b43a881-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ABDELLAOUI Zakaria</h3>
                    <a href="http://zakariaabdellaoui.infinityfreeapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461AVMR2Q-3a88666e2bd9-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ATMANE Rahhab</h3>
                    <a href="http://atmanerahhab.epizy.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045YT2B57U-e815d65f7ba5-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">AIT TALEB Meryem</h3>
                    <a href="http://aittalebmeryemcv.infinityfreeapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045YQEUFTM-5b1e38a016b2-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">EL-HAJJI Wassim</h3>
                    <a href="https://wassim-el-hajji.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045JAJK6HM-1e4a310e2c30-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">BOUSFIHA Houcine</h3>
                    <a href="http://www.houcine-bousfiha.ml/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VU8RUVB-9d46e0dd39ea-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">Wissal Baguiloul</h3>
                    <a href="https://cv-baguiloulwissal.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045YQEH151-f6e21bdba14e-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ELALLALI Houda</h3>
                    <a href="http://elallali.epizy.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461B08V6Y-a46ddf04e18f-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">DAOUI Assya</h3>
                    <a href="http://portfoliocv.great-site.net/?i=1">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U0461DFMX6Y-f7c847e40f62-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">EL MENYIY Salah Eddine/h3>
                    <a href="http://seaem.hyperphp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VUK4ZLM-4d8c691bcace-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">OUJAOU Hiba</h3>
                    <a href="https://hibaou.000webhostapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VUV2FFF-ffde35867865-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">ACHRAF EL MOUNAFIH</h3>
                    <a href="https://benevolent-entremet-a759b7.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U046NJ6208G-00925366c45a-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">EL HABTI Salma</h3>
                    <a href="http://cvsalma.infinityfreeapp.com/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U046BGBG5LZ-a162115d9ab1-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">MARYEM KEJANE</h3>
                    <a href="http://kejan-meryem.epizy.com/?i=1">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U045VUG1PBP-d5764ffdd56e-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">MOUASSEIF Mouad</h3>
                    <a href="https://fancy-brioche-24d8e1.netlify.app/">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="https://ca.slack-edge.com/T031P3N8PAB-U046NJ63ZS4-3bfd6a8720eb-512" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2">EL ADNANI Younes</h3>
                    <a href="https://bit.ly/3NBUgdi">
                    <button class="btn btn-primary me-7" >View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-item shadow-sm p-4 rounded bg-white">
                    <div class="icon my-3 text-danger fs-2">
                        <i class="fas fa-code"></i>
                    </div>
                    <img src="tt.png" alt="" class="card-img" width="400" height="341">
                    <h3 class="fs-5 py-2"><span><?=$_SESSION['name'];?></span></h3>
                    <a href="https://benevolent-entremet-a759b7.netlify.app/">
                    <button class="btn btn-primary me-7" >View Mores</button></a>
                </div>
            </div>
                </div>
            </div>
        </div>

    </div>
</section>


    </div>
        

    </div>
    </div>
    </div>





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>