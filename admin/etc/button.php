<?php  include('../include/admin_head.php'); ?>


<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php  include('../include/admin_sidebar.php'); ?>

        <!-- Content Start -->
        <div class="content">
        <?php  include('../include/admin_nav.php'); ?>

            <!-- Button Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Buttons</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Primary</button>
                                <button type="button" class="btn btn-secondary m-2">Secondary</button>
                                <button type="button" class="btn btn-success m-2">Success</button>
                                <button type="button" class="btn btn-danger m-2">Danger</button>
                                <button type="button" class="btn btn-warning m-2">Warning</button>
                                <button type="button" class="btn btn-info m-2">Info</button>
                                <button type="button" class="btn btn-light m-2">Light</button>
                                <button type="button" class="btn btn-dark m-2">Dark</button>
                                <button type="button" class="btn btn-link m-2">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Outline Buttons</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-outline-primary m-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary m-2">Secondary</button>
                                <button type="button" class="btn btn-outline-success m-2">Success</button>
                                <button type="button" class="btn btn-outline-danger m-2">Danger</button>
                                <button type="button" class="btn btn-outline-warning m-2">Warning</button>
                                <button type="button" class="btn btn-outline-info m-2">Info</button>
                                <button type="button" class="btn btn-outline-light m-2">Light</button>
                                <button type="button" class="btn btn-outline-dark m-2">Dark</button>
                                <button type="button" class="btn btn-outline-link m-2">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Rounded Buttons</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary rounded-pill m-2">Primary</button>
                                <button type="button" class="btn btn-secondary rounded-pill m-2">Secondary</button>
                                <button type="button" class="btn btn-success rounded-pill m-2">Success</button>
                                <button type="button" class="btn btn-danger rounded-pill m-2">Danger</button>
                                <button type="button" class="btn btn-warning rounded-pill m-2">Warning</button>
                                <button type="button" class="btn btn-info rounded-pill m-2">Info</button>
                                <button type="button" class="btn btn-light rounded-pill m-2">Light</button>
                                <button type="button" class="btn btn-dark rounded-pill m-2">Dark</button>
                                <button type="button" class="btn btn-link rounded-pill m-2">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Buttons Size</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-lg btn-primary m-2">Large Button (btn-lg)</button>
                                <button type="button" class="btn btn-lg btn-secondary m-2">Large Button (btn-lg)</button>
                                <button type="button" class="btn btn-sm btn-primary m-2">Small Button (btn-sm)</button>
                                <button type="button" class="btn btn-sm btn-secondary m-2">Small Button (btn-sm)</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Icon Buttons</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-square btn-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-secondary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-secondary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-success m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-success m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-danger m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-warning m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-info m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-info m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-dark m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-dark m-2"><i class="fa fa-home"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Icon Buttons Size</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-lg btn-lg-square btn-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-lg btn-lg-square btn-outline-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-primary m-2"><i class="fa fa-home"></i></button>
                                <button type="button" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-home"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Icon & Text Buttons</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Icon Left</button>
                                <button type="button" class="btn btn-outline-primary m-2"><i class="fa fa-home me-2"></i>Icon Left</button>
                                <button type="button" class="btn btn-primary m-2">Icon Right<i class="fa fa-home ms-2"></i></button>
                                <button type="button" class="btn btn-outline-primary m-2">Icon Right<i class="fa fa-home ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Block Buttons</h6>
                            <div class="m-n2">
                                <button class="btn btn-primary w-100 m-2" type="button">Button</button>
                                <button class="btn btn-outline-primary w-100 m-2" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Button Group</h6>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary">Left</button>
                                <button type="button" class="btn btn-primary">Middle</button>
                                <button type="button" class="btn btn-primary">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Mixed Button Group</h6>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger">Left</button>
                                <button type="button" class="btn btn-warning">Middle</button>
                                <button type="button" class="btn btn-success">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Outlined Button Group</h6>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary">Left</button>
                                <button type="button" class="btn btn-outline-primary">Middle</button>
                                <button type="button" class="btn btn-outline-primary">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Checkbox Button Group</h6>
                            <div class="btn-group" role="group">
                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Radio Button Group</h6>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Button Toolbar</h6>
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <button type="button" class="btn btn-primary">3</button>
                                    <button type="button" class="btn btn-primary">4</button>
                                </div>
                                <div class="btn-group me-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary">5</button>
                                    <button type="button" class="btn btn-secondary">6</button>
                                    <button type="button" class="btn btn-secondary">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-info">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Vertical Button Group</h6>
                            <div class="btn-group-vertical me-2" role="group">
                                <button type="button" class="btn btn-primary">Left</button>
                                <button type="button" class="btn btn-primary">Middle</button>
                                <button type="button" class="btn btn-primary">Right</button>
                            </div>
                            <div class="btn-group-vertical" role="group">
                                <button type="button" class="btn btn-danger">Left</button>
                                <button type="button" class="btn btn-warning">Middle</button>
                                <button type="button" class="btn btn-success">Right</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Vertical Button Group (Checkbox & Radio)</h6>
                            <div class="btn-group-vertical me-2" role="group">
                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                            </div>
                            <div class="btn-group-vertical" role="group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button End -->


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