<?php 
if (!function_exists('urlWithoutDomain')) {

    function urlWithoutDomain($url)
    {
        $urlWithoutDomain = preg_replace('#^.+://[^/]+#', '', $url);
        return $urlWithoutDomain;
    }
}

if (!function_exists('headlineText')) {

    function headlineText($content, $maxChar=80)
    {

        $isi_berita = strip_tags($content); // membuat paragraf pada isi berita dan mengabaikan tag html
        $isi = substr($isi_berita, 0, $maxChar); // ambil sebanyak 80 karakter
        $isi = substr($isi_berita, 0, strrpos($isi, ' ')); // potong per spasi kalimat
        return $isi;
    }
}

if (!function_exists('rssToJson')) {

    function rssToJson($url)
    {

        $rss_url = $url;
        $api_endpoint = 'https://api.rss2json.com/v1/api.json?rss_url=';
        $data = json_decode( file_get_contents($api_endpoint . urlencode($rss_url)) , true );
        return $data;
    }
}




/* End of file blog_helper.php and path \application\helpers\blog_helper.php */