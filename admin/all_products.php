<?php  include('../include/admin_head.php'); 

$all_products_query = "SELECT * FROM `products`";
$all_products_query_insert =  $conn->query($all_products_query);

?>
<link rel="stylesheet" href="css/add_products.css">
<link rel="stylesheet" href="css/all_products.css">


        <?php  include('../include/admin_sidebar.php'); ?>

        <!-- Content Start -->
        <div class="content">

        <?php  include('../include/admin_nav.php'); ?>

            <!-- Sale & Revenue Start -->
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
            <!-- Sale & Revenue End -->


            <!-- Recent Sales Start -->
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($totalStudents = mysqli_fetch_assoc($all_products_query_insert)) { ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><img src="../img/added_products/<?php echo $totalStudents['Photo1']; ?>" alt="" style="width:50px;"></td>
                                    <td><?php echo $totalStudents['Name']; ?></td>
                                    <td><?php echo $totalStudents['Category']; ?></td>
                                    <td class="details_td"><?php if(strlen($totalStudents['Details']) > 250) $totalStudents['Details'] = substr($totalStudents['Details'], 0, 250).'...'; echo $totalStudents['Details']; ?></td>
                                    <td><?php echo $totalStudents['Size']; ?></td>
                                    <td><?php echo $totalStudents['Price']; ?></td>
                                    <td><?php echo $totalStudents['Author']; ?></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


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