<?php 

  include("db.php");
  include("auth2.php");


  

  $name=$_POST['name'];
  $date=date('y-m-d', strtotime($_POST['attendence']));
  $ap=$_POST['ap'];

  $sql = mysqli_query($conn,"INSERT INTO user2 (`username`, `date`,`A/P`)  values ('$name','$date','$ap')");

  if ($sql)
  {
    ?>
    <script>
      alert('Attendence added successfully');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='add_attendence.php';
    </script>
    <?php 
  }
?>