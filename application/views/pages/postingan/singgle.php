<div class="container">
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <article class="post">
                <div class="mw-100 overflow-y-hidden overflow-x-auto">

                    <?= tags($post->labels,"success","rounded-pill px-3 py-1") ?>
                </div>
                <h1 class="fs-1 fw-bold lh-sm text-black mt-4 mb-3">
                    <?= $post->title ?>
                </h1>
                <div class="d-flex justify-content-start align-items-center mt-md-2 pb-md-3 border-bottom border-light-subtle">
                <div class="rounded me-3 inline-flex overflow-hidden">
                    <amp-img alt="<?= $post->author->displayName ?>" src="<?= $post->author->image->url ?>"
                        layout="fixed" height="30" width="30" placeholder>
                        <amp-img alt="AMP Fallback" fallback width="30" height="30" class="circle"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                        </amp-img>
                    </amp-img>
                </div>
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
                        <span class="d-none d-md-block">Share: </span>
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
                        <?php
                            $filters = array(
                                "www.mediabalangan.com" => "m.mediabalangan.com"
                            );
                            $paragraf_baru = str_replace(array_keys($filters), array_values($filters), $featured_content); 
                            echo $paragraf_baru;
                        ?>
                <hr>
            </article>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-lg-1 mt-3 border px-3 py-4 rounded">
            <h4 class="fs-5 fw-bold">Comments</h4>
            <p class="note mt-2 mb-5 d-flex justify-content-between align-items-center">
                Silahkah Isi Komentar Disini
                <a href="<?= $post->url ?>#comment" target="_blank" class="btn btn-primary rounded-pill text-white d-none d-md-block"><i class="fa fa-comment mr-2"></i> Post a comment</a>
            </p>
            <a href="<?= $post->url ?>#comment" target="_blank" class="btn btn-primary rounded-pill text-white d-block mb-3 d-md-none"><i class="fa fa-comment mr-2"></i> Post a comment</a>
            <?php
                // var_dump(fetchCommnets($post->id));die();
                $comments = fetchCommnets($post->id);
                if(isset($comments->items)):
                foreach($comments->items as $comment):
            ?>
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <amp-img alt="<?= $comment->author->displayName ?>" src="<?= $comment->author->image->url ?>"
                        layout="fixed" height="50" width="50" placeholder class="circle bg-secondary">
                        <amp-img alt="AMP Fallback" fallback width="50" height="50" class="circle"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                        </amp-img>
                    </amp-img>
                </div>
                <div class="flex-grow-1 ms-3 d-inline-flex justify-content-start align-items-start flex-column gap-2">
                    <div class="fw-bold text-black">
                        <?php 
                            $utc = strtotime($comment->published.' UTC');
                            $datecomment = formatTgl(date("Y-m-d", $utc));
                        ?>
                        <?= $comment->author->displayName ?> <span class="text-secondary mx-1">&bull;</span> <span class="fw-normal text-secondary"><?= $datecomment ?></span>
                    </div>
                    <p class="text-secondary">
                        <?= $comment->content ?>
                    </p>
                </div>
            </div>

            <?php endforeach; ?>

            <?php else: ?>
                <p class="text-center">
                    <span class=" fs-4 fw-bold text-dark">Belum ada diskusi !</span> <br/>
                    <span class="text-secondary">Klik tombol "post a comment" untuk memberikan komentar</span>
                </p>
            <?php endif; ?>
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
