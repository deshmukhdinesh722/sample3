<?php
  include("auth2.php"); //include auth.php file on all secure pages
  include("db.php");
  include("add_employee.php");

?>



<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title></title>

    <script>
      <!--
        var ScrollMsg= "Payroll and Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

    <link href="assets/must.png" rel="shortcut icon">
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="data:text/css;charset=utf-8," data-href="assets/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet"> -->
    <!-- <link href="assets/css/docs.min.css" rel="stylesheet"> -->
    <link href="assets/css/search.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

  <div class="container">
      <div class="masthead">
        <h3>
          <b><a href="index.php">Payroll and Management System</a></b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b>Admin</b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li>
              <a href="home_employee.php">Employee</a>
            </li>
            <li>
              <a href="home_deductions.php">Deduction/s</a>
            </li>
            <li  class="active"><a href="leave.php">Leave Application</a></li>
            <li >
              <a href="home_salary.php">Income</a>
            </li>
          </ul>
        </nav>
      </div>

        <br>
          <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>
            
                <div class="table-responsive">
                  <form method="post" action="" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <thead>
                        <tr class="info">
                        <th><p align="center">Id</p></th>
                          
                          <th><p align="center">Employee Name</p></th>
                          <th><p align="center">Reason</p></th>

                        </tr>
                      </thead>
                      <tbody>


                      
                        <?php
                      

                   
    
                    
                         
                           
                            $query  = mysqli_query($conn,"SELECT * from leave");
                          while($row=mysqli_fetch_array($query))
                          {
                           

                            $id=$row['id'];
                           $username   = $row['username'];
                            $reason     = $row['reason'];
                          }
                        ?>
                        <tr>
                        <td align="center"><big><b><?php echo $id?></b></big></td>
                         
                          <td align="center"><big><b><?php echo $username?></b></big></td>
                          <td align="center"><big><b><?php echo $reason?></b></big></td>
                        </tr>
                        <?php  ?>
                      </tbody>

                    </table>
                  </form>
                </div>
                <button type="button" data-toggle="modal" data-target="#overtime" class="btn btn-success" >Leave Company</button>
              </fieldset>
            </form>
          </div>

      

      

  <!-- this modal is for my Colins -->
  <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">
                    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"> <big>logged out as <?php echo $_SESSION['username']; ?></big></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout2.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/docs.min.js"></script> -->
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>
                          

      <!-- this modal is for OVERTIME -->
      <div class="modal fade" id="overtime" role="dialog">
        <div class="modal-dialog modal-sm">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">Your application sent to admin </h3>
            </div>
           
          </div>
        </div>
      </div>

  </body>
</html>