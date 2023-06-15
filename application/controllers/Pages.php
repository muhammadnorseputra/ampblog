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
    $data = [
      'd' => $detail,
      'content' => 'pages/halaman/index'
    ];
    $this->load->view('layouts/app', $data);
  }

}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */