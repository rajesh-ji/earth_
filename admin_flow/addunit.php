<?php include 'mail.php'; ?>
<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Processing Units</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input  class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <ul class="nav-ul" style="padding-left: 0px;">
                <li>
                    <a class="pages" href="" >Hemplex <span>/</span> </a><a class="dashboard" href="" >Add Unit</a>
                </li>
            </ul>
            
           
            <div class="col-md-12 unit_form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                        <h4 class="info" >Add Unit</h4>
                    </div>
                    <div class="col-md-4 ">
                        <a href=""><input class="btn cancel " type="submit" name="" id="" value="cancel" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save" form="my-form" onclick="send_otp()">
                    </div>
                </div>

                <form class="check" action="" method="post" id="my-form">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >First Name</label>
                        <input type="text" class="form-control" placeholder="" name="name" >
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="name" >Last Name</label>
                        <input type="text" class="form-control" placeholder="" name="l_name" >
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="num" >Phone Number</label>
                        <input type="text" class="form-control" placeholder="" name="phone_num" >
                    </div>
                </div>    
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="email" >Email</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email" >
                    </div>
                </div>  
                 
            </form>
            <div><input class="btn save" name="submit" type="submit" value="Add More"></div> 
            </div>

<?php include 'footer.php'; ?>
<script>
function send_otp(){
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'mail.php',
		type:'post',
		data:'email='+email,
		success:function(result){
			if(result=='yes'){
				window.location='admin_dashboard.php'
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
			}
		}
	});
}

// function submit_otp(){
// 	var otp=jQuery('#otp').val();
// 	jQuery.ajax({
// 		url:'check_otp.php',
// 		type:'post',
// 		data:'otp='+otp,
// 		success:function(result){
// 			if(result=='yes'){
// 				window.location='dashboard.php'
// 			}
// 			if(result=='not_exist'){
// 				jQuery('#otp_error').html('Please enter valid otp');
// 			}
// 		}
// 	});
// }
</script>