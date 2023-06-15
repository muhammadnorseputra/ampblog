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

if (!function_exists('formatTgl')) {
  function formatTgl($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;

    return $result;
  }
}

if (!function_exists('tags')) {

    function tags($tag,$varian="success",$styleOption="")
    {
        $body = '<div class="d-flex justify-content-start align-items-center gap-2 mb-2">';
        $body .= '<i class="fa fa-tags mr-2"></i>';
        foreach($tag as $label):
            $body .= '<button class="btn btn-'.$varian.' '.$styleOption.' d-flex flex-row justify-content-between align-items-center" on="tap:AMP.navigateTo(url=\''.base_url('search/label/'.$label).'\')">
            <span> '.$label.'</span></button>';
        endforeach;
        $body .= "</div>";

        return $body;
    }
}

if (!function_exists('readTime')) {
    function readTime($text, $wpm = 200) {
        $totalWords = str_word_count(strip_tags($text));
        $minutes = floor($totalWords / $wpm);
        $seconds = floor($totalWords % $wpm / ($wpm / 60));
        
        // return array(
        //     'minutes' => $minutes,
        //     'seconds' => $seconds
        // );

        return "<i class='fa fa-clock-o mx-2'></i>".$minutes ." min"." ".$seconds." sec, reading";
    }
}