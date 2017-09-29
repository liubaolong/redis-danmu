<?php 
   $redis = new Redis();
        $redis->connect("127.0.0.1",6379);
	echo json_encode($redis->lrange("danmu",0,-1));
