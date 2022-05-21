<?php
// create session 
session_start();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>
<html><body>
    <h2>hello </h2>
<?php
// if cond

if (isset($_SESSION['page_count'])) {
    # code...
    $_SESSION['page_count'] +=1;
$message=" Hello, visit this page number " ;
  echo ($message . $_SESSION ['page_count'] );


}else 
    
    $_SESSION['page_count'] =1;
    // echo "sorry ";

// unset($_SESSION['page_count']);
?>

</body>
</html>






