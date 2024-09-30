<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 13, 7, 14',
		'suggestions' => [
			'win' => '1, 4',
			'qin' => '1, 4, 10',
			'trio' => '1, 2, 4, 5, 10, 12',//count trio: 6
			'diff' => '2, 5, 10, 12',//count diff: 4
			'inter' => '10',//count inter: 1
		],
		'win amount' => 42,
		'qin amount' => 250,
		'trio amount' => 513,
		'place amount' => [
			10 => 15.5,
			13 => 39,
			7 => 20.5,
		],
		'win inter' => '4',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 5, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '12, 2, 5, 6',
		'suggestions' => [
			'win' => '5, 6, 7, 10, 13',
			'qin' => '1, 5, 6, 7, 9, 10, 11, 13, 14',
			'trio' => '1, 2, 5, 6, 7, 9, 10, 11, 12, 13, 14',//count trio: 11
			'diff' => '1, 2, 9, 11, 12, 14',//count diff: 6
			'inter' => '2, 12',//count inter: 2
		],
		'win amount' => 63,
		'qin amount' => 232.5,
		'trio amount' => 257,
		'place amount' => [
			12 => 24,
			2 => 24,
			5 => 17,
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '4, 9, 8, 5',
		'suggestions' => [
			'win' => '2, 5, 7, 9',
			'qin' => '2, 4, 5, 7, 8, 9',
			'trio' => '2, 4, 5, 7, 8, 9',//count trio: 6
			'diff' => '4, 8',//count diff: 2
			'inter' => '4',//count inter: 1
		],
		'win amount' => 20.5,
		'qin amount' => 113.5,
		'trio amount' => 744,
		'place amount' => [
			4 => 12,
			9 => 23,
			8 => 80,
		],
		'win inter' => '2, 5, 7, 9',
		'allValues' => '1, 3, 6, 7',
		'bets' => [
			'place(end-favorites , $100)' => '5',
		],
		'total bets' => 100,
		'total won in race 3' => -100,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 5, 9, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 5, 1, 3',
		'suggestions' => [
			'win' => '1, 4, 6, 12',
			'qin' => '1, 2, 4, 5, 6, 7, 8, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12, 13',//count trio: 11
			'diff' => '2, 3, 5, 7, 8, 10, 13',//count diff: 7
			'inter' => '3, 5',//count inter: 2
		],
		'win amount' => 77.5,
		'qin amount' => 194,
		'trio amount' => 376,
		'place amount' => [
			6 => 25,
			5 => 22,
			1 => 18.5,
		],
		'win inter' => '',
		'allValues' => '1, 2, 4, 5',
		'bets' => [
		],
		'total bets' => 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 10, 8, 12',
		'suggestions' => [
			'win' => '2, 4, 8, 12',
			'qin' => '2, 4, 6, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 6, 8, 10, 11, 12',//count trio: 9
			'diff' => '1, 3, 6, 10, 11',//count diff: 5
			'inter' => '1, 6',//count inter: 2
		],
		'win amount' => 47.5,
		'qin amount' => 270,
		'trio amount' => 917,
		'place amount' => [
			1 => 19,
			10 => 34,
			8 => 32,
		],
		'win inter' => '',
		'allValues' => '1, 3, 4, 6, 7, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 8, 3, 2',
		'suggestions' => [
			'win' => '2, 3, 5, 6, 9',
			'qin' => '2, 3, 5, 6, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 8, 9, 10, 11, 12',//count trio: 10
			'diff' => '1, 8, 10, 11, 12',//count diff: 5
			'inter' => '8',//count inter: 1
		],
		'win amount' => 233.5,
		'qin amount' => 703,
		'trio amount' => 3613,
		'place amount' => [
			11 => 62.5,
			8 => 18,
			3 => 44.5,
		],
		'win inter' => '5, 6, 9',
		'allValues' => '',
		'bets' => [
			'place(end-favorites , $100)' => '8',
			'1 won(place bet)' => 180,
		],
		'total bets' => 100,
		'total won in race 6' => 80,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 4, 5, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 11, 12, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 6, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 14',//count trio: 10
			'diff' => '4, 5, 9, 10, 14',//count diff: 5
			'inter' => '4, 5, 14',//count inter: 3
		],
		'win amount' => 119,
		'qin amount' => 557,
		'trio amount' => 1118,
		'place amount' => [
			10 => 33.5,
			11 => 26,
			12 => 27,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 6, 1, 7',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',//count inter: 0
		],
		'win amount' => 121,
		'qin amount' => 401.5,
		'trio amount' => 613,
		'place amount' => [
			4 => 23.5,
			6 => 23.5,
			1 => 22,
		],
		'win inter' => '1, 3, 4, 5, 6, 7, 11, 12',
		'allValues' => '3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '7, 8, 2, 6',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',//count inter: 0
		],
		'win amount' => 77,
		'qin amount' => 976,
		'trio amount' => 4346,
		'place amount' => [
			7 => 25.5,
			8 => 64,
			2 => 41.5,
		],
		'win inter' => '2, 4, 6, 7, 8, 9, 11, 12',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '14, 1, 3, 10',
		'suggestions' => [
			'win' => '4, 11, 12',
			'qin' => '3, 4, 5, 9, 11, 12',
			'trio' => '3, 4, 5, 9, 10, 11, 12',//count trio: 7
			'diff' => '3, 5, 9, 10',//count diff: 4
			'inter' => '3',//count inter: 1
		],
		'win amount' => 120,
		'qin amount' => 1102.5,
		'trio amount' => 788,
		'place amount' => [
			14 => 29,
			1 => 57,
			3 => 10.1,
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: -20
//total major place wp: 0
//total sure place: 0
//total: -20
