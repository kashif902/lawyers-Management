    <header class="layout-1">
        <div class="header-output">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="logo-in">
                            <a id="logo" href="index.php" class="d-inline-block" style="color:#fff; font-size:35px; font-weight:bold;">LRMS <br />
                                <span style="font-size:14px;">Lawyer Record Management System</span></a>
                            <a class="mobile-toggle padding-15px background-main-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="consultation">
                            <strong>Free</strong><span> Consultation</span>
                            <?php 
$query=mysqli_query($con,"select MobileNumber from  tblpage where PageType='contactus'");
while ($row=mysqli_fetch_array($query)) {
?>
<a class="number" href="tel:<?php echo $row['MobileNumber'];?>"><span class="icon-phone"></span><?php echo $row['MobileNumber'];?></a>
<?php } ?>
                        </div>
                <ul class="meta-link">
                       
                            <li>
                                <a id="search-header" href="search.php#mainsearch"><span class="header-icon search"></span><span class="title">Search</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mneu-output background-main-color clearfix">

                <ul id="menu-main" class="nav-menu link-padding-tb-15px white-link dropdown-light">
               <li><a href="index.php">Home </a></li>
               <li><a href="about-us.php">About Us</a></li>
               <li><a href="lawyers-advocates.php">Lawyers / Advocates</a></li>
            <li><a href="add-lawyer-advocate.php">Add Lawyers / Advocates</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="admin/">Admin Login</a></li>
                </ul>
        
            </div>
        </div>
    </header>

