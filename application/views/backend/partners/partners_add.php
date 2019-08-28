<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>


<div class="page-content">


    <div class="content">
        <h1 class="c_title">Yeni Əməkdaşlıq</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row">

                        <form action="<?php echo base_url("utech_admin_panel_partners_add_act")?>" method="post" enctype="multipart/form-data">

                            <label for="name">Link</label>
                            <input id="name" type="text" class="form-control" name="link">
                            <br>


                            <label for="name">Əməkdaşlıq Şəkli</label>
                            <input id="image" type="file" class="form-control" name="img">
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
