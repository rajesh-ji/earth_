<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earth Merchant</title>
	

    <link rel="stylesheet" href="css/dashboard.css" type="text/css">
    <link rel="stylesheet" href="css/check.css" type="text/css">
	  <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" type="text/css">
	  <link rel="stylesheet" href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" type="text/css">
	

    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
   
</head>
	<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="padding-inline: 2%;padding-top: 10px;">
      <img src="images/image 1 (1).png" alt="logo">
      <span style="position: absolute;padding-inline: 8%;"><h5><a href="" style="color: #A2D134;">Pages/</a>Insert Form</h5></span>
      <p style="position: absolute;padding-inline: 16%; font-weight: 600;">Edit/Update Farm</p>
	  <a href="" class="bell" style="float:right; padding-top:10px;"><img src="images/bell.png" alt=""></a>
	  <a href="" style="float:right; padding-top:10px; margin-right: 10px;"><img src="images/setting.png" alt=""></a>
    <input class="form-control form-control-dark" type="text" placeholder="Search here" aria-label="Search" style="position: relative;
    margin-right: 10px;
    border-radius: 15px;
    width: 12%;
    float: right;
    top: 5px;
    border: 0.5px solid #242122;
    background: #ffffff;">
    </nav>
	<div class="container-fluid">
      <div class="row">
	  <nav class="col-md-2 d-none d-md-block bg-white sidebar topnav" style="box-shadow: none;top:-41px">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item" >
                <a class="nav-link active" href="dashbord.php" style="color: #242122;font-weight: 600;">
                  <span >
                    <img src="images/Rectangle 3.png" alt="" >
                    <img src="images/defaultt.png" alt="" >
                  </span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="carbonCredits.php" style="color: #242122;">
                  <span ><img src="images/Group.png" alt=""></span>
                  Carbon credits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form.php" style="color: #242122;">
                  <span><img src="images/Group (1).png" alt=""></span>
                  Edit/update farm
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #242122;">
                  <span ><img src="images/settings.png" alt=""></span>
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="heading">
              <span >ACCOUNT PAGES</span>

            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="profile.php" style="color: #242122;">
                  <span ><img src="images/profile.png" alt=""></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color: #242122;">
                  <span ><img src="images/Group (2).png" alt=""></span>
                  Signout
                </a>
              </li>
            </ul>
          </div>
        </nav>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="bottom:30px">
			<div class="row m-0" id="flex-wallet">
  			<div class="col-md-4 mr-2" style="background:#FFFFFF;" ><a href=""><img src="images/Icon.png " alt="" style="/* align-items: end; */float: right;padding-top: 12px;"></a></div>
				<div class="col-md-4 mr-2" style="background:#FFFFFF;" ><a href=""><img src="images/Icon.png" alt="" style="/* align-items: end; */float: right;padding-top: 12px;"></a></div>
				<div class="col-md-4" style="background:#FFFFFF;" ><a href=""><img src="images/Icon.png" alt="" style="/* align-items: end; */float: right;padding-top: 12px;"></a></div>	
			</div>
			<br>
			<div class="row justify-content-md-center" id="flex-div">
        <div style="background:#FFFFFF;display: flex;width: -webkit-fill-available;">
          <div class="col-md-8" style=" background-color: #A2D134 ; margin-left: auto;width: 33%;border-radius: 12px; height: initial;" ></div>
          </div>
          <div style="background:#FFFFFF;display: flex;width: 520px;">	
  				<div class="col-md-4" style="background: linear-gradient(360deg, rgba(162, 209, 52, 0) 0%, #A2D134 100%);width: -webkit-fill-available;height: 167px;border-radius: 12px"><h4>Heading</h4></div>
        </div>
      </div>
              <div class="col-md-12">
                <h4>Sales overview</h4>
                <p><a href="" style="color:#A2D134;">(+5) more</a>in 2021</p>
                <canvas class="my-4 w-100" id="lineChart" style="display: block;width: 1075px;height: 255px;"></canvas>
              </div>
            
              
        </main>
	  </div>
	</div>
	

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
	<script src="../assets/vendors/Chart.min.js"></script>
	<script>
    var ctx = document.getElementById("lineChart").getContext('2d');
    //var ctx = document.getElementById('chart').getContext('2d');
var gradient = ctx.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0, 'rgba(86, 189, 91, 1)');
gradient.addColorStop(1, 'rgba(86, 189, 91, 0)');

var grad = ctx.createLinearGradient(0, 0, 0, 300);
grad.addColorStop(0, 'rgba(162, 209, 52, 1)');
grad.addColorStop(1, 'rgba(162, 209, 52, 0)');

var myChart = new Chart(ctx, {
 type: 'line',
 data: {
   labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
 datasets: [{
 backgroundColor: gradient,
 borderColor: " #56BD5B",
 label: '',
 fill: true,
 data: [0, 100, 200, 300, 400, 500, 1330, 2210, 7830, 2478, 300, 400],
 },{
 backgroundColor: grad,
 borderColor: "#A7BF58",
 label: '',
 fill: true,
 data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100, 300, 400],
 }
]
 },

options: {
 scales: {
 y: {
 beginAtZero: true
 }
 },
 tension: 0.3,
 legend: { display: false }
 }
});
</script>
</body>
</html>
