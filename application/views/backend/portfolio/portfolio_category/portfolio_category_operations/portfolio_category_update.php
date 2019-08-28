<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Portfel Kateqoriyasının Əlavə Edilməsi</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <form action="<?php echo base_url("utech_admin_panel_portfolio_category_update_act/$portfolio_category[id]")?>" method="post">
                                <label for="name">Kateqoriyanın Adı <span style="color: red"> [Adı Yazarkən sözlərin arasında tire ("-") işarəsindən isdifadə edin əks halda saytin frontunda işləməyəcək!]</span> <span style="color: green">Məsələn: Veb-Dizayn</span></label>
                                <input id="name" type="text" class="form-control" name="category_name" value="<?php echo $portfolio_category["name"] ?>">
                                <br>

                                <button type="submit" class="btn btn-primary">Yenilə</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php echo $this->session->set_flashdata("old_category", $portfolio_category["name"])?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>