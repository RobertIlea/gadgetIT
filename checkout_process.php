<?php
include 'includes/session.php';

if(isset($_POST['checkout'])){
   $paymentMethod = $_POST['payment_method'];

   if($paymentMethod == 'paypal'){
      // Handle PayPal payment
      // Redirect to PayPal or perform necessary actions
   }
   elseif($paymentMethod == 'payatdoor'){
      // Handle Pay at the Door
      // Perform necessary actions for this payment method
      header('Location: sales.php?pay=payatdoor');
      exit();
   }
   else{
      // Handle other payment methods if needed
   }
}
?>
