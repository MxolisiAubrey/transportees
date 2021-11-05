<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Welcome</title>
  </head>
<body>
<section class="main">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ZigZag Rides</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('#');?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Signup');?>">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Signin');?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <!--Nav bar ends here-->
</section>

    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <section class="main">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">

     <div class="container mt-5">
         <div class="row ">
             <div class="col-12 col-sm-10 col-md-10 col-lg-10 m-auto text-center">
             
             <h1 class="fw-bold display-3 mt-5 text-center">
                 <span class="theme-color">Managing Riders Most Efficiently...</span>

                 </h1>   
             
      <hr class="mx-auto w-50 mt-3">
      <p class="fs-5">Transportee management system</p>

      <span class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    </svg>
    </span>

             </div>
         </div>
     </div>
     </nav>
</section>
</body>
                <!-- Footer -->
<footer style="background-color:azure;" class="page-footer font-small blue pt-4">
      <div class="footer-copyright text-center py-3">© 2021 ZigZag Rides
           <!-- Copyright -->
       </div>
         
</footer>
</html>