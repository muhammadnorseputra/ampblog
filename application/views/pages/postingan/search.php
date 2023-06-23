<?php 
// CEK MODE DEVELOPMENT
$whitelist = array('127.0.0.1', "::1","http://localhost");
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
?>
<section class="ads mb-3">
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
<section class="blogList" id="blogList">
    <div class="row">
        <h3 class="my-4 ml-4 fw-bold border-start border-4 border-success">Posts: <span
                class="text-success"><?= $query ?></span></h3>
    </div>
    <div class="row row-gap-md-5">
    <?php 
    // CEK MODE DEVELOPMENT
    $whitelist = array('127.0.0.1', "::1","http://localhost");
    if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    ?>
        <div>
        <amp-ad width="100vw" height="220"
            type="adsense"
            data-ad-client="ca-pub-6755361630409176"
            data-ad-slot="9629472612"
            data-auto-format="mcrspv"
            data-matched-content-ui-type="image_stacked"
            data-matched-content-rows-num="2"
            data-matched-content-columns-num="1"
            data-full-width="">
        <div overflow=""></div>
        </amp-ad>
        </div>
    <?php } ?>
        <?php
        
        // var_dump($posts);die();
    if((count($posts) > 0) && (!empty($posts))):
        $start = 1;
        foreach($posts as $v => $p):
            
    ?>
        <div class="col-md-6">
            <article class="article">
                <div class="flex flex-column justify-between">
                    <div class="article-description flex justify-start flex-column">
                        <div>
                            <a href="<?= base_url(urlWithoutDomain($p->url)) ?>">
                                <amp-img alt="<?= $p->title ?>" src="<?= fetchImage($p->id) ?>" layout="responsive"
                                    height="412" width="600" placeholder class="rounded mb-3 border pThumb">
                                    <amp-img class="rounded mb-3 border shadow-sm pThumb" alt="AMP Fallback" fallback
                                        width="600" height="412"
                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSAiaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmlld0JveD0iMSAxIDggNCI+PGltYWdlIGZpbHRlcj0idXJsKCNibHVyKSIgd2lkdGg9IjEwIiBoZWlnaHQ9IjYiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQW9BQUFBR0NBWUFBQUQ2OEEvR0FBQUFBWE5TUjBJQXJzNGM2UUFBQUVSbFdFbG1UVTBBS2dBQUFBZ0FBWWRwQUFRQUFBQUJBQUFBR2dBQUFBQUFBNkFCQUFNQUFBQUJBQUVBQUtBQ0FBUUFBQUFCQUFBQUNxQURBQVFBQUFBQkFBQUFCZ0FBQUFEK2lGWDBBQUFBcjBsRVFWUUlIVDJQU1FxRlFBeEVYN2VpNG9BYkVRV3Y0TVlMZUhLdjQwSVV3UW5uL25ZdmZxQ29JcWxRaVVpU1JQbStqNVFTei9PNDd4dkhjUmlHZ2I3dnNTeUw2N3FRNy91YW9XNHN5L0kzYXYwOGp6SHlsZFNHZmQrcDY5cXcxbTNia21VWlFnalQweXlpS0ZKNlE4ZVdaVWxSRklSaGFLS2JwdUU4VCtaNVJyaXVxejZna2VjNVZWVXhqaVBUTkpremp1TmcyemJzN3htQ0lDQk5VK0k0cHVzNmxGS3M2NHB0MjBicnhCODZ4VmdkUHdJV2NRQUFBQUJKUlU1RXJrSmdnZz09Ii8+PGZpbHRlciBpZD0iYmx1ciI+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iLjUiIC8+PC9maWx0ZXI+PC9zdmc+">
                                    </amp-img>
                                </amp-img>
                                <?= countComments($p->replies->totalItems) ?>
                            </a>
                        </div>
                        <?= tags($p->labels, "secondary", "bg-secondary-subtle border-0 py-1 text-dark rounded-pill") ?>
                        <h2 class="fs-6 fw-bold lh-sm mt-2 mb-md-3 mb-2"><a
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>"
                                class="text-decoration-none line-clamp"><?= highlight_phrase($p->title, $query, '<span class="text-success">', '</span>') ?></a>
                        </h2>
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
                            <a class="text-decoration-none bold ml-auto border p1 rounded"
                                href="<?= base_url(urlWithoutDomain($p->url)) ?>">Readmore <i
                                    class="fa fa-chevron-right ms-1"></i></a>
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
    <?php 
    // CEK MODE DEVELOPMENT
    $whitelist = array('127.0.0.1', "::1","http://localhost");
    if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    ?>
        <div>
        <amp-ad width="100vw" height="220"
            type="adsense"
            data-ad-client="ca-pub-6755361630409176"
            data-ad-slot="9629472612"
            data-auto-format="mcrspv"
            data-matched-content-ui-type="image_stacked"
            data-matched-content-rows-num="2"
            data-matched-content-columns-num="1"
            data-full-width="">
        <div overflow=""></div>
        </amp-ad>
        </div>
    <?php } ?>
        <?php if(empty($posts)): ?>
        <h4>Postingan tidak ditemukan ...</h4>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="container text-center mt-5">
            <div class="d-flex flex-row justify-between">
                <button class="btn btn-success d-flex justify-content-between align-items-center" on="tap:AMP.goBack(navigate=true)"><i
                        class="fa fa-chevron-left me-md-2"></i><span class="d-none d-md-block">Postingan
                    sebelumnya</span></button>
                <a rel="nofollow noopener" href="<?= base_url('index.php') == current_url() ? "#" : base_url() ?>"
                    class="btn btn-sm btn-rounded <?= base_url('index.php') == current_url() ? "btn-secondary text-mutted" : "btn-success text-warning" ?> px-3 py-2">
                    <div class="fa fa-home"></div>
                </a>
                <!-- <a href="<?= base_url('nextpage/'.$posts_nextoken) ?>"
                    class="btn btn-sm btn-rounded btn-success px-4 py-2 text-warning">
                    Muat postingan selanjutnya
                </a> -->
                <button class="btn <?= empty($posts_nextoken) ? "btn-secondary" : "btn-success" ?> d-flex justify-content-between align-items-center"
                    <?= empty($posts_nextoken) ? "disabled" : "" ?>
                    on="tap:AMP.navigateTo(url='?pageToken=<?= $posts_nextoken ?>')"><span class="d-none d-md-block">Postingan
                    selanjutnya</span><i class="fa fa-chevron-right ms-md-2"></i></button>
            </div>
        </div>
    </div>
</section>