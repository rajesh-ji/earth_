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
        $check=mysqli_query($conn,"select * from soil_data where user_id='$user_id'");
        if(mysqli_num_rows($check)>0){
            // update query
              $query2 = mysqli_query($conn,"update soil_data set `dt_rec`='$dt_rec',`dt_rep`='$dt_rep',`lab_num`='$lab_num',`Organic`='$Organic',
              `Soluble`='$Soluble',`ph`='$ph',`Nitrate_ppm`='$Nitrate_ppm',`Phosphorus_ppm`='$Phosphorus_ppm',`Potassium_ppm`='$Potassium_ppm',`Sulfur_ppm`='$Sulfur_ppm',
              `Zinc_ppm`='$Zinc_ppm',`Iron_ppm`='$Iron_ppm',`Manganese_ppm`='$Manganese_ppm',`Copper_ppm`='$Copper_ppm',`Boron_ppm`='$Boron_ppm',`Calcium_ppm`='$Calcium_ppm',`Magnesium_ppm`='$Magnesium_ppm',`crop_planted`='$crop_planted',
              `Landscape`='$Landscape',`Current_crop`='$Current_crop',`States_Region`='$States_Region',`Well`='$Well',`City`='$City',`Pump_type`='$Pump_type',`Water_Ditch`='$Water_Ditch',
              `Irrigation_Type`='$Irrigation_Type' WHERE user_id='$user_id'");
            if($query2){
                header("location:form_finish.php");
            }
        }else{
            // insert query
            $query=  mysqli_query($conn, "insert into soil_data (user_id,dt_rec, dt_rep, lab_num, Organic,Soluble, ph, Nitrate_ppm,Phosphorus_ppm,
            Potassium_ppm, Sulfur_ppm, Zinc_ppm, Iron_ppm, Manganese_ppm,Copper_ppm,Boron_ppm,Calcium_ppm,Magnesium_ppm,crop_planted,Landscape,
            Current_crop,States_Region,Well,City,Pump_type,Water_Ditch,Irrigation_Type) VALUES ('$user_id','$dt_rec','$dt_rep','$lab_num','$Organic',
            '$Soluble','$ph','$Nitrate_ppm','$Phosphorus_ppm','$Potassium_ppm','$Sulfur_ppm','$Zinc_ppm','$Iron_ppm','$Manganese_ppm',
            '$Copper_ppm','$Boron_ppm','$Calcium_ppm','$Magnesium_ppm','$crop_planted','$Landscape','$Current_crop','$States_Region','$Well',
            '$City','$Pump_type','$Water_Ditch','$Irrigation_Type' )");
        if($query){
            header("location:form_finish.php");
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
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Edit/Update Farm</h6>

            <div class="col-md-12 form">
                <div class="row progrss">
                    <div class="col-md-8 generalinfo">
                    <h4 ><a href="farm.php" class="info" >General Information/</a><a href="form_continue.php" class="heading1" >Carbon Credits/</a><a href="form_finish.php" class="heading1" >Operation Data</a></h4>
                    </div>
                    <div class="col-md-4 ">
                        <a href="farm.php"><input class="btn back float-left" type="submit" name="" id="" value="Back" ></a>
                        <input class="btn save" name="submit" type="submit" value="Save & Continue" form="my-form">
                    </div>
                </div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                    <div class="progress-bar" role="progressbar"  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span id="error">
                    <?php
                    // To show error of page 2.
                        if (!empty($_SESSION['error_page2'])) {
                            echo "<p style='color:red;'>".$_SESSION['error_page2']."</p>";
                        unset($_SESSION['error_page2']);
                        }
                    ?>
                </span>
                <!-- form start -->
                <?php
                    $soil_query=mysqli_query($conn,"select * from soil_data where user_id='$user_id'");
                    $row = mysqli_fetch_assoc($soil_query);
                ?>
                <form class="check" method="POST" action="form_continue.php" id="my-form">
                <div class="row">
                    <div class="col-md-4">
                        <label for="text">Date test received</label>
                        <input type="date" class="form-control" value="<?php echo $row['dt_rec'];?>" name="dt_rec" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Date test reported</label>
                        <input type="date" class="form-control" value="<?php echo $row['dt_rep'];?>" name="dt_rep" >
                    </div>
                    <div class="col-md-4">
                        <label for="number" >Laboratory Number</label>
                        <input type="number" class="form-control" value="<?php echo $row['lab_num'];?>" name="lab_num" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Organic Matter%</label>
                        <input type="text" class="form-control" value="<?php echo $row['Organic'];?>" name="Organic" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Soluble Salts mmhos/cm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Soluble'];?>" name="Soluble" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >pH</label>
                        <input type="number" class="form-control" value="<?php echo $row['ph'];?>" name="ph" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address1" >Nitrate ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Nitrate_ppm'];?>" name="Nitrate_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Phosphorus ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Phosphorus_ppm'];?>" name="Phosphorus_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Potassium ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Potassium_ppm'];?>" name="Potassium_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="text" >Sulfur ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Sulfur_ppm'];?>" name="Sulfur_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Zinc ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Zinc_ppm'];?>" name="Zinc_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Iron ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Iron_ppm'];?>" name="Iron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Manganese ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Manganese_ppm'];?>" name="Manganese_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Copper ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Copper_ppm'];?>" name="Copper_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >Boron ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Boron_ppm'];?>" name="Boron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Calcium ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Calcium_ppm'];?>" name="Calcium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Magnesium ppm</label>
                        <input type="text" class="form-control" value="<?php echo $row['Magnesium_ppm'];?>" name="Magnesium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >The last crop planted</label>
                        <input type="text" class="form-control" value="<?php echo $row['crop_planted'];?>" name="crop_planted" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Landscape</label>
                        <input type="text" class="form-control" value="<?php echo $row['Landscape'];?>" name="Landscape" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Current crop</label>
                        <input type="text" class="form-control" value="<?php echo $row['Current_crop'];?>" name="Current_crop" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook">United States Region acreage is located</label>
                        <input type="text" class="form-control" value="<?php echo $row['States_Region'];?>" name="States_Region" >
                    </div>
                </div>
                <div><h4 style="font-family: 'Helvetica';font-style: normal;font-weight: 700;font-size: 12px;">WATER SOURCE</h4></div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Well</label>
                        <input type="text" class="form-control" value="<?php echo $row['Well'];?>" name="Well" >
                    </div>
                    <div class="col-md-4">
                        <label for="acres">City</label>
                        <input type="text" class="form-control" value="<?php echo $row['City'];?>" name="City" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Instagram" >Pump type</label>
                        <input type="text" class="form-control" value="<?php echo $row['Pump_type'];?>" name="Pump_type" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Water Ditch</label>
                        <input type="text" class="form-control" value="<?php echo $row['Water_Ditch'];?>" name="Water_Ditch" >
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label for="acres" >Irrigation Type</label>
                        <input type="text" class="form-control" value="<?php echo $row['Irrigation_Type'];?>" name="Irrigation_Type">
                    </div>
                </div>
                
                </form>
            

              </div>


	

       


<?php include 'footer.php'; ?>