<?php include 'header.php' ?>
<?php include 'delete.php'?>
     <!-- Page Content Holder -->
   <div class="container-fluid ">
            <div class="row">
                <div class="col clearfix mt-3">
                    <ul class="nav-ul float-left" style="padding-left: 0px;">
                        <li ><a class="pages" href="" >Pages <span>/</span> </a><a class="dashboard" href="" >Hemplex</a></li>
        
                    </ul>
                    
                    <form class="form-inline float-right searchform">
                        <input class="form-control" type="search" id="myInput" onkeyup="myFunction()" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <a href=""><img style="margin-left:20px"src="images/bell.png" alt=""></a>
                        <a href=""><img style="margin-left:20px; margin-right:20px " src="images/setting.png" alt=""></a>
                    </form>
                    
                   <a href="addunit.php"> <input type="button" class="btn add_staff" id="edit" value="Add Unit" ></a>
                    <input class="btn filter" type="submit" name="" id="" value="Filter" >
                    <img class="" src="images/filter.png" alt="" style="margin: -29px;">
                  
                </div>
            </div>
            <h6>Hemplex</h6>
            
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Unit Name</th>
                <th>Location</th>
                <th>Number of Farmers</th>
                <th>Member Since</th>
                <th>Performance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $qt = mysqli_query($conn,"SELECT count(*) as abc from add_farmer");
                $row = mysqli_fetch_assoc($qt);
                $record = $row['abc']; 
            ?>
            <?php $query = mysqli_query($conn, "select * from add_unit");
                    while($rd=mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo $rd['id']?></td>
                <td><?php echo $rd['f_name']?></td>
                <td><?php echo $rd['unit_loc']?></td>
                <td><?php echo $record;?></td>
                <td><?php echo $rd['mem_since']?></td>
                <td>High</td>
                <td><i class="fa fa-ellipsis-v" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></td>
            </tr>
            <?php } ?>   
        </tbody>
       
    </table>
<!-- ./Tabs -->
 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <a href="../ProcessingCenter/add_farmers.php"><button type="submit" class="btn">Attach Farmer</button></a><br>
          <button type="submit" class="btn" style="color:red;" delete_id="<?php echo $row['id']?>">Delete Unit</button>
        </div>
      </div>
    </div>
  </div>


<?php include 'footer.php' ?>

    <script type="text/javascript">
       function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("example");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }
    </script>   
