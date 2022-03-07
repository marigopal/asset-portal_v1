<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Suppliers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index">Suppliers List</a></li>
                        <li class="breadcrumb-item active">Manage Suppliers</li>
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
                            <label>Supplier Unique ID</label>
                            <input type="text" class="form-control" id="supplier_uid" name="supplier_uid">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control " id="suppliername" name="suppliername" onclick = "input_remove_error_notification('suppliername')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control " id="supplier_address1" name="supplier_address1" onclick = "input_remove_error_notification('supplier_address1')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " id="supplier_address2" name="supplier_address2" onclick = "input_remove_error_notification('supplier_address2')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control " id="supplier_city" name="supplier_city" onclick = "input_remove_error_notification('supplier_city')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control " id="supplier_state" name="supplier_state" onclick = "input_remove_error_notification('supplier_state')">
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
                                <input type="text" class="form-control " id="supplier_zip" name="supplier_zip" onclick = "input_remove_error_notification('supplier_zip')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Contact Name</label>
                                <input type="text" class="form-control " id="supplier_contactname" name="supplier_contactname" onclick = "input_remove_error_notification('supplier_contactname')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control " id="supplier_phone" name="supplier_phone" onclick = "input_remove_error_notification('supplier_phone')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" class="form-control " id="supplier_fax" name="supplier_fax" onclick = "input_remove_error_notification('supplier_fax')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control " id="supplier_email" name="supplier_email" onclick = "input_remove_error_notification('supplier_email')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" class="form-control " id="supplier_url" name="supplier_url" onclick = "input_remove_error_notification('supplier_url')">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Notes</label>
                                <input type="text" class="form-control " id="supplier_notes" name="supplier_notes" onclick = "input_remove_error_notification('supplier_notes')">
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
                                <button type="button" class="btn btn-primary" id="savesupplierbutton" name="savesupplierbutton">Save</button>
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
<script src="js/manage_suppliers.js" type="text/javascript"></script>
<script src="../include/imageupload.js" type="text/javascript"></script>