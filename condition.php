<?php


$favoriteWin = ['00111', '00144', '00233', '00234', '00334', '00455', '01000', '01002', '01011', '01133', '01144', '01233', '01244', '01344', '01444', '01555', '02123', '02234', '02444', '02445', '02455', '02555', '03133', '03244', '03255', '03455', '04223', '04233', '04245', '04333', '04555', '04566', '05334', '11233', '12234', '12555', '13012', '13112', '13233', '13234', '13344', '13355', '13444', '14002', '14012', '14111', '14122', '14133', '14234', '14344', '14444', '14455', '15111', '17223', '22133', '23444', '24022', '24233', '24333', '25011', '25111', '25112', '25133', '25334', '25555', '26012', '26222', '27333', '28122', '34033', '34122', '34222', '35011', '35112', '36000', '36011', '36123', '36223', '37223', '37333', '45001', '45333', '46023', '46233', '47000', '47122', '47222', '47223', '48111', '56333', '57222', '58011', '67000', '67122', '68222', '99000', '510012', '810000'];
$favoriteQin = ['00233', '00334', '00455', '01144', '01233', '01344', '02123', '02445', '02555', '03244', '03255', '03455', '04555', '12234', '12555', '13234', '13344', '14234', '14344', '17223', '23444', '24022', '25011', '25112', '27333', '34033', '35112', '37223', '45333', '46023', '46233', '47223', '56333', '510012'];
$favoriteTrio = ['00233', '00334', '00455', '01344', '02445', '02555', '03255', '12234', '12555', '14234', '14344', '37223', '47223'];
$smallestFavoriteWin = ['01000', '01133', '01344', '01555', '02444', '02445', '03133', '03244', '04333', '12234', '13012', '13112', '13234', '14111', '14122', '14234', '17223', '22133', '24022', '25011', '25112', '26012', '26222', '28122', '34033', '35011', '36000', '36011', '36123', '36223', '45001', '46023', '46233', '47000', '47222', '48111', '56333', '57222', '67000', '68222', '99000', '810000'];
$biggestFavoriteWin = ['01011', '01144', '01233', '01444', '02455', '04233', '11233', '14002', '14344', '15111', '24233', '25133', '34122', '34222', '36000', '37223', '47000', '47122', '58011', '67000', '67122', '99000', '510012', '810000'];
$smallestFavoritePlace = ['00001', '00022', '00144', '00233', '00334', '01000', '01023', '01113', '01133', '01144', '01222', '01344', '01455', '01555', '02111', '02444', '02445', '03133', '03244', '04333', '11234', '12111', '12234', '12333', '13012', '13112', '13133', '13234', '14111', '14122', '14133', '14234', '14344', '17223', '22133', '23011', '23123', '23344', '23444', '24000', '24022', '24222', '25011', '25012', '25112', '26012', '26222', '27111', '27333', '28122', '34033', '34111', '35011', '35111', '35112', '36000', '36011', '36122', '36123', '36223', '37222', '37223', '38122', '45001', '45112', '45333', '46000', '46023', '46112', '46233', '47000', '47222', '47223', '48111', '49233', '56333', '57222', '58000', '58112', '67000', '67122', '68222', '69000', '99000', '510012', '611122', '810000', '910000', '911000'];
$biggestFavoritePlace = ['00334', '00455', '00666', '01002', '01011', '01113', '01144', '01233', '01344', '01444', '02123', '02233', '02444', '02455', '03255', '04233', '11022', '11233', '12222', '12234', '12555', '14002', '14144', '14234', '14244', '14344', '15111', '16001', '16333', '22111', '22344', '23222', '24000', '24022', '24222', '24233', '25011', '25012', '25112', '25133', '26233', '27122', '27333', '34111', '34122', '34222', '34333', '35112', '35223', '36000', '36001', '36002', '36123', '36333', '37222', '37223', '37333', '38133', '46000', '46111', '46222', '46233', '47000', '47112', '47122', '47223', '47333', '49022', '56333', '57222', '58000', '58011', '58112', '58122', '67000', '67122', '69000', '69111', '78222', '99000', '510012', '511122', '810000', '910000', '911000'];
$placeCondition = [
	1 => ['00666', '01023', '01113', '01133', '01334', '01344', '01455', '01555', '02233', '02444', '02777', '03113', '03133', '03233', '03244', '03333', '04333', '04555', '12333', '13112', '14111', '14122', '15111', '16001', '16333', '22133', '23344', '23444', '24022', '25555', '26222', '36011', '37223', '38122', '38133', '45001', '46023', '47000', '47222', '56333', '57222', '58000', '58111', '58122', '67000', '67122', '69111', '611122', '810000', '910000'],
	2 => ['00022', '00144', '01002', '02222', '02445', '03244', '04223', '04245', '04566', '11000', '12111', '13012', '14234', '14344', '15333', '17223', '22111', '23011', '24000', '24123', '24333', '26222', '34111', '34333', '36001', '36002', '36123', '36223', '37222', '37223', '45333', '46233', '58011', '58112', '68222', '69000'],
	3 => ['00022', '00455', '01023', '01444', '02111', '02123', '02222', '02455', '02555', '03133', '03455', '11234', '12111', '12234', '12344', '12555', '13133', '14122', '14133', '14144', '14455', '15233', '16011', '17223', '23011', '23444', '24222', '25011', '25112', '25133', '25555', '26111', '27111', '27233', '34111', '34222', '35111', '35233', '36000', '36011', '37222', '45233', '45333', '46023', '46111', '46112', '47122', '47223', '47233', '48111', '49233', '57222', '67122', '68222', '77000', '78222', '99000', '510012', '910000'],
	4 => ['00334', '01011', '01133', '01144', '01222', '01555', '02222', '02233', '02445', '04333', '04555', '04566', '11000', '11022', '13111', '13133', '13234', '14002', '14111', '14144', '14234', '15133', '16001', '22133', '23011', '23222', '24000', '24022', '24222', '24233', '25012', '25112', '25334', '26012', '27111', '27112', '28122', '35011', '36223', '37223', '45233', '46000', '46012', '46112', '47111', '47112', '47223', '48111', '56111', '56333', '58112', '58122', '59222', '67222', '910000', '911000'],
	5 => ['00233', '00666', '01233', '01334', '01455', '02111', '02445', '02777', '03113', '03255', '03455', '04233', '05334', '11234', '12333', '13111', '13112', '13233', '14122', '14344', '15344', '24022', '24123', '26012', '26111', '34122', '35011', '35111', '36000', '36001', '46023', '46111', '47233', '47333', '49122', '69000', '78000', '511122', '610000'],
	6 => ['01133', '01144', '01222', '01233', '01455', '03233', '04245', '04555', '11233', '11234', '12333', '12555', '14002', '14133', '14234', '14244', '14333', '15333', '16011', '24000', '25111', '25555', '27112', '34033', '34111', '34122', '35011', '35222', '35233', '36011', '45001', '45333', '47000', '47112', '47223', '49022', '67000', '69000', '69111', '77000', '510012', '610000', '911000'],
	7 => ['00233', '01002', '01244', '01334', '01344', '02777', '03233', '03244', '03255', '03455', '04566', '11233', '12234', '13012', '13112', '13234', '14012', '14133', '14244', '15111', '15233', '15344', '15444', '23222', '24233', '25011', '26222', '34033', '34222', '34333', '35111', '35112', '36002', '46233', '47112', '47233', '49022', '56111', '57222', '58011', '810000'],
	8 => ['00455', '01000', '01002', '01244', '02444', '03113', '12555', '13233', '13344', '13444', '14111', '14144', '14455', '15444', '16011', '23344', '24123', '24222', '25133', '25334', '28122', '34222', '35223', '36001', '37222', '45001', '47000', '47222', '47333', '56111', '56333', '58000', '67122', '69111', '78222', '99000', '511122', '611122'],
	9 => ['00144', '00455', '01011', '01244', '03133', '04245', '05334', '11000', '12111', '12122', '12344', '13355', '15011', '22133', '22344', '24233', '25133', '25334', '26012', '27111', '34033', '34122', '34333', '35222', '38133', '45233', '46111', '46233', '47111', '47333', '49233', '78222'],
	10 => ['00022', '00144', '00233', '00334', '01000', '01023', '01444', '02123', '02444', '04233', '04333', '05334', '11022', '12234', '13133', '13234', '14012', '14244', '15111', '15333', '22344', '25011', '25012', '25112', '28122', '36000', '46112', '47122', '48111', '49022', '49233', '58122', '99000', '511122', '610000'],
	11 => ['00333', '00334', '01113', '01233', '01444', '02111', '02455', '03255', '11022', '11233', '13222', '13233', '15233', '16001', '22111', '22344', '23222', '26111', '27112', '35222', '35223', '35233', '36123', '36223', '38133', '46012', '47111', '47122', '58000', '58112', '67000', '68222', '611122', '911000'],
	12 => ['00333', '00345', '00666', '01113', '01144', '01222', '01344', '01555', '02123', '02233', '02455', '04233', '13111', '14002', '14344', '15022', '15344', '15444', '22111', '23344', '23444', '25012', '36002', '36123', '46012', '77000', '510012', '810000'],
	13 => ['01000', '13012', '14012'],
	14 => ['01011', '14455', '17223', '35223', '58011'],
];

?>
