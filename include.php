<?php
if (!defined ('MYSITE')){
    header("location:index.php");
    }
?>
<?php
session_start();
$_SESSION["day"] = "October 3";
$_SESSION["week"] = "Week 40";
$_SESSION["reading"] = "Psalms 74-78, Galatians 6, Ephesians 1";
$_SESSION["book"]=array(
"Psalms 74",
"Psalms 75",
"Psalms 76",
"Psalms 77",
"Psalms 78",
"Galatians 6",
"Ephesians 1");
$_SESSION["book1A"] = "../BRP/Ephesians/Eph 1.txt";
?>

 <h1>
        <?php echo $_SESSION["day"] . " " . $_SESSION["week"]; ?>
        </h1><br>
        <h4>
        <?php echo$_SESSION["reading"]; ?>
        </h4>

        <?php
                $handle =fopen($_SESSION["book1A"], "r"); 
                if(!$handle){
                echo "Could not open the file" ;
                }
                else {
                $chapter =(STRING) fread ($handle,2000000) ;
                fclose ($handle) ;
                echo $chapter;
                echo $_SESSION["arr1"];
                }
        ?>