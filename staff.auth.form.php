<?php
require_once ('header.php');
?>
<style>
    .logo-l{
        background-image: url('https://portal.uaes.edu.ng/media/school_logo.png');
        width: 10%;
        height: 8em;
        background-size: contain;
        background-repeat: no-repeat;

    }
    .color-blue{color:#0a58ca;}
    .cursor-pointer{cursor: pointer;}
</style>
    <div class="container pt-90 pb-90">
        <div class="logo-holder d-flex justify-content-center">
            <div class="logo-l"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="shadow rounded-3 p-30 form-wrapper">
                    <form action="" class="pt-20">
                        <div class="alert alert-warning alert-dismissible d-flex align-items-center show" role="alert">
                            Login now to view this page.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <script>$('.alert').alert()</script>
                            </button>
                        </div>

                        <div class="form-group pt-20">
                            <input type="text" class="form-control" placeholder="Username">
                            <hr />
                            <input type="password" class="form-control" placeholder="Password">
                            <hr />
                            <div class="reset-p-word color-blue text-right mb-15 cursor-pointer"> Reset Password</div>
                            <button class="btn bg-dark color-white w-100 font-20"> Login </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
<?php
require_once ('footer.php');
?>
