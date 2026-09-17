<?php session_start();
// Database Connection
include('includes/config.php');
//Validating Session
if(strlen($_SESSION['aid'])==0)
  { 
header('location:index.php');
}
else{
// Code for Update Practice Area
if(isset($_POST['update'])){
$practicearea=$_POST['practicearea'];
$paid=intval($_GET['paid']);
$query=mysqli_query($con,"update tblpracticearea set  PracticeArea='$practicearea' where id='$paid'");
if($query){
echo "<script>alert('Practice Area updated successfully.');</script>";
echo "<script type='text/javascript'> document.location = 'manage-practice-areas.php'; </script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
}
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LRMS  | Edit Practice Area</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!--Function Email Availabilty---->


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php include_once("includes/navbar.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include_once("includes/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Practice Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Practice Area</li>
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
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update the Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="subadmin" method="post">
                <div class="card-body">
<?php
$paid=intval($_GET['paid']);
 $query=mysqli_query($con,"select * from tblpracticearea where  id='$paid'");
$cnt=1;
while($result=mysqli_fetch_array($query)){
?>
<!-- Practice Area--->
   <div class="form-group">
                    <label for="exampleInputFullname">Practice Area</label>
                    <input type="text" class="form-control" id="practicearea" name="practicearea" value="<?php echo $result['PracticeArea'];?>" required>
                  </div>
 <!-- Added by--->
   <div class="form-group">
                    <label for="exampleInputFullname">Added By</label>
                    <input type="text" class="form-control" id="addedby" name="addedby" value="<?php echo $result['AddedBy'];?>" readonly>
                  </div> 

<!-- Creation Date--->
   <div class="form-group">
                    <label for="exampleInputFullname">Creation Date</label>
                    <input type="text" class="form-control" id="creationdate" name="creationdate" value="<?php echo $result['CreationDate'];?>" readonly>
                  </div>


<?php } ?>
      
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        
       
          </div>
          <!--/.col (left) -->
  
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once('includes/footer.php');?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php } ?>
