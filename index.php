DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
 $userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
 $userPhone = $_POST["userPhone"];
 $userMessage = $_POST["userMessage"];
 $toEmail = "21102105.tanvirsayyed@gmail.com";
  
 $mailHeaders = "Name: " . $userName .
 "\r\n Email: ". $userEmail . 
 "\r\n Phone: ". $userPhone . 
 "\r\n Message: " . $userMessage . "\r\n";

 if(mail($toEmail, $userName, $mailHeaders)) {
     $message = "Your contact information is received successfully.";
 }
}
?>

<form class="contact__form form">
                        <div class="form__item"  data-aos="fade">
                           <!-- <label>Name <em>*</em></label>-->
                            <input type="text" class="form__control" placeholder="Name"  name="userName" required id="userName">
                            <div class="form__line line" data-aos="scale-x-right"></div>
                        </div>
                        <div class="form__item"  data-aos="fade">
                            <!--<label>Email <em>*</em></label> -->
                            <input type="text" class="form__control" placeholder="Email" name="userEmail" required id="userEmail">
                            <div class="form__line line" data-aos="scale-x-right"></div>
                        </div>
                        <div class="form__item"  data-aos="fade">
                           <!-- <label>Phone <em>*</em></label>-->
                            <input type="text" class="form__control" placeholder="Phone"  name="userPhone" required id="userPhone">
                            <div class="form__line line" data-aos="scale-x-right"></div>
                        </div>
                        <div class="dropdown" data-aos="fade">
                            <div class="select">
                                <span class="selected">timing</span>
                                <div class="caret"></div>
                            </div>
                            <ul class="menu">
                                <li>10:00 to 12:00</li>
                                <li>1:00 to 3:00</li>
                                <li>4:00 to 6:00</li>
                                <li>7:00 to 9:00</li>
                                <li class="active">10:00 to 12:00</li>

                            </ul>
                                <div class="form__line line" data-aos="scale-x-right"></div>
                            

                        </div>
                        <div class="form__item"  data-aos="fade">
                           <!-- <label>Message <em>*</em></label>-->
                             <!-- <textarea name="userMessage" required id="userMessage"> -->
                           <textarea class="form__control form__control--massage" placeholder="Message" name="userMessage" required id="userMessage"></textarea>
                           <div class="form__line line" data-aos="scale-x-right"></div>
                        </div>
                        <div class="form__item"  data-aos="fade">
                           <button type="submit" class="form__btn btn btn--1" name="send" value="Submit">Send Message</button>
                           <div class='success'>
                            <strong><?php echo $message; ?> </strong>
                          </div>
                          <?php ?>
                        </div>
                    </form>
                </div>
            </div>
           </section>
           <div></div>