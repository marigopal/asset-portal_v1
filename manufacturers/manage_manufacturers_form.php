<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Manufacturers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index">Manufacturers</a></li>
                        <li class="breadcrumb-item active">Manage Manufacturers</li>
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
                            <label>Manufacturer Unique ID</label>
                            <input type="text" class="form-control" id="manufacturers_uid" name="manufacturers_uid">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Manufacturer Name</label>
                                <input type="text" class="form-control " id="manufacturers_name" name="manufacturers_name" onclick = "input_remove_error_notification('manufacturers_name')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" class="form-control " id="manufacturers_url" name="manufacturers_url" onclick = "input_remove_error_notification('manufacturers_url')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Support URL</label>
                                <input type="text" class="form-control " id="manufacturers_supporturl" name="manufacturers_supporturl" onclick = "input_remove_error_notification('manufacturers_supporturl')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Support Phone</label>
                                <input type="text" class="form-control " id="manufacturers_supportphone" name="manufacturers_supportphone" onclick = "input_remove_error_notification('manufacturers_supportphone')">
                            </div>
                        </div>
                    </div>
                   <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Support Email</label>
                                <input type="text" class="form-control " id="manufacturers_supportemail" name="manufacturers_supportemail" onclick = "input_remove_error_notification('manufacturers_supportemail')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" id="image_upload" name="file" />
                                <input type="hidden" value="Upload" id="button_upload_image">
                                <input type="hidden" id="img_name"/>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <img src="" alt="" width="200" height="200" id="receipt_display" class="d-none"> 
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = 'index';">Close</button>
                                <button type="button" class="btn btn-primary" id="savemanufacturersbutton" name="savemanufacturersbutton">Save</button>
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
<script src="js/manage_manufacturers.js" type="text/javascript"></script>
<script src="../include/imageupload.js" type="text/javascript"></script>