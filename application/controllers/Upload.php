<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends MY_Controller
{
    /*****************************************************************************/
    public function __construct()
    {
        parent::__construct();
    }
    /*****************************************************************************/
    public function index()
    {

        if ($this->input->post()) {
            $param = $this->input->post();
            if ($_FILES['file_gambar']) { 
                $config['upload_path']   = './assets/upload/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite']     = false;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_gambar')) {
                    $error['message'] =  $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $param['gambar'] = $data['file_name'];
                }
            }
            if (isset($param['id']) && !empty($param['id'])) {
              $this->db->where('id', $param['id']);
              $this->db->update('m_upload', $param);
            }else{
              $this->db->insert('m_upload', $param);
            }
        redirect(base.'/contoh', 'refresh');
        } else {

            $this->data['header'] = $this->parser->parse('contoh/header.html', $this->data, true);
            $this->data['footer'] = $this->parser->parse('contoh/footer.html', $this->data, true);

            $upload_data               = $this->db->get('m_upload')->result();
            $this->data['upload_data'] = $upload_data;

            $this->data['content'] = $this->parser->parse('contoh/content.html', $this->data, true);
            $this->parser->parse('contoh/index.html', $this->data, false);

        }
    }
    /*****************************************************************************/
    function delete($id)
    {
      if (isset($id)) {
        /// cek dan delete file gambarnya
        $this->db->where('id', $id);
        $upload = $this->db->get('m_upload')->result();
        foreach ($upload as $value) {
          if (file_exists('./assets/upload/'.$value->gambar)) {
            unlink('./assets/upload/'.$value->gambar);
          }
        }
          $this->db->where('id', $id);
            $this->db->delete('m_upload');
        redirect(base.'/contoh', 'refresh');
      }
    }
    /*****************************************************************************/
    /*****************************************************************************/
}

/* End of file Contoh.php */
/* Location: ./application/controllers/Contoh.php */
