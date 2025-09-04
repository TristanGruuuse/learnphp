<?php
$num = 10;
if ($num > 5) {
    var_dump('Bigger then 5');
} elseif ($num === 5){
var_dump('Equal to 5');
} else {
    var_dump('Smaller then 5');
}

$day = (int) date('N', strtotime('07.09.2025'));
var_dump($day);

if ($day == 1){
    var_dump ('Esmaspäev');
}else if ($day == 1){
    var_dump ('Teisipäev');
}
else if ($day == 1){
    var_dump ('Kolmapäev');
}
else if ($day == 1){
    var_dump ('neljapäev');
}
else if ($day == 1){
    var_dump ('Reede');
}
else if ($day == 1){
    var_dump ('Laupäev');
}
else if ($day == 1){
    var_dump ('Pühapäev');
}

switch($day){
    case 1:
        var_dump ('Esmaspäev');
    case 2:
        var_dump ('Teisipäev');
    case 3:
        var_dump ('Kolmapäev');
    case 4:
        var_dump ('neljapäev');
    case 5:
        var_dump ('Reede');
    case 6:
        var_dump ('Laupäev');
    case 7:
        var_dump ('Pühapäev');

}









