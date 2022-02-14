<?php include 'header.php';?>
    <section class="py-5 bg-success">
        <div class="col-form-label">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">Search Result</div>
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
                            <?php if (isset($result['name'])) { ?>
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

                                    <tr>
                                        <td><?php echo $result['id']?></td>
                                        <td><?php echo $result['name']?></td>
                                        <td><?php echo $result['price']?></td>
                                        <td><?php echo $result['image']?></td>
                                    </tr>


                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <h1 class="text-danger text-center">Sorry......Not Found</h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php include 'footer.php';?>