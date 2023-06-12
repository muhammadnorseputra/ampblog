<section class="featured mb4">
    <article class="article cards">
        <div class="flex justify-between">
            <div>
                <a href="<?= base_url(url_title($featured->title, 'dash',true)) ?>">
                    <amp-img alt="<?= $featured->title ?>" src="<?= $featured->images[0]->url ?>" layout="fixed"
                        height="190" width="320" placeholder class="rounded"> </amp-img>
                </a>
            </div>
            <div class="article-description ml3 flex justify-start flex-column">
                <h2 class="ampstart-title-sm bold"><a href="<?= base_url(url_title($featured->title, 'dash',true)) ?>"
                        class="text-decoration-none"><?= $featured->title ?></a></h2>
                <p class="mt2">
                    <?= headlineText($featured->content, 150) ?> ...
                </p>
                <div class="flex justify-start items-center my2">
                    <amp-img alt="<?= $featured->author->displayName ?>" src="<?= $featured->author->image->url ?>"
                        layout="fixed" height="30" width="30" placeholder class="circle my2 mr2"> </amp-img>
                    <span>
                        <a class="text-decoration-none bold" href="<?= $featured->author->url ?>"
                            target="_blank"><?= $featured->author->displayName ?></a>
                        <br />
                        <?php
                            $utc = strtotime($featured->published.' UTC');
                            $datepost = date("d-m-Y", $utc);
                        ?>
                        <small>Publish On: <?= $datepost ?></small>
                    </span>
                    <a class="text-decoration-none bold ml-auto border p1"
                        href="<?= base_url(url_title($featured->title, 'dash',true)) ?>">Readmore</a>
                </div>


            </div>

        </div>
    </article>
</section>
<section class="blogList">
    <div class="row">

        <?php
        $start = 1;
        foreach($post_list as $v => $p):
            if($start <> 1) {
    ?>
        <div class="col-md-4">
            <article class="article">
                <div class="flex flex-column justify-between gap-x-5">
                    <div>
                        <a href="<?= base_url(url_title($p->title, 'dash',true)) ?>">
                            <amp-img alt="<?= $p->title ?>" src="<?= $p->images[0]->url ?>" layout="responsive"
                                height="190" width="320" placeholder class="rounded mb-3 border shadow-sm"> </amp-img>
                        </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <h3 class="fs-5 lh-sm"><a href="<?= base_url(url_title($p->title, 'dash',true)) ?>"
                                class="text-decoration-none"><?= $p->title ?></a></h3>
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
        
            }
        $start++;
        endforeach; 
    ?>
    </div>
</section>