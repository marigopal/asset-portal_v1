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
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" onclick = "input_remove_error_notification('Password')">
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
                <button type="button" class="btn btn-primary" id="save_btn" name="save_btn">Save</button>
            </div>
        </div>
    </div>
</div>