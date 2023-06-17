<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cache extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function delete($parm=null)
    {
        if(isset($parm)) {
            $this->output->delete_cache($parm); 
            return;
        }
        $this->output->delete_cache(); 
    }
}

/* End of file Cache.php and path \application\controllers\cache\Cache.php */