<!--Delete the rows in table-->
<div class="modal fade" id="delete_modal_box">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-body">
                <p>Are you sure you want to delete ?</p>
                <div class="row" hidden="">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Unique ID<span class="required text-red">*</span></label>
                            <input type="text" class="form-control" id="delete_uid" name="delete_uid" placeholder="Unique ID" onkeyup="input_remove_error_notification('firstname');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-outline-light" id="delete_button" name="delete_button">Yes</button>
            </div>
        </div>
    </div>
</div>
<!--User create modal-->
<div class="modal fade" id="users_modal_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12" hidden="">
                            <div class="form-group">
                                <label>Users Unique ID</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Employee ID</label>
                                <input type="text" class="form-control" id="emp_id" name="emp_id" placeholder="Employee ID" onclick = "input_remove_error_notification('emp_id')">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>First Name<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" onchange="empid_validate()"onclick = "input_remove_error_notification('fname')">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Last Name<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" onclick = "input_remove_error_notification('lname')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>User Name<span class="required text-red">*</span></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="User Name" onchange="username_validate()" onclick = "input_remove_error_notification('username')">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" onclick = "input_remove_error_notification('password')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>User Access<span class="required text-red">*</span></label>
                                 <select class="form-control select2bs4" id="usr_access" name="usr_access"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_user_btn" name="save_user_btn" onclick="manage_users()">Save</button>
            </div>
        </div>
    </div>
</div>
