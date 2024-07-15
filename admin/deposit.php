<?php  include('../include/admin_head.php'); 

$deposit_request_query = "SELECT * FROM `deposit`";
$deposit_request_query_insert =  $conn->query($deposit_request_query);

?>
<link rel="stylesheet" href="css/deposit.css">


        <?php  include('../include/admin_sidebar.php'); ?>

        <!-- Content Start -->
        <div class="content">

        <?php  include('../include/admin_nav.php'); ?>

        <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-dolly text-success fa-3x"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Products</p>
                                <h6 class="mb-0">10</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Sold (24H)</p>
                                <h6 class="mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Not Sold (24H)</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-success"></i>
                            <div class="ms-3">
                                <p class="mb-2">Investment</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Transition ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($all_deposits = mysqli_fetch_assoc($deposit_request_query_insert)) { ?>
                                <tr class="<?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Rejected') { echo 'selected_table';} ?>">
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $all_deposits['id']; ?></td>
                                    <td><?php echo $all_deposits['gateway']; ?></td>
                                    <td><?php echo $all_deposits['amount']; ?></td>
                                    <td><?php echo $all_deposits['txd id']; ?></td>
                                    <td><?php echo $all_deposits['user id']; ?></td>
                                    <td class="<?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Rejected') { echo 'rejected';} ?>"><?php echo $all_deposits['status']; ?></td>
                                    <td><?php echo $all_deposits['date']; ?></td>
                                    <td>                                  
                                        <?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Approved') { ?>
                                        <a class="btn btn-sm btn-primary <?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Approved') { echo 'approved';} ?>" href="../action/deposit_action.php?action=apv&id=<?php echo $all_deposits['id']; ?>">Approve<?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Approved') { echo 'd';} ?></a>
                                        <?php } ?>

                                        <?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Rejected') { ?>
                                        <a class="btn btn-sm btn-warning" href="../action/deposit_action.php?action=rjt&id=<?php echo $all_deposits['id']; ?>">Reject<?php if (isset($all_deposits['status'])&&$all_deposits['status']=='Rejected') { echo 'ed';} ?></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        <?php  include('../include/admin_footer.php'); ?>

</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>