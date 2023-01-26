<?php
require_once ('header.2.php');
?>
<!-- Start Banner
============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url('https://www.uaes.edu.ng/assets/img/banner/banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Admissions Status</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Admissions Status</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<style>
    .img-holder{
        background-image: url('https://www.uaes.edu.ng/assets/img/admissionstatus.jpg');
        width: 100%;
        height: 23em;
        background-position: center center;
        background-size: cover;
    }
</style>
<div class="container mt-90 mb-90">
    <div class="row">
        <div class="col-lg-6">
            <div class="img-holder rounded-3"></div>
        </div>
        <div class="col-lg-6">
            <div class="h2 mb-30">
                How To Check Admission Status
            </div>
            <p class="mb-20">
                All those who have applied for admission via the <span class="font-weight-700" style="cursor: pointer" onclick="location.href='auth.form.php'">school portal</span> can easily check their admission status by visiting the application page of the portal and clicking on "check status". When the pop-up form opens, please enter the application number you got when you applied(not your jamb reg number please).
            </p>
            <p class="mb-20">
                Once you have entered the application number correctly and submitted, the system will display your data which includes your admission status.
            </p>
            <p class="mb-30">
                Visit the UAES <span class="font-weight-700" style="cursor: pointer" onclick="location.href='auth.form.php'"> portal </span>
            </p>
        </div>
    </div>
</div>
<?php
require_once ('footer.2.php');
?>
