
<?php
session_start();
$_SESSION['user']= 0;
if($_SESSION['sess_user']=0)
{
 session_unset();
        session_destroy();
        header("Location:index.php");
    
}


define('MYSITE',true);

?>
<!DOCTYPE html>
<html lang="en">
<?php

include ('head.php');
include ('header.php');


// In PHP, you can do it like this,

if(isset($_GET['type'])){
   $type = $_GET['type'];   // get the type from the url
   $people_json = file_get_contents('esvjsonv2.json');
   $queries = json_decode($people_json, false);
   $query = $queries->ESV;
   $people = file_get_contents('array.json');
   $quers = json_decode($people, false);
   $que = $quers->$type->Book;
   $qued = $quers->$type;
}

?>
<body>
<div class="container-fluid" id="title">
       <div class="row">
       <H4>
        <?php
        foreach ($qued as $keyes => $valued) {
        if ($keyes!="Book"){
        echo " ".$keyes ."_" ." ". $valued. " ";                             
        }  
        }
        foreach ($que as $keys=>$val) {
                echo $keys . ", ";
       }    
        ?>
        <H4>
        </div>
</div>
<div class="container-fluid" id="bod">
<div class="row"id="dod">
<?php
foreach ($query as $key => $value) {
        foreach ($que as $keys => $values) {
                $bn="$keys";
                $ch ="$values"; 
                $VR = "1";
        if ($value->VERSE == $VR && $value->BOOKNAME == $bn) {
        ?>
        <H2>      
        <?php ECHO $value->BOOKNAME1 . " " . $value->CHAPTER. "<br/><br/>";
        }
        ?>
        </H2>
        <?php  
        if($value->BOOKNAME == $bn && $value->CHAPTER == $ch)
        { 
        ?>
        <div class="col-sm-1" id="col1">
        <H5> 
        <?php echo $value->VERSE ."<br/><br/>";?>
        </H5>
        </div>
        <div class="col-sm-11">
        <H5>
        <?php echo $value->MESSAGE ."<br/><br/>";?>
        </H5>
        </div>
        <?php  
        }
        }  
}
?>
</div>
</div>
<div class="container">
        <div class="list-group">
            <div class="row" id="dad">
            <a id="asks4" href="index.php" class="btn btn-primary" >Complete   <?php ECHO $_SESSION["day"];?></a>
            </div>
        </div>
</div>
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


