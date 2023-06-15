<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Search
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller SEARCH
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Search extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->key = $this->config->item('apikey');
    $this->blog_id = $this->config->item('blog_id');
  }
  protected function getPostSearch($q,$nextpage=null) {
    $pagetoken = "";
    if($nextpage !== null) {
        $pagetoken .= "&pageToken=".$nextpage;
    }

    $fetch = $this->curl->simple_get('https://www.googleapis.com/blogger/v3/blogs/'.$this->blog_id.'/posts/search?q='.$q.'&fields=nextPageToken,items(id,url,title,labels,published,author(displayName,url,image(url)))&fetchBodies=false&maxResults=1&fetchImages=true&key='.$this->key.$pagetoken);
    return json_decode($fetch);
  }
  public function index()
  {
    $q = $this->input->get('q');
    $token = $this->input->get('pageToken');

    set_cookie('searchQuery', $q, 1000);
    if(isset($token)) {
      $posts = $this->getPostSearch($q,$token);
    } else {
      $posts = $this->getPostSearch($q);
    }
    $posts = $this->getPostSearch($q,$token);

    if(isset($posts->items) && !empty($q)) {
      $postdata = $posts->items;
    } else {
      $postdata = [];
    }
    
    $data = [
      'title' => 'Telusuri: '.$q,
      'content' => 'pages/postingan/search',
      'query' => $q,
      'posts' => $postdata,
      'posts_nextoken' => @$posts->nextPageToken
    ];
    $this->load->view('layouts/app', $data);
  }

  public function label($name) {
    $token = $this->input->get('pageToken');
    if(isset($token)) {
      $posts = getPosts(6,"true","false",$token,$name);
    } else {
      $posts = getPosts(6,"true","false",NULL,$name);
    }

    if(isset($posts->items) && !empty($name)) {
      $postdata = $posts->items;
    } else {
      $postdata = [];
    }
    $data = [
      'title' => $name,
      'content' => 'pages/postingan/labels',
      'posts' => $postdata,
      'posts_nextoken' => @$posts->nextPageToken,
      'posts_label' => $name
    ];
    $this->load->view('layouts/app', $data);
  }
}


/* End of file Search.php */
/* Location: ./application/controllers/Search.php */