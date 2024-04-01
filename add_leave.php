

<?php 

  include("db.php");
  include("auth2.php");


  $username=$_SESSION['username'];
  $reason = $_POST['reason'];
  $id = $_POST['id'];

  

  $sql = mysqli_query($conn,"INSERT INTO leave (id,username, reason)VALUES('$id','$username','$reason')");

  if ($sql)
  {
    ?>
    <script>
      alert('Leave Application sent successfully');
      window.location.href='dinesh.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='dinesh.php';
    </script>
    <?php 
  }
?>