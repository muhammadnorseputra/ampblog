<div class="container">
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <article class="post">
                <h1 class="fs-3 fw-bold lh-sm text-black mt-4 mb-2">
                    <?= $d->title ?>
                </h1>
                <div class="flex justify-content-start align-items-center mt-md-2 mb-md-2">
                        <amp-img alt="<?= $d->author->displayName ?>" src="<?= $d->author->image->url ?>"
                            layout="fixed" height="30" width="30" placeholder class="circle my2 mr2"> </amp-img>
                        <span>
                            <a class="text-decoration-none bold" href="<?= $d->author->url ?>"
                                target="_blank"><?= $d->author->displayName ?></a>
                            <br />
                            <?php
                        $utc = strtotime($d->published.' UTC');
                        $datepost = formatTgl(date("Y-m-d", $utc));
                    ?>
                            <small><i class="fa fa-calendar"></i> <?= $datepost ?></small>
                        </span>
                        <div class="ms-auto d-flex justify-content=around align-items-center gap-2">
                        <span>Share: </span> 
                        <amp-social-share class="rounded-circle" aria-label="Share on WhatsApp" type="whatsapp" width="30" height="30"></amp-social-share>
                        <amp-social-share class="rounded-circle" aria-label="Share on Facebook" type="facebook" width="30" height="30"></amp-social-share>
                        <amp-social-share class="rounded-circle" aria-label="Share on Twitter" type="twitter" width="30" height="30"></amp-social-share>  
                        <amp-social-share class="rounded-circle" aria-label="Share by email " type="email" width="30" height="30"></amp-social-share>
                    </div>
                </div>
                <?= $d->content ?>
            </article>
        </div>
    </div>
</div>