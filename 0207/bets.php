<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 7)' => '7',
		'inter(fav 6, fav 7)' => '7',
		'win hist(fav 7)' => '3, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 8',
		'inter(fav 4, fav 8)' => '3',
		'win hist(fav 8)' => '1, 2, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 11',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 3, fav 11)' => '6, 11',
		'union' => '3, 5, 6, 11',
		'win/qqpl/trio' => '1, 3, 11',
		'win hist(fav 11)' => '6, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 7',
		'inter(fav 1, fav 2)' => '1, 7',
		'inter(fav 1, fav 7)' => '1, 4, 7, 12',
		'inter(fav 2, fav 7)' => '1, 7, 8',
		'union' => '1, 4, 7, 8, 12',
		'win/qqpl/trio' => '1, 2, 7',
		'win hist(fav 7)' => '1, 4, 5, 7, 8, 12',
		'place' => '1',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8, 11',
		'inter(fav 8, fav 11)' => '12',
		'win hist(fav 11)' => '4, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '2, 3, 9',
		'union' => '2, 3, 9',
		'win hist(fav 3)' => '1, 2, 3, 9, 10',
		'place' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 11',
		'inter(fav 4, fav 11)' => '4, 9',
		'win hist(fav 11)' => '3, 4, 9',
		'place' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3, 5',
		'inter(fav 1, fav 3)' => '8, 10',
		'inter(fav 1, fav 5)' => '5, 8, 12',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'union' => '3, 5, 8, 10, 11, 12',
		'win/qqpl/trio' => '1, 3, 5',
		'win hist(fav 5)' => '3, 4, 5, 8, 11, 12',
	],
];
