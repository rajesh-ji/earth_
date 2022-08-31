<?php include 'header.php'?>
 <!-- Page Content Holder -->
 <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a> <a class="dashboard" href="" >Dashboard</a></li>
                        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input class="form-control " type="search" id="live_search" placeholder="Search" aria-label="Search" style="text-indent:30px;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>

                   
                </div>
                
            </div>
            <h6>Dashboard</h6>
                
                    <div class="row">
                        <div class="col walletimg clearfix " style="margin-right:30px">
                                <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from add_farmer");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc']; 
                                ?>
                            <img class="image-fluid" src="images/Icon.png" alt="" width="45" height="45" >
                            <div style="margin-top:30px;"><h6>Total Farmers: <?php  echo $record;?> </h6></div>
                        </div>
                        <div class="col walletimg " style="margin-right:30px">
                                <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from add_unit");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc']; 
                                ?>
                            <img class="image-fluid" src="images/Icon.png" alt="" width="45" height="45" >
                            <div style="margin-top:30px;"><h6>Total Hemplex: <?php  echo $record;?> </h6></div>
                        </div>
                        <div class="col walletimg " > 
                            <img class="image-fluid" src="images/Icon.png" alt="" width="45" height="45" >
                            <div style="margin-top:30px;"><h6>Farmer with No Hemplex:</h6></div>
                        </div>
			        </div>
                    
                   <div class="row mt-4">
                        <div class="col-md-8 ml-left mr-1 outsidegreen">
                            <div class="col-4 insidegreen" style=""></div>
                        </div>
                        <div class="col headingreen">
                            <div class="col headingreenin"></div>
                        </div>
                   </div> 

                   <div class="row mt-4">
                        <div class="col-md-12 outsidegraph sales">
                            <h4 class="">Sales overview</h4>
                            <p><a href="" style="color:#A2D134;">(+5) more</a>in 2021</p>
                            <canvas class="my-4 w-100" id="lineChart" style="display: block;width: 1075px;height: 255px;"></canvas>
                        </div>
                   </div>
<?php include 'footer.php'?>
            
            




















