<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Frontend
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

class Frontend extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('frontend/index');
    
  }

}


/* End of file Frontend.php */
/* Location: ./application/controllers/Frontend.php */