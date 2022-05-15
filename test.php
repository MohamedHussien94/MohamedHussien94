<?php 

if (!empty( $_POST["name"])) {
    echo $_POST["name"] ;
}
else{
    echo "required ";
}


?>
<html><body>
<form action = "<?php $_PHP_SELF ?>" method ="POST">
Name<input type ="text" name ="name">

<br>
<input type="submit">
</form>


</body></html>