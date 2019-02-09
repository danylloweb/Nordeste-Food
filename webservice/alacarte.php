<?php
include('conn.php');
header("Content-Type: application/json; charset=UTF-8",true);

$sql_alacarte = "SELECT * FROM prato p JOIN prato_categoria pc ON p.pra_prc_id = pc.prc_id";
$alacarte = mysqli_query($conexao,$sql_alacarte);
$resultado = array();
while($row = mysqli_fetch_assoc($alacarte)){
    $resultado[] = $row;
}

function utf8(array $array)
{
    array_walk_recursive($array, function(&$item, $key) {
        if(is_string($item) && ! mb_detect_encoding($item, 'utf-8', true)) {
            $item = utf8_encode($item);
        }
    });
 
    return $array;
}

echo json_encode(utf8($resultado));
//echo preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($resultado));

?>