<div class="modal fade" id="asset_assign_user_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none">
                            <div class="form-group">
                                <label>Unique ID<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="compo_uid" name="compo_uid">
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Asset Type <span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="assettype_frmdb" name="assettype_frmdb">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row" id="assignuser_div">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>User <span class="required text-red">*</span></label>
                                <select class="form-control select2bs4" id="user" name="user" onchange="input_remove_error_notification('user')">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="assignasset_div">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Asset <span class="required text-red">*</span></label>
                                <select class="form-control select2bs4" id="asset_assign_list" name="asset_assign_list" onchange="input_remove_error_notification('asset_assign_list')">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_userbutton" name="save_userbutton">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="checkinconfirm">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-body">
                <p>Are you sure you want to checkin ?</p>
                <div class="row" hidden="">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Unique ID<span class="required text-red">*</span></label>
                            <input type="text" class="form-control" id="compo_removeuid" name="compo_removeuid" placeholder="Unique ID" onkeyup="input_remove_error_notification('compo_removeuid');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-outline-light" id="confirmcheckinbutton" name="confirmcheckinbutton">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="inv_update_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="row d-none">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Unique ID<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="invupd_comid" name="invupd_comid">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Supplier <span class="required text-red">*</span></label>
                                <select class="form-control" id="invupd_supplier" name="invupd_supplier" onchange="load_invoicelist('invupd_invno')">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Invoice Number <span class="required text-red">*</span></label>
                                <select class="form-control" id="invupd_invno" name="invupd_invno">
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveinvupd_button" name="saveinvupd_button">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="asset_statuschange_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="form-group" >
                                <label>Unique ID<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="statuschange_uid" name="statuschange_uid">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Status<span class="required text-red">*</span></label>
                                <select class="form-control" id="statuslist_select" name="statuslist_select">
                                </select>
                                <input type="hidden" class="form-control" id="statuschangetext" name="statuschangetext">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savestatus_asset_btn" name="savestatus_asset_btn">Save</button>
            </div>
        </div>
    </div>
</div>