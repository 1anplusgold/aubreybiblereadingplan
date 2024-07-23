<!-- <?php
session_start();
$_SESSION['user']= 1;
define('MYSITE',true);
?>
<?php
header("refresh: 86400;");
?> -->
<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>
<?php
include('header.php');
?>
<div>      
<h1 id="bit">English Standard version</h1>
</div>
<!-- start -->
      <!-- January -->

<div class="container-1" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>January</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('jan.php');?>
</div>
<div class="container-1" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>February</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('feb.php');?>
</div>
<div class="container-2" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>March</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('mar.php');?>
</div>
<div class="container-1" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>April</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('april.php');?>
</div>
<div class="container-1" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>May</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('may.php');?>
</div>
<div class="container-3" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>June</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('june.php');?>
</div>
<div class="container-3" id="add">  
        <div class="row"id="dtd" >  
        <div class="col" > 
            <h1>July</h1>
        </div></div>
            <?php include('days.php');?>
            <?php include('july.php');?>
</div>
<?php
  include('footer.php');
?>

   <script>
        $(document).ready(function() {
            function disableBack() {
                window.history.forward()
            }
            window.onload = disableBack();
            window.onpageshow = function(evt) {
                if (evt.persisted) disableBack()
            }
        });
    </script>
</body>
</html>
