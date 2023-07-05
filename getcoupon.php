<?php 

if(isset($_POST['submit'])){
        $to = "info@holozonencr.com"; 
        // $from = $_POST['info@holozonencr.com'];
        $from = $email;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = "Coupon for Holozone ";
        $subject2 = "Copy of your form submission";
        $message = "Get Coupon ". "\n\n"."Name:-" . $name . " " ."\n\n"."Phone Number:-" .$phone. "\n\n". " "."Customer Email:-" . $email ."\n\n". ""."Customer Message:-" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" .$number."\n\n" . $_POST['message'];
        
        $headers = "MIME-Version: 1.0\r\n";  
        $headers .= "Content-type: text/plain; charset=utf-8\r\n"; 
        $headers .= "Reply-To: ".$from." <".$from.">\r\n";
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);
        echo "<center>"."Mail Sent. Thank you " . $email . ", we will contact you shortly."."<br><br>";     
        // header("location:thanks.php");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Holozone 3d Game - Get Coupon Scratch Card</title>
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./assets/css/coupon.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11179052929"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11179052929');
    </script>
    
    <!-- Event snippet for Holozone Contact Page conversion page -->
    <script>
    gtag('event', 'conversion', {'send_to': 'AW-11179052929/Q4nWCKTUpaAYEIGfy9Ip'});
    </script>
  </head>
  <body>

    <!-- form coupon Modal -->
    <div class="sidebarModal modal center fade" id="couponModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                <!-- <button type="button" class="close right fade" data-bs-dismiss="modal"><i class='bx bx-x'></i></button> -->
  
                <div class="modal-body">
                      <div class="logo">
                          <a href="index.html" class="d-inline-block"><img src="assets/img/logo2.png" alt="image"></a>
                          
                      </div>
                      <!-- <h1>Get Coupon</h1> -->
                      <div class="container">
                       
                          <div class="base">
                          <h3>HOLO100</h3>
                          </div>
                          <canvas id="scratch" width="200" height="200"></canvas>
                      </div>
                </div>
                <h1>Scratch Box and get Coupon Code and you can dirctly <br><br>contact with us for discount. </h1>
                      
             </div>
        </div>
      </div>
  <!-- End coupon Modal -->

    <!-- <div class="container">
      <div class="base">
        <h4>You Won </h4>
        <h3>RS 100</h3>
        <h3>HOLO100</h3>
      </div>
      <canvas id="scratch" width="200" height="200"></canvas>
    </div> -->
    <!-- Script -->
    <script src="assets/js/coupon.js"></script>
    
  </body>
</html>




