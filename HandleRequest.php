<?php 

require_once './Main.php';

$main = new Main();

if(isset($_POST['submit-data'])){
  $inserted_id = $main->registerUser($_POST);
  if($inserted_id !== false){
    echo "OK";
  }else{
    echo "Something went wrong. Please try again.";
  }

}
