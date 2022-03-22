<section class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            <?php 
                            $available_comp = "select count(*) as cntAvailable,status_id from tbl_component WHERE `status_id` = 'STS_6226dd403f9ac'";
                            $result_available = mysqli_query($con, $available_comp);
                            $row_available = mysqli_fetch_array($result_available);
                            echo $row_available['cntAvailable'];
                            
                            ?>
                        </h3>
                        <p>Available</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="all_comp?sid='<?php echo encrypt('STS_6226dd403f9ac');?>'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php 
                            $assigned_comp = "select count(*) as cntAssigned from tbl_component WHERE `status_id` = 'STS_62397124da3b1'";
                            $result_assigned = mysqli_query($con, $assigned_comp);
                            $row_assigned = mysqli_fetch_array($result_assigned);
                            echo $row_assigned['cntAssigned'];
                            ?>
                        </h3>
                        <p>Assigned</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="all_comp?sid='<?php echo encrypt('STS_62397124da3b1');?>'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            <?php 
                            $scrap_comp = "select count(*) as cntscrap from tbl_component WHERE `is_deleted` = '1'";
                            $result_scrap = mysqli_query($con, $scrap_comp);
                            $row_scarp = mysqli_fetch_array($result_scrap);
                            echo $row_scarp['cntscrap'];
                            ?>
                        </h3>
                        <p>Scrap</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="comp_scrap" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>