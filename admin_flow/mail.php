<?php 
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="em";

$conn = mysqli_connect($servername,$username, $password, $dbname);
if(!$conn){
    die("unsuccessfull connection :".mysqli_connect_error() );
    echo "no server connect";
}else{
// session_start();
}
     if(isset($_POST['submit'])){
        
        // include('config.php');
         //echo "<script>alert('submit called');</script>";
        extract($_POST);
        // $email=$_POST['email'];
        // $res=mysqli_query($conn,"select * from users where email='$email'");
        // $count=mysqli_num_rows($res);
        // if($count>0){
            $otp=rand(11111,99999);
            mysqli_query($conn,"INSERT INTO users (name,otp,email)VALUES('$name','$otp','$email')");
            
            // $_SESSION['EMAIL']=$email;
            // smtp_mailer($email,'OTP Verification',$html);
            // echo "yes";
        // }else{
            // echo "not_exist";
        
        
        require 'phpmailer/PHPMailerAutoload.php';
        require 'phpmailer/class.smtp.php';
        require 'phpmailer/class.phpmailer.php';
        // print_r($_POST);
        // require 'credential.php';
    
        $mail = new PHPMailer(true);
    
        // $mail->SMTPDebug = 4;                               // Enable verbose debug output
    
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username ='rajesh.ya2017@gmail.com'; //EMAIL;                 // SMTP username
        $mail->Password ='mqifykyshylcwgif'; //PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    
        $mail->SetFrom($_POST['email']);
        $mail->addAddress($_POST['email']);     // Add a recipient //$_POST['email']
    
        $mail->addReplyTo('rajesh.ya2017@gmail.com');
        // print_r($_FILES['file']); exit;
        // for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
        //     $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
        // }
        $mail->isHTML(true);                                  // Set email format to HTML
    
        $mail->Subject = 'Testing Mail';//$_POST['subject'];
        $mail->Body    = $html="Your otp verification code is ".$otp;
        $mail->AltBody = 'This is my first Mail .. \n thanks';//$_POST['message'];
    
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            // echo 'Message has been sent';
        }
    }
        
?>