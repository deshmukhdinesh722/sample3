<?php 

  include("db.php");
  include("auth.php");

  $id         = $_POST['id'];
  $lname      = $_POST['lname'];
  $fname      = $_POST['fname'];
  $password     = $_POST['password'];
  $gender     = $_POST['gender'];
  $division   = $_POST['division'];


  $sql = mysqli_query($conn,"UPDATE employee SET lname='$lname', fname='$fname', gender='$gender',password='$password', division='$division' WHERE emp_id='$id'");

  if ($sql)
  {
    ?>
    <script>
      alert('Employee successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
?>