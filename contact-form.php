<?php 

if(isset($_POST['submit'])){
        $to = "info@holozonencr.com"; 
        // $from = $_POST['info@holozonencr.com'];
        $from = $email;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        // $category = $_POST['category'];
        // $date = $_POST['date'];
        // $time = $_POST['time'];
        $subject = "Book an Appointment For Holozone ";
        $subject2 = "Copy of your form submission";
        $message = "Book Appointment for Holozone Game". "\n\n"."Name:-" . $name . " " ."\n\n"."Phone Number:-" .$phone. "\n\n". " "."Customer Email:-" . $email ."\n\n". ""."Customer Message:-" . $_POST['message'];
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
    // setTimeout(function () {
    //     window.location.href= 'https://holozonencr.com/book-now/book-now.html'; 
     
    //  },5000); 



    
    
    // $toEmail = 'shami.lkct@gmail.com'; 
    // $fromName = 'shami'; 
    // $formEmail = 'shami.lkct@gmail.com'; 
     
    // $postData = $statusMsg = $valErr = ''; 
    // $status = 'error'; 
     
    // if(isset($_POST['submit'])){ 
    //     $postData = $_POST; 
    //     $name = trim($_POST['name']); 
    //     $email = trim($_POST['email']); 
    // 	$number = trim($_POST['number']);
    //     $subject = trim($_POST['subject']); 
    //     $message = trim($_POST['message']); 
         
    //     if(empty($name)){ 
    //          $valErr .= 'Please enter your name.<br/>'; 
    //     } 
    //     if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
    //         $valErr .= 'Please enter a valid email.<br/>'; 
    //     } 
    //     if(empty($subject)){ 
    //         $valErr .= 'Please enter subject.<br/>'; 
    //     } 
    //     if(empty($message)){ 
    //         $valErr .= 'Please enter your message.<br/>'; 
    //     } 
         
    //     if(empty($valErr)){ 
    //         $subject = 'New contact request submitted'; 
    //         $htmlContent = " 
    //             <h2>Contact Request Details</h2> 
    //             <p><b>Name: </b>".$name."</p> 
    //             <p><b>Email: </b>".$email."</p> 
    // 			<p><b>Email: </b>".$number."</p>
    //             <p><b>Subject: </b>".$subject."</p> 
    //             <p><b>Message: </b>".$message."</p> 
    //         "; 
             
    //         $headers = "MIME-Version: 1.0" . "\r\n"; 
    //         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    //         $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
             
    //         @mail($toEmail, $subject, $htmlContent, $headers); 
             
    //         $status = 'success'; 
    //         $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.'; 
    //         $postData = ''; 
    //     }else{ 
    //         $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    //     } 
    // }
    



?>

<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/fancybox.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dark-style.css">

        <title>Holozone - Thank You</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">

        <style>
            html, body {
                max-width: 100%;
                overflow-x: hidden;
            }
            .messenger-block {
            background-color: #000;
            margin-bottom: 16px;
            padding: 16px 32px;
            }

            .messenger-block-title {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.6;
            margin-bottom: 8px;
           }

           .messenger-block-title h1, .messenger-block-title p {
            color: inherit!important;
            font-family: inherit!important;
            font-size: inherit!important;
            font-weight: 700!important;
            line-height: inherit!important;
            margin: 0!important;
           }
           .messenger-block-elements {
                display: flex;
            }

            .messenger-block-elements a {
                background-position: 0;
                background-repeat: no-repeat;
                background-size: 28px 28px;
                color: #fff;
                display: block;
                flex: 0 0 auto;
                font-size: 16px;
                line-height: 1.43;
                margin-right: auto;
                padding: 12px 16px 12px 36px;
                font-family: Open Sans,sans-serif;
            }
        </style>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11179052929"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-11179052929');
        </script>

        <!-- Event snippet for Holozone Book page conversion page -->
        <script>
        gtag('event', 'conversion', {'send_to': 'AW-11179052929/6hrzCPOxl6AYEIGfy9Ip'});
        </script>
        
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSVB7CS');</script>
<!-- End Google Tag Manager -->
        
    </head>

    <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSVB7CS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <!-- Start Area -->
        <section class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <img src="assets/img/Thank-You-GIF-3.gif" alt="image">
                            <!-- whatapp button chat section -->
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4"></div>
                            <div class="col-lg-4 col-md-4">
                              
                             <div class="messenger-block horizontal">
                                <div class="messenger-block-title">
                                <h1>We will get back to you soon, Meanwhile You Can Directly Connect with us.</h1>
                               
                                </div>
                                <div class="messenger-block-elements">
                                <a href="tel:9810807665" class="messenger-block-call-us lazy js-track-click entered loaded" data-bg="/img/messenger-call-us.svg" data-ll-status="loaded" style="background-image: url(&quot;img/messenger-call-us.png&quot;);">
                                Call us - 9810807665
                                </a>
                                <a href="https://wa.me/9810807665" target="_blank" class="messenger-block-whats-app lazy js-track-click entered loaded" data-bg="img/messenger-whats-app.png" data-ll-status="loaded" style="background-image: url(&quot;img/messenger-whats-app.png&quot;);">
                                WhatsApp
                                </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                            </div>
                        </div>
                        <!-- whatapp button chat end section -->
                            <!-- <h3>Thank you for Visiting</h3> -->
                            <a href="index.html" class="default-btn">Back to Home</a>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Area -->

        

        <div class="zelda-cursor"></div>
        <div class="zelda-cursor2"></div>

        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/cursor.min.js"></script>
        <script src="assets/js/fancybox.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>