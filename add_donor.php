<?php
    //include 'connection.php';
$host="localhost";
$user="root";
$pass="";
$db="bd";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo "Not Connected With Database";
}    

if (isset($_POST['submit'])) 
{
   $fname=$_POST['fname'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $BloodGroup=$_POST['blood_group'];
   $address=$_POST['address'];
   $msg=$_POST['msg'];
    $qry="INSERT INTO `tblblooddonars`(`Name`, `Mobile`, `Email`, `Gender`,`BloodGroup`, `Age`, `Address`, `Message`)
    VALUES ('$fname','$mobile','$email','$gender','$BloodGroup','$age','$address','$msg')";
    // echo $qry;
    $res=mysqli_query($con,$qry);
      if($res)
    {
      echo "<script>alert('Blood Donor Added Successfully')</script>";
    }
    else
    {
      echo $qry;
    }  
  }

?>
<!DOCTYPE html>
<html lang="en">
<?php
  include 'head.php';
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
 <?php
    include 'navigation.php';
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php

      include 'sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Donor</h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Add Donor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

       <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Donor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="Post" name="myForm"  onsubmit="return validateForm()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Full Name">Full Name <span style="color:red">*</span></label>
                     <div class="col-sm-4">
                       <input type="text" class="form-control" id="fullname" name="fname" placeholder="Enter Full Name" >
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-sm-4">
                      <label for="Mobile No">Mobile No <span style="color:red">*</span></label>
                       <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="Email">Email Id</label>
                     <div class="col-sm-4">
                         <input type="Email" class="form-control" id="email" name="email" placeholder="Enter Email Id">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="Age">Age <span style="color:red">*</span></label>
                     <div class="col-sm-4">
                       <input type="text" class="form-control" id="Age" name="age" placeholder="Enter Age ">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Gender <span style="color:red">*</span></label>
                      <div class="col-sm-4">
                      <select name="gender" class="form-control" >
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      </select>
                      </div>
                  </div>
                   
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Blood Group <span style="color:red">*</span></label>
                      <div class="col-sm-4">
                      <select name="blood_group" class="form-control" >
                      <option value="">Select</option>
                      <?php
                         
                           $qry="SELECT * FROM `tblbloodgroup`";
                           $res=mysqli_query($con,$qry);
                           while($raw=mysqli_fetch_array($res))
                           {  ?>
                            <option value="<?php echo $raw['BloodGroup']; ?>"><?php echo $raw['BloodGroup']; ?></option>
                           <?php } ?>
                      </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label>Address<span style="color: red">*</span></label>
                      <div class="col-sm-4">
                      <textarea class="form-control" id="address" name="address" placeholder="Enter address" >
                    </textarea>
                     </div>
                  </div>

                  <div class="form-group">
                    <label for="msg">Message</label>
                     <div class="col-sm-4">
                       <input type="text" class="form-control" id="msg" name="msg" placeholder="Enter Message ">
                      </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
                  </div>

                </div>
                <!-- /.card-body -->

               
              </form>
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
         

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php
    include 'footer.php';
 ?>
</div>
<!-- ./wrapper -->

<!--  SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script>
  function validateForm()
  {
    var a =document.forms["myForm"]["fname"].value;
    var b =document.forms["myForm"]["mobile"].value;
    var c =document.forms["myForm"]["email"].value;
    if(a == "")
    { 
      alert ("Name must be filled out");
       
      if(b == "")
      {
        alert ("Mobile Number Filled out");
          // return false;
        if(c == "")
      {
          alert("Email Id must be filled out");
          // return false;
      }return false;
     
      }
     }
  
   }

  
</script>
</body>
</html>
