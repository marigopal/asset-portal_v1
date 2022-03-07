<?php
include('../include/menu/menu.php');
include('../include/model.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Components</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item active">Components</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="../manage_asset/manage_asset_form"><img src="../img/add_row.png" alt="Smiley face" height="25" width="25" data-toggle="modal" data-target="#new_users" title="New"></a>
                        </div>
                        <div class="card-body">
                            <table id="component_list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox"  id="selectAll" value="" />
                                        </th>
                                        <th hidden="">ID</th>
                                        <th>Inv No</th>
                                        <th>Asset Tag</th>
                                        <th>Category</th>
                                        <th>Manufacturer</th>
                                        <th>Model</th>
                                        <th>Model No</th>
                                        <th>Serial</th>
                                        <th>warranty</th>
                                         <th>Assigned User</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="_index_component_list"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
          <div class="col-12 col-md-2">
                            <div class="form-group">
                                <label>Assigned Type
                                    
                                </label>
                                <select class="form-control" id="assignedtype" name="assignedtype">
                                    <option value="0">Select</option>
                                    <option value="1">Asset</option>
                                    <option value="2">User</option>
                                </select>                            
                            </div>
                        </div>
        </div>
        </div>
    </section>
</div>
<?php include('../include/footer.php'); ?>
<?php include('../include/script.php'); ?>
<script src="js/component.js" type="text/javascript"></script>
