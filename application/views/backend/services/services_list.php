<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

<div class="page-content">


    <div class="content">
        <h1 class="c_title">Servisler</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding c_resfresh_portfolio_category">


                    <a href="<?php echo base_url("utech_admin_panel_services_elave_et")?>" class="btn btn-success c_right">
                        <i class="fa fa-plus"></i>
                        <span class="c_add_text">Əlavə Et</span>
                    </a>

                    <!--                            dropzone-->
                    <!--                            <form action="/file-upload" class="dropzone c_dropzone">-->
                    <!--                                <div class="fallback">-->
                    <!--                                    <input name="file" type="file" multiple />-->
                    <!--                                    sekilleri buraya surukleyin-->
                    <!--                                </div>-->
                    <!--                            </form>-->
                    <!--                            dropzone-->


                    <!--                            servislerin listi-->
                    <table class="table no-more-tables table-bordered">

                        <!--                                tablenin basliqi-->
                        <thead>
                        <th style="width:22%;">Servisin Adı</th>
                        <th style="width:9%; text-align: center">Servisin Başlığı</th>
                        <th style="width:5%; text-align: center">Servisin Şəkli</th>
                        <th style="width:5%; text-align: center">Əməliyatlar</th>
                        </thead>
                        <!--                                tablenin basliqi-->





                        <!--                                tablenin bodysi-->



                            <?php foreach ($services as $service){ ?>
                            <tr>
                                <td class="v-align-middle c_vertical_align_middle">
                                   <?php echo $service['service_name'] ?>
                                </td>
                                <td class="v-align-middle c_vertical_align_middle">
                                    <?php echo $service['service_title'] ?>
                                </td>
                                <td class="v-align-middle c_vertical_align_middle text-center">
                                    <img width="120px" height="100px" src="<?php echo base_url('uploads/services/'.$service['service_img']) ?>" alt="Şəkil Yüklənmədi">
                                </td>
                                <td class="v-align-middle c_vertical_align_middle text-center">
                                    <a href="<?php echo base_url('utech_admin_panel_services_yenile/'.$service['id']) ?>" class="btn btn-warning">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Yenilə
                                    </a>
                                    <a href="<?php echo base_url('utech_admin_panel_services_sil/'.$service['id']) ?>" class="btn btn-danger c_delete_service_category">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Sil
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <!--                                tablenin bodysi-->


                    </table>

                </div>
            </div>
        </div>
    </div>
</div>





<?php $this->load->view("backend/includes_for_whole/footer");?>
<!--melumat alerti-->
<?php if($this->session->flashdata("success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
