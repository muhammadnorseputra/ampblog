<section class="blogList" id="blogList">
    <div class="row">
        <h3 class="my-4 ml-4 fw-bold border-start border-4 border-success">Posts</h3>
    </div>
    <div class="row row-gap-md-5">

        <?php
        $start = 1;
        foreach($posts as $v => $p):
            if($start <> 1) {
    ?>
        <div class="col-md-4">
            <article class="article">
                <div class="flex flex-column justify-between">
                    <div>
                        <a href="<?= base_url(url_title($p->title, 'dash',true)) ?>">
                            0
0                           </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <h3 class="fs-6 fw-bold lh-sm mt-2 mb-md-3"><a
                                href="<?= base_url(url_title($p->title, 'dash',true)) ?>"
                                class="text-decoration-none line-clamp"><?= $p->title ?></a></h3>
                        <div class="flex justify-start items-center mt-md-2 mb-md-2 mb-4">
                            <amp-img alt="<?= $p->author->displayName ?>" src="<?= $p->author->image->url ?>"
                                layout="fixed" height="30" width="30" placeholder class="circle my2 mr2"> </amp-img>
                            <span>
                                <a class="text-decoration-none bold" href="<?= $p->author->url ?>"
                                    target="_blank"><?= $p->author->displayName ?></a>
                                <br />
                                <?php
                            $utc = strtotime($p->published.' UTC');
                            $datepost = date("d-m-Y", $utc);
                        ?>
                                <small>Publish On: <?= $datepost ?></small>
                            </span>
                            <a class="text-decoration-none bold ml-auto border p1"
                                href="<?= base_url(url_title($p->title, 'dash',true)) ?>">Readmore</a>
                        </div>


                    </div>

                </div>
            </article>
        </div>
        <?php 
        
            }
        $start++;
        endforeach; 
    ?>
    </div>
    <div class="row">
        <div class="container text-center mt-5">
            <div class="d-flex flex-row justify-between">
                <button class="btn btn-success d-flex justify-content-between align-items-center"
                    on="tap:AMP.goBack(navigate=true)"><i class="fa fa-chevron-left me-md-2"></i>
                    <span class="d-none d-md-block">Postingan
                        sebelumnya</span></button>
                <a rel="nofollow noopener" href="<?= base_url('index.php') == current_url() ? "#" : base_url() ?>"
                    class="btn btn-sm btn-rounded <?= base_url('index.php') == current_url() ? "btn-secondary text-mutted" : "btn-success text-warning" ?> px-3 py-2"><i
                        class="fa fa-home"></i></a>
                <button class="btn <?= isset($posts_nextoken) ? "btn-success" : "btn-secondary" ?> d-flex justify-content-between align-items-center"
                    on="tap:AMP.navigateTo(url=<?= $posts_nextoken ?>)" <?= isset($posts_nextoken) ? "" : "disabled" ?>>
                    <span class="d-none d-md-block">Postingan
                        selanjutnya</span> <i class="fa fa-chevron-right ms-md-2"></i></button>
            </div>
        </div>
    </div>
</section>