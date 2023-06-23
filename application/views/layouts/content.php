<body>
    <?php 
        // CEK MODE DEVELOPMENT
        $whitelist = array('127.0.0.1', "::1","http://localhost");
        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    ?>
        <amp-auto-ads type="adsense" data-ad-client="ca-pub-6755361630409176"></amp-auto-ads>
    <?php } ?>
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
            <div class="col-md-12 mt-2">
                <?php $this->load->view($content); ?>
            </div>
        </div>

    </div>

    <!-- Start Footer -->
    <?php include_once("footer.php") ?>
    <!-- End Footer -->
</body>