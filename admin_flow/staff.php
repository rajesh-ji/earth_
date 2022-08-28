<?php include 'header.php' ?>
     <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Staff</a></li>
        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input style="" class="form-control " type="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>
                    <a href="add_staff.php"> <input type="button" class="btn add_staff" id="edit" value="Add Staff" ></a>
                    <input class="btn filter_s" type="submit" name="" id="" value="Filters" >
                    <img class="" src="images/filter.png" alt="" style="margin: -29px;">
                    
                   
                   
                </div>
                
            </div>
            <h6>Staff</h6>
            
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Unit Name</th>
            </tr>
        </thead>
        <tbody>
        <?php $query = mysqli_query($conn, "select * from add_staff ");
                    while($rd=mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo $rd['id']?></td>
                <td><?php echo $rd['f_name']?></td>
                <td><?php echo $rd['l_name']?></td>
            </tr>
            <?php } ?>   
        </tbody>
       
    </table>
<!-- ./Tabs -->
 


<?php include 'footer.php' ?>
