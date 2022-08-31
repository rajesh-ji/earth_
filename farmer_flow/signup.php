<?php
if(isset($_POST['submit'])){
    include('config.php');
    extract($_POST);
    

    $sql = "select * from users where name = '$username'";
    $query  = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($query)>0){
        //$result['status']= 'false';
       // $result['mgs']= 'this username already exists';
       $_SESSION['mgs'] = 'This username already exists!';
    }else
        {
            $query=  mysqli_query($conn, "insert into users(name,email,password,confirm_pass,role_id) values('$username','$email','$password','$confirm_pass','1')");
            
               // $_SESSION['login_id'] = $rd['role_id'];
                //$_SESSION['user_id'] = $rd['id'];
                //$result['status']= 'true';
                $_SESSION['mgs1'] = 'Your Account has been Created!';    
            }
            //  header('Location:login.php'); 
        }
     
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/wallet.css"> -->
    <!-- <link rel="stylesheet" href="css/profile.css"> -->
    <title>Earth Merchant</title>
  </head>
  <body>
    
<div class="container-fluid">
        <div class="col-md-6" style="left: 50px;">
            <div class="logo">
                    <img src="images/image 1 (1).png" alt="image not found">
                    <p class="hemp">Process of Making Hemp</p>
            </div>
            <div class="filecheck" style="margin-top: 66px;">
            <div class="fix">
                <img src="images/MicrosoftTeams-image (8).png" alt="image not found" style=""/>
                
                <p >In collaboration with student teams at Oregon  State University and University of Tennessee (UT),  are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>
            </div>

            <div class="fix1">
                <img src="images/MicrosoftTeams-image (10).png" alt="image not found"/>
                
                <p>In collaboration with student teams at Oregon  State University and University of Tennessee (UT), are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>
            </div>   
            <div class="fix2">
                <img src="images/MicrosoftTeams-image (9).png" alt="image not found"/>
            
                <p>In collaboration with student teams at Oregon  State University and University of Tennessee (UT),  are working to reduce carbon dioxide (CO2) from the environment (specifically, air and land).</p>  
            </div>
            </div>
        </div>
        <div class="col-md-6 loginutside float-right " style="background-color:#fafafa;">
            <div class="inside" style="padding-top: 60px;">
            <p class="hello">Hello!</p>
            <p class="signin">Signup to your account</p>
            <form class="form_data" action="signup.php" method="POST">
            <?php if(isset($_SESSION['mgs'])){
                        echo "<p style='color:red;'>".$_SESSION['mgs']."</p>";
                        $_SESSION['mgs'] = '';
                    }?>
                    <?php if(isset($_SESSION['mgs1'])){
                        echo "<p style='color:green;'>".$_SESSION['mgs1']."</p>";
                        $_SESSION['mgs1'] = '';
                    }?>
                    <div class="form-group">
                        <label for="username" class="" style="color: #BAB9B9;">Name</label>
                        <input type="text" name="username" class="form-control border-secondary" placeholder="Enter username..." required style="border: 0px solid #ccc;">
                    </div>
                    <div class="form-group">
                        <label for="email" class="" style="color: #BAB9B9;">Email</label>
                        <input type="email" name="email" class="form-control border-secondary" placeholder="Enter email..." required style="border: 0px solid #ccc;">
                    </div>
                    <div class="form-group">
                        <label for="password" class="" style="color: #BAB9B9;">Create Password</label>
                        <div style="position: relative;display: flex;">
                            <input type="password" name="password" class="form-control border-secondary id_password" onChange="onChange()" id="id_password" onkeyup="return passwordChanged();" placeholder="create password..." required style="border: 0px solid #ccc;">
                            <div  class="password-visibility "><i class="fa fa-eye" id="togglePassword" style="color: #A7BF58;"></i></div>
                        </div>
                        <span><img src="images/tick.png" alt=""></span> <span><img src="images/1 upper case.png" alt=""></span>
                        <span><img src="images/tick.png" alt=""></span> <span><img src="images/1 special char.png" alt=""></span>
                        <span><img src="images/tick.png" alt=""></span> <span><img src="images/Min 8 chars.png" alt=""></span>
                        <span id="strength"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="" style="color: #BAB9B9;">Confirm Password</label>
                        <div style="position: relative;display: flex;">
                            <input type="password" name="confirm_pass" class="form-control border-secondary id_password" onChange="onChange()" id="confirm_pass" placeholder="re-type password..." required style="border: 0px solid #ccc;">
                            <div  class="password-visibility "><i class="fa fa-eye" id="togglePassword1" style="color: #A7BF58;"></i></div>
                        </div>                    
                    </div>
                    <div class="form-group remember">
                      <label> <input type="checkbox" name="remember" value="remember">  Remember Me</label>
                    </div>
                <div class="form-group">
                    <input class="btn" type="submit" name="submit" id="signup" value="Create Account" style="border: 0px solid #ccc;">
                </div>
                <div>
                    <p class="forgot">Already on EM? <a href="login.php" style="color:#A7BF58">Login</a></p>
                </div>
            </form>
        </div>
</div>
<!-- password eye view toggle start  -->
<script>
    $(function() {
    $('.form-group').find('.id_password').each(function(index, input) {
        var $input = $(input);
        $input.parent().find('.password-visibility').click(function() {
            var change = "";
            if ($(this).find('i').hasClass('fa-eye')) {
                $(this).find('i').removeClass('fa-eye')
                $(this).find('i').addClass('fa-eye-slash')
                change = "text";
            } else {
                $(this).find('i').removeClass('fa-eye-slash')
                $(this).find('i').addClass('fa-eye')
                change = "password";
            }
            var rep = $("<input type='" + change + "' />")
                .attr('id', $input.attr('id'))
                .attr('name', $input.attr('name'))
                .attr('class', $input.attr('class'))
                .val($input.val())
                .insertBefore($input);
            $input.remove();
            $input = rep;
        }).insertAfter($input);
    });
});
</script>
<!-- password eye view toggle end  -->
<!-- password strength start-->
<script>
    function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("id_password");
        if (pwd.value.length == 0) {
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium!</span>';
        } else {
            strength.innerHTML = '<span style="color:red">Password is Weak!</span>';
        }
    }
</script>
<!-- password strength end-->
<!-- password and confirm password validator start -->
<script>
    function onChange() {
        const password = document.querySelector('input[name=password]');
        const confirm_pass = document.querySelector('input[name=confirm_pass]');
        if (confirm_pass.value === password.value) {
            confirm_pass.setCustomValidity('');
        } else {
            confirm_pass.setCustomValidity('Passwords do not match');
        }
        }
</script>
<!-- password and confirm password validator end -->
</body>
</html>