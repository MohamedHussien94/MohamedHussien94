 <?php
if (!empty($_POST["name"]) || !empty($_POST["e-mail"]) || !empty($_POST["number"]) ||!empty($_POST["message"]) || !empty($_POST["gender"]) || !empty($_POST["courses"])){

    echo " <h2> Your given Value </h2>". "<br>";
    if (!empty( $_POST['name'])) {
        echo $_POST['name'] ;
    }

if (!empty($_POST['e-mail'])) {
    echo  $_POST['e-mail'];}

if (!empty($_POST ['number'])) {
   
    echo  $_POST ['number'];
}

if (!empty($_POST['message'])) {
    echo $_POST['message'];
}


if (!empty($_POST ['gender'])) {
   echo  $_POST ['gender'];
}

if (!empty($_POST ['courses'])) {
    echo $_POST ['courses'];}
}


else{
        echo "required ";
    }
?>

<html>

<body>

 <form action = "<?php $_PHP_SELF ?>" method ="POST">

Name<input type ="text" name ="name" Required> <br><br>
<span style></span>

E-mail:<input type ="email" name ="e-mail" Required><br><br>
Group# <input type ="text" name ="number" Required><br><br>
class details: <textarea name="message" Required> </textarea><br><br>
Gender: <input type="radio" name="gender">male
<input type="radio" name="gender">female

<br><br>

Select courses:  <select name="courses"  multiple="multiple">
                    
                    <option value="PHP">PHP</option>
                    <option value="JavaScript"> JavaScript</option>
                    <option value="My SQL">My SQL </option>
                </select>
                <br><br>
Agree : <input type="checkbox"> 
<br><br>

<input type="submit">




</form>






</body>



</html>