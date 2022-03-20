<?php
include('../include/menu/menu.php');
?>
<div class="modal fade in" id="confirm_model">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                Are you want to add more items in same invoice?
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary2" name="r1">
                                <label for="radioPrimary2">
                                    Yes
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" name="r1" checked>
                                <label for="radioPrimary1"> No
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none" id="confirm_supplier_div">
                            <div class="form-group">
                                <label> Supplier
                                </label>
                                <select class="form-control select2bs4" id="supplier_select" name="supplier_select" onchange = "load_invoicelist('invoice_select')">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none" id="invoicenumber_div">
                            <div class="form-group">
                                <label> Invoice Number
                                </label>
                                <select class="form-control select2bs4" id="invoice_select" name="invoice_select" >
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_confirm_button" name="save_confirm_button" disabled>Save</button>
            </div>
        </div>
    </div>
</div>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="index">Invoice</a></li>
                        <li class="breadcrumb-item active">Add Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-body">
                    <form method="post" id="insert_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-default">
                                    <div class="card-body p-0">
                                        <div class="bs-stepper">
                                            <div class="bs-stepper-header" role="tablist">
                                                <div class="step" data-target="#logins-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Details</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#information-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Component</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">
                                                <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                    <div class="row">
                                                      <div class="col-12 col-sm-4 d-none">
                                                          <div class="form-group">
                                                              <label>Unique ID
                                                              </label>
                                                              <input class="form-control" id="inv_uid" name="inv_uid" />

                                                          </div>
                                                      </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Asset Category
                                                                </label>
                                                                <select class="form-control select2bs4" id="asset_category" name="asset_category" onchange="load_assetprefix()">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4 d-none">
                                                            <div class="form-group">
                                                                <label>Category Prefix
                                                                </label>
                                                                <input class="form-control" id="asset_prefix" name="asset_prefix" />

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Warranty/Expiration ( in Months)</label>
                                                                <input type="number" class="form-control" id="warranty" name="warranty">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Location</label>
                                                                <select class="form-control select2bs4" id="location" name="location">

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="pod_div">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Purchase Order Date</label>
                                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask id="pod" name="pod" >

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Purchase Order Number</label>
                                                                <input type="text" class="form-control" id="pon" name="pon">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Purchase Cost</label>
                                                                <input type="text" class="form-control" id="poc" name="poc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="invoice_div">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Supplier</label>
                                                                <select class="form-control select2bs4" id="supplier" name="supplier" required="">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Invoice  Date</label>

                                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask id="invdate" name="invdate" required="">

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Invoice Number</label>
                                                                <input type="text" class="form-control" id="invno" name="invno" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Manufacturer</label>
                                                                <select class="form-control select2bs4" id="manufacturer" name="manufacturer" >
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Model</label>
                                                                <select class="form-control select2bs4" id="asset_model" name="asset_model" onchange="load_modelno('_modelno')" >
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Model No</label>
                                                                <select class="form-control select2bs4" id="_modelno" name="_modelno" >
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label>Upload Invoice</label>
                                                                <input type="file" id="image_upload" name="file" />
                                                                <input type="hidden" value="Upload" id="button_upload_image">
                                                                <input type="hidden" id="img_name" name="img_name"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">

                                                                <embed src="file_name.pdf" width="350px" height="500px" id="receipt_display"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                                                </div>
                                                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                                    <div class="row">
                                                        <div class="container">
                                                            <div>
                                                                <a name="add" id="add" class="add_component"><img src="../img/add_row.png" alt="Smiley face" height="25" width="25" title="New"></a>
                                                            </div>
                                                            <br />
                                                            <div class="table-responsive">
                                                                <table  class="table table-bordered" id="item_table">
                                                                    <tr>
                                                                        <th>Serial Number</th>
                                                                        <th>Remarks</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                                    <button type="submit" id="saveinvoicebutton" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</div>
<?php include('../include/footer.php'); ?>
<?php include('../include/script.php'); ?>
<script src="js/insert.js" type="text/javascript"></script>
<script src="../include/imageupload.js" type="text/javascript"></script>
