<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

     public function send()
     {
          $config['mailtype'] = 'text';
          $config['protocol'] = 'smtp';
          $config['smtp_host'] = 'smtp.mailtrap.io';
          $config['smtp_user'] = '72e4d5231f8844';
          $config['smtp_pass'] = '022f9df3b0e9dc';
          $config['smtp_port'] = 2525;
          $config['newline'] = "\r\n";

          $this->load->library('email', $config);

          $this->email->from('no-reply@sigap-umkm.com', 'Sistem sigap-umkm.com');
          $this->email->to('admin@sigap-umkm.com');
          $this->email->subject('Pendaftaran Member UMKM');
          $this->email->message('Selamat anda sudah terdaftar, silahkan lakukan login dengan username dan password yang anda buat sebelumnya');

          if($this->email->send()) {
               echo 'Email berhasil dikirim';
          }
          else {
               echo 'Email tidak berhasil dikirim';
               echo '<br />';
               echo $this->email->print_debugger();
          }

     }

}