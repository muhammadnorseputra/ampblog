<section class="featured mb4">
    <article class="article p-4 p-md-5 rounded-3 bg-dark text-white shadow">
        <div class="flex flex-md-row flex-column justify-between">
            <div>
                <a href="<?= base_url(url_title($featured->title, 'dash',true)) ?>">
                    <amp-img alt="<?= $featured->title ?>" src="<?= $featured->images[0]->url ?>" layout="fixed"
                        height="230" width="410" placeholder class="rounded">
                        <amp-img alt="AMP Fallback" fallback width="550" height="368"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                        </amp-img>
                    </amp-img>
                </a>
            </div>
            <div class="article-description mt-4 mt-md-0 ms-md-4 flex justify-start flex-column">
                <h1 class="ampstart-title-sm bold fs-5"><a
                        href="<?= base_url(url_title($featured->title, 'dash',true)) ?>"
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
    <div class="row row-gap-5">

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
                            <amp-img alt="<?= $p->title ?>" src="<?= $p->images[0]->url ?>" layout="responsive"
                                height="190" width="320" placeholder class="rounded mb-3 border shadow-sm">
                                <amp-img alt="AMP Fallback" fallback width="550" height="368"
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                </amp-img>
                            </amp-img>
                        </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <h3 class="fs-6 fw-bold lh-sm mt-2 mb-3"><a
                                href="<?= base_url(url_title($p->title, 'dash',true)) ?>"
                                class="text-decoration-none line-clamp"><?= $p->title ?></a></h3>
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
    <div class="row">
        <div class="container text-center mt-5">
            <div class="d-flex flex-row justify-between">
                <button <?= base_url('index.php') == current_url() ? "disabled" : "" ?>
                    class="btn btn-sm btn-rounded btn-secondary text-mutted px-3"><i class="fa fa-home" aria-hidden="true"></i></button>
                <button class="btn btn-success py-2 inline-flex flex-row justify-content-between align-items-center" on="tap:AMP.navigateTo(url=<?= 'nextpage/'.$posts_nextoken ?>)">
                <span> Postingan selanjutnya</span> <i class="fa fa-chevron-right ml-4" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</section>