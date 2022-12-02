<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['radio'])) {
        echo '  ' . $_POST['firstName'];
        echo '  ' . $_POST['lastName'];
        echo '  ' . $_POST['radio'];
    } else {
        echo 'Please select the value.';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
<body class="bg-light">
    
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h2>Checkout form</h2>
          <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <!-- form -->
            <form class="needs-validation" method="post" action="page2.php">
              <div class="row g-3">
                <div class="col-sm-6">
                <label class="form-label" for="cars">Choose a car:</label>
                <select class="form-control" name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
              </div>
              <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit">Continue to checkout</button>
            </form>
            
          </div>
        </div>
      </main>
    </div>
    
    
        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
          <script src="form-validation.js"></script>
      
    
    </body>
</body>
</html>