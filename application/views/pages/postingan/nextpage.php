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
            <article class="article bg-white border shadow-sm p-md-3 p-2 mb-3 rounded-3">
                <div class="flex flex-column justify-between">
                    <div>
                        <a href="<?= base_url(urlWithoutDomain($p->url)) ?>">
                        <amp-img alt="<?= $p->title ?>" src="<?= $p->images[0]->url ?>" layout="responsive"
                                height="190" width="320" placeholder class="rounded mb-3 border">
                                <amp-img class="rounded mb-3 border shadow-sm" alt="AMP Fallback" fallback width="320" height="190" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                </amp-img>
                            </amp-img>
                     </a>
                    </div>
                    <div class="article-description flex justify-start flex-column">
                        <?= tags($p->labels, "outline-secondary", "rounded-pill px-2 py-0") ?>
                        <h3 class="fs-6 fw-bold lh-sm mt-2 mb-md-3"><a
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>"
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
                            $datepost = formatTgl(date("Y-m-d", $utc));
                        ?>
                                <small><?= $datepost ?></small>
                            </span>
                            <a class="text-decoration-none bold ml-auto border p1"
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>">Readmore</a>
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