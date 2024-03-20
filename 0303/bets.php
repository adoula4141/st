<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
		'Fav 5' => '1, 7, 8, 9, 12',
		'Fav 8' => '1, 2, 3, 10, 12',
		'union' => '1, 2, 3, 7, 8, 9, 10, 12',//count: 8
		'win' => '5, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 9',
		'Fav 6' => '1, 4, 12',
		'Fav 9' => '3, 7, 12',
		'union' => '1, 3, 4, 7, 12',//count: 5
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
		'Fav 4' => '3, 4, 9, 11',
		'union' => '3, 4, 9, 11',//count: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '6',
		'Fav 6' => '3, 4, 6, 7, 9',
		'union' => '3, 4, 6, 7, 9',//count: 5
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
		'Fav 6' => '1, 4, 6, 10, 11, 12',
		'Fav 7' => '1, 3, 5, 6, 9, 11, 13',
		'union' => '1, 3, 4, 5, 6, 9, 10, 11, 12, 13',//count: 10
		'win' => '6, 7, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'Fav 1' => '1, 2, 4, 5, 7, 8, 9',
		'union' => '1, 2, 4, 5, 7, 8, 9',//count: 7
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
		'Fav 4' => '1, 2, 4, 6, 7, 9, 12',
		'Fav 5' => '3, 4, 5, 7, 8, 10, 11',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'win' => '4, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
		'Fav 2' => '2, 4, 6, 11',
		'Fav 6' => '2, 3, 4, 6, 7',
		'union' => '2, 3, 4, 6, 7, 11',//count: 6
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
		'Fav 6' => '1, 4, 13',
		'union' => '1, 4, 13',//count: 3
	],
];
