<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'inter(fav 6, fav 11)' => '7',
		'union' => '1, 7, 8, 11',
		'win/qqpl/trio' => '1, 6, 11',
		'win hist(fav 11)' => '4, 7, 8, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 4, fav 5)' => '5',
		'union' => '5, 7, 12',
		'win/qqpl/trio' => '2, 4, 5',
		'win hist(fav 5)' => '5, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'union' => '1, 8, 12',
		'win hist(fav 3)' => '1, 3, 7, 8, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'union' => '1, 3, 5, 9, 11',
		'win hist(fav 7)' => '1, 3, 5, 6, 9, 11, 13',
		'place' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'union' => '1, 2, 9',
		'win hist(fav 3)' => '1, 2, 3, 9, 10',
		'place' => '1',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 6, fav 8)' => '12',
		'union' => '1, 2, 4, 6, 12',
		'win/qqpl/trio' => '4, 6, 8',
		'win hist(fav 8)' => '1, 2, 3, 8, 12, 13',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5',
		'inter(fav 2, fav 3)' => '2, 11',
		'inter(fav 2, fav 5)' => '4, 11',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'union' => '2, 3, 4, 8, 11',
		'win/qqpl/trio' => '2, 3, 5',
		'win hist(fav 5)' => '3, 4, 5, 8, 11, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'inter(fav 3, fav 5)' => '3, 4',
		'win hist(fav 11)' => '',
	],
];
