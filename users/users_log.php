<?php
include('../include/menu/menu.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users Logs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                        <li class="breadcrumb-item"><a href="../users/">Users</a></li>
                        <li class="breadcrumb-item active">Users Logs</li>
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
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id="userslogs_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th hidden="">ID</th>
                                        <th>Date</th>
                                        <th>Emp Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Status</th>
                                        <th>Done By</th>
                                    </tr>
                                </thead>
                                <tbody id="userslogs_tbody"></tbody>
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
<script src="js/logs.js" type="text/javascript"></script>