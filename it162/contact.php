<?php include 'includes/header.php'; ?>
<p><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "amanueltesfagiorgis123@gmail.com";  //place your/your client's email address here
        $toName = "Amanuel"; //place your client's name here
        $website = "IT162 Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?></p>
<?php include 'includes/footer.php'; ?>