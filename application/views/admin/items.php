<?php $this->load->view('admin/partials/header', $header); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <nav class="navbar navbar-light bg-light" style="float: right;">
            <form class="form-inline">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button">Search</button>
                    </div>
                </div>
            </form>
        </nav>
    </div>


    <button class="btn btn-dark mb-4"><i class="fa fa-plus"></i> Add Items</button>

    <div class="row">
        <?php foreach ($items as $val) : ?>
            <div class="col-sm-4 pb-2">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url() ?>assets/admin/img/items/<?= $val['item_image'] ?>" style="object-fit: cover; width: 100%; height: 310px; overflow: hidden;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $val['item_name'] ?></h5>
                        <hr>
                        <table style="width: 100%;" class="mb-5">
                            <tr>
                                <td>size</td>
                                <td>:</td>
                                <td><?= $val['item_size'] ?></td>
                            </tr>
                            <tr>
                                <td>color</td>
                                <td>:</td>
                                <td><?= $val['item_color'] ?></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td><?= $val['item_price'] ?></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>:</td>
                                <td><?= $val['category_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td>:</td>
                                <td><?= $val['item_stock'] ?></td>
                            </tr>
                        </table>
                        <center>
                            <a href="#" class="btn btn-sm btn-outline-info mr-2"> Item Stock</a>
                            <a href="#" class="btn btn-sm btn-outline-primary mr-2">Edit Item</a>
                            <a href="#" data-toggle="modal" data-target="#DeleteItemModal<?= $val['stock_id'] ?>" class="btn btn-sm btn-outline-danger">Delete Item</a>
                        </center>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>



    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<?php foreach ($items as $val) : ?>
    <!-- Delete Item Modal-->
    <div class="modal fade" id="DeleteItemModal<?= $val['stock_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Item: <?= $val['item_name'] ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete item "<?= $val['item_name'].': '. $val['item_color'].', ',$val['item_size'] ?>" ?</div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url() ?>admin/Auth/Signout">Delete Item</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?php $this->load->view('admin/partials/footer'); ?>