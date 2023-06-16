<section class="featured mb4">
    <article class="article p-4 p-md-5 rounded-3 bg-dark text-white shadow">
        <div class="flex flex-md-row flex-column justify-between">
            <div>
                <a href="<?= base_url(urlWithoutDomain($featured->url)) ?>">
                    <amp-img alt="<?= $featured->title ?>" src="<?= $featured->images[0]->url ?>" layout="fixed"
                        height="230" width="410" placeholder class="rounded">
                        <amp-img alt="AMP Fallback" fallback width="550" height="368"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                        </amp-img>
                    </amp-img>
                </a>
            </div>
            <div class="article-description mt-4 mt-md-0 ms-md-4 flex justify-start flex-column">
                <?= tags($featured->labels,"success","rounded-pill px-3 py-1") ?>
                <h1 class="ampstart-title-sm bold fs-5"><a href="<?= base_url(urlWithoutDomain($featured->url)) ?>"
                        class="text-decoration-none line-clamp"><?= $featured->title ?></a></h1>
                <p class="mt2">
                    <?= headlineText($featured->content, 190) ?> ...
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
                            $datepost = formatTgl(date("Y-m-d", $utc));
                        ?>
                        <small><?= $datepost ?></small>
                    </span>
                    <a class="text-decoration-none bold ml-auto border p1 rounded"
                        href="<?= base_url(urlWithoutDomain($featured->url)) ?>">Readmore <i
                            class="fa fa-chevron-right ms-1"></i></a>
                </div>


            </div>

        </div>
    </article>
</section>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= base_url(urlWithoutDomain($featured->url)) ?>"
    },
    "headline": "<?= $featured->title ?>",
    "image": {
        "@type": "ImageObject",
        "url": "<?= $featured->images[0]->url ?>",
        "height": 800,
        "width": 800
    },
    "datePublished": "<?= $featured->published ?>",
    "dateModified": "<?= $featured->updated ?>",
    "author": {
        "@type": "Person",
        "name": "<?= $featured->author->displayName ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "⚡ <?= $this->config->item('blog_name') ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url("assets/img/blog/mediabalangan_mini.png") ?>",
            "width": 60,
            "height": 60
        }
    },
    "description": "<?= $this->config->item('blog_desc') ?>"
}
</script>

<section class="blogList">
    <div class="row row-gap-md-5">

        <?php
        $start = 1;
        foreach($posts as $v => $p):
            if($start <> 1) {
    ?>
        <div class="col-md-4">
            <article class="article bg-white border shadow-sm p-md-3 p-2 mb-3 rounded-3">
                <div class="flex flex-column justify-between">
                    <div>
                        <a href="<?= base_url(urlWithoutDomain($p->url)) ?>">
                            <amp-img alt="<?= $p->title ?>" src="<?= $p->images[0]->url ?>" layout="responsive"
                                height="190" width="320" placeholder class="rounded mb-3 border">
                                <amp-img class="rounded mb-3 border shadow-sm" alt="AMP Fallback" fallback width="320"
                                    height="190"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                </amp-img>
                            </amp-img>
                        </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <?= tags($p->labels, "outline-secondary", "rounded-pill px-2 py-0") ?>
                        <h3 class="fs-6 fw-bold lh-sm mt-2 mb-md-3 px-md-0 px-2"><a
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>"
                                class="text-decoration-none line-clamp"><?= $p->title ?></a></h3>
                        <div class="flex justify-start items-center mt-md-2 mb-md-2 mb-4 px-md-0 px-2">
                            <amp-img alt="<?= $p->author->displayName ?>" src="<?= $p->author->image->url ?>"
                                layout="fixed" height="30" width="30" placeholder class="circle my2 mr2">
                                <amp-img class="circle my2 mr2" alt="AMP Fallback" fallback width="15" height="15"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                </amp-img>
                            </amp-img>
                            <span>
                                <a class="text-decoration-none bold" href="<?= $p->author->url ?>"
                                    target="_blank"><?= $p->author->displayName ?></a>
                                <br />
                                <?php
                            $utc = strtotime($p->published.' UTC');
                            $datepost = formatTgl(date("Y-m-d", $utc));
                        ?>
                                <small><?= $datepost ?></small>
                            </span>
                            <a class="text-decoration-none bold ml-auto border p1"
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>">Readmore <i
                                    class="fa fa-chevron-right ms-1"></i></a>
                        </div>


                    </div>

                </div>
            </article>
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "<?= $p->title ?>",
                "image": "<?= $p->images[0]->url ?>",
                "datePublished": "<?= $p->published ?>",
                "dateModified": "<?= $p->updated ?>",
                "author": {
                    "@type": "Person",
                    "name": "<?= $p->author->displayName ?>",
                    "url": "<?= $p->author->url ?>"
                }
            }
            </script>
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
                <button <?= base_url('index.php') == current_url() ? "disabled" : "" ?>
                    class="btn btn-sm btn-rounded btn-secondary text-mutted px-3"><i class="fa fa-home"
                        aria-hidden="true"></i></button>
                <button class="btn btn-success py-2 d-flex flex-row justify-content-between align-items-center"
                    on="tap:AMP.navigateTo(url=<?= 'nextpage/'.$posts_nextoken ?>)">
                    <span> Postingan selanjutnya</span> <i class="fa fa-chevron-right ms-2"
                        aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</section>