<?php
include('../include/menu/menu.php');
//require './get_assetcategory.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <?php 
                            $available_comp = "select count(*) as cntAvailable,status_id from tbl_component WHERE `is_deleted` = '0'";
                            $result_available = mysqli_query($con, $available_comp);
                            $row_available = mysqli_fetch_array($result_available);
                            echo $row_available['cntAvailable'];
                            
                            ?>
                            </h3>
                            <p>Asset</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="../component/all_comp" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>0/1</h3>
                            <p>License</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>0/1</h3>
                            <p>Accessories</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>0/1</h3>
                            <p>Component</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Component Count
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" id="">
                            <canvas id="mycanvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('../include/footer.php'); ?>
<?php include('../include/script.php'); ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script>

    $(document).ready(function () {
        $.ajax({
            url: "data.php",
            method: "GET",
            success: function (data) {
                console.log(data);
                var category_name = [];
                var count = [];

                for (var i in data) {
                    category_name.push(data[i].category_name);
                    count.push(data[i].count);
                }

                var chartdata = {
                    labels: category_name,
                    datasets: [
                        {
                            label: 'Component Count',
                            backgroundColor: '#418ff0',
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'blue',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: count
                        }
                    ]
                };
//                alert(chartdata);
                var ctx = $("#mycanvas");

                var barGraph = new Chart(ctx, {
                    type: 'bar',
                    data: chartdata
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
    });</script>