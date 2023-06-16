<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Posts
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */
use magyarandras\AMPConverter\Converter;

class Posts extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  protected function getPost($path)
  {
    $fetch = $this->curl->simple_get("https://www.googleapis.com/blogger/v3/blogs/7792147091805313605/posts/bypath?&fields=id,published,updated,title,labels,content,author(displayName,url,image(url))&path={$path}&key=AIzaSyBMgrvqLoK_LKur-HfdQpGc90Bo2lYXdi8");
    return json_decode($fetch);
  }

  public function singgle($tahun,$bulan,$title) {
    
    $converter = new Converter();

    //Load built-in converters
    $converter->loadDefaultConverters();

    $path = urlencode("/".$tahun."/".$bulan."/".$title);
    $post = $this->getPost($path);

    if(!empty($post)) {
      $post_data = $post;
    } else {
      $post_data = [];
    }

    $amphtml = $converter->convert($post_data->content);
    $data = [
      'title' => $title,
      'content' => 'pages/postingan/singgle',
      'self_url' => $path,
      'self_count' => count(get_object_vars($post_data)),
      // 'featured_image' => fetchImage($post_data->id),
      'featured_content' => $amphtml,
      'post' => $post_data,
    ];
    $this->load->view('layouts/app', $data);
  }

}


/* End of file Posts.php */
/* Location: ./application/controllers/Posts.php */