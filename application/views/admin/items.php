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
        <div class="col-lg-12 col-lg-7">
            <table id="mese" class="table-responsive-xl dataTable">
                <thead>
                    <tr>
                        <!-- <th class="text-center">Photo</th> -->
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Color</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($items as $val) : ?>
                        <tr>
                            <!-- <td>
                                <center><img src="<?= base_url() ?>assets/admin/img/items/<?= $val['item_image'] ?>" style="object-fit: cover; width: 100px; height: 100px; border-radius: 25px; overflow: hidden;" alt="Card image cap">
                                    <br>
                                    <button class="btn btn-outline-dark btn-sm btn-block mt-2">Details</button>
                                </center>
                            </td> -->

                            <th class="text-center" style="vertical-align: middle;"><?= $no ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['item_name'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['item_size'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['item_color'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['item_price'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['category_name'] ?></td>
                            <td class="text-center" style="vertical-align: middle;"><?= $val['item_stock'] ?></td>
                            <td class="text-center" style="vertical-align: middle;">
                                <a href="#" data-toggle="modal" data-target="#ItemStockModal<?= $val['stock_id'] ?>"><i class="fa fa-history mr-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#DeleteItemModal<?= $val['stock_id'] ?>"><i class="fa fa-wrench mr-2"></i></a>
                                <a href="#" data-toggle="modal" data-target="#DeleteItemModal<?= $val['stock_id'] ?>"><i class="fa fa-trash mr-2"></i></a>
                                <br>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>



        <!-- <?php foreach ($items as $val) : ?>
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
        <?php endforeach ?> -->
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
                <div class="modal-body">Are you sure you want to delete item "<?= $val['item_name'] . ': ' . $val['item_color'] . ', ', $val['item_size'] ?>" ?</div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url() ?>admin/Auth/Signout">Delete Item</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php foreach ($items as $val) : ?>
    <!-- Delete Item Modal-->
    <div class="modal fade" id="ItemStockModal<?= $val['stock_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Stock History for <?= $val['item_name'] . ': ' . $val['item_color'] . ', ', $val['item_size'] ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs pull-right" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="incoming-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="true">Incoming</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="outcoming-tab" data-toggle="tab" href="#outcome" role="tab" aria-controls="outcome" aria-selected="false">Outgoing</a>
                                </li>

                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="income" role="tabpanel" aria-labelledby="income-tab">
                                    <div class="col-lg-12 col-lg-7">
                                        <table style="width: 100%;" class="table-responsive-xl">
                                            <thead>
                                                <tr>
                                                    <!-- <th class="text-center">Photo</th> -->
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Item</th>
                                                    <th class="text-center">Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($items as $val) : ?>
                                                    <tr>
                                                        <!-- <td>
                                <center><img src="<?= base_url() ?>assets/admin/img/items/<?= $val['item_image'] ?>" style="object-fit: cover; width: 100px; height: 100px; border-radius: 25px; overflow: hidden;" alt="Card image cap">
                                    <br>
                                    <button class="btn btn-outline-dark btn-sm btn-block mt-2">Details</button>
                                </center>
                            </td> -->
                                                    <tr>
                                                        <th class="text-center" style="vertical-align: middle;"><?= $no ?></td>
                                                        <td class="text-center" style="vertical-align: middle;"><?= $val['item_name'] ?></td>
                                                        <td class="text-center" style="vertical-align: middle;"><?= $val['item_size'] ?></td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <form action="">
                                            <div class="input-group mb-3 mt-5">
                                                <input type="number" min="1" class="form-control" placeholder="amount" aria-label="" aria-describedby="basic-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary" type="button"><i class="fa fa-plus mr-2"></i> Add Stock</button>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- <button class="btn btn-outline-dark btn-block mt-5"><i class="fa fa-plus mr-2"></i>Add Stock</button> -->
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="outcome" role="tabpanel" aria-labelledby="outcoming-tab">
                                    <div class="col-lg-12 col-lg-7">
                                        <table style="width: 100%;" class="table-responsive-xl">
                                            <thead>
                                                <tr>
                                                    <!-- <th class="text-center">Photo</th> -->
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Item</th>
                                                    <th class="text-center">Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($items as $val) : ?>
                                                    <tr>
                                                        <!-- <td>
                                <center><img src="<?= base_url() ?>assets/admin/img/items/<?= $val['item_image'] ?>" style="object-fit: cover; width: 100px; height: 100px; border-radius: 25px; overflow: hidden;" alt="Card image cap">
                                    <br>
                                    <button class="btn btn-outline-dark btn-sm btn-block mt-2">Details</button>
                                </center>
                            </td> -->
                                                    <tr>
                                                        <th class="text-center" style="vertical-align: middle;"><?= $no ?></td>
                                                        <td class="text-center" style="vertical-align: middle;"><?= $val['item_name'] ?></td>
                                                        <td class="text-center" style="vertical-align: middle;"><?= $val['item_size'] ?></td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url() ?>admin/Auth/Signout">Delete Item</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?php $this->load->view('admin/partials/footer'); ?>