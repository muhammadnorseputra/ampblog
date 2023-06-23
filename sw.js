importScripts('https://cdn.ampproject.org/sw/amp-sw.js');
AMP_SW.init({
    navigationPreload: true,
    assetCachingOptions: [{
        regexp: /\.(png|jpg|webp|avif|jpeg)/,
        cachingStrategy: 'CACHE_FIRST'
    }]
});