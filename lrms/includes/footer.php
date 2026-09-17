<a href="#" class="go-top box-shadow background-second-color"><span class="arrow_carrot-up"></span></a>


    <!-- preloader -->
    <div class="nile-preloader">
        <div class="logo">
            <img src="assets/img/loading-1.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->



    <footer class="layout-1">
        <div class="output padding-tb-100px">
            <div class="container">

                <div class="row">

                    <div class="col-lg-5">
                        <div class="nile-widget about-me-widget">
                            <div class="about-me">
                                <h2 class="title">LRMS</h2>
<?php 
$query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
while ($row=mysqli_fetch_array($query)) {
?>
                                <div class="text-about margin-tb-25px">
                                    <?php  echo substr($row['PageDescription'],0,300);?>
                                </div>
                            <?php } ?>

                                <a href="about-us.php" class="nile-bottom sm">More info...</a>
                            </div>
                        </div>
                    </div>

     

                    <div class="col-lg-5">
                        <div class="nile-widget layout-1 widget_nav_menu">
                            <h2 class="title">About Us</h2>
                            <ul   class="menu">
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="lawyers-advocates.php">Listed Lawyers / Advocates</a></li>
                                <li><a href="add-lawyer-advocate.php">Add Lawyers / Advocates</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="admin/">Admin Login</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copy-text padding-tb-4px">(c) <?php echo date('Y');?> LRMS.</div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="social-media">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>