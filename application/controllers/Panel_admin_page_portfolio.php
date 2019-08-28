<?php
     class Panel_admin_page_portfolio extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "portfolio";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Portfolio_model");


             if (!$this->session->userdata("session")){
                 redirect(base_url("utech_admin_panel_login_page"));
             }


         }

         public function index()
         {
             $this->load->library("session");
             $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");
         }


//         =======================Portfolio_category hissesi=================================
         public function portfolio_category_list(){
             $data["portfolio_categories"] = $this->Portfolio_model->get_portfolio_category();

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/whole_page", $data);
         }

         public function portfolio_category_list_add(){
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_operations/portfolio_category_add");
         }

         public function portfolio_category_list_add_act(){
             $category_name = strip_tags($this->input->post("category_name"));

             $this->Portfolio_model->portfolio_category_add(array(
                 "name" => $category_name,
             ));
             $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
             redirect(base_url("utech_admin_panel_portfolio_category"));

         }

         public function portfolio_category_list_update($id){
            $data["portfolio_category"] = $this->Portfolio_model->get_portfolio_category_single(array(
                    "id" => $id,
                ));

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_operations/portfolio_category_update", $data);

         }

         public function portfolio_category_list_update_act($id){
             $category_name = strip_tags($this->input->post("category_name"));

             $this->Portfolio_model->portfolio_category_update(

                array(
                    "id" =>$id,
                ),

                 array(
                 "name" => $category_name,
                )
             );


             $old_category =  $this->session->flashdata("old_category");

             $this->Portfolio_model->portfolio_gallery_update_old_category_in_portfolio_list(
                 array(
                     "category_name" => $old_category,
                 ),
                 array(
                     "category_name" => $category_name,
                 )
             );


             $this->session->set_flashdata("alert", "Məlumat Yeniləndi!");
             redirect(base_url("utech_admin_panel_portfolio_category"));

         }

         public function portfolio_category_list_delete($id){

             $category = $this->Portfolio_model->get_portfolio_category_single(array(
                 "id" => $id,
             ));

             $where1 = array(
                 "id" => $id,
             );

             $where2 = array(
                 "category_name" => $category["name"],
             );

             $this->Portfolio_model->portfolio_category_delete($where1,$where2);

             $data["portfolio_categories"] = $this->Portfolio_model->get_portfolio_category();
             $this->session->set_flashdata("alert", "Məlumat Silindi!");
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_delete_render_page/portfolio_category_table", $data);
         }
//         =======================Portfolio_category hissesi=================================



//         =======================Umumi portfoliolarin hissesi =================================
         public function portfolio_list(){
             $data["portfolio"] = $this->Portfolio_model->get_portfolio_list();
             $data["all_gallery"] = $this->Portfolio_model->get_gellery_list();


             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/whole_page", $data);
         }

         public function portfolio_list_add(){
             $data["categories"] = $this->Portfolio_model->get_portfolio_category();
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_operations/portfolio_list_add", $data);
         }

         public function portfolio_list_add_act(){
             $name = strip_tags($this->input->post("name"));
             $desc = $this->input->post("desc");
             $category_name = $this->input->post("category");

             if (!empty($name) && !empty($desc)){
                 $this->Portfolio_model->portfolio_list_add(array(
                     "name" => $name,
                     "desc" => $desc,
                     "category_name" => $category_name,
                     "upload_date" => date("y:m:d"),
                 ));
                 $this->session->set_flashdata("alert", "Məlumat Əlavə Edildi!");
                 redirect(base_url("utech_admin_panel_portfolio_list"));
             }else{
                 $this->session->set_flashdata("alert_danger", "Zəhmət olmasa boşluq buraxmayın!");
                 redirect(base_url("utech_admin_panel_portfolio_add"));
             }
         }

         public function portfolio_list_update($id){
             $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                 "id" => $id,
             ));

             $data["categories"] = $this->Portfolio_model->get_portfolio_category();

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_operations/portfolio_list_update", $data);
         }

         public function portfolio_list_update_act($id){
             $name = strip_tags($this->input->post("name"));
             $desc = $this->input->post("desc");
             $category_name = $this->input->post("category");

             if (!empty($name) && !empty($desc)){
                 $this->Portfolio_model->portfolio_list_update(

                     array(
                         "id" =>$id,
                     ),

                     array(
                         "name" => $name,
                         "desc" => $desc,
                         "category_name" => $category_name,
                         "upload_date" => date("y:m:d"),
                     )
                 );
                 $this->session->set_flashdata("alert", "Məlumat Yeniləndi!");
                 redirect(base_url("utech_admin_panel_portfolio_list"));
             }else{
                 $this->session->set_flashdata("alert_danger", "Zəhmət olmasa boşluq buraxmayın!");
                 redirect(base_url("utech_admin_panel_portfolio_update/$id"));
             }


         }

         public function portfolio_list_delete($id){
             $this->Portfolio_model->portfolio_list_delete(array(
                 "id" => $id,
             ));

             $this->session->set_flashdata("alert", "Məlumat Silindi!");
             $data["portfolio"] = $this->Portfolio_model->get_portfolio_list();
             $data["all_gallery"] = $this->Portfolio_model->get_gellery_list();

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/portfolio_list_render_page/portfolio_table", $data);

         }
//         =======================Umumi portfoliolarin hissesi =================================





//         =======================Portfoliolarin qalereya hissesi =================================

        public function portfolio_gallery($id){
            $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
                "portfolio_id" => $id
            ));

            $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                "id" => $id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/whole_page", $data);

        }

        public function portfolio_gallery_add($id){
            //      sekiller dropzonedan upload edilir
            $config['upload_path'] = 'uploads/portfolio';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['file']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $cond = $this->upload->do_upload("file");


            //      upload edilecek sekil database e yuklenir
            $data  = array(
                "name"          => ($cond) ? $this->upload->data('file_name') : "default.png",
                "upload_date"        => date("Y/m/d"),
                "portfolio_id" => $id,
            );


            //      eyger sekil upload oldusa succes olmadisa warning alerti versin
            if ($cond){
                $this->session->set_flashdata("alert", "Şəkil Yükləndi!");
            }else{
                $this->session->set_flashdata("alert_danger", "Şəkil Yüklənmədi!");
            }

            $this->Portfolio_model->portfolio_gallery_add($data);
        }

        public function refresh_image_list_gallery($id){
            $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
                "portfolio_id" => $id,
            ));

            $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                "id" => $id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

         public function portfolio_gallery_delete($portfolio_id, $gallery_id){
         $cond = $this->Portfolio_model->portfolio_gallery_delete(array(
             "id" => $gallery_id,
         ));

         if ($cond){
             $this->session->set_flashdata("alert", "Məlumat Silindi!");
         }else{
             $this->session->set_flashdata("alert_danger", "Xəta baş verdi!");
         }


         $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
             "portfolio_id" => $portfolio_id,
         ));

         $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
             "id" => $portfolio_id,
         ));


         $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

     }

        public function portfolio_gallery_primary($portfolio_id, $id){

            if($id && $portfolio_id){
                $status = ($this->input->post("data")) == "true" ? 1 : 0;

                $this->Portfolio_model->portfolio_gallery_update(
                    array(
                        "id" => $id,
                        "portfolio_id" => $portfolio_id,
                    ),

                    array(
                        "is_primary" => $status
                    )
                );


                $this->Portfolio_model->portfolio_gallery_update(
                    array(
                        "id !="         => $id,
                        "portfolio_id"  => $portfolio_id,
                    ),

                    array(
                        "is_primary" => 0
                    )
                );


                $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
                    "portfolio_id" => $portfolio_id,
                ));

                $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                    "id" => $portfolio_id,
                ));

                $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);
            }


        }

        public function prtfolio_gallery_delete_group($portfolio_id){
            $idler = $this->input->post("data");

            if ($idler){
                foreach ($idler as $a_id => $id){
                    $this->Portfolio_model->portfolio_gallery_delete(array(
                        "id" => $id,
                    ));
                }
            }


            ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

            $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
                "portfolio_id" => $portfolio_id,
            ));

            $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                "id" => $portfolio_id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

        public function prtfolio_gallery_delete_all($portfolio_id){


            $idler = $this->input->post("data");

            if ($idler){
                foreach ($idler as $a_id => $id){
                    $this->Portfolio_model->portfolio_gallery_delete(array(
                        "id" => $id,
                    ));
                }
            }


            ($idler) ? $this->session->set_flashdata("alert", "Məlumatlar Silindi!") : "";

            $data["gallery"] = $this->Portfolio_model->get_portfolio_gallery(array(
                "portfolio_id" => $portfolio_id,
            ));

            $data["portfolio"] = $this->Portfolio_model->get_portfolio_list_single(array(
                "id" => $portfolio_id,
            ));

            $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_gallery/portfolio_list_render_page/portfolio_gallery_table", $data);

        }

//         =======================Portfoliolarin qalereya hissesi =================================



 }
