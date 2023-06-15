<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Pages
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

class Pages extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function page($id)
  {
    $detail = getPage($id);
    $og = [
      'type' => 'article',
      'url' => base_url('page/'.$id),
      'title' => $detail->title,
      'desc' => headlineText($detail->content,200),
      'image' => 'https://1.bp.blogspot.com/-E250bQMM8tk/XomH5DdorOI/AAAAAAAAPY8/SCYwi79WjckWC8wHKK7OblI82BpT9JquACNcBGAsYHQ/s1600/jagotheme-img.png'
    ];

    $tw = [
      'type' => 'summary',
      'url' => base_url('page/'.$id),
      'title' => $detail->title,
      'desc' => headlineText($detail->content,200),
      'image' => 'https://1.bp.blogspot.com/-E250bQMM8tk/XomH5DdorOI/AAAAAAAAPY8/SCYwi79WjckWC8wHKK7OblI82BpT9JquACNcBGAsYHQ/s1600/jagotheme-img.png'
    ];
    
    $data = [
      'title' => $detail->title,
      'd' => $detail,
      'content' => 'pages/halaman/index',
      'og' => $og,
      'tw' => $tw
    ];
    $this->load->view('layouts/app', $data);
  }

}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */