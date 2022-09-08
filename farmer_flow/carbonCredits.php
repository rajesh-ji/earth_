
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
                <div class="row ">
                    <div class="col ">
                        <input class="btn save" name="submit" type="submit" value="Edit/Update Farm" form="my-form">
                    </div>
                </div>
                <?php 
                     $query=mysqli_query($conn,"select * from soil_data where user_id='$user_id'");
                     $row=mysqli_fetch_assoc($query);
                ?>
                <!-- form start -->
                <form class="check" method="" action="" id="my-form">
                <div class="row">
                    <div class="col-md-4">
                        <label for="text">Date test received</label>
                        <input type="text" class="form-control" id="date" placeholder="<?php echo $row['dt_rec'];?>" name="dt_rec" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Date test reported</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['dt_rep'];?>" name="dt_rep" >
                    </div>
                    <div class="col-md-4">
                        <label for="number" >Laboratory Number</label>
                        <input type="number" class="form-control" placeholder="<?php echo $row['lab_num'];?>" name="lab_num" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Organic Matter%</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Organic'];?>" name="Organic" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >Soluble Salts mmhos/cm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Soluble'];?>" name="Soluble" >
                    </div>
                    <div class="col-md-4">
                        <label for="name" >pH</label>
                        <input type="number" class="form-control" placeholder="<?php echo $row['ph'];?>" name="ph" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address1" >Nitrate ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Nitrate_ppm'];?>" name="Nitrate_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Phosphorus ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Phosphorus_ppm'];?>" name="Phosphorus_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="address1" >Potassium ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Potassium_ppm'];?>" name="Potassium_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="text" >Sulfur ppm</label>
                        <input type="text" class="form-control" id="name2" placeholder="<?php echo $row['Sulfur_ppm'];?>" name="Sulfur_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Zinc ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Zinc_ppm'];?>" name="Zinc_ppm">
                    </div>
                    <div class="col-md-4">
                        <label for="text" >Iron ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Iron_ppm'];?>" name="Iron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Manganese ppm</label>
                        <input type="text" class="form-control" id="company_name" placeholder="<?php echo $row['Manganese_ppm'];?>" name="Manganese_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Copper ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Copper_ppm'];?>" name="Copper_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >Boron ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Boron_ppm'];?>" name="Boron_ppm" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Calcium ppm</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Calcium_ppm'];?>" name="Calcium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Magnesium ppm</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Magnesium_ppm'];?>" name="Magnesium_ppm" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook" >The last crop planted</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['crop_planted'];?>" name="crop_planted" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_name" >Landscape</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Landscape'];?>" name="Landscape" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_website" >Current crop</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Current_crop'];?>" name="Current_crop" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Facebook">United States Region acreage is located</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['States_Region'];?>" name="States_Region" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Well</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Well'];?>" name="Well" >
                    </div>
                    <div class="col-md-4">
                        <label for="acres">City</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['City'];?>" name="City" >
                    </div>
                    <div class="col-md-4">
                        <label for="company_Instagram" >Pump type</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Pump_type'];?>" name="Pump_type" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="company_Instagram" >Water Ditch</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $row['Water_Ditch'];?>" name="Water_Ditch" >
                    </div>
                    <div class="col-md-4">
                        <label for="acres" >Irrigation Type</label>
                        <input type="text" class="form-control" placeholder="<?php echo $row['Irrigation_Type'];?>" name="Irrigation_Type">
                    </div>
                </div>  
                
                </form>
            

              </div>
<?php include 'footer.php'; ?>
