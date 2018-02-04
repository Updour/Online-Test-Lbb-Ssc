<?php

class Welcome extends CI_Controller
{
 
    //....
 
    public function cobapdf()
    {
        // Muat library PDF
        $this->load->library('pdf');
 
        // Buat HTML atau load dari view
        $html = "<div class='kotak' ".
                "style='border:2px solid #ccc; ".
                "padding: 20px; ".
                "background: #aaf;' ".
                ">".
                "<h1>Demo CodeIgniter dan mPDF. Mantap!</h1>".
                "<a href='http://duniahost.com'>Web Hosting</a>".
                "</div>"; 
            $data = array('nama' => 'namakamu', );  
              $this->load->view('Welcome');
 
        // Lakukan pengerjaan PDF
        $this->pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $this->pdf->WriteHTML($html);
        $this->pdf->Output("output.pdf", 'I');
    }
}
 
//--- EOF
