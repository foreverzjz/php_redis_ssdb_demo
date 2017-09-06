<?php

/**
 * Redis
 * 字符串缓存实例
 * string cache
 * @author yuntianhe <yuntianhecloud@gmail.com>
 */

$redis = new Redis();
//短链接,host,默认端口为6379,超过1秒放弃链接
$redis->connect('127.0.0.1',6379,1);
//同上
$redis->open('127.0.0.1',6379,1);

//长链接,host,默认端口为6379,超过1秒放弃链接
$redis->pconnect('127.0.0.1',6379,1);
//同上
$redis->popen('127.0.0.1',6379,1);

//登录密码验证 返回true|false
$redis->auth('123456');

//redis共16个库0~15 选中DB2
$redis->select(2);

//释放资源,从Redis实例断开连接，除非使用pconnect
$redis->close();

//检查当前链接状态或者用于测量延迟值,返回PONG|一个连接错误(Could not connect to Redis at 127.0.0.1:6379: Connection refused)
$redis->ping();

//返回给定 key 的剩余生存时间(time to live)
//当 key 不存在时，返回 -2 。
//当 key 存在但没有设置剩余生存时间时，返回 -1 。
//否则，以秒为单位，返回 key 的剩余生存时间
$redis->ttl('key');

var_dump($redis);
