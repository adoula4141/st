<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 7, 12, 11',
		'suggestions' => [
			'win' => '1, 3, 5, 7',
			'qin' => '1, 3, 4, 5, 6, 7, 8, 9, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 13',//count trio: 11
			'diff' => '10, 11, 14',//count diff: 3
			'inter' => '',//count inter: 0
		],
		'win amount' => 25.5,
		'qin amount' => 99,
		'trio amount' => 149,
		'place amount' => [
			1 => 12.5,
			7 => 18.5,
			12 => 24.5,
		],
		'win inter' => '',
		'allValues' => '5, 7, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 13, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 9, 2, 6',
		'suggestions' => [
			'win' => '2, 4, 7, 12, 13',
			'qin' => '1, 2, 4, 7, 9, 12, 13, 14',
			'trio' => '1, 2, 4, 5, 7, 9, 11, 12, 13, 14',//count trio: 10
			'diff' => '3, 6, 8, 10',//count diff: 4
			'inter' => '10',//count inter: 1
		],
		'win amount' => 40,
		'qin amount' => 119.5,
		'trio amount' => 187,
		'place amount' => [
			10 => 16,
			9 => 19.5,
			2 => 16.5,
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
		'favorites' => '5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '9, 11, 4, 8',
		'suggestions' => [
			'win' => '5',
			'qin' => '5, 7',
			'trio' => '5, 7, 8',//count trio: 3
			'diff' => '1, 2, 3, 4, 6, 9, 10, 11',//count diff: 8
			'inter' => '',//count inter: 0
		],
		'win amount' => 94.5,
		'qin amount' => 220.5,
		'trio amount' => 1328,
		'place amount' => [
			9 => 28.5,
			11 => 18,
			4 => 44.5,
		],
		'win inter' => '5, 7',
		'allValues' => '1, 3, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 5, 13, 3',
		'suggestions' => [
			'win' => '1, 4, 6',
			'qin' => '1, 4, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10',//count trio: 9
			'diff' => '9, 11, 12, 13, 14',//count diff: 5
			'inter' => '',//count inter: 0
		],
		'win amount' => 20.5,
		'qin amount' => 165.5,
		'trio amount' => 1023,
		'place amount' => [
			1 => 13,
			5 => 39,
			13 => 59,
		],
		'win inter' => '1, 4',
		'allValues' => '1, 2, 4, 5',
		'bets' => [
			'place(end-wp , $100)' => '5',
			'2 won(place bet)' => 390,
		],
		'total bets' => 100,
		'total won in race 4' => 290,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 7, 2, 9',
		'suggestions' => [
			'win' => '4, 13',
			'qin' => '4, 11, 13',
			'trio' => '2, 4, 5, 11, 13',//count trio: 5
			'diff' => '1, 3, 6, 7, 8, 9, 10, 12, 14',//count diff: 9
			'inter' => '1',//count inter: 1
		],
		'win amount' => 17.5,
		'qin amount' => 52.5,
		'trio amount' => 258,
		'place amount' => [
			1 => 11,
			7 => 18,
			2 => 43,
		],
		'win inter' => '3',
		'allValues' => '1, 4, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '11, 9, 13, 4',
		'suggestions' => [
			'win' => '4, 7, 8',
			'qin' => '1, 3, 4, 7, 8, 11',
			'trio' => '1, 2, 3, 4, 7, 8, 11',//count trio: 7
			'diff' => '5, 6, 9, 10, 12, 13, 14',//count diff: 7
			'inter' => '9',//count inter: 1
		],
		'win amount' => 77.5,
		'qin amount' => 239.5,
		'trio amount' => 1257,
		'place amount' => [
			11 => 20.5,
			9 => 25.5,
			13 => 41,
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '1, 3, 5, 8',
		'suggestions' => [
			'win' => '2, 3, 5',
			'qin' => '1, 2, 3, 4, 5, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 8',//count trio: 7
			'diff' => '7',//count diff: 1
			'inter' => '7',//count inter: 1
		],
		'win amount' => 14.5,
		'qin amount' => 41.5,
		'trio amount' => 102,
		'place amount' => [
			1 => 11,
			3 => 14.5,
			5 => 27.5,
		],
		'win inter' => '2, 3',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 4, 11, 2',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
		],
		'win amount' => 1650,
		'qin amount' => 11266,
		'trio amount' => 17955,
		'place amount' => [
			1 => 307,
			4 => 43.5,
			11 => 27,
		],
		'win inter' => '3, 7',
		'allValues' => '2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '6, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '9, 1, 3, 13',
		'suggestions' => [
			'win' => '7',
			'qin' => '6, 7',
			'trio' => '6, 7, 9',//count trio: 3
			'diff' => '1, 2, 3, 4, 5, 8, 10, 11, 12, 13, 14',//count diff: 11
			'inter' => '',//count inter: 0
		],
		'win amount' => 15,
		'qin amount' => 60,
		'trio amount' => 117,
		'place amount' => [
			9 => 10.1,
			1 => 21.5,
			3 => 19,
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '11, 9, 10, 12',
		'suggestions' => [
			'win' => '4, 10, 14',
			'qin' => '1, 2, 4, 5, 10, 13, 14',
			'trio' => '1, 2, 3, 4, 5, 8, 10, 13, 14',//count trio: 9
			'diff' => '6, 7, 9, 11, 12',//count diff: 5
			'inter' => '',//count inter: 0
		],
		'win amount' => 404.5,
		'qin amount' => 4495,
		'trio amount' => 4176,
		'place amount' => [
			11 => 85.5,
			9 => 72.5,
			10 => 15,
		],
		'win inter' => '4',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: 0
//total major place wp: 290
//total sure place: 0
//total: 290
