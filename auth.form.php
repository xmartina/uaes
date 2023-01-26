<?php
    require_once ('header.php');
?>
    <div class="form-wrapper mt-90 mb-90">
        <div class="container">
            <div class="row">
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
                                <input type="text" class="form-control" placeholder="MATRICULATION NUMBER">
                                <hr />
                                <input type="password" class="form-control" placeholder="ACCESS CODE">
                                <hr />
                                <button class="btn bg-dark color-white w-100 font-20"> Login </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pl-30">
                    <div class="h3 pt-30 font-weight-700">
                        WELCOME TO UNIV. OF AGRIC. AND ENV. SCI. STUDENT PORTAL
                    </div>
                    <p class="font-12 text-uppercase font-weight-600">
                        ADMISSION IN PROGRESS, YOU CAN APPLY NOW
                    </p>
                    <div class="row mt-40">
                        <div class="col-lg-4">
                            <button class="btn bg-dark w-100 color-white font-weight-600">
                                <i class="icofont-file-alt"></i> APPLY NOW
                            </button>
                        </div>
                        <div class="col-lg-8">
                            <button class="btn bg-light w-100 color-dark font-weight-600">
                                <i class="icofont-file-pdf"></i> CONTINUE YOUR APPLICATION
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button class="btn bg-light w-100 color-dark font-weight-600 mt-10 border-bottom-theme-color-2-3px">
                                <i class="icofont-redo"></i> RE-QUERY PAYMENT
                            </button>
                        </div>
                    </div>
                    <p class="mt-20 mb-20">
                        The portal is now opened for student to complete their enrollment.
                    </p>
                    <p class="mb-40">
                        Students that are not enrolled will not be able to get clearance, book hostel accommodation or get their results.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php
require_once ('footer.php');
?>
