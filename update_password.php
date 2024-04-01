<?php 

  include("db.php");
  include("auth2.php");

  $id         = $_POST['id'];
  $lname      = $_POST['lname'];
  $pass      = $_POST['pass'];
  $gender     = $_POST['gender'];
  $division   = $_POST['division'];
  $username=$_SESSION['username'];

  $sql = mysqli_query($conn,"UPDATE user2 SET password='$pass' WHERE username='$username'");

  if ($sql)
  {
    ?>
    <script>
      alert('Password changed successfully');
      window.location.href='dinesh.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='update_password2.php';
    </script>
    <?php 
  }
?>