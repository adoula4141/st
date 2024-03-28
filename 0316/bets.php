<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
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
		'inter(fav 1, fav 10, R1)' => '1, 5, 8, 11',
		'inter(fav 1, fav 10, R4)' => '10',
		'inter(fav 1, fav 10, R5)' => '4',
		'inter(fav 1, fav 10, R6)' => '12',
		'inter(fav 1, fav 10, R7)' => '8',
		'inter(fav 1, fav 10, R8)' => '7',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'inter(fav 3, fav 10, R2)' => '10',
		'inter(fav 3, fav 10, R4)' => '4',
		'inter(fav 3, fav 10, R5)' => '4',
		'inter(fav 3, fav 10, R7)' => '3, 10',
		'inter(fav 3, fav 10, R8)' => '7',
		'inter(fav 3, fav 10, R9)' => '10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
		'inter(fav 4, fav 9, R1)' => '1',
		'inter(fav 4, fav 9, R2)' => '3',
		'inter(fav 4, fav 9, R3)' => '3',
		'inter(fav 4, fav 9, R4)' => '9, 11',
		'inter(fav 4, fav 9, R5)' => '1, 4',
		'inter(fav 4, fav 9, R6)' => '7',
		'inter(fav 4, fav 9, R8)' => '2, 4',
		'inter(fav 4, fav 9, R10)' => '11',
		'union' => '1, 2, 4, 9, 11',//count: 5
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
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
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'inter(fav 1, fav 6, R1)' => '1, 7',
		'inter(fav 1, fav 6, R2)' => '2, 6',
		'inter(fav 1, fav 6, R3)' => '1, 4',
		'inter(fav 1, fav 6, R4)' => '6, 10, 11',
		'inter(fav 1, fav 6, R5)' => '3, 4, 7',
		'inter(fav 1, fav 6, R6)' => '1, 12',
		'inter(fav 1, fav 6, R8)' => '6, 11',
		'inter(fav 1, fav 6, R9)' => '6, 7',
		'inter(fav 1, fav 6, R10)' => '1, 4',
		'inter(fav 1, fav 11, R1)' => '7, 8, 11',
		'inter(fav 1, fav 11, R3)' => '11',
		'inter(fav 1, fav 11, R4)' => '6, 11',
		'inter(fav 1, fav 11, R6)' => '12',
		'inter(fav 1, fav 11, R7)' => '5',
		'inter(fav 1, fav 11, R9)' => '12',
		'inter(fav 6, fav 11, R1)' => '7',
		'inter(fav 6, fav 11, R2)' => '8',
		'inter(fav 6, fav 11, R4)' => '6, 11',
		'inter(fav 6, fav 11, R6)' => '4, 12',
		'inter(fav 6, fav 11, R7)' => '6',
		'inter(fav 6, fav 11, R8)' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
		'inter(fav 4, fav 10, R1)' => '1, 4, 5, 10',
		'inter(fav 4, fav 10, R4)' => '4',
		'inter(fav 4, fav 10, R5)' => '2, 4',
		'inter(fav 4, fav 10, R6)' => '12',
		'inter(fav 4, fav 10, R7)' => '3, 8, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'inter(fav 4, fav 10, R9)' => '6',
		'union' => '3, 4, 7, 8, 9, 10',//count: 6
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'inter(fav 2, fav 6, R1)' => '1, 9',
		'inter(fav 2, fav 6, R2)' => '2, 5, 6, 8',
		'inter(fav 2, fav 6, R3)' => '1, 12',
		'inter(fav 2, fav 6, R4)' => '10, 12',
		'inter(fav 2, fav 6, R5)' => '7, 9',
		'inter(fav 2, fav 6, R6)' => '4, 10',
		'inter(fav 2, fav 6, R7)' => '6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 2, fav 12, R2)' => '6',
		'inter(fav 2, fav 12, R3)' => '2, 10, 12',
		'inter(fav 2, fav 12, R5)' => '2',
		'inter(fav 2, fav 12, R7)' => '5',
		'inter(fav 2, fav 12, R8)' => '2, 6',
		'inter(fav 2, fav 12, R10)' => '3',
		'inter(fav 6, fav 12, R2)' => '6',
		'inter(fav 6, fav 12, R3)' => '12',
		'inter(fav 6, fav 12, R5)' => '6',
		'inter(fav 6, fav 12, R6)' => '1, 11, 12',
		'inter(fav 6, fav 12, R7)' => '10',
		'inter(fav 6, fav 12, R8)' => '6',
		'inter(fav 6, fav 12, R11)' => '12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'inter(fav 4, fav 6, R1)' => '1',
		'inter(fav 4, fav 6, R2)' => '4, 5',
		'inter(fav 4, fav 6, R3)' => '4',
		'inter(fav 4, fav 6, R4)' => '4, 11',
		'inter(fav 4, fav 6, R5)' => '3, 4, 6, 7',
		'inter(fav 4, fav 6, R6)' => '6, 12',
		'inter(fav 4, fav 6, R7)' => '10',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'inter(fav 4, fav 6, R10)' => '4',
		'inter(fav 4, fav 6, R11)' => '12',
		'inter(fav 4, fav 7, R2)' => '7',
		'inter(fav 4, fav 7, R3)' => '3, 6, 11',
		'inter(fav 4, fav 7, R5)' => '1, 4, 7',
		'inter(fav 4, fav 7, R6)' => '3, 6',
		'inter(fav 4, fav 7, R7)' => '4, 7, 8',
		'inter(fav 4, fav 7, R8)' => '1, 4',
		'inter(fav 4, fav 7, R9)' => '6',
		'inter(fav 4, fav 7, R10)' => '11',
		'inter(fav 6, fav 7, R1)' => '7',
		'inter(fav 6, fav 7, R2)' => '2',
		'inter(fav 6, fav 7, R3)' => '12',
		'inter(fav 6, fav 7, R4)' => '10',
		'inter(fav 6, fav 7, R5)' => '4, 7',
		'inter(fav 6, fav 7, R6)' => '1, 6, 11',
		'inter(fav 6, fav 7, R8)' => '4',
		'inter(fav 6, fav 7, R9)' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'inter(fav 1, fav 5, R1)' => '1, 7, 8',
		'inter(fav 1, fav 5, R3)' => '5, 8, 10',
		'inter(fav 1, fav 5, R4)' => '2, 10',
		'inter(fav 1, fav 5, R5)' => '1, 3, 12',
		'inter(fav 1, fav 5, R7)' => '2, 5',
		'inter(fav 1, fav 5, R8)' => '5, 7, 11',
		'inter(fav 1, fav 5, R9)' => '5, 8, 12',
		'inter(fav 1, fav 5, R10)' => '4',
		'inter(fav 1, fav 7, R1)' => '7',
		'inter(fav 1, fav 7, R2)' => '2, 7',
		'inter(fav 1, fav 7, R3)' => '5, 11',
		'inter(fav 1, fav 7, R4)' => '10',
		'inter(fav 1, fav 7, R5)' => '1, 4, 7, 12',
		'inter(fav 1, fav 7, R6)' => '1, 3, 9, 13',
		'inter(fav 1, fav 7, R7)' => '2, 4, 7, 8',
		'inter(fav 1, fav 7, R8)' => '1, 5',
		'inter(fav 1, fav 7, R9)' => '6, 12',
		'inter(fav 5, fav 7, R1)' => '7',
		'inter(fav 5, fav 7, R3)' => '5, 7',
		'inter(fav 5, fav 7, R4)' => '7, 10',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R6)' => '6, 11',
		'inter(fav 5, fav 7, R7)' => '2',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'inter(fav 5, fav 7, R9)' => '12',
		'inter(fav 5, fav 7, R10)' => '8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'inter(fav 5, fav 10, R1)' => '1, 8, 9',
		'inter(fav 5, fav 10, R2)' => '10',
		'inter(fav 5, fav 10, R4)' => '4, 10',
		'inter(fav 5, fav 10, R7)' => '10',
		'inter(fav 5, fav 10, R8)' => '3, 4, 7, 10',
		'inter(fav 5, fav 10, R9)' => '11',
		'inter(fav 5, fav 10, R10)' => '5',
		'union' => '5, 10, 11',//count: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
		'inter(fav 7, fav 9, R1)' => '3',
		'inter(fav 7, fav 9, R3)' => '3, 7, 12',
		'inter(fav 7, fav 9, R4)' => '7',
		'inter(fav 7, fav 9, R5)' => '1, 4, 8',
		'inter(fav 7, fav 9, R6)' => '5',
		'inter(fav 7, fav 9, R8)' => '3, 4, 5',
		'inter(fav 7, fav 9, R9)' => '12',
		'inter(fav 7, fav 9, R10)' => '11',
		'inter(fav 7, fav 14, R6)' => '5',
		'inter(fav 7, fav 14, R7)' => '7',
		'inter(fav 9, fav 14, R4)' => '1',
		'inter(fav 9, fav 14, R6)' => '5',
		'union' => '',//count: 0
	],
];
