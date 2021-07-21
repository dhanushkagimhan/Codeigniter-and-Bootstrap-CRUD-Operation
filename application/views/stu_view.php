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
            <h2> Student Details Application </h2>
                
                <hr />
                
                <p> Welcome to student details application. You can register students to applicaton and see
                    registered students list in application.
                </p>
        </div>

        <div class="container m-5">
            <br /><br />
            <div class="row">
                <div class="m-3 col">
                    <a class="btn btn-outline-primary" href="http://localhost/RAD/index.php/student_data/savedata">Student Registration</a>
                </div>
                <div class="m-3 col">
                    <a class="btn btn-outline-primary" href="http://localhost/RAD/index.php/student_data/displaydata">Registered Students list</a>
                </div>
                <div class="col"></div>
            </div>
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