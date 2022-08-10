<?php include 'header.php' ?>
     <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Profile</a></li>
        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input style="" class="form-control " type="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Profile</h6>
            
            <section id="tabs">
                <div class="row clearfix">
                    <div class="col-md-8">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"  href="profile.php" role="tab" aria-controls="nav-home" aria-selected="true">Basic Information</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="farmerCenters.php" role="tab" aria-controls="nav-profile" aria-selected="false">Nearest Farmer Centers</a>

                            </div>
                        </nav>
                    </div>
                    <div class="col-md-4">
                            <input type="button" class="edit" id="edit" value="Edit" >
                    </div>

                </div>
                    <div id="nav-tabContent" style="margin: 10px;">
                        <div class="" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form action="" class="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="fname" >Full Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="" name="fname" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" >Email id</label>
                                        <input type="email" class="form-control" placeholder="" name="email" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="number" >Phone Number</label>
                                        <input type="text" class="form-control" placeholder="" name="number" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="area" >Land area(area in Acres)</label>
                                        <input type="text" class="form-control" id="area" placeholder="" name="area" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="c_name" >Farm/company name</label>
                                        <input type="text" class="form-control" placeholder="" name="c_name" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="c_website">Farm/company website address</label>
                                        <input type="text" class="form-control" placeholder="" name="c_website" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="address" >Address</label>
                                        <input type="text" class="form-control" placeholder="" name="address" >
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                        
                        
                    </div>
                
                
               
            </section>
<!-- ./Tabs -->



<?php include 'footer.php' ?>
