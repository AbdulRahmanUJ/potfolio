<?php
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        if(empty($name) || empty($email) || empty($message))
        {
            alert('fill the blanks');
        }
        else
        {
            $to = "ujabdulrahman97@gmail.com";
            
            if(mail($to, $name, $email, $message))
            {
                header('location:index.php');
                alert("Success");
            }
        }
    }
    else
    {
        header('location:index.html');
    }


    // <!--$headers =  'MIME-Version: 1.0' . "\r\n"; -->
    // <!--$headers .= 'From: Your name <info@address.com>' . "\r\n";-->
    // <!--$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; -->


    // <!--$to = "ujabdulrahman97@gmail.com";-->
    // <!--$name = htmlentities($_REQUEST['name']);-->
    // <!--$email = htmlentities($_REQUEST['email']);-->
    // <!--$message = htmlentities($_REQUEST['message']);-->


    // <!--$status = mail($to,$name,$email,$message,$headers);-->
