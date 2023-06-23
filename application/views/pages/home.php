<?php 
// CEK MODE DEVELOPMENT
$whitelist = array('127.0.0.1', "::1","http://localhost");
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
?>
<section class="ads">
<amp-ad
     layout="responsive"
     width="728"
     height="90"
     type="adsense"
     data-ad-client="ca-pub-6755361630409176"
     data-ad-slot="2383481957">
</amp-ad>
</section>
<?php } ?>
<section class="labels">
    <div class="d-flex justify-content-start align-items-center mw-100 overflow-y-hidden overflow-x-auto pb-3 gap-3 ">
        <button role="button" disabled aria-label="button" on="tap:AMP.navigateTo(url='/')" title="All" class="btn btn-dark border-0 text-light rounded">All</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Html')" title="HTML5" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">HTML5</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Javascript')" title="Javascript" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">Javascript</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/PHP')" title="PHP" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">PHP</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Teknologi')" title="Teknologi" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">Teknologi</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Balangan')" title="Balangan" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">Balangan</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Blogger')" title="Blogger" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">Blogger</button>
        <button role="button" aria-label="button" on="tap:AMP.navigateTo(url='search/label/Adsense')" title="Adsense" class="btn btn-secondary bg-secondary-subtle border-0 text-dark rounded">Adsense</button>
        
    </div>
</section>
<section class="featured mb-3">
    <article class="article py-3 px-3 px-md-5 py-md-5 rounded-3 bg-dark bg-gradient text-white shadow">
        <div class="d-flex flex-sm-column flex-md-row flex-lg-row flex-xl-row flex-column justify-content-between">
            <div>
                <a href="<?= base_url(urlWithoutDomain($featured->url)) ?>" class="position-relative">
                    <amp-img alt="<?= $featured->title ?>" src="<?= $featured->images[0]->url ?>" layout="responsive"
                        height="630" width="1200" placeholder class="rounded pThumb">
                        <amp-img alt="AMP Fallback" fallback width="600" height="412" class="rounded pThumb"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                        </amp-img>
                    </amp-img>
                    <?= countComments($featured->replies->totalItems) ?>
                </a>
            </div>
            <div class="article-description mt-4 d-flex justify-content-start flex-column">
                <?= tags($featured->labels,"success","rounded-pill px-3 py-1") ?>
                <h1 class="ampstart-title-sm bold fs-4 lh-sm"><a
                        href="<?= base_url(urlWithoutDomain($featured->url)) ?>"
                        class="text-decoration-none line-clamp"><?= $featured->title ?></a></h1>
                <p class="mt2 text-secondary">
                    <?= headlineText($featured->content, 190) ?> ...
                </p>
                <div class="d-flex justify-cotnent-start align-items-center my-2">
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
        "name": "<?= $featured->author->displayName ?>",
        "url": "<?= $featured->author->url ?>"
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
    "description": "<?= headlineText($featured->content, 200) ?>"
}
</script>
<?php 
// CEK MODE DEVELOPMENT
$whitelist = array('127.0.0.1', "::1","http://localhost");
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
?>
<section class="ads">
<amp-ad
     layout="responsive"
     width="728"
     height="90"
     type="adsense"
     data-ad-client="ca-pub-6755361630409176"
     data-ad-slot="2383481957">
</amp-ad>
</section>
<?php } ?>
<section class="blogList mt-2">
    <div class="row row-gap-md-5">

        <?php
        $start = 1;
        foreach($posts as $v => $p):
            if($start <> 1) {
    ?>
        <div class="col-md-6">
            <article class="article">
                <div class="flex flex-column justify-between">
                    <div>
                        <a href="<?= base_url(urlWithoutDomain($p->url)) ?>" title="<?= $p->title ?>"
                            aria-label="Read More <?= $p->title ?>" class="position-relative">
                            <amp-img alt="<?= $p->title ?>" src="<?= $p->images[0]->url ?>" layout="responsive"
                                width="600" height="412" placeholder class="rounded mb-3 border pThumb">
                                <amp-img class="rounded mb-3 border shadow-sm pThumb" alt="AMP Fallback" fallback
                                    width="600" height="412"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                </amp-img>
                            </amp-img>
                            <?= countComments($featured->replies->totalItems) ?>
                        </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <?= tags($p->labels, "secondary", "bg-secondary-subtle border-0 py-1 text-dark rounded-pill") ?>
                        <h2 class="fs-6 fw-bold lh-sm mt-2 mb-3 px-md-0 px-2"><a
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>"
                                class="text-decoration-none line-clamp"><?= $p->title ?></a></h2>
                        <div class="flex justify-start items-center mt-md-2 mb-md-3 mb-4 px-md-0 px-2">
                            <div class="rounded-circle me-2 inline-flex overflow-hidden">
                                <amp-img alt="<?= $p->author->displayName ?>" src="<?= $p->author->image->url ?>"
                                    layout="fixed" height="30" width="30" placeholder class="circle">
                                    <amp-img alt="AMP Fallback" fallback width="30" height="30" class="circle"
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                    </amp-img>
                                </amp-img>
                            </div>
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
                            <a class="text-decoration-none bold ml-auto border p1 rounded"
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
                },
                "description": "<?= headlineText($p->content, 200) ?>"
            }
            </script>
        </div>
        <?php 
        
            }
        $start++;
        endforeach; 
    ?>
    <?php 
            // CEK MODE DEVELOPMENT
            $whitelist = array('127.0.0.1', "::1","http://localhost");
            if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            ?>
            <div>
            <amp-ad width="auto" height="320"
                type="adsense"
                style="display:block"
                data-ad-client="ca-pub-6755361630409176"
                data-ad-slot="9629472612"
                data-ad-format="autorelaxed"
                data-matched-content-ui-type="image_stacked,image_stacked"
                data-matched-content-rows-num="4,2"
                data-matched-content-columns-num="1,2"
                data-full-width="false">
            <div overflow=""></div>
            </amp-ad>
            </div>
            <?php } ?>
    </div>
    <div class="row">
        <div class="container text-center mt-5">
            <div class="d-flex flex-row justify-between">
                <button aria-label="Home" <?= base_url('index.php') == current_url() ? "disabled" : "" ?>
                    class="btn btn-sm btn-rounded btn-secondary text-mutted px-3"><i class="fa fa-home"
                        aria-hidden="true"></i></button>
                <button aria-label="Next Page"
                    class="btn btn-success py-2 d-flex flex-row justify-content-between align-items-center"
                    on="tap:AMP.navigateTo(url=<?= 'nextpage/'.$posts_nextoken ?>)">
                    <span> Postingan selanjutnya</span> <i class="fa fa-chevron-right ms-2"
                        aria-hidden="true"></i></button>
            </div>
            
        </div>
    </div>
</section>