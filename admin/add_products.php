<?php  include('../include/admin_head.php'); ?>
<link rel="stylesheet" href="css/add_products.css">


        <?php  include('../include/admin_sidebar.php'); ?>

        <!-- Content Start -->
        <div class="content">

        <?php  include('../include/admin_nav.php'); ?>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger text-center text-danger" style="margin-bottom: 0px;">
            <strong>Alert!</strong> <?php echo $_GET['error']  ?>.
        </div>
        <?php } ?>
        <form action="../action/add_products.php" method="post"  enctype="multipart/form-data">  
            <div class="add_product_box" style="<?php if (isset($_GET['error'])) { ?>margin-top: -20px;<?php }else{ ?>margin-top: 30px;<?php } ?>">
                <div class="add_products_img">
                    <div class="img_box">
                        <?php include 'image_uploader/index.html'; ?>
                    </div>
                </div>
                <div class="add_products_details">
                    <div class="details_box">
                        <h3>General Information</h3>
                        <label for="pname" class="<?php if (isset($_GET['error_id']) && $_GET['error_id'] == 1) {echo 'text-danger';} ?>"><?php if (isset($_GET['error_id']) && $_GET['error_id'] == 1) {echo '*';} ?>Product Name</label>
                        <input type="text" name="pro_name" id="pname" value="<?php if(isset($_SESSION['P_Name'])){ echo $_SESSION['P_Name'];} ?>">
                        <div class="type_price">
                            <div class="product_type">
                                <label for="ptype" class="<?php if (isset($_GET['error_id']) && $_GET['error_id'] == 2) {echo 'text-danger';} ?>"><?php if (isset($_GET['error_id']) && $_GET['error_id'] == 2) {echo '*';} ?>Product Type</label>
                                <select name="pro_type" id="ptype">
                                    <option value="" hidden >Select Product Type</option>
                                    <option value="T-Shirt" <?php if(isset($_SESSION['P_Type']) && $_SESSION['P_Type'] == 'T-Shirt'){ echo 'selected';} ?>>T-Shirt</option>
                                    <option value="Scart" <?php if(isset($_SESSION['P_Type']) && $_SESSION['P_Type'] == 'Scart'){ echo 'selected';} ?> >Scart</option>
                                    <option value="Pant" <?php if(isset($_SESSION['P_Type']) && $_SESSION['P_Type'] == 'Pant'){ echo 'selected';} ?>>Pant</option>
                                </select>
                            </div>
                            <div class="product_price">
                                <label for="price" class="<?php if (isset($_GET['error_id']) && $_GET['error_id'] == 3) {echo 'text-danger';} ?>"><?php if (isset($_GET['error_id']) && $_GET['error_id'] == 3) {echo '*';} ?>Product Price</label>
                                <input type="number" id="price" name="pro_price"  value="<?php if(isset($_SESSION['P_Price'])){ echo $_SESSION['P_Price'];} ?>">
                            </div>
                        </div>
                        <label for="size" class="<?php if (isset($_GET['error_id']) && $_GET['error_id'] == 4) {echo 'text-danger';} ?>"><?php if (isset($_GET['error_id']) && $_GET['error_id'] == 4) {echo '*';} ?>Available Sizes</label>
                        <div class="size_box">
                            <label for="xl">XL</label>
                            <input type="checkbox" name="size[]" id="xl" value="XL" <?php if(isset($_SESSION['P_Size']) && $_SESSION['P_Size'] == 'XL'){ echo 'checked';} ?>>
                            <label for="xxl">XXL</label>
                            <input type="checkbox" name="size[]" id="xxl" value="XXL" <?php if(isset($_SESSION['P_Size']) && $_SESSION['P_Size'] == 'XXL'){ echo 'checked';} ?>>
                            <label for="s">S</label>
                            <input type="checkbox" name="size[]" id="s" value="S" <?php if(isset($_SESSION['P_Size']) && $_SESSION['P_Size'] == 'S'){ echo 'checked';} ?>>
                            <label for="l">L</label>
                            <input type="checkbox" name="size[]" id="l" value="L" <?php if(isset($_SESSION['P_Size']) && $_SESSION['P_Size'] == 'L'){ echo 'checked';} ?>>
                            <label for="m">M</label>
                            <input type="checkbox" name="size[]" id="m" value="M"  <?php if(isset($_SESSION['P_Size']) && $_SESSION['P_Size'] == 'M'){ echo 'checked';} ?>>
                        </div>
                        
                        <label for="description" class="<?php if (isset($_GET['error_id']) && $_GET['error_id'] == 5) {echo 'text-danger';} ?>"><?php if (isset($_GET['error_id']) && $_GET['error_id'] == 5) {echo '*';} ?>Product Description</label>
                        <textarea name="description" id="description" cols="45" rows="7"><?php if(isset($_SESSION['P_description'])){ echo $_SESSION['P_description'];} ?></textarea>
                        <input type="submit" value="Add Product" class="submit" name="submit">
                    </div>
                </div>
            </div>
        </form>
        
        
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