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
                <div class="row">
                    <div class="col-md-8">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab"  href="profile.php" role="tab" aria-controls="nav-home" aria-selected="true">Basic Information</a>
                                <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="farmerCenters.php" role="tab" aria-controls="nav-profile" aria-selected="false">Nearest Farmer Centers</a>

                            </div>
                        </nav>
                    </div>
                    

                </div>
                    <div id="nav-tabContent" style="margin: 10px;">
                        <div class="" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                          <div class="row" style="height: 135px;">
                            <div class="col-md-3">
                                <img src="images/unsplash_QcBAZ7VREHQ.png" class="img-fluid rounded-start" alt="..." style="height: 113px;width: 203px;">
                            </div>
                            <div class="col-md-4" style="top:18px">
                                
                                    <h5 class="" style="font-size:medium;">Farm name will come here </h5>
                                    <p class=""><img src="images/Vector.png" alt=""> Address of farm will come (2.5Kms)</p>
                                    <p class=""><small class="text-muted"><img src="images/Vector (1).png" alt=""> 12 Farmers  work here</small></p>
                                
                            </div>
                            <div class="col-md-2" style="top:10px">
                                
                                    <p class="">&nbsp;</p>
                                    <p class="">&nbsp;</p>
                                    <p class=""><small class="text-muted"><img src="images/Vector (2).png" alt="" > +xx-xxxxxxxxxx</small></p>
                                
                            </div>
                            <div class="col-md-3" style="top:20px">
                                
                                    <button class="details" style="width: 144px;color: #ffffff;background: #A2D134;border-radius: 6px;border-color: transparent;">View Details</button>
                                    <p class="">&nbsp;</p>
                                    <p class=""><small class="text-muted"><img src="images/Vector (3).png" alt=""> example@gmail.com</small></p>
                                
                            </div>
                          </div>
                        </div>    
                    </div>  
            </section>
<!-- ./Tabs -->



<?php include 'footer.php' ?>
