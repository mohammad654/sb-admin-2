


<?php

$viewTitle='Register';
 include 'script.php';
 include 'block.header.php';

 ?>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group">
                                        <input type="text" name="first_name" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="Password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="p_confirm" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login" class="btn btn-primary btn-user btn-block" value="register">Register Account</a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgotpassword">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
