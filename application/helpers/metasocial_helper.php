<?php 


if (!function_exists('extractKeyWords')) {

    function extractKeyWords($string) {
 mb_internal_encoding('UTF-8');
 $stopwords = array("dan", "kepada", "dapat", "yang");
 $string = preg_replace('/[\pP]/u', '', trim(preg_replace('/\s\s+/iu', '', mb_strtolower($string))));
 $matchWords = array_filter(explode(' ',$string) , function ($item) use ($stopwords) { return !($item == '' || in_array($item, $stopwords) || mb_strlen($item) <= 2 || is_numeric($item));});
 $wordCountArr = array_count_values($matchWords);
 arsort($wordCountArr);
 return implode(',', array_keys(array_slice($wordCountArr, 0, 10)));
 }
}


/* End of file metasocial_helper.php and path \application\helpers\metasocial_helper.php */