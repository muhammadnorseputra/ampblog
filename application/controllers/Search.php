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
  protected function getPost($q) {
    $fetch = $this->curl->simple_get('https://www.googleapis.com/blogger/v3/blogs/'.$this->blog_id.'/posts/search?q='.$q.'&fetchBodies=true&fetchImages=true&key='.$this->key);
    return json_decode($fetch);
  }
  public function index()
  {
    $q = $this->input->post('query');
    $posts = $this->getPost($q);
    $data = [
      'content' => 'pages/postingan/search',
      'query' => $q,
      'posts' => $posts->items != NULL ? $posts->items : NULL,
      'posts_nextoken' => isset($posts->nextPageToken)
    ];
    $this->load->view('layouts/app', $data);
  }

}


/* End of file Search.php */
/* Location: ./application/controllers/Search.php */