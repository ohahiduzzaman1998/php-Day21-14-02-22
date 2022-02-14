<?php include 'header.php';?>
<section class="py-5 bg-success">
    <div class="col-form-label">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">All Product Info</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success">
                                        <i class="fa fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <td><?php echo $product['id']?></td>
                                    <td><?php echo $product['name']?></td>
                                    <td><?php echo $product['price']?></td>
                                    <td>
                                        <img src="assets/img/<?php echo $product['image']?>" height="50"/>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'footer.php';?>
