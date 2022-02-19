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
    $BGN=$_POST['BGN'];
    $timestamp = date("Y-m-d H:i:s");
    $qry="INSERT INTO `tblbloodgroup` (`BloodGroup`,`PostingDate`) VALUES ('$BGN','$timestamp')";
    $res=mysqli_query($con,$qry);
      if($res)
    {
      echo "<script>alert('Blood Group Added Successfully')</script>";
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blood Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Blood Group</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Blood Group</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post"name="myForm" onsubmit="return validateForm()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputbloodgroupname">Blood Group Name:</label>
                    <input type="text" class="form-control" id="exampleInputbloodgroupname" name="BGN" placeholder="Enter Blood Group Name...">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-md-3">
          </div>
          <!-- /.card -->
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>  
  <!-- /.content-wrapper -->
 <?php
      include 'footer.php';
  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["BGN"].value;
  if (x == "") {
    alert("Blood Group Must Be filled out");
    return false;
  }
}
</script>
</body>
</html>
w