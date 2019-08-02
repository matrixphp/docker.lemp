<? 

$redis=new Redis();
$redis->connect($_SERVER['REMOTE_ADDR'], 6379);
$redis->set('admin', 'SU');
echo $redis->get('admin');

