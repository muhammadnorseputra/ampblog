<!DOCTYPE html>
<html ⚡="" lang="id" dir='ltr'>

<head>
    <meta charset="utf-8" />

    <!-- Primary Meta Tags -->
    <title><?= isset($title) ? $title : "Home" ?> - ⚡ <?= $this->config->item('blog_name') ?></title>
    <meta name="title" content="<?= $this->config->item('blog_name') ?>" />
    <meta name="description" content="<?= $this->config->item('blog_desc') ?>" />
    <meta content='media balangan, media center balangan, bedia, teknologi, pendidikan, blogger, adsense, pengetahuan, tips dan trik, cara-cara, belajar, tutorial' name='keywords' />
    <meta content='IE=edge' http-equiv='X-UA-Compatible' />
    <meta content='max-image-preview:large' name='robots' />

    <link rel="canonical" href="<?= current_url() ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link href="<?= current_url() ?>" hreflang="x-default" rel="alternate" />

    <!--[ Favicon ]-->
    <link href='<?= base_url('assets/img/blog/favicon.ico') ?>' rel='apple-touch-icon' sizes='120x120' />
    <link href='<?= base_url('assets/img/blog/favicon.ico') ?>' rel='apple-touch-icon' sizes='152x152' />
    <link href='<?= base_url('assets/img/blog/favicon.ico') ?>' rel="icon" type="image/x-icon" />
    <link href='<?= base_url('assets/img/blog/favicon.ico') ?>' rel='shortcut icon' type='image/x-icon' />

    <!-- Open Graph / Facebook -->
    <meta content="id_ID" property="og:locale" />
    <meta content="en_US" property="og:locale:alternate" />
    <meta content="en_GB" property="og:locale:alternate" />
    <meta content="<?= $this->config->item('blog_name') ?>" property="og:site_name" />
    <meta property="og:type" content="<?= isset($og['type']) ? $og['type'] : "website" ?>" />
    <meta property="og:url" content="<?= isset($og['url']) ? $og['url'] : base_url() ?>" />
    <meta property="og:title" content="<?= isset($og['title']) ? $og['title'] . " - " . $this->config->item('blog_name') : $this->config->item('blog_name') ?>" />
    <meta property="og:description" content="<?= isset($og['desc']) ? preg_replace('/^(?:\s*\R)+|\s*($|\R)/', "", $og['desc']) : $this->config->item('blog_desc') ?>" />
    <meta property="og:image" content="<?= isset($og['image']) ? $og['image'] : base_url("assets/img/blog/mediabalangan_mini.png") ?>" />
    <meta content="<?= isset($og['title']) ? $og['title'] . " - " . $this->config->item('blog_name') : $this->config->item('blog_name') ?>" property="og:image:alt" />

    <!-- Twitter -->
    <meta property="twitter:card" content="<?= isset($tw['type']) ? $tw['type'] : "summary_large_image" ?>" />
    <meta property="twitter:url" content="<?= isset($tw['url']) ? $tw['url'] : base_url() ?>" />
    <meta property="twitter:title" content="<?= isset($og['title']) ? $og['title'] . " - " . $this->config->item('blog_name') : $this->config->item('blog_name') ?>" />
    <meta property="twitter:description" content="<?= isset($tw['desc']) ? preg_replace('/^(?:\s*\R)+|\s*($|\R)/', "", $og['desc']) : $this->config->item('blog_desc') ?>" />
    <meta property="twitter:image" content="<?= isset($tw['image']) ? $tw['image'] : base_url("assets/img/blog/mediabalangan_mini.png") ?>" />
    <meta content="<?= isset($og['title']) ? $og['title'] . " - " . $this->config->item('blog_name') : $this->config->item('blog_name') ?>" property="twitter:image:alt" />

    <!--[ Theme Color ]-->
    <meta content="#4285F4" name="theme-color" />
    <meta content="#4285F4" name="msapplication-TileColor" />
    <meta content="#4285F4" name="msapplication-navbutton-color" />
    <meta content="#4285F4" name="apple-mobile-web-app-status-bar-style" />
    <meta content="true" name="apple-mobile-web-app-capable" />

    <!-- [ Manifest ] -->
    <link href="<?= base_url('assets/pwa/apple-icon-57x57.png') ?>" rel="apple-touch-icon" sizes="57x57" />
    <link href="<?= base_url('assets/pwa/apple-icon-60x60.png') ?>" rel="apple-touch-icon" sizes="60x60" />
    <link href="<?= base_url('assets/pwa/apple-icon-72x72.png') ?>" rel="apple-touch-icon" sizes="72x72" />
    <link href="<?= base_url('assets/pwa/apple-icon-76x76.png') ?>" rel="apple-touch-icon" sizes="76x76" />
    <link href="<?= base_url('assets/pwa/apple-icon-114x114.png') ?>" rel="apple-touch-icon" sizes="114x114" />
    <link href="<?= base_url('assets/pwa/apple-icon-120x120.png') ?>" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?= base_url('assets/pwa/apple-icon-144x144.png') ?>" rel="apple-touch-icon" sizes="144x144" />
    <link href="<?= base_url('assets/pwa/apple-icon-152x152.png') ?>" rel="apple-touch-icon" sizes="152x152" />
    <link href="<?= base_url('assets/pwa/apple-icon-180x180.png') ?>" rel="apple-touch-icon" sizes="180x180" />
    <link href="<?= base_url('assets/pwa/android-icon-192x192.png') ?>" rel="icon" sizes="192x192" type="image/png" />
    <link href="<?= base_url('assets/pwa/favicon-32x32.png') ?>" rel="icon" sizes="32x32" type="image/png" />
    <link href="<?= base_url('assets/pwa/favicon-96x96.png') ?>" rel=" icon" sizes="96x96" type="image/png" />
    <link href="<?= base_url('assets/pwa/favicon-16x16.png') ?>" rel=" icon" sizes="16x16" type="image/png" />
    <link href="<?= base_url('manifest.json') ?>" rel="manifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script async="" src="https://cdn.ampproject.org/v0.js"></script>

<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>
    <script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async=""></script>
    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js">
    </script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <!-- JSON SCHEMA -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "<?= base_url() ?>",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "<?= base_url() ?>search?q={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "<?= base_url() ?>",
            "logo": "<?= base_url("assets/img/blog/mediabalangan_mini.png") ?>"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "<?= base_url() ?>",
            "name": "<?= $this->config->item('blog_name') ?>",
            "alternateName": "<?= $this->config->item('blog_desc') ?>",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?= base_url('search?q={search_term_string}') ?>",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "<?= base_url() ?>",
            "logo": "https://lh3.googleusercontent.com/ZXvWeA-BxPxqoRyXhn-PSWYD7XwKInpIy4Vy0KU1OiHfLT1vRvpWh_OnSIZKSqZuGRaSK9g9R0E"
        }
    </script>
    <?php 
        $whitelist = array('127.0.0.1', "::1","http://localhost");
    ?>
    <style amp-custom>
        <?php 
        
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
        ?>
            <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/amp/assets/css/bs.min.css');?>
            <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/amp/assets/css/page.min.css'); ?>
        <?php } else { ?>
            <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/assets/css/bs.min.css');?>
            <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/assets/css/page.min.css'); ?>
        <?php } ?>
        /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */
        button,hr,input{overflow:visible}.nowrap,.truncate{white-space:nowrap}.list-reset,.list-style-none{list-style:none}.fit,.truncate,legend{max-width:100%}.align-baseline,progress,sub,sup{vertical-align:baseline}.mt0,.my0{margin-top:0}.mb0,.my0{margin-bottom:0}.list-reset,.pl0,.px0{padding-left:0}.pt0,.py0{padding-top:0}.pb0,.py0{padding-bottom:0}.relative,a,sub,sup{position:relative}html{font-family:Poppins,sans-serif;line-height:1.5;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}.m0,body{margin:0}.block,article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}.inline-block,audio,canvas,progress,video{display:inline-block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}*,.border-box,.col,.col-right,legend{box-sizing:border-box}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects;transition:.3s}a:hover{outline-width:0;color:#20c997}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}.italic,dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}.overflow-hidden,svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:Poppins,sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}.p0,legend{padding:0}legend{color:inherit;display:table;white-space:normal}.overflow-auto,textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}.display-none,[hidden],template{display:none}.h00{font-size:4rem}.h0,.h1{font-size:3rem}.h2{font-size:2rem}.h3{font-size:1.5rem}.h4{font-size:1.125rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.break-word{word-wrap:break-word}.line-height-1{line-height:1rem}.line-height-2{line-height:1.125rem}.line-height-3{line-height:1.5rem}.line-height-4{line-height:2rem}.underline{text-decoration:underline}.truncate{overflow:hidden;text-overflow:ellipsis}.inline{display:inline}.table{display:table}.table-cell{display:table-cell}.overflow-scroll{overflow:scroll}.clearfix:after,.clearfix:before{content:' ';display:table}.clearfix:after{clear:both}.col,.left{float:left}.col-right,.right{float:right}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.mr0,.mx0{margin-right:0}.ml0,.mx0{margin-left:0}.mt1,.my1{margin-top:.5rem}.mb1,.my1{margin-bottom:.5rem}.m1{margin:.5rem}.mr1,.mx1{margin-right:.5rem}.ml1,.mx1{margin-left:.5rem}.mt2,.my2{margin-top:1rem}.mb2,.my2{margin-bottom:1rem}.m2{margin:1rem}.mr2,.mx2{margin-right:1rem}.ml2,.mx2{margin-left:1rem}.mt3,.my3{margin-top:1.5rem}.mb3,.my3{margin-bottom:1.5rem}.m3{margin:1.5rem}.mr3,.mx3{margin-right:1.5rem}.ml3,.mx3{margin-left:1.5rem}.mt4,.my4{margin-top:2rem}.mb4,.my4{margin-bottom:2rem}.m4{margin:2rem}.mr4,.mx4{margin-right:2rem}.ml4,.mx4{margin-left:2rem}.mt-auto,.my-auto{margin-top:auto}.mb-auto,.my-auto{margin-bottom:auto}.mxn1{margin-left:calc(.5rem * -1);margin-right:calc(.5rem * -1)}.mxn2{margin-left:calc(1rem * -1);margin-right:calc(1rem * -1)}.mxn3{margin-left:calc(1.5rem * -1);margin-right:calc(1.5rem * -1)}.mxn4{margin-left:calc(2rem * -1);margin-right:calc(2rem * -1)}.m-auto{margin:auto}.mr-auto,.mx-auto{margin-right:auto}.ml-auto,.mx-auto{margin-left:auto}.pr0,.px0{padding-right:0}.pr1,.px1{padding-right:.5rem}.pl1,.px1{padding-left:.5rem}.pt1,.py1{padding-top:.5rem}.pb1,.py1{padding-bottom:.5rem}.p1{padding:.5rem}.pt2,.py2{padding-top:1rem}.pb2,.py2{padding-bottom:1rem}.pl2,.px2{padding-left:1rem}.pr2,.px2{padding-right:1rem}.p2{padding:1rem}.pt3,.py3{padding-top:1.5rem}.pb3,.py3{padding-bottom:1.5rem}.pl3,.px3{padding-left:1.5rem}.pr3,.px3{padding-right:1.5rem}.p3{padding:1.5rem}.pt4,.py4{padding-top:2rem}.pb4,.py4{padding-bottom:2rem}.pl4,.px4{padding-left:2rem}.pr4,.px4{padding-right:2rem}.p4{padding:2rem}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}.flex{display:-ms-flexbox;display:flex}@media (min-width:40.06rem){.sm-col,.sm-col-right{box-sizing:border-box}.sm-col{float:left}.sm-col-right{float:right}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}.sm-flex{display:-ms-flexbox;display:flex}}@media (min-width:52.06rem){.md-col,.md-col-right{box-sizing:border-box}.md-col{float:left}.md-col-right{float:right}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}.md-flex{display:-ms-flexbox;display:flex}}.flex-column{-ms-flex-direction:column;flex-direction:column}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-ms-flex-align:start;align-items:flex-start}.items-end{-ms-flex-align:end;align-items:flex-end}.items-center{-ms-flex-align:center;align-items:center}.items-baseline{-ms-flex-align:baseline;align-items:baseline}.items-stretch{-ms-flex-align:stretch;align-items:stretch}.self-start{-ms-flex-item-align:start;align-self:flex-start}.self-end{-ms-flex-item-align:end;align-self:flex-end}.self-center{-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center}.self-baseline{-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-ms-flex-item-align:stretch;-ms-grid-row-align:stretch;align-self:stretch}.justify-start{-ms-flex-pack:start;justify-content:flex-start}.justify-end{-ms-flex-pack:end;justify-content:flex-end}.justify-center{-ms-flex-pack:center;justify-content:center}.justify-between{-ms-flex-pack:justify;justify-content:space-between}.justify-around{-ms-flex-pack:distribute;justify-content:space-around}.justify-evenly{-ms-flex-pack:space-evenly;justify-content:space-evenly}.content-start{-ms-flex-line-pack:start;align-content:flex-start}.content-end{-ms-flex-line-pack:end;align-content:flex-end}.content-center{-ms-flex-line-pack:center;align-content:center}.content-between{-ms-flex-line-pack:justify;align-content:space-between}.content-around{-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-ms-flex:none;flex:none}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-last{-ms-flex-order:99999;order:99999}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40rem){.xs-hide{display:none}}@media (min-width:40.06rem) and (max-width:52rem){.sm-hide{display:none}}@media (min-width:52.06rem) and (max-width:64rem){.md-hide{display:none}}@media (min-width:64.06rem){.lg-col,.lg-col-right{box-sizing:border-box}.lg-col{float:left}.lg-col-right{float:right}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}.lg-flex{display:-ms-flexbox;display:flex}.lg-hide{display:none}}

        /* Custom Style */
        article.post>.separator{background-color:#eee;border-radius:8px;overflow:hidden;margin-bottom:10px}.pThumb img{object-fit:cover}article.post>*,article.post>p{line-height:2em;font-family:"Poppins",sans-serif;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;}.line-clamp{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
        article.post h2,
        article.post h3,
        article.post h4,
        article.post h5,
        article.post h6 {font-weight: 900 ; line-height: 1.5em ;margin: 1.5em 0 18px }
        article.post > hr {margin: 2em 0;border: 0;}
        article.post > hr::before {content: '\2027 \2027 \2027';display: block;text-align: center;font-size: 24px;letter-spacing: 0.6em;text-indent: 0.6em;opacity: .8;clear: both;}
        .count-comments {position: absolute; bottom:10px; right:10px;}
        /* add class style1 to ol */    
        ol.style1{counter-reset:numbers;list-style:none;padding:0}ol.style1 > li{counter-increment:numbers;margin-bottom:25px;position:relative;margin-left:40px}ol.style1 > li img{margin:15px 0;width:100%;display:block}ol.style1 > li::before{content:counter(numbers);line-height:23px;font-size:14px;font-weight:bold;left:-45px;width:32px;height:32px;text-align:center;position:absolute;color:rgb(76 79 77);border:5px solid rgb(220 226 224);border-radius:50% 0 50% 50%;top:0px}ol.style1 li ul li{margin-bottom:15px}ol.style1 li ul{margin-top:15px}.drK ol.style1 > li::before{border-color:rgb(76 79 77);color:rgb(176 179 184)}
        /* add class style2 to ol */
        ol.style2 {position: relative;counter-reset: numbers;list-style: none;padding: 0;}ol.style2::before {content: "";position: absolute;left: 25px;top: 0;bottom: 0;width: 1px;background-color: #c4cdd5;}ol.style2 > li {counter-increment: numbers;margin-bottom: 25px;position: relative;margin-left: 55px;}ol.style2 > li::before {content: counter(numbers);line-height: 23px;font-family: 'Poppins', sans-serif;font-size: 14px;font-weight: bold;left: -45px;width: 32px;height: 32px;text-align: center;position: absolute;color: #333;border: 5px solid teal;border-radius: 50px;top: -2px;background-color: #fefefe;}
        article.post .pRef{display:block;font-size:14px;line-height:1.5em; opacity:.7; word-break:break-word}
        /* Post related */ 
        article.post .pRelate{margin:12px 0;padding:10px; border:3px solid #989b9f;background-color: #eaeaea; border-right:0;border-bottom: 0;border-top:0; font-size:14px;line-height:1.8em} .pRelate b{font-weight:900; font-size: 14px; margin:0;opacity:.8} .pRelate ul, .pRelate ol{margin:8px 0 0;padding:0 20px}.pRelate a {text-decoration: none; font-weight: bold; color: teal;}
        article.post a {text-decoration: none; position: relative; color: teal; /* Menambahkan jarak antara teks tautan dengan garis bawah */}
        /* Note */ .note{position:relative;padding:16px 20px 16px 50px; background:#e1f5fe;color:#3c4043; font-size:.85rem;font-family:'Poppins', sans-serif;line-height:1.6em;border-radius:10px;overflow:hidden} .note::before{content:'';width:60px;height:60px;background:#81b4dc;display:block;border-radius:50%;position:absolute;top:-12px;left:-12px;opacity:.1} .note::after{content:'\002A';position:absolute;left:18px;top:16px; font-size:20px; min-width:15px;text-align:center} .note.wr{background:#ffdfdf;color:#48525c} .note.wr::before{background:#e65151} .note.wr::after{content:'\0021'}
        /* ToC */ details summary{list-style:none;outline:none} summary::-webkit-details-marker{display:none} details.sp{padding:10px 15px;border: 1px solid #ccc; border-radius: 8px; background-color: eee; margin-bottom: 10px} details.sp summary{display:flex;justify-content:space-between;align-items:baseline; font-weight: bold; color: teal} details.sp summary::after{content:attr(data-show);font-size:12px; opacity:.7;cursor:pointer} details.sp[open] summary::after{content:attr(data-hide)} details.toc a:hover{text-decoration:underline} details.toc a{display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden; color:inherit} details.toc ol{list-style:none;padding:0;margin:0; line-height:1.6em; counter-reset:toc-count} details.toc ol ol ol ol{display:none} details.toc ol ol, .tocIn li:not(:last-child){margin-bottom:5px} details.toc li li:first-child{margin-top:5px} details.toc li{display:flex;flex-wrap:wrap; justify-content:flex-end} details.toc li::before{flex:0 0 23px; content:counters(toc-count,'.')'. ';counter-increment:toc-count} details.toc li a{flex:1 0 calc(100% - 23px)} details.toc li li::before{flex:0 0 28px; content:counters(toc-count,'.')} details.toc li li a{flex:1 0 calc(100% - 28px)} details.toc li li li::before{flex:0 0 45px} details.toc li li li a{flex:1 0 calc(100% - 45px)} details.toc .toC >ol{margin-top:1em} details.toc .toC >ol >li >ol{flex:0 0 calc(100% - 23px)} details.toc .toC >ol >li >ol ol{flex:0 0 calc(100% - 45px)} details.toc .toC >ol >li >ol ol ol{flex:0 0 calc(100% - 35px)}
        /* syntax */ .preCopy,pre.lnNumb>div{position:absolute;z-index:1}kbd,span.code{display:inline;padding:3px 5px;border-radius:2px;font:14px var(--fontCode);background-color:#ebeced;color:#2f3337}pre,pre.lnNumb>div{background-color:var(--synBg)}pre,pre code{position:relative;color:var(--synC)}pre{line-height:1.6em;border:var(--synBd-line) solid var(--synBd-color);border-radius:var(--synBd-radius)}pre code{font-family:var(--fontCode);display:block;white-space:pre;font-size:1rem;width:100%;padding:10px;overflow:auto;line-height:1.5em;background:#efefef;border-radius:8px}pre:before{content:'</>';position:absolute;right:0;top:0;color:#fff;font-size:10px;padding:0 10px;z-index:2;line-height:35px;background:#333;border-bottom-left-radius:10px}pre.html:before{content:'.html'}pre.css:before{content:'.css'}pre.js:before{content:'.js'}.preCopy:hover{opacity:1}.preCopy{opacity:.5;transition:opacity .5s linear;left:5px;top:5px;border:0;outline:0;background:0 0;width:30px;height:30px;border:1px solid var(--synBd-color);border-radius:50%}.preCopy svg{width:18px}.preCopy svg path{stroke:#656e77}.hljs-comment{color:#656e77}.hljs-attr,.hljs-doctag,.hljs-keyword,.hljs-meta,.hljs-meta-keyword,.hljs-section,.hljs-selector-class,.hljs-selector-pseudo,.hljs-selector-tag{color:#015692}.hljs-attribute{color:#803378}.hljs-built_in,.hljs-literal,.hljs-name,.hljs-number,.hljs-quote,.hljs-selector-id,.hljs-template-tag,.hljs-title,.hljs-type{color:#b75501}.hljs-link,.hljs-meta-string,.hljs-regexp,.hljs-selector-attr,.hljs-string,.hljs-symbol,.hljs-template-variable,.hljs-variable{color:#54790d}.hljs-bullet,.hljs-code{color:#535a60}.hljs-deletion{color:#c02d2e}.hljs-addition{color:#2f6f44}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}.preNumb{cursor:context-menu;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}pre.lnNumb code{padding-left:4em}pre.lnNumb>div{display:block;top:0;left:0;height:100%;border-radius:3px 0 0 3px;overflow:hidden;counter-reset:line;border-right:1px solid var(--synBd-color)}pre.lnNumb>div>span{display:block;width:40px;padding:0 5px;text-align:center;color:#656e77;overflow:hidden;counter-increment:line}pre.lnNumb>div>span::before{content:counter(line)}pre.lnNumb>div>span:first-child{margin-top:40px}pre.lnNumb>div>span:last-child{padding-bottom:10px}

</style>

</head>