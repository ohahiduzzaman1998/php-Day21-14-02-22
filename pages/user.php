<?php include 'header.php';?>
    <section class="py-5 bg-success">
        <div class="col-form-label">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">All User Info</div>
                        <div class="card-body">


                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $user) { ?>
                                    <tr>
                                        <td><?php echo $user['id']?></td>
                                        <td><?php echo $user['name']?></td>
                                        <td><?php echo $user['email']?></td>
                                        <td><?php echo $user['password']?></td>
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