<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Model Number</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index">Model Number</a></li>
                        <li class="breadcrumb-item active">Manage Model Number</li>
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
                            <label>Modelno Unique ID</label>
                            <input type="text" class="form-control" id="modelno_uid" name="modelno_uid">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Model Name
                                    <span class="required text-red pl-1">
                                        
                                        <a href="#" data-toggle="modal" data-target="#modelname_popup" onclick="update_user('<?= encrypt($row['users_uid']); ?>');"><img src="../img/add_row.png" alt="Smiley face" height="15" width="15" onclick="load_assetcategory('asset_category')"></a>
                                    </span>
                                </label>
                                <select class="form-control select2bs4" id="model_name" name="model_name" onchange="input_remove_error_notification('model_name')"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                       <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Model Number</label>
                                <input type="text" class="form-control " id="model_number" name="model_number" onclick = "input_remove_error_notification('model_number')">
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
                                <button type="button" class="btn btn-primary" id="savemodelnobutton" name="savemodelnobutton" onclick="save_modelnumber()">Save</button>
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
<script src="js/manage_modelno.js" type="text/javascript"></script>
<script src="../include/imageupload.js" type="text/javascript"></script>