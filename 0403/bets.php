<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 12',
		'win hist(fav 12)' => '8, 10',//count: 2
		'all' => '3, 8, 10, 12',//count: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '10, 6',
		'win hist(fav 10)' => '10',//count: 1
		'all' => '6, 10',//count: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '10, 3, 11',
		'win hist(fav 11)' => '11',//count: 1
		'qin/trio' => '3, 10, 11',
		'all' => '3, 10, 11',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'additional favorites' => '12',
		'win hist(fav 12)' => '3',//count: 1
		'qin/trio' => '1, 2, 10, 12',
		'all' => '1, 2, 3, 10, 12',//count: 5
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 4',
		'win hist(fav 5)' => '1, 3, 5',//count: 3
		'all' => '1, 3, 4, 5',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 2',
		'win hist(fav 3)' => '1, 3, 5, 9',//count: 4
		'all' => '1, 2, 3, 5, 9',//count: 5
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '13, 10, 5',
		'additional favorites' => '8, 6',
		'win hist(fav 13)' => '',//count: 0
		'qin/trio' => '5, 6, 8, 10, 13',
		'all' => '5, 6, 8, 10, 13',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6, 7',
		'additional favorites' => '4',
		'win hist(fav 7)' => '1, 3, 4, 5',//count: 4
		'qin/trio' => '4, 5, 6, 7',
		'all' => '1, 3, 4, 5, 6, 7',//count: 6
	],
];
