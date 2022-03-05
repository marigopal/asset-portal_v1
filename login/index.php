<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="../template_files/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../template_files/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="../template_files/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="../template_files/toastr/toastr.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form id="login_form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username" required="" value="">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="" value="">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <select class="form-control" id="login_auth" name="login_auth">
                                        <option value="2">Local Authendication</option>
                                        <option value="1">Windows Authendication</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" name="but_submit" id="but_submit" >Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../template_files/plugins/jquery/jquery.min.js"></script>
        <script src="../template_files/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../template_files/dist/js/adminlte.min.js"></script>
        <script src="../template_files/cookie_js/js.cookie.min.js"></script>
        <script src="js/index.js" type="text/javascript"></script>
        <script src="../template_files/encryption/aes.js" type="text/javascript"></script>
        <script src="../include/global.js" type="text/javascript"></script>
        <script src="../template_files/sweetalert2/sweetalert2.min.js"></script>
        <script src="../template_files/toastr/toastr.min.js"></script>
        <script src="../template_files/toast_js/toast_function.js"></script>
    </body>
</html>