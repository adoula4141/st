<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['additional favorites'])) $oldAddedFavorites = explode(", ", $oldData[$raceNumber]['additional favorites']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldAddedFavorites)) $addedFavorites = $oldAddedFavorites;
    else $addedFavorites = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(count($favorites) < 3){
        if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    }
    else{
        if(!in_array($favorite, $addedFavorites) && !in_array($favorite, $favorites)) $addedFavorites[] = $favorite;
    }
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    if(!empty($addedFavorites))  {
        $racetext .= "\t\t'additional favorites' => '" . implode(", ", $addedFavorites) . "',\n"; 
    }
    $favorites = array_merge($favorites, $addedFavorites);
    sort($favorites);
    $max = max($favorites);
    $win = array_intersect($history[$raceNumber][$max]['win'], $runners);
    $racetext .= "\t\t'win hist(fav $max)' => '" . implode(", ", $win) . "',//count: " . count($win) . "\n"; 
   
    if(count($favorites) >= 3){
        $racetext .= "\t\t'qin/trio' => '" . implode(", ", $favorites) . "',\n";
    }
    $all = array_values(array_unique(array_merge($favorites, $win)));
    sort($all);
    $racetext .= "\t\t'all' => '" . implode(", ", $all) . "',//count: " . count($all) . "\n"; 
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldAddedFavorites);
    unset($addedFavorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
