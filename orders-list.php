<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Buy An Elephant</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/elephant.min.css" rel="stylesheet">

        <!-- Datatable styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.css"/>

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger " href="index.php#page-top">Buy An Elephant</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-info bg-white" href="index.php#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-info bg-white" href="index.php#contact">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger bg-info active" href="orders-list.php">Orders-list</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Orders-list Section -->
        <section id="orders-list" class="orders-list-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto text-center">
                        <h2>Orders list</h2>
                    </div>
                    <div class="col-lg-12 mx-auto text-center">
                        <a href="#" class = "btn btn-sm btn-create create_mem_id"  data-toggle = "modal" data-target="#create_modal" style="font-size:14px"><i class = "fa fa-plus"></i> Create new</a>
                    </div>
                    <table class = "table table-striped bg-info table-hover table-responsive" id="myTable">
                        <thead class="thead-default">
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email address</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'class.php';
                            $conn = new db_class();
                            $read = $conn->read();
                            while($fetch = $read->fetch_array()){ 
                            ?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['firstname']?></td>
                                <td><?php echo $fetch['lastname']?></td>
                                <td><?php echo $fetch['email']?></td>
                                <td><?php echo $fetch['phone']?></td>
                                <td><?php echo $fetch['message']?></td>
                                <td><?php echo $fetch['date']?></td>
                                <td><a href="#"class = "btn btn-sm btn-update update_mem_id" data-toggle = "modal" data-target = "#update_modal" name = "<?php echo $fetch['id']?>"><i class = "fa fa-edit"></i> Update</a> <a href="#" class = "btn btn-sm btn-delete del_mem_id" name = "<?php echo $fetch['id']?>" data-toggle = "modal" data-target="#del_modal"><i class = "fa fa-trash"></i> Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>	
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="del_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <center><h4 class = "text-danger">Are you sure you want to delete this record?</h4></center>
                    </div>
                    <div class="modal-footer">
                        <button type = "button" class="btn btn-update" data-dismiss="modal"><span class = "fa fa-remove"></span> No</button>
                        <button type = "button" class="btn btn-delete del_mem"><span class = "fa fa-trash"></span> Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class = "modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class = "text-success modal-title">Update Member</h3>
                    </div>
                    <form class="form-horizontal" role="form" method="post" action="update_mem_query.php">
                        <div class="modal-body update">

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-update btn-send"  value="Send message" name = "update"><span class = "fa fa-edit"></span> Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class = "modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class = "text-success modal-title">Create Member</h3>
                    </div>
                    <form class="form-horizontal" id="contact-form" role="form" method="post" action="create_from_orders_list.php">
                        <div class="modal-body create">


                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="create" class="btn btn-create btn-send " value="Send message" ><span class = "fa fa-save"></span> Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; Buy An Elephant 2017</p>
            </div>
        </footer>



        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!--        <script src="vendor/jquery/jquery.min.js"></script>-->
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <!-- Custom scripts for this template -->
        <script src="js/elephant.min.js"></script>

        <!-- DataTables JavaScript CDN-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.js"></script>

        <script type = "text/javascript">
            $(document).ready(function(){

                //Delete
                $('.del_mem_id').on('click', function(){
                    $id = $(this).attr('name');
                    $('.del_mem').on('click', function(){
                        window.location = "delete_mem.php?id=" + $id;
                    });
                });

                //Update
                $('.update_mem_id').on('click', function(){
                    $id = $(this).attr('name');

                    $('.update').load('mem_data.php?id=' + $id);
                });

                //Create
                $('.create').load('create_mem.php');

                //Use datatable pagination, search, sorting
                $('#myTable').DataTable();
            });

        </script>



    </body>

</html>
