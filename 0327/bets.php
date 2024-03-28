<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 11, 10',
		'inter(fav 6, fav 10, R1)' => '1, 9',
		'inter(fav 6, fav 10, R4)' => '4, 10',
		'inter(fav 6, fav 10, R5)' => '4',
		'inter(fav 6, fav 10, R6)' => '10, 12',
		'inter(fav 6, fav 10, R7)' => '10',
		'inter(fav 6, fav 10, R8)' => '4',
		'inter(fav 6, fav 10, R9)' => '6',
		'inter(fav 6, fav 11, R1)' => '7',
		'inter(fav 6, fav 11, R2)' => '8',
		'inter(fav 6, fav 11, R4)' => '6, 11',
		'inter(fav 6, fav 11, R6)' => '4, 12',
		'inter(fav 6, fav 11, R7)' => '6',
		'inter(fav 6, fav 11, R8)' => '4',
		'inter(fav 10, fav 11, R1)' => '4, 8, 11',
		'inter(fav 10, fav 11, R6)' => '12',
		'inter(fav 10, fav 11, R8)' => '3, 4, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 8',
		'inter(fav 5, fav 8, R1)' => '1, 12',
		'inter(fav 5, fav 8, R3)' => '8, 10',
		'inter(fav 5, fav 8, R5)' => '1, 5, 12',
		'inter(fav 5, fav 8, R7)' => '2',
		'inter(fav 5, fav 8, R8)' => '3, 8',
		'inter(fav 5, fav 8, R9)' => '5, 8',
		'inter(fav 5, fav 8, R10)' => '8',
		'union' => '1, 3, 5, 8, 10, 12',//count: 6
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7, 1',
		'inter(fav 1, fav 7, R1)' => '7',
		'inter(fav 1, fav 7, R2)' => '2, 7',
		'inter(fav 1, fav 7, R3)' => '11',
		'inter(fav 1, fav 7, R4)' => '10',
		'inter(fav 1, fav 7, R5)' => '1, 4, 7, 12',
		'inter(fav 1, fav 7, R6)' => '1, 3, 9',
		'inter(fav 1, fav 7, R7)' => '2, 4, 7, 8',
		'inter(fav 1, fav 7, R8)' => '1',
		'inter(fav 1, fav 7, R9)' => '6, 12',
		'union' => '1, 7, 10, 11',//count: 4
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '8, 11, 2',
		'inter(fav 2, fav 8, R1)' => '1, 2, 3',
		'inter(fav 2, fav 8, R2)' => '2',
		'inter(fav 2, fav 8, R3)' => '1, 2, 8, 10, 12',
		'inter(fav 2, fav 8, R5)' => '1, 2, 7, 8, 9',
		'inter(fav 2, fav 8, R6)' => '3, 8',
		'inter(fav 2, fav 8, R7)' => '2, 9',
		'inter(fav 2, fav 8, R8)' => '2',
		'inter(fav 2, fav 11, R1)' => '8, 11',
		'inter(fav 2, fav 11, R2)' => '8',
		'inter(fav 2, fav 11, R6)' => '4',
		'inter(fav 2, fav 11, R7)' => '5, 6',
		'inter(fav 2, fav 11, R8)' => '4',
		'inter(fav 8, fav 11, R3)' => '11',
		'inter(fav 8, fav 11, R4)' => '11',
		'inter(fav 8, fav 11, R6)' => '12',
		'inter(fav 8, fav 11, R8)' => '3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 1, 4',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R3)' => '1, 8',
		'inter(fav 1, fav 3, R4)' => '3, 5, 6, 11',
		'inter(fav 1, fav 3, R5)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 1, fav 3, R9)' => '8, 10',
		'inter(fav 1, fav 3, R10)' => '4',
		'inter(fav 1, fav 4, R1)' => '1, 5',
		'inter(fav 1, fav 4, R2)' => '7',
		'inter(fav 1, fav 4, R3)' => '2, 4, 8, 11',
		'inter(fav 1, fav 4, R4)' => '3, 11',
		'inter(fav 1, fav 4, R5)' => '1, 3, 4, 7',
		'inter(fav 1, fav 4, R6)' => '3, 7, 12',
		'inter(fav 1, fav 4, R7)' => '1, 4, 5, 7, 8',
		'inter(fav 1, fav 4, R8)' => '1, 6, 7',
		'inter(fav 1, fav 4, R9)' => '6, 7',
		'inter(fav 1, fav 4, R10)' => '4',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 4, R2)' => '4, 7, 12',
		'inter(fav 3, fav 4, R3)' => '3, 8',
		'inter(fav 3, fav 4, R4)' => '3, 4, 11',
		'inter(fav 3, fav 4, R5)' => '1, 3, 4, 7',
		'inter(fav 3, fav 4, R6)' => '3',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'inter(fav 3, fav 4, R8)' => '6, 7, 12',
		'inter(fav 3, fav 4, R9)' => '9',
		'inter(fav 3, fav 4, R10)' => '3, 4, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 3',
		'inter(fav 3, fav 5, R1)' => '1, 7',
		'inter(fav 3, fav 5, R2)' => '10',
		'inter(fav 3, fav 5, R3)' => '7, 8',
		'inter(fav 3, fav 5, R4)' => '4',
		'inter(fav 3, fav 5, R5)' => '1, 3, 12',
		'inter(fav 3, fav 5, R6)' => '11',
		'inter(fav 3, fav 5, R7)' => '2, 10',
		'inter(fav 3, fav 5, R8)' => '5, 7',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'inter(fav 3, fav 5, R10)' => '3, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6',
		'union' => '',//count: 0
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 10, 12',
		'additional favorites' => '9',
		'inter(fav 1, fav 10, R1)' => '1, 8, 11',
		'inter(fav 1, fav 10, R4)' => '10',
		'inter(fav 1, fav 10, R5)' => '4',
		'inter(fav 1, fav 10, R6)' => '12',
		'inter(fav 1, fav 10, R7)' => '8',
		'inter(fav 1, fav 10, R8)' => '7',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'inter(fav 1, fav 12, R2)' => '6',
		'inter(fav 1, fav 12, R3)' => '2, 10',
		'inter(fav 1, fav 12, R4)' => '3',
		'inter(fav 1, fav 12, R5)' => '12',
		'inter(fav 1, fav 12, R6)' => '1, 12',
		'inter(fav 1, fav 12, R8)' => '6',
		'inter(fav 1, fav 12, R9)' => '12',
		'inter(fav 10, fav 12, R1)' => '10',
		'inter(fav 10, fav 12, R2)' => '10',
		'inter(fav 10, fav 12, R5)' => '2',
		'inter(fav 10, fav 12, R6)' => '12',
		'inter(fav 10, fav 12, R7)' => '10',
		'union' => '1, 2, 10, 12',//count: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 4',
		'inter(fav 4, fav 11, R1)' => '4',
		'inter(fav 4, fav 11, R3)' => '11',
		'inter(fav 4, fav 11, R4)' => '11',
		'inter(fav 4, fav 11, R6)' => '12',
		'inter(fav 4, fav 11, R7)' => '5',
		'inter(fav 4, fav 11, R8)' => '4, 9',
		'union' => '4, 5, 11, 12',//count: 4
	],
];
