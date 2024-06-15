<?php

$favoritesWin = [];
$favoritesPlace = [];
$favoritesQin = [];
$favoritesTrio = [];
$smallestFavoriteWin = [];
$biggestFavoriteWin = [];
$smallestFavoritePlace = [];
$biggestFavoritePlace = [];
$place = [];
$placeKeys = [];
for($k = 1; $k <= 14; $k ++) $place[$k] = [];

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "condition.php";
$outtext = "<?php\n\n\n";

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['official win']) || empty($data['official win'])) continue;
            $favorites = array_filter(explode(", ", $data['favorites']));
            $runners = array_filter(explode(", ", $data['runners']));
            $winInter = array_filter(explode(", ", $data['win inter']));
            $qinInter = array_filter(explode(", ", $data['qin inter']));
            $winPivots = array_filter(explode(", ", $data['win pivots']));
            $qinPivots = array_filter(explode(", ", $data['qin pivots']));
            $trioPivots = array_filter(explode(", ", $data['trio pivots']));
            $expr =  count($favorites) * (count($winInter) + count($qinInter) + count($winPivots) + count($qinPivots) + count($trioPivots));
            $winners = array_filter(explode(", ", $data['official win']));
            if(in_array($winners[0], $favorites)){
                if(!isset($favoritesWin[$expr])) $favoritesWin[$expr] = true;
            }
            else $favoritesWin[$expr] = false;
            if(!empty(array_intersect($favorites, array_slice($winners, 0, 3)))){
                if(!isset($favoritesPlace[$expr])) $favoritesPlace[$expr] = true;
            }
            else $favoritesPlace[$expr] = false;
            if($winners[0] == $favorites[0]){
                if(!isset($smallestFavoriteWin[$expr])) $smallestFavoriteWin[$expr] = true;
            }
            else $smallestFavoriteWin[$expr] = false;
            if($winners[0] == end($favorites)){
                if(!isset($biggestFavoriteWin[$expr])) $biggestFavoriteWin[$expr] = true;
            }
            else $biggestFavoriteWin[$expr] = false;
            if(in_array($favorites[0], array_slice($winners, 0, 3))){
                if(!isset($smallestFavoritePlace[$expr])) $smallestFavoritePlace[$expr] = true;
            }
            else $smallestFavoritePlace[$expr] = false;
            if(in_array(end($favorites), array_slice($winners, 0, 3))){
                if(!isset($biggestFavoritePlace[$expr])) $biggestFavoritePlace[$expr] = true;
            }
            else $biggestFavoritePlace[$expr] = false;
            if(count(array_intersect($favorites, array_slice($winners, 0, 2))) === 2) {
                if(!isset($favoritesQin[$expr])) $favoritesQin[$expr] = true;
            }
            else $favoritesQin[$expr] = false;
            if(count(array_intersect($favorites, array_slice($winners, 0, 3))) === 3) {
                if(!isset($favoritesTrio[$expr])) $favoritesTrio[$expr] = true;
            }
            else $favoritesTrio[$expr] = false;
            for($k = 1; $k <= 14; $k++){
                if(in_array($k, array_slice($winners, 0, 3))){
                    if(!isset($place[$k][$expr])) $place[$k][$expr] = true;
                }
                else $place[$k][$expr] = false;
            }
        }
    }
}

for($k = 1; $k <= 14; $k++){
    foreach($place[$k] as $key => $value){
        if($value === false || empty($key)) unset($place[$k][$key]);
    }
}
foreach($favoritesWin as $key => $value){
    if($value === false || empty($key)) unset($favoritesWin[$key]);
}
foreach($favoritesPlace as $key => $value){
    if($value === false || empty($key)) unset($favoritesPlace[$key]);
}
foreach($favoritesQin as $key => $value){
    if($value === false || empty($key)) unset($favoritesQin[$key]);
}
foreach($favoritesTrio as $key => $value){
    if($value === false || empty($key)) unset($favoritesTrio[$key]);
}
foreach($smallestFavoriteWin as $key => $value){
    if($value === false || empty($key)) unset($smallestFavoriteWin[$key]);
}
foreach($biggestFavoriteWin as $key => $value){
    if($value === false || empty($key)) unset($biggestFavoriteWin[$key]);
}
foreach($smallestFavoritePlace as $key => $value){
    if($value === false || empty($key)) unset($smallestFavoritePlace[$key]);
}
foreach($biggestFavoritePlace as $key => $value){
    if($value === false || empty($key)) unset($biggestFavoritePlace[$key]);
}
$favoritesWinKeys = array_filter(array_keys($favoritesWin));
$favoritesPlaceKeys = array_filter(array_keys($favoritesPlace));
$favoritesQinKeys = array_filter(array_keys($favoritesQin));
$favoritesTrioKeys = array_filter(array_keys($favoritesTrio));
$biggestFavoriteWinKeys = array_filter(array_keys($biggestFavoriteWin));
$smallestFavoriteWinKeys = array_filter(array_keys($smallestFavoriteWin));
$biggestFavoritePlaceKeys = array_filter(array_keys($biggestFavoritePlace));
$smallestFavoritePlaceKeys = array_filter(array_keys($smallestFavoritePlace));
for($k = 1; $k <= 14; $k++){
    $placeKeys[$k] = array_filter(array_keys($place[$k]));
    sort($placeKeys[$k]);
}
sort($favoritesWinKeys);
sort($favoritesPlaceKeys);
sort($favoritesQinKeys);
sort($favoritesTrioKeys);
sort($smallestFavoriteWinKeys);
sort($biggestFavoriteWinKeys);
sort($smallestFavoritePlaceKeys);
sort($biggestFavoritePlaceKeys);
$outtext .= '$favoriteWin = ' . "['" . implode("', '", array_filter($favoritesWinKeys)) . "'];\n";
$outtext .= '$favoritePlace = ' . "['" . implode("', '", array_filter($favoritesPlaceKeys)) . "'];\n";
$outtext .= '$favoriteQin =' . " ['" . implode("', '", array_filter($favoritesQinKeys)) . "'];\n";
$outtext .= '$favoriteTrio =' . " ['" . implode("', '", array_filter($favoritesTrioKeys)) . "'];\n";
$outtext .= '$smallestFavoriteWin =' . " ['" . implode("', '", array_filter($smallestFavoriteWinKeys)) . "'];\n";
$outtext .= '$biggestFavoriteWin =' . " ['" . implode("', '", array_filter($biggestFavoriteWinKeys)) . "'];\n";
$outtext .= '$smallestFavoritePlace =' . " ['" . implode("', '", array_filter($smallestFavoritePlaceKeys)) . "'];\n";
$outtext .= '$biggestFavoritePlace =' . " ['" . implode("', '", array_filter($biggestFavoritePlaceKeys)) . "'];\n";
$outtext .= '$placeCondition' . " = [\n";
for($k = 1; $k <= 14; $k++) $outtext .= "\t$k => ['" . implode("', '", array_filter($placeKeys[$k])) . "'],\n";
$outtext .= "];\n";
$outtext .="\n?>\n";
file_put_contents($outFile, $outtext);
?>
