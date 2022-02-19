 <?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="bd";
  
  $con=mysqli_connect($host,$user,$pass,$db);
  
  if(!$con)
  {
    echo "Not Connected With Database";
  }

  $id=$_GET['id'];

  $qry="DELETE FROM `tblbloodgroup` WHERE id='$id'";
  $res=mysqli_query($con,$qry);

  if($res)
  {
      echo "<script>alert('Data Deleted Successfully')</script>";
      header("Location:donor_list.php");
  }
  else 
  {
      echo $qry;
  }


?>
