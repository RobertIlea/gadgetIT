<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }



?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="register-box-body2">
      <div class="register-body">
        <p class="login-box-msg2"><b>Register as a new membership<b></p>

        <form action="register.php" method="POST" onsubmit="return validateForm()" name="signupForm">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            
            <hr>
            <div class="row">
              <div class="tonstylbute">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup" id="signupButton"><i class="fa fa-pencil"></i><b>Sign Up<b></button>
                    <script>
                      function validateForm(){
                        var firstname = document.forms["signupForm"]["firstname"].value;
                        var lastname = document.forms["signupForm"]["lastname"].value;
                        var email = document.forms["signupForm"]["email"].value;
                        var password = document.forms["signupForm"]["password"].value;
                        var repassword = document.forms["signupForm"]["repassword"].value;

                        if (firstname === "" || lastname === "" || email === "" || password === "" || repassword === "") {
                          alert("Please fill in all fields.");
                          return false;
                        }
                        else{
                          window.location.href = 'pages/activate.html'
                        }
                        
                      }
                    </script>
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup" onclick="redirectToLogin()"><i class="fa fa-pencil"></i><b> I already have a membership <b></button>
                    <script>
                      function redirectToLogin(){
                        window.location.href = 'login.php'
                      }
                    </script>
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup" onclick="redirectToHome()"><i class="fa fa-home"></i><b> Home <b></button>
                    <script>
                      function redirectToHome(){
                        window.location.href = 'index.php'
                      }
                    </script>
              </div>
            </div>
        </form>
        <br>
      </div>
   </div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>