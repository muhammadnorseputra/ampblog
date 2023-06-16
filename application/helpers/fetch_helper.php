<?php 

if (!function_exists('fetchImage')) {

    /**
     * fetchImage Post by ID Post
     * 
     *  @return bool  */
    function fetchImage($postId)
    {
        $url = "https://www.googleapis.com/blogger/v3/blogs/7792147091805313605/posts/{$postId}?key=AIzaSyBMgrvqLoK_LKur-HfdQpGc90Bo2lYXdi8&fetchImages=true&fetchBody=false&fields=images(url)";
        $ci = get_instance();
        $fetch = $ci->curl->simple_get($url);
        $result = json_decode($fetch);
        return $result->images[0]->url;
    }
}

if (!function_exists('getPosts')) {

    /**
     * fetchPosts
     * 
     *  @return bool  */
    function getPosts($maxResults=1, $isImage="true", $isBody="true", $nextpage=null, $labels="")
    {
        $ci = get_instance();
        $pagetoken = "";
        if($nextpage !== null) {
            $pagetoken .= "&pageToken=".$nextpage;
        }
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$ci->config->item('blog_id').'/posts?fields=nextPageToken,items(title,id,content,labels,url,published,updated,images(url),author(displayName,url,image(url)))&key='.$ci->config->item('apikey').'&labels='.$labels.'&status=live&maxResults='.$maxResults.'&fetchImages='.$isImage.'&fetchBodies='.$isBody.$pagetoken;
        $fetch = $ci->curl->simple_get($url);
        

        $result = json_decode($fetch);
        return $result;
    }
}

if (!function_exists('getFeatured')) {

    /**
     * getFeatured
     * 
     *  @return bool  */
    function getFeatured()
    {
        $ci = get_instance();
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$ci->config->item('blog_id').'/posts?key='.$ci->config->item('apikey').'&status=live&maxResults=1&fetchImages=true&fetchBodies=true&fields=items(title,content,labels,url,published,updated,images(url),author(displayName,url,image(url)))';
        $fetch = $ci->curl->simple_get($url);

        $result = json_decode($fetch);
        return $result;
    }
}

if (!function_exists('getPage')) {

    /**
     * getPage
     * 
     *  @return bool  */
    function getPage($pageId)
    {
        $ci = get_instance();
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$ci->config->item('blog_id').'/pages/'.$pageId.'?key='.$ci->config->item('apikey');
        $fetch = $ci->curl->simple_get($url);

        $result = json_decode($fetch);
        return $result;
    }
}

/* End of file fetch_helper.php and path \application\helpers\fetch_helper.php */