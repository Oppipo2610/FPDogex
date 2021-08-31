<?php
system('clear');
include('address.php');
$string = preg_replace('/\s+/', '', $address);

function findDuplicates($array)
{
    $counted = array_count_values($array);
    $dupes = [];
    $keys = array_keys($counted);
    foreach ($keys as $key)
    {   
        if ($counted[$key] > 1)
        {$dupes[] = $key;}
    }
    sort($dupes);
    return $dupes;
}


$val = explode(';', $string);
$cut = explode(';New_atas;', $string)[0];
$add = explode(';', $cut);
$dup = findDuplicates($val);

echo "🔻 Cek Duplikat \n";
print_r($dup);
/**
echo "👇👇👇 Copy from Here 👇👇👇 \n\n";
$st0 = count($add) - 26;
$n = 0;
echo "<?php \n";
echo "\$reff = [\n";
for($i = $st0; $i < count($add); $i++){
  echo $n." => [\n";
  echo "  'key' =>".'"",';
  echo "\n";
  echo "  'w' =>".'"'.$add[$i].'"';
  echo "\n ],\n";
  $n++;
}
echo "];\n\n";
//print_r($add);
echo "?>\n";
echo "\n\n 👆👆👆 FINiSh hErE 👆👆👆\n";
**/
?>