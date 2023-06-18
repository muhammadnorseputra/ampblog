<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->output->cache(1);
        $this->key = $this->config->item('apikey');
        $this->blog_id = $this->config->item('blog_id');
    }

    public function apiReq() {
            $data = rssToJson('https://www.mediabalangan.com/feeds/posts/default/-/PHP');
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
    }

    public function index()
    {
        $featured = getFeatured();
        $posts_list = getPosts(7,"true","false");
        $data = [
            'featured' => $featured->items[0],
            'posts' => $posts_list->items,
            'posts_nextoken' => $posts_list->nextPageToken,
            'content' => 'pages/home'
        ];
        $this->load->view('layouts/app', $data);
        
    }

    public function nextpage($next=null) {
        $posts_list = getPosts(6,"true","false",$next);
        $data = [
            'title' => 'Blog',
            'posts' => $posts_list->items,
            'posts_nextoken' => @$posts_list->nextPageToken,
            'content' => 'pages/postingan/nextpage'
        ];
        $this->load->view('layouts/app', $data);
    }
}

/* End of file Home.php and path \application\controllers\Home\Home.php */