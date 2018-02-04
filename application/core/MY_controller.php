<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
      public function __construct()
    {
     parent::__construct();
      date_default_timezone_set("Asia/Jakarta");
     $this->data = array();

     $base = rtrim(base_url(),'/'); 
     define('base', $base);

     $this->data['base'] = base; 
     $this->load->library('parser');   

     $this->data['tahun'] = date('Y');
        
    //     $this->load->helper('opn');
    //     define('base', rtrim(base_url(), '/'));
    //     define('BASE', dirname(dirname(__DIR__)));
    //     $this->data         = array();
    //     $this->data['base'] = base;
    //     // opn($_SESSION);exit();
    //     $this->data['is_admin']  = 'hidden destroy';
    //     $this->data['is_siswa']  = 'hidden destroy';
    //     $this->data['is_guru']   = 'hidden destroy';
    //     $this->data['is_login']  = 'hidden destroy';
    //     $this->data['is_logout'] = 'is_logout';
    //     $this->_is_login         = false;
    //     $this->_is_admin         = false;
    //     $this->_is_siswa         = false;
    //     $this->_is_guru          = false;
    //     $this->_user_id          = null;

    // //     if (isset($_SESSION['user_info'])) {
    //         $this->_is_login = true;
    //         $this->_user_id  = $_SESSION['user_info'][0]->id;

    //         $this->data['is_login']  = 'is_login';
    //         $this->data['is_logout'] = 'hidden destroy';
    //         $this->data['user_info'] = $_SESSION['user_info'];

    //         switch ($_SESSION['user_info'][0]->level) {
    //             case 'admin':
    //                 $this->data['is_admin'] = 'is_admin';
    //                 $this->_is_admin        = true;
    //                 $this->level            = 'admin';
    //                 break;
    //             case 'guru':
    //                 $this->data['is_guru'] = 'is_guru';
    //                 $this->level           = 'guru';
    //                 $this->_is_guru        = true;
    //                 break;
    //             case 'siswa':
    //                 $this->data['is_siswa'] = 'is_siswa';
    //                 $this->_is_siswa        = true;
    //                 $this->level            = 'siswa';
    //                 break;
    //         }
    //     }

     }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
