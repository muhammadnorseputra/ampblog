<?php 

if (!function_exists('fetchImage')) {

    /**
     * fetchImage Post by ID Post
     * 
     *  @return bool  */
    function fetchImage($postId)
    {
        $url = "https://www.googleapis.com/blogger/v3/blogs/7792147091805313605/posts/{$postId}?key=AIzaSyBMgrvqLoK_LKur-HfdQpGc90Bo2lYXdi8&fetchImages=true&fetchBody=false";
        $ci = get_instance();
        $fetch = $ci->curl->simple_get($url);
        $result = json_decode($fetch);
        return $result->images[0]->url;
    }
}


/* End of file fetch_helper.php and path \application\helpers\fetch_helper.php */