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

    <link rel="canonical" href="<?= curPageURL() ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link href="<?= curPageURL() ?>" hreflang="x-default" rel="alternate" />

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
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <!-- JSON SCHEMA -->
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
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?= base_url('search?q={search_term_string}') ?>",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <style amp-custom>
        <?php
            include("assets/css/bs.min.css");
            include("assets/css/page.min.css");
            include("assets/css/normalize.min.css");
            include("assets/css/custom.min.css");
        ?>
    </style>

</head>