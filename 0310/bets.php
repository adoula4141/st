<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'Fav 1' => '1, 5, 7, 8, 11',
		'Fav 6' => '1, 6, 7, 9',
		'Fav 11' => '4, 7, 8, 11',
		'union' => '1, 4, 5, 6, 7, 8, 9, 11',//count: 8
		'win' => '1, 6, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'Fav 4' => '3, 4, 5, 7, 12',
		'Fav 5' => '5, 10',
		'union' => '3, 4, 5, 7, 10, 12',//count: 6
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'Fav 2' => '1, 2, 8, 10, 12',
		'Fav 3' => '1, 3, 7, 8, 12',
		'union' => '1, 2, 3, 7, 8, 10, 12',//count: 7
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'Fav 5' => '2, 4, 7, 10, 12',
		'union' => '2, 4, 7, 10, 12',//count: 5
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'Fav 1' => '1, 3, 4, 7, 10, 12',
		'union' => '1, 3, 4, 7, 10, 12',//count: 6
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'Fav 3' => '1, 3, 5, 9, 11',
		'union' => '1, 3, 5, 9, 11',//count: 5
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'Fav 3' => '1, 2, 3, 9, 10',
		'union' => '1, 2, 3, 9, 10',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'Fav 6' => '4, 6, 11, 12',
		'Fav 8' => '1, 2, 3, 8, 12, 13',
		'union' => '1, 2, 3, 4, 6, 8, 11, 12, 13',//count: 9
		'win' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5, 10, 11',
		'Fav 2' => '2, 4, 6, 11',
		'Fav 3' => '2, 3, 8, 9, 10, 11',
		'Fav 5' => '3, 4, 5, 8, 11, 12',
		'Fav 10' => '1, 6, 10, 11',
		'union' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',//count: 11
		'win' => '2, 3, 5, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'Fav 3' => '3, 4, 6, 11',
		'Fav 5' => '3, 4, 5, 8',
		'union' => '3, 4, 5, 6, 8, 11',//count: 6
	],
];
