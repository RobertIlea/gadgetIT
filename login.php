<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>


<body class="bodylogin">
    <div class="login-box">
      <div class="login-container">
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
        <div class="loginstyle" >
          <div class="login-box-body-style">
            <p class="login-box-msg-style">Sign in to start your session</p>

            <form action="verify.php" method="POST">
              <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-4">
                  <button type="submit" name="login" class="stylebutton">
                    <i class="fa fa-sign-in"></i>
                    <span><b>Sign In</b></span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="registration-box">
        <div class="loginstyle" >
          <div class="login-box-body-style">
            <p class="secondchoice"><b>You don't have an account?</b></p>
            <button type="submit" class="stylebutton" onclick="goToRegister()">
              <b>REGISTER</b>
            </button>
            <script>
              function goToRegister(){
                  window.location.href= 'signup.php'
              }
            </script>
            <button type="submit" class="stylebutton" onclick="goToHome()"><i class="fa fa-home"></i>
              <b>HOME</b>
            </button>
            <script>
              function goToHome(){
                  window.location.href= 'index.php'
              }
            </script> 
          </div>
        </div>
    </div>
  </div>
    
  <?php include 'includes/scripts.php' ?>
</body>
</html>
