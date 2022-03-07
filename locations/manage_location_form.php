<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Locations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index">Locations List</a></li>
                        <li class="breadcrumb-item active">Manage Locations</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="form-group" hidden="">
                            <label>Location Unique ID</label>
                            <input type="text" class="form-control" id="locations_uid" name="locations_uid">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Location Name</label>
                                <input type="text" class="form-control " id="locationsname" name="locationsname" onclick = "input_remove_error_notification('locationsname')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Manager</label>
                                <input type="text" class="form-control " id="location_manager" name="location_manager" onclick = "input_remove_error_notification('location_manager')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control " id="location_address1" name="location_address1" onclick = "input_remove_error_notification('location_address1')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " id="location_address2" name="location_address2" onclick = "input_remove_error_notification('location_address2')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control " id="location_city" name="location_city" onclick = "input_remove_error_notification('location_city')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control " id="location_state" name="location_state" onclick = "input_remove_error_notification('location_state')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Countries
                                    <span class="required text-red"><img src="../img/add_row.png" alt="Smiley face" height="25" width="25" data-toggle="modal" data-target="#new_users" title="New"></span>
                                </label>
                                <select class="form-control" id="countries" name="countries"></select>                            
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" class="form-control " id="location_zip" name="location_zip" onclick = "input_remove_error_notification('location_zip')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Upload Invoice</label>
                                <input type="file" id="image_upload" name="file" />
                                <input type="hidden" value="Upload" id="button_upload_image">
                                <input type="hidden" id="img_name"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = 'index';">Close</button>
                                <button type="button" class="btn btn-primary" id="savelocationbutton" name="savelocationbutton">Save</button>
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
<script src="js/manage_location.js" type="text/javascript"></script>
<script src="../include/imageupload.js" type="text/javascript"></script>