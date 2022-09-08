<?php include('config.php');
session_abort();
// if(!isset($_SESSION['login_id'])){
//     header('Location: login.php');
// }
 $login_id = $_SESSION['login_id'];
 $user_id = $_SESSION['user_id']; 
    if(isset($_POST['submit'])){
        // include('config.php');
        extract($_POST);
        $check=mysqli_query($conn,"select * from gen_info where user_id='$user_id'");
        if(mysqli_num_rows($check)>0){
            // update query
            $query2 = mysqli_query($conn,"UPDATE `gen_info` SET `name`='$name',`phone_num`='$phone_num',`email`='$email',`address`='$address',`country`='$country',`state`='$state',`city`='$city',`pin`='$pin',`acreage_add`='$acreage_add',
            `sec_cont`='$sec_cont',`phone_sec`='$phone_sec',`email_sec`='$email_sec',`farm_name`='$farm_name',`farm_web`='$farm_web',`farm_fb`='$farm_fb',`farm_insta`='$farm_insta',
            `num_acres`='$num_acres' WHERE user_id='$user_id'");
            if($query2){
                header("location:form_continue.php");
            }
        }else{
            // insert query
        $query=  mysqli_query($conn, "insert into gen_info (user_id,name, phone_num, email, address,acreage_add, sec_cont, phone_sec, email_sec,farm_name, 
        farm_web, farm_fb, farm_insta, num_acres) VALUES ('$user_id','$name','$phone_num','$email','$address','$acreage_add','$sec_cont','$phone_sec','$email_sec',
        '$farm_name','$farm_web','$farm_fb','$farm_insta','$num_acres' )");
        if($query){
            header("location:form_continue.php");
        }
        }
        
       
    }
?>
<?php include 'header.php'; ?>
   <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Insert Form</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input  class="form-control " type="search" value="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Edit/Update Farm</h6>
            <?php $q1= mysqli_query($conn, "select * from gen_info where user_id='$user_id'");
                    $row= mysqli_fetch_assoc($q1)
            ?>
            <div class="col-md-12 form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                    <h4 ><a href="farm.php" class="info" >General Information/</a><a href="form_continue.php" class="heading1" >Carbon Credits/</a><a href="form_finish.php" class="heading1" >Operation Data</a></h4>
                    </div>
                    <div class="col-md-4">
                       <input class="btn save" name="submit" type="submit" value="Save & Continue" form="my-form">
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                    <div class="progress-bar" role="progressbar"  aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <span id="error">
                        <!---- Initializing Session for errors --->
                        <?php
                            if (!empty($_SESSION['error'])) {
                                echo "<p style='color:red;'>".$_SESSION['error']."</p>";
                            unset($_SESSION['error']);
                            }
                        ?>
                    </span>
                    <form class="check" action="farm.php" method="post" id="my-form">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="name" >Primary Contact Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Phone Number</label>
                        <input type="number" class="form-control" value="<?php echo $row['phone_num'];?>" name="phone_num"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pswd" >Email address</label>
                        <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email"   >
                    </div>
                </div>
               
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="address" >Address</label>
                        <input type="text" class="form-control" value="<?php echo $row['address'];?>" name="address" id="searchTextField"   >
                    </div>
                    <table class="table">
                        <tbody id="body">
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="address1" >Acreage address/location if different from address above</label>
                        <input type="text" class="form-control" value="<?php echo $row['acreage_add'];?>" name="acreage_add"   >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="contact2" >Contact secondary</label>
                        <input type="text" class="form-control" id="email2" value="<?php echo $row['sec_cont'];?>" name="sec_cont"   >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email2" >Phone Number secondary</label>
                        <input type="number" class="form-control" value="<?php echo $row['phone_sec'];?>" name="phone_sec"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email" >Email address secondary</label>
                        <input type="email" class="form-control" value="<?php echo $row['email_sec'];?>" name="email_sec"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company_name" >Farm/company name</label>
                        <input type="text" class="form-control" id="company_name" value="<?php echo $row['farm_name'];?>" name="farm_name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company_website">Farm/company website address</label>
                        <input type="text" class="form-control" value="<?php echo $row['farm_web'];?>" name="farm_web"   >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company_Facebook">Farm/company Facebook handle</label>
                        <input type="text" class="form-control" value="<?php echo $row['farm_fb'];?>" name="farm_fb"  >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company_Instagram">Farm/company Instagram handle</label>
                        <input type="text" class="form-control" id="company_Instagram" value=" <?php echo $row['farm_insta'];?>" name="farm_insta"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="acres">Number of Acres? 50 minimum </label>
                        <input type="number" class="form-control" value="<?php echo $row['num_acres'];?>" name="num_acres"  >
                    </div>
                </div>
                
                <input type="hidden" id="user_id"  >
            </form>

            </div>


	

       


<?php include 'footer.php'; ?>
<!-- <script>
    function myForm(){
        document.getElementById("myForm").submit();
        alert("submitted");
    }
</script> -->
<script>
  let places, input, address, city;
  google.maps.event.addDomListener(window, "load", function () {
    var places = new google.maps.places.Autocomplete(
      document.getElementById("searchTextField")
    );
    google.maps.event.addListener(places, "place_changed", function () {
      var place = places.getPlace();
      console.log(place)
      var address = place.formatted_address;
      var latitude = place.geometry.location.lat();
      var longitude = place.geometry.location.lng();
	   var latlng = new google.maps.LatLng(latitude, longitude);
      var geocoder = (geocoder = new google.maps.Geocoder());
      geocoder.geocode({ latLng: latlng }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            var address = results[0].formatted_address;
            var pin =
              results[0].address_components[
                results[0].address_components.length - 1
              ].long_name;
            var country =
              results[0].address_components[
                results[0].address_components.length - 2
              ].long_name;
            var state =
              results[0].address_components[
                results[0].address_components.length - 3
              ].long_name;
            var city =
              results[0].address_components[
                results[0].address_components.length - 4
              ].long_name;
              console.log(country)
              console.log(state)
              console.log(city)
			  console.log(pin)
              let field = `
            <td style="border:none;">
			<div class="row">
                    <div class="form-group col-md-4" >
                        <label for="Country" >Country</label>
                        <input type="text" class="form-control" value="${country}" name="country"    >
                    </div>
            
                    <div class="form-group col-md-4" >
                        <label for="State" >State</label>
                        <input type="text" class="form-control" value="${state}" name="state"  >
                    </div>
            
                    <div class="form-group col-md-4" >
                        <label for="City" >City</label>
                        <input type="text" class="form-control" value="${city}" name="city"  >
                    </div>
            
                    <div class="form-group col-md-4" >
                        <label for="Zip" >Zip</label>
                        <input type="text" class="form-control" value="${pin}" name="pin"  >
                    </div>
            </div>
			<td>	
    
            
             `
             $("#body").append(field)
          }
        }
      });
    });
  });
</script>

