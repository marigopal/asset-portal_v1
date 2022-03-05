<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="../img/user_profile_icon.png"
                                     alt="">
                            </div>
                            <h3 class="profile-username text-center" id="fullname_display"></h3>
            <!--<p class="text-muted text-center">Software Engineer</p>-->
                        </div>
                    </div>
                    <div class="card card-primary">	
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>Email</strong>
                            <p class="text-muted" id="email_display" >

                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">
                                <span id="address1_display"></span>
                                <?php echo '</br>'; ?>
                                <span id="address2_display"></span>
                                <?php echo '</br>'; ?>
                                <span id="city_display"></span>
                                <?php echo '</br>'; ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card"><div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                   
                                        <div class="row d-none">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Users Unique ID</label>
                                                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6" >
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                                    <span id="password_check" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6" >
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                                    <span id="password_check" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee ID</label>
                                                    <input type="text" class="form-control" id="emp_id" name="emp_id" placeholder="Employee ID" >
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" >
                                                   
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" >
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control" id="address1" name="address1" placeholder="Address Line 1" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Address Line 2">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                                                    </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="updateuserprofile_button">Update</button>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<?php include('../include/footer.php'); ?>
<?php include('../include/script.php'); ?>
<script src="jquery/profile.js" type="text/javascript"></script>