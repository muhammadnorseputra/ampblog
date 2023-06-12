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




/* End of file blog_helper.php and path \application\helpers\blog_helper.php */