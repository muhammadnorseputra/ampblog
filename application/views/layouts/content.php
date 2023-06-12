<body>
    <!-- Start Navbar -->
    <?php include_once("header.php"); ?>

    <!-- Start Sidebar -->
    <?php include_once("sidebar.php"); ?>
    <!-- End Sidebar -->
    <!-- End Navbar -->

    <main id="content" role="main" class="">
      <?php $this->load->view($content); ?>
    </main>

    <!-- Start Footer -->
    <?php include_once("footer.php") ?>
    <!-- End Footer -->
  </body>