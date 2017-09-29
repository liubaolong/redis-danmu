<?php 
  $danmu=$_POST['danmu'];
  $redis = new Redis();
  $redis->connect("127.0.0.1",6379);
  var_dump($danmu);
  $redis->set("name","danmu");
  var_dump($redis->lpush("danmu",$danmu));
?>


