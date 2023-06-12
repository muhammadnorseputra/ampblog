<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->key = $this->config->item('apikey');
        $this->blog_id = $this->config->item('blog_id');
    }

    protected function getPost($maxResults=1, $imgSrc="true", $body="true") {
        $fetch = $this->curl->simple_get('https://www.googleapis.com/blogger/v3/blogs/'.$this->blog_id.'/posts?key='.$this->key.'&maxResults='.$maxResults.'&fetchImages='.$imgSrc.'&fetchBodies='.$body);
        return json_decode($fetch);
    }
    public function index()
    {
        $featured = $this->getPost();
        $post_list = $this->getPost(7,"true","false");
        $data = [
            'featured' => $featured->items[0],
            'post_list' => $post_list->items,
            'content' => 'pages/home'
        ];
        $this->load->view('layouts/app', $data);
        
    }
}

/* End of file Home.php and path \application\controllers\Home\Home.php */