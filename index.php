
<?php
  $name = "test";
  $value = 45;
  //$expire = echo time() + 3600;
  $expire = time() +(60*60*24*7);

  //setcookie($name, $value, $expire);
  //setcookie(in bowl);
 // setcookie("teine", "tere", time()+ 30);
  setcookie($name, null);
 //setcookie($name, $value, time() - 3600);
?>
<!DOCTYPE HTML>

<html>
   <head>
		<title>2. periood -8-praktikum</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
  
   </head>

<body>
<pre>
   <?php
 
      print_r($_COOKIE);
     /* 
      if (isset($_COOKIE["test"])) {
      $test = $_COOKIE ["test"];
      }else { test= "";
      }
*/
      $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
      echo $test;
?>



</pre>
</body>

</html>