<!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>
   <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
      <section class="vh-100" style="background-color:#faf4dc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">LOG IN</h3>
                  <!-- Call Eroor-->
                  <form action="auth.php" method="POST">
                    <?php if(isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>  

                  <div class="form-outline mb-4">
                    <input type="text" name="uname" id="typeEmailX-2" placeholder="Enter a UserName" class="form-control form-control-lg" />
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" name="pass" id="typePasswordX-2" placeholder="Enter a Password" class="form-control form-control-lg" />
                  </div>
                  
                  <button class="btn btn-primary btn-lg btn-block" style="background-color:#0568eb;" type="submit">Login</button>
                  <a href="registration.html" class="btn btn-primary btn-lg btn-block" style="background-color:#0568eb;" type="submit" >Register</a>
                  
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>