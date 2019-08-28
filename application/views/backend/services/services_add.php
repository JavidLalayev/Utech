<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>


<div class="page-content">


    <div class="content">
        <h1 class="c_title">Yeni Servis</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row">

                        <form action="<?php echo base_url("utech_admin_panel_services_elave_etme")?>" method="post" enctype="multipart/form-data">

                            <label for="name">Servisin Adı</label>
                            <input id="name" type="text" class="form-control" name="service_name">
                            <br>


                            <br><br>


                            <label>Servisin Başlığı</label>
                            <textarea id="editor1" name="service_title"></textarea>
                            <br><br>



                            <label>Servis Haqqında Məlumat</label>
                                <textarea id="editor2" name="service_desc"></textarea>
                                <br><br>



                                <label>Üstünlüklərimiz(Bu Sahəni boş buraxa bilərsiniz)</label>
                                <textarea id="editor3" name="service_advantages"></textarea>
                                <br><br>

                            <label>Portfolionun Kateqoriyası(Bu Sahəni boş buraxa bilərsiniz)</label>
                            <select name="service_port" class="form-control">
                                <option value="">Sec</option>
                                <?php foreach ($categories as $catg) {?>
                                    <option value="<?php echo $catg["name"];?>">
                                        <?php echo $catg["name"];?>
                                    </option>
                                <?php }?>
                            </select>

                            <br><br>

                            <label for="name">Servisin Şəkli</label>
                            <input id="image" type="file" class="form-control" name="service_img">
                            <br><br>


                                <button type="submit" class="btn btn-primary">Əlavə Et</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view("backend/includes_for_whole/footer");?>
<?php if($this->session->flashdata("error")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("error")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
