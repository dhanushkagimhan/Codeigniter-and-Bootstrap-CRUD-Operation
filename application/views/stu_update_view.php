<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stundent details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/main.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            
            <ul class="navbar-nav">
                <li class="nav-item">                    
                    <a class="nav-link" href="http://localhost/RAD/">Home</a>                    
                </li>
                <li class="nav-item">                    
                        <a class="nav-link" href="http://localhost/RAD/index.php/student_data/savedata">Student Registration</a>                    
                </li>
                <li class="nav-item">                    
                    <a class="nav-link" href="http://localhost/RAD/index.php/student_data/displaydata">Registered Students list</a>                    
                </li>
            </ul>
        </nav>

        <div class="container m-3">
            <h3>Student Details Update</h3>

            <hr />

            <?php
                foreach($data as $row){
            ?>

            <form method="post" name="userupdate">

                <div class="form-group">
                    <label for="uname"> Student Name: </label>
                    <input type="text" class="form-control" id="uname" value="<?php echo $row->name; ?>" name="name" required>
                </div>

                <div class="form-group">
                    <label for="uemail"> Student Email: </label>
                    <input type="text" class="form-control" id="uemail" value="<?php echo $row->email; ?>" name="email" required>
                </div>

                <div class="form-group">
                    <label for="upnum"> Student Phone Number: </label>
                    <input type="text" class="form-control" id="upnum" value="<?php echo $row->phone_num; ?>" name="pnum" required>
                </div>

                <input type="submit" class="btn btn-primary" name="update" value="Update">

            </form>

            <?php } ?>

        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">
                            Student Details Application
                        </h6>
                        <p>
                            You can add student to application and view, delete and update there data.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">
                            Contact
                        </h6>
                        <P>
                            'Gimahan',Nuge cross road, moreketiya, Embilipitiya.<br />
                            dhanushkagimhan@gmail.com<br />
                            0712345654<br />
                            0772376456
                        </p>
                    </div>
                </div>
                <div class="footer-copyright text-center">
                    &copy; 2020 Copyright: rad.com
                </div>
            </div>
        </footer>

        <script src="<?php echo base_url();?>bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>        
    </body>
</html>