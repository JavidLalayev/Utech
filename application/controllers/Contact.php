<?php
class Contact extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {

        parent::__construct();
        $this->parent_folder = "frontend";
        $this->sub_folder = "contact";
        $this->includes_for_whole = "includes_for_whole_page";

        $this->load->model('Contact_Model');
        date_default_timezone_set('Asia/Baku');
    }

    public function index(){
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");
    }

    public function send_message()
    {


        $name = strip_tags($this->input->post("name"));
        $mail = strip_tags($this->input->post("email"));
        $phone = strip_tags($this->input->post("mobile"));
        $msg = strip_tags($this->input->post("message"));
        $this->load->library("form_validation");

        // Qaydalar yazilir..
        $this->form_validation->set_rules("name", "Ad Soyad", "required|trim");
        $this->form_validation->set_rules("email", "E-poçt", "required|trim");
        $this->form_validation->set_rules("mobile", "Mobil nömrə", "required|trim");
        $this->form_validation->set_rules("message", "Mesajınız", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> hissəsi doldurulmalıdır!",

            )
        );
        // Form Validation ise dusur..
        $this->form_validation->run();


        if ($this->form_validation->run() == TRUE) {


            if (!empty($name) && !empty($mail) && !empty($phone) && !empty($msg)) {
                $data = [
                    "name"    => $name,
                    "mail "   => $mail,
                    "phone"   => $phone,
                    "message" => $msg,
                    "date"    => date('Y-m-d H:i:s',strtotime('now'))
                ];
                $this->Contact_Model->insert_message($data);
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'testermail0777@gmail.com',
                    'smtp_pass' => 'testerCODE',
                    'mailtype'  => 'html',
                    'charset'  => 'html',
                    'wordwrap'  => TRUE, );

                $this->load->library("email");
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");
                $this->email->from('testermail0777@gmail.com', $this->input->post('name'));
                $this->email->to("info@utech.az");
                $this->email->subject(' Utech  ');
                $this->email->message("$name adlı şəxsdən mesaj:<br> $msg <br> <br> <strong>Şəxslə əlaqə:</strong> <br> $mail <br> $phone") ;
                $this->email->send();
                $this->session->set_flashdata("sccs", "Mesajınız göndərildi!");
                redirect(base_url("Contact"));
            } else {
                $this->session->set_flashdata("err", "Tələb olunan məlumatlar daxil edilməlidir");
                redirect(base_url("Contact"));
            }


        }else{
            $viewData = new stdClass();
            $viewData->form_error = true;
            $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $viewData);
        }
    }


}