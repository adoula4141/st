<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 4, 10',
		'official win' => '10, 13, 7',
		'inter' => '1, 4',
		'win inter' => '1, 4',
		'trio inter' => '1, 3, 4, 5, 6, 7, 9, 10, 12',
		'trio inter' => '1, 3, 4, 5, 6, 7, 9, 10, 12',//count: 9
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
		'win($20)' => '1, 4, 10',
		'win($20)' => '4, 10',
		'qin/trio($10)' => '1, 4, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 5, 10, 12',
		'official win' => '12, 2, 5',
		'trio inter' => '1, 5, 10, 12',//count: 4
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14',//count: 13
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 5',
		'official win' => '4, 9, 8',
		'inter' => '3, 4',
		'win inter' => '2, 3, 4',
		'trio inter' => '1, 2, 3, 4, 5, 8',
		'trio inter' => '1, 2, 3, 4, 5, 8',//count: 6
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9',//count: 9
		'win($20)' => '3, 4, 5',
		'win($20)' => '4, 5',
		'qin/trio($10)' => '3, 4, 5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 5, 9, 12',
		'official win' => '6, 5, 1',
		'trio inter' => '4, 6',//count: 2
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count: 13
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 6, 8',
		'official win' => '1, 10, 8',
		'trio inter' => '3, 4, 10, 12',//count: 4
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count: 13
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8',
		'official win' => '11, 8, 3',
		'trio inter' => '1, 2, 3, 5, 7, 9, 10, 11, 12',//count: 9
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 4, 5, 14',
		'official win' => '10, 11, 12',
		'trio inter' => '',//count: 0
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count: 13
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7',
		'official win' => '4, 6, 1',
		'trio inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count: 11
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count: 11
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '6',
		'official win' => '7, 8, 2',
		'trio inter' => '2, 3, 4, 5, 6, 8, 13',//count: 7
		'trio union' => '2, 3, 4, 5, 6, 8, 13',//count: 7
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 11',
		'official win' => '14, 1, 3',
		'trio inter' => '3',//count: 1
		'trio union' => '1, 2, 3, 4, 5, 8, 10, 11, 12, 13, 14',//count: 11
	],
];
