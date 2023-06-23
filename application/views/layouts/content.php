<body>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-6755361630409176"></amp-auto-ads>
    <amp-install-serviceworker src="<?= base_url('sw.js') ?>" data-iframe-src="install-sw.html" layout="nodisplay">
    </amp-install-serviceworker>
    <!-- Start Navbar -->
    <?php include_once("header.php"); ?>

    <!-- Start Sidebar -->
    <?php include_once("sidebar.php"); ?>
    <!-- End Sidebar -->
    <!-- End Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-2">
                <?php $this->load->view($content); ?>
            </div>
        </div>

    </div>

    <!-- Start Footer -->
    <?php include_once("footer.php") ?>
    <!-- End Footer -->
</body>