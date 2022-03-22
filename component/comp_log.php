<?php
include('../include/menu/menu.php');
include ("modals/asset_assign_user.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Asset Logs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="../component/all_comp">Component</a></li>
                        <li class="breadcrumb-item active">Asset Logs</li>
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
                       
                        <div class="card-body">
                            <table id="componentlog_list" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Asset Tag</th>
                                        <th>Status</th>
                                        <th>User</th>
                                        <th>Asset</th>
                                        <th>Done By</th>
                                        <th>Done On</th>
                                    </tr>
                                </thead>
                                <tbody id="_index_componentlog_list"></tbody>
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
<script src="js/comp_log.js" type="text/javascript"></script>
