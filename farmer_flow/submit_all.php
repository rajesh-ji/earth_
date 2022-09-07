<?php
 include ('config.php');
 if(!isset($_SESSION['login_id'])){
    header('Location: login.php');
}
 $login_id = $_SESSION['login_id'];
 $user_id = $_SESSION['user_id']; 
 
    if (isset($_POST['erosion'])) {
        if (!empty($_SESSION['POST'])){
            if (empty($_POST['Costs_Water'])|| empty($_POST['Costs_Electric'])|| empty($_POST['Costs_average'])){ 
            // Setting error for page 3.
            $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
            header("location: form_finish.php"); // Redirecting to third page.
            } else {
            foreach ($_POST as $key => $value) {
            $_SESSION['POST'][$key] = $value;
            } 
        extract($_SESSION['POST']); // Function to extract array.
        // $result = mysqli_query($conn, "select *from user where email = '$email' and user_id  = '$user_id' ");
$query=  mysqli_query($conn, "insert into user (name, phone_num, email, address,acreage_add, sec_cont, phone_sec, email_sec, farm_name, farm_web, farm_fb, farm_insta, num_acres,dt_rec, dt_rep, lab_num, Organic,Soluble, ph, Nitrate_ppm,
Phosphorus_ppm, Potassium_ppm, Sulfur_ppm, Zinc_ppm, Iron_ppm,Manganese_ppm,Copper_ppm,Boron_ppm,Calcium_ppm,Magnesium_ppm,crop_planted,Landscape,Current_crop,States_Region,Well,City,
Pump_type,Water_Ditch,Irrigation_Type,erosion, Pest, Costs_Water, Costs_Electric,Costs_average, Costs_overall, Equipment,Custom_equip, facility, wifi, Cell_Service) VALUES ('$name','$number','$email','$address','$address1','$name2','$number2','$email2','$company_name','$company_website','$company_Facebook','$company_Facebook','$acres','$dt_rec','$dt_rep',
'$lab_num','$Organic','$Soluble','$ph','$Nitrate_ppm','$Phosphorus_ppm','$Potassium_ppm','$Sulfur_ppm','$Zinc_ppm','$Iron_ppm','$Manganese_ppm','$Copper_ppm','$Boron_ppm','$Calcium_ppm','$Magnesium_ppm','$crop_planted',
'$Landscape','$Current_crop','$States_Region','$Well','$City','$Pump_type','$Water_Ditch','$Irrigation_Type','$erosion','$Pest','$Costs_Water','$Costs_Electric','$Costs_average',
'$Costs_overall','$Equipment','$Custom_equip','$facility','$wifi','$Cell_Service' where id='$user_id' )");
$rd = mysqli_fetch_assoc($query);
// print_r($_POST);
if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 header("location: dashboard.php");
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 } else {
 header("location: farm.php"); // Redirecting to first page.
 }
 } else {
 header("location: farm.php"); // Redirecting to first page.
 }
 ?>