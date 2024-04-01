<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
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
    <link rel="stylesheet" href="assets/css/login.css">

</head>


<body >


<br><br><br><br><br><br><br><br>
<center><div >
  <section id="content">
    <form >
      <h1>DYP TechKnow</h1>
      <div>
      <input type="submit" value="Admin Login" onclick="admin()" />
        <!-- <input type="text" placeholder="Username" required="" id="username" /> -->
      </div>
      <div>
      <input type="submit" value="Emp Login" onclick="emp()"/>
        <!-- <input type="password" placeholder="Password" required="" id="password" /> -->
      </div>
      <div>
      
        <!-- <a href="index.php">Back to Home</a> -->
        <!-- <a href="">Forgot password?</a> -->
      </div>
    </form><!-- form -->
  </section><!-- content -->
</div><!-- container -->
</center>
<script>

    function emp()
    {
        alert("ok");
        window.location.href='login.php';
    }
    function admin()
    {
        window.location.href='dinesh.php';
    }
</script>



  </body>
</html>