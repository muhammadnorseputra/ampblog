<footer class="ampstart-footer flex flex-column items-center px3">
    <amp-img alt="Media Balangan" src="<?= base_url("assets/img/blog/mediabalangan_mini.png") ?>" layout="fixed"
        height="120" width="120" placeholder class="circle"> </amp-img>
    <nav class="ampstart-footer-nav">
        <ul class="list-reset flex flex-wrap mb3">
            <li class="px1">
                <a class="text-decoration-none ampstart-label" href="#">About</a>
            </li>
            <li class="px1">
                <a class="text-decoration-none ampstart-label" href="#">Contact</a>
            </li>
            <li class="px1">
                <a class="text-decoration-none ampstart-label" href="#">Privacy</a>
            </li>
        </ul>
    </nav>
    <p class="center pb2">
        <?= $this->config->item('blog_desc') ?>
    </p>
    <p> <strong> © <?= $this->config->item('blog_name') ?>, <?= date('Y') ?></strong> </p>
</footer>