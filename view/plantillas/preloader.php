<?php
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
$_SESSION["pass"] == null)
{
    header("location:../../");
}
else
{
?>

<div class="loade">
    <div class="loading">
        <?php include_once("view/plantillas/smiep.html"); ?><br> <span class="loaded">Loading...</span>
    </div><br><br>
    <div class="loader"></div>
</div>
<?php
}?>