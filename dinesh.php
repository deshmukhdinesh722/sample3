<?php
  include("auth2.php"); //include auth.php file on all secure pages
  include("db.php");
  

?>

<?php
  $query  = mysqli_query($conn,"SELECT * from overtime");
  while($row=mysqli_fetch_array($query))
  {
    @$rate           = $row['rate'];
  }

  $query  = mysqli_query($conn,"SELECT * from salary");
  while($row=mysqli_fetch_array($query))
  {
    @$salary           = $row['salary_rate'];
  }

  

                    
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
          <b>Payroll and Management System</b>
          <a data-toggle="modal" href="#colins" class="pull-right"><b><?php echo $_SESSION['fname']; ?></b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            
            <li class="active">
              <a href="">Income</a>
            </li>
            
          
          </ul>
        </nav>
      </div>

        <br>
          <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>
              <center><h1 style="color:rgb(11, 52, 78)">Salary Details</h1><br></center>
                <div class="table-responsive">
                  <form method="post" action="" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <thead>
                        <tr class="info">
                          <th><p align="center">Name</p></th>
                          <th><p align="center">Id</p></th>
                          <th><p align="center">Deduction</p></th>
                          <th><p align="center">Overtime</p></th>
                          <th><p align="center">Bonus</p></th>
                          <th><p align="center">Net Pay</p></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $username=$_SESSION['fname'];

                        $query  = mysqli_query($conn,"SELECT * from salary");
                        while($row=mysqli_fetch_array($query))
                        {
                          $salary_rate   = $row['salary_rate'];
                        }
                        
                      
                    
                          $query  = mysqli_query($conn,"SELECT * from employee where fname='$username'");
                          while($row=mysqli_fetch_array($query))
                          {
                            $lname           = $row['lname'];
                            $fname           = $row['fname'];
                            $deduction       = $row['deduction'];
                            $overtime        = $row['overtime'];
                            $bonus           = $row['bonus'];

                            $id=$row['emp_id'];

                            $over     = $row['overtime'] * $rate;
                            $bonus     = $row['bonus'];
                            $deduction  = $row['deduction'];
                            $income   = $over + $bonus + $salary_rate;
                            $netpay   = $income - $deduction;
                        ?>
                        <tr>
                          <td align="center"><a href="update_password2.php"><?php echo $lname?> <?php echo $fname?></a></td>
                          <td align="center"><big><b><?php echo $id?></b></big></td>
                          <td align="center"><big><b><?php echo $deduction?></b></big>.00</td>
                          <td align="center"><big><b><?php echo $overtime?></b></big> hrs</td>
                          <td align="center"><big><b><?php echo $bonus?></b></big>.00</td>
                          <td align="center"><big><b><?php echo $netpay?></b></big>.00</td>
                        </tr>
                        <?php } ?>
                      </tbody>

                    </table>
                    <a class="btn btn-danger" href="delete2.php?emp_id=<?php echo $id; ?>">Leave Company</a>
                    
                  </form>
                          </fieldset>
                          <fieldset>
                </div>

                
              <!--Attendence -->
                <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>
              <center><h1 style="color:rgb(11, 52, 78)">Attendence Details</h1><br></center>
                <div class="table-responsive">
                  <form method="post" action="update_leave.php" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <tr class="info">
               

                        
               <th><p align="center">Username</p></th>
               <th><p align="center">Date</p></th>
               <th><p align="center">A/P</p></th>
              
             </tr>
         
                      <tbody>
                        <?php
                         $username=$_SESSION['fname'];

                        $query  = mysqli_query($conn,"SELECT * from salary");
                        while($row=mysqli_fetch_array($query))
                        {
                          $salary_rate   = $row['salary_rate'];
                        }
                        
                      
                    
                          $query  = mysqli_query($conn,"SELECT * from user2 where username='$username'");
                          while($row=mysqli_fetch_array($query))
                          {
                            $username         = $row['username'];
                            $date           = $row['date'];
                            $ap       = $row['A/P'];
                           
                            
                          

                       
                           
                      
                        ?>
                        <tr>
                          
                          <td align="center"><big><b><?php echo $username?></b></big></td>
                          <td align="center"><big><b><?php echo $date?></b></big></td>
                          <td align="center"><big><b><?php echo $ap?></b></big></td>
                    
                        </tr>
                        <?php } ?>
                      </tbody>
                          </fieldset>
                    </table>
                  </form>
                  
                </div>
                          </div>
                          <div class="well bs-component">
                            <form class="form-horizontal" action="delete2.php">
                              <fieldset>
             
            
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
              <h3 align="center"> <big>logged out as <?php echo $_SESSION['fname']; ?></big></b></h3>
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
              <h3 align="center">Enter Reason </h3>
              <form class="form-horizontal" action="leave2.php" name="form" method="post">
                <div class="form-group">
                    <input type="text" name="salary_rate" class="form-control"  required="required">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
     
  </body>
</html>