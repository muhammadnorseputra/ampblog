<section class="blogList" id="blogList">
    <div class="row">
        <h3 class="my-4 ml-4 fw-bold border-start border-4 border-success">Posts: <span class="text-success"><?= $query ?></span></h3>
    </div>
    <div class="row row-gap-5">

        <?php
        
        // var_dump($posts);die();
    if((count($posts) > 0) && ($posts != NULL)):
        $start = 1;
        foreach($posts as $v => $p):
            
    ?>
        <div class="col-md-4">
            <article class="article bg-white border shadow-sm p-3 rounded-3">
                <div class="flex flex-column justify-between">
                    <div class="article-description flex justify-start flex-column">
                        <div class="p-3 bg-success text-white rounded text-center fs-3 flex-inline fw-bold"><?= $start ?></div>
                        <h3 class="fs-6 fw-bold mt-2 mb-3"><a
                                href="<?= base_url(url_title($p->title, 'dash',true)) ?>"
                                class="text-decoration-none line-clamp"><?= highlight_phrase($p->title, $query, '<span class="text-success">', '</span>') ?></a></h3>
                        <p>
                            <?= headlineText(highlight_phrase($p->content, $query, '<span class="text-success">', '</span>'), 120) ?> ...
                        </p>
                        <div class="flex justify-start items-center my2">
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
        
        $start++;
        endforeach; 
    endif;
    ?>

    <?php if($posts === null): ?>
        <h4>Postingan tidak ditemukan ...</h4>
    <?php endif; ?>
    </div>
    <div class="row">
        <div class="container text-center mt-5">
            <div class="d-flex flex-row justify-between">
                <button class="btn btn-success" on="tap:AMP.goBack(navigate=true)">Postingan
                    sebelumnya</button>
                <a rel="nofollow noopener" href="<?= base_url('index.php') == current_url() ? "#" : base_url() ?>"
                    class="btn btn-sm btn-rounded <?= base_url('index.php') == current_url() ? "btn-secondary text-mutted" : "btn-success text-warning" ?> px-3 py-2"><div class="fa fa-home"></div></a>
                <!-- <a href="<?= base_url('nextpage/'.$posts_nextoken) ?>"
                    class="btn btn-sm btn-rounded btn-success px-4 py-2 text-warning">
                    Muat postingan selanjutnya
                </a> -->
                <button class="btn btn-success" <?= $posts_nextoken === 1 ? "disabled" : "" ?> on="tap:AMP.navigateTo(url=<?= $posts_nextoken ?>)">Postingan
                    selanjutnya</button>
            </div>
        </div>
    </div>
</section>