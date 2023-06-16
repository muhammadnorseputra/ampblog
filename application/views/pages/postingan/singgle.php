<div class="container">
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <article class="post">
                <?= tags($post->labels,"success","rounded-pill px-3 py-1") ?>
                <h1 class="fs-3 fw-bold lh-sm text-black mt-4 mb-2">
                    <?= $post->title ?>
                </h1>
                <div class="flex justify-content-start align-items-center mt-md-2 mb-md-2">
                    <amp-img alt="<?= $post->author->displayName ?>" src="<?= $post->author->image->url ?>"
                        layout="fixed" height="30" width="30" placeholder class="circle my2 mr2"> </amp-img>
                    <span>
                        <a class="text-decoration-none bold" href="<?= $post->author->url ?>"
                            target="_blank"><?= $post->author->displayName ?></a>
                        <br />
                        <?php
                        $utc = strtotime($post->published.' UTC');
                        $datepost = formatTgl(date("Y-m-d", $utc));
                    ?>
                        <small><i class="fa fa-calendar"></i> <?= $datepost ?>
                            <?= readTime($featured_content) ?></small>
                    </span>
                    <div class="ms-auto d-flex justify-content=around align-items-center gap-2">
                        <span>Share: </span>
                        <amp-social-share class="rounded-circle" aria-label="Share on WhatsApp" type="whatsapp"
                            width="30" height="30"></amp-social-share>
                        <amp-social-share class="rounded-circle" aria-label="Share on Facebook" type="facebook"
                            width="30" height="30"></amp-social-share>
                        <amp-social-share class="rounded-circle" aria-label="Share on Twitter" type="twitter" width="30"
                            height="30"></amp-social-share>
                        <amp-social-share class="rounded-circle" aria-label="Share by email " type="email" width="30"
                            height="30"></amp-social-share>
                    </div>
                </div>
                <?= $featured_content ?>
            </article>
        </div>
    </div>
</div>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= $post->title ?>",
    "image": "<?= fetchImage($post->id) ?>",
    "datePublished": "<?= $post->published ?>",
    "dateModified": "<?= $post->updated ?>",
    "author": {
        "@type": "Person",
        "name": "<?= $post->author->displayName ?>",
        "url": "<?= $post->author->url ?>"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?= base_url() ?>"
    }, {
        "@type": "ListItem",
        "position": 2,
        "name": "<?= $post->labels[0] ?>",
        "item": "<?= base_url('search/label/'.$post->labels[0]) ?>"
    }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?= $post->title ?>"
    }]
}
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "ImageObject",
      "contentUrl": "<?= fetchImage($post->id) ?>",
      "license": "<?= base_url('page/1252667274665359714') ?>",
      "acquireLicensePage": "<?= base_url('page/1252667274665359714') ?>",
      "creditText": "<?= $this->config->item('blog_name') ?>",
      "creator": {
        "@type": "Person",
        "name": "<?= $post->author->displayName ?>"
       },
      "copyrightNotice": "<?= $this->config->item('blog_name') ?>"
    }
    </script>
