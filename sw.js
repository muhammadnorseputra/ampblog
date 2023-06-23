importScripts('https://cdn.ampproject.org/sw/amp-sw.js');
AMP_SW.init({
    navigationPreload: true,
    assetCachingOptions: [{
        regexp: /\.(png|jpg|webp|avif|jpeg|js|css|woff2|woff)/,
        cachingStrategy: 'CACHE_FIRST'
    }]
});