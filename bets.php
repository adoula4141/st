<?php

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact;
}
function combination($p, $n){
    if($n < $p) return 0;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$total = 0;
$totalWin = 0;
$totalPlace = 0;
$totalQin = 0;
$totalTrio = 0;
$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$threes = include(__DIR__ . DIRECTORY_SEPARATOR . "threes.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

if(file_exists($oddsFile)) $numberOfRaces = count($allRacesOdds);
elseif(file_exists($outFile)) $numberOfRaces = count($oldData);
else die('No input Files!');

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
        if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
        if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    if(isset($winAmount)){
        $racetext .= "\t\t'win amount' => " . $winAmount . ",\n"; 
    }
    if(isset($qinAmount)){
        $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    }
    if(isset($trioAmount)){
        $racetext .= "\t\t'trio amount' => " . $trioAmount . ",\n"; 
    }
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $firstSet = true;
    $winCheck = [];
    $qinCheck = [];
    $trioCheck = [];
    foreach($favorites as $F){
        $winCandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $qinCandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
        $trioCandidates = array_intersect($history[$raceNumber][$F]["trio"], $runners);
        if(empty(array_diff($favorites, $winCandidates)) && count($favorites) >= 3) $winCheck[] = $F;
        if(empty(array_diff($favorites, $qinCandidates)) && count($favorites) >= 3) $qinCheck[] = $F;
        if(empty(array_diff($favorites, $trioCandidates)) && count($favorites) >= 3) $trioCheck[] = $F;
        if($firstSet) {
            $winInter = $winCandidates;
            $qinInter = $qinCandidates;
            $trioInter = $trioCandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $winCandidates);
            $qinInter = array_intersect($qinInter, $qinCandidates);
            $trioInter = array_intersect($qinInter, $trioCandidates);
        }
    }
    $winInter = array_intersect($favorites, $winInter);
    $qinInter = array_intersect($favorites, $qinInter);
    $trioInter = array_intersect($favorites, $trioInter);
    if(!empty($winCheck)) $racetext .= "\t\t'win check' => '" . implode(", ", $winCheck) . "',\n";
    if(!empty($qinCheck)) $racetext .= "\t\t'qin check' => '" . implode(", ", $qinCheck) . "',\n";
    if(!empty($trioCheck)) $racetext .= "\t\t'trio check' => '" . implode(", ", $trioCheck) . "',\n";
    $check = array_intersect($winCheck, $qinCheck, $trioCheck);
    if(!empty($check)) $racetext .= "\t\t'inter check' => '" . implode(", ", $check) . "',\n";
    
    $unitBet = 100;
    // if(!empty($check)){
    //     $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $check) . "',\n"; 
    //     $totalBets[$raceNumber] += 1 * $unitBet * count($check);
    //     $totalWin -= 1 * $unitBet * count($check);
    // }
    if(count($qinCheck) > 2){
        $racetext .= "\t\t'qin($20)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 20 * combination(2, count($favorites));
        $totalQin -= 20 * combination(2, count($favorites));
        $racetext .= "\t\t'trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 10 * combination(3, count($favorites));
        $totalTrio -= 10 * combination(3, count($favorites));
        $racetext .= "\t\t'win($" . $unitBet . ")' => '" . implode(", ", $favorites) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($favorites);
        $totalWin -= 1 * $unitBet * count($favorites);
        $set3 = array_slice($favorites, 1, 2);
        $racetext .= "\t\t'win($" . 1 * $unitBet . ")' => '" . implode(", ", $set3) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($set3);
        $totalWin -= 1 * $unitBet * count($set3);
    }
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $totalRace[$raceNumber] -= $totalBets[$raceNumber];
        $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
        // if(!empty($check)){
        //     if(!empty(array_intersect($check, array_slice($officialWin, 0, 1)))) {
        //         $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
        //         $racetext .= "\t\t'1 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
        //         $totalWin += ($unitBet / 10) * $winAmount;
        //     }
        // }
        if(count($qinCheck) >= 2){
            if(count(array_intersect($favorites, array_slice($officialWin, 0, 2))) === 2) {
                $totalRace[$raceNumber] += 2 * $qinAmount;
                $racetext .= "\t\t'3 won(qin bet)' => " . 2 * $qinAmount . ",\n";
                $totalQin += 2 * $qinAmount;
            }
            if(count(array_intersect($favorites, array_slice($officialWin, 0, 3))) === 3) {
                $totalRace[$raceNumber] += $trioAmount;
                $racetext .= "\t\t'4 won(trio bet)' => " . $trioAmount . ",\n";
                $totalTrio += $trioAmount;
            }
            if(!empty(array_intersect($favorites, array_slice($officialWin, 0, 1)))) {
                $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
                $racetext .= "\t\t'6 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
                $totalWin += ($unitBet / 10) * $winAmount;
            }
            if(isset($set3) && !empty(array_intersect($set3, array_slice($officialWin, 0, 1)))) {
                $totalRace[$raceNumber] +=  ($unitBet / 10) * $winAmount;  
                $racetext .= "\t\t'7 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";  
                $totalWin +=  ($unitBet / 10) * $winAmount;    
            }
        }
        $racetext .= "\t\t'total won in race' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($inter);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total trio: $totalTrio\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);