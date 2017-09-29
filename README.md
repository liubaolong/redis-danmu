# redis-danmu
redis队列弹幕

index.html
请求队列中中的数据进行一个展示效果

根据html的发送的请求
通过ajkx异步发送请求

query.php
进行redis队列的链接
弹出弹幕数据
 
stone.php
接受ajkx传过来的值
将接收到的值压入队列中


感谢chiruom/jquery.danmu.js
