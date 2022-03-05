<?php
include('../include/menu/menu.php');
include ("modal/modals.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Import Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item active">Import Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-body">
                    <form class="form-horizontal" action="_dbPage/import_user" method="post"
                          name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="form-group">
                                    <label>Upload CSV </label>
                                    <input type="file" name="file"
                                           id="file" accept=".csv">
                                    <button type="submit" id="submit" name="import" class="btn btn-primary import_button" hidden="">Import</button>
                                </div>
                            </div>
                        </div>

                    </form>
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
                            <a href="#" data-toggle="modal" data-target="#users_modal_box"><img src="../img/add_row.png" alt="Smiley face" height="25" width="25" data-toggle="modal" data-target="#new_users" title="New"></a>
                        </div>
                        <div class="card-body">
                            <table id="users_list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th hidden="">ID</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody id="_index_users_list"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>
<?php include('../include/footer.php'); ?>
<?php include('../include/script.php'); ?>
<script src="jquery/import_user.js" type="text/javascript"></script>