<?php 

if (isset($_GET['lang'])) {
}
else{
    $_GET['lang']='fr';
}

if ($_GET['lang']=='fr') {
include('fr-lang.php');
} 
else if ($_GET['lang']=='en') {
include('en-lang.php');
}     
else {
include('fr-lang.php');
}
?>