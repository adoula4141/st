<?php
return [
	1 => [
		'HV' => [
			'history' => [
			],
		],
		'ST' => [
			'history' => [
			],
		],
			],
	],
	2 => [
		'HV' => [
			'history' => [
			],
		],
		'ST' => [
			'history' => [
			],
		],
			],
	],
	3 => [
		'HV' => [
			'history' => [
				'3, 8, 9, 10',
			],
		'winners' => '3',
		'first2'  => '3, 8',
		'first3'  => '3, 8, 9',
		],
		'ST' => [
			'history' => [
			],
		],
			],
			'union first3 HV & ST' => '3, 8, 9',
	],
	4 => [
		'HV' => [
			'history' => [
				'3, 10, 1, 6',
				'4, 3, 9, 2',
				'4, 9, 8, 10',
			],
		'winners' => '3, 4',
		'first2'  => '3, 4, 9, 10',
		'first3'  => '1, 3, 4, 8, 9, 10',
		],
		'ST' => [
			'history' => [
				'2, 11, 4, 6',
				'4, 1, 2, 8',
				'4, 1, 2, 9',
			],
			'winners' => '2, 4',
			'first2'  => '1, 2, 4, 11',
			'first3'  => '1, 2, 4, 11',
		],
				'winners' => '2, 4',
				'first2'  => '1, 2, 4, 11',
				'first3'  => '1, 2, 4, 11',
			],
			'inter first3 HV & ST' => '1, 4',
			'union first3 HV & ST' => '1, 2, 3, 4, 8, 9, 10, 11',
	],
	5 => [
		'HV' => [
			'history' => [
			],
		],
		'ST' => [
			'history' => [
				'1, 3, 4, 2',
				'1, 4, 5, 8',
				'1, 5, 13, 3',
				'4, 9, 8, 5',
				'5, 1, 4, 6',
				'5, 1, 9, 8',
				'5, 10, 14, 2',
			],
			'winners' => '1, 4, 5',
			'first2'  => '1, 3, 4, 5, 9, 10',
			'first3'  => '1, 3, 4, 5, 8, 9, 10, 13, 14',
		],
				'winners' => '1, 4, 5',
				'first2'  => '1, 3, 4, 5, 9, 10',
				'first3'  => '1, 3, 4, 5, 8, 9, 10, 13, 14',
			],
			'union first3 HV & ST' => '1, 3, 4, 5, 8, 9, 10, 13, 14',
	],
	6 => [
		'HV' => [
			'history' => [
				'1, 2, 12, 9',
				'10, 1, 6, 3',
				'10, 3, 5, 7',
				'10, 3, 9, 4',
				'5, 4, 8, 6',
				'6, 4, 1, 8',
				'9, 6, 5, 1',
			],
		'winners' => '1, 5, 6, 9, 10',
		'first2'  => '1, 2, 3, 4, 5, 6, 9, 10',
		'first3'  => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12',
		],
		'ST' => [
			'history' => [
				'3, 1, 10, 4',
				'6, 1, 2, 4',
				'6, 1, 5, 4',
				'6, 9, 10, 11',
			],
			'winners' => '3, 6',
			'first2'  => '1, 3, 6, 9',
			'first3'  => '1, 2, 3, 5, 6, 9, 10',
		],
				'winners' => '3, 6',
				'first2'  => '1, 3, 6, 9',
				'first3'  => '1, 2, 3, 5, 6, 9, 10',
			],
			'inter first3 HV & ST' => '1, 2, 3, 5, 6, 9, 10',
			'union first3 HV & ST' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12',
	],
	7 => [
		'HV' => [
			'history' => [
				'1, 10, 4, 2',
				'2, 4, 3, 10',
				'2, 5, 8, 7',
				'4, 3, 9, 10',
				'6, 1, 3, 4',
				'6, 8, 7, 4',
				'7, 2, 1, 8',
				'7, 9, 4, 1',
				'8, 2, 3, 5',
				'8, 3, 12, 4',
				'8, 7, 9, 5',
			],
		'winners' => '1, 2, 4, 6, 7, 8',
		'first2'  => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'first3'  => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
		],
		'ST' => [
			'history' => [
				'11, 3, 6, 1',
				'12, 7, 4, 5',
				'3, 2, 6, 5',
				'5, 4, 1, 12',
				'7, 3, 11, 9',
				'9, 12, 3, 10',
			],
			'winners' => '3, 5, 7, 9, 11, 12',
			'first2'  => '2, 3, 4, 5, 7, 9, 11, 12',
			'first3'  => '1, 2, 3, 4, 5, 6, 7, 9, 11, 12',
		],
				'winners' => '3, 5, 7, 9, 11, 12',
				'first2'  => '2, 3, 4, 5, 7, 9, 11, 12',
				'first3'  => '1, 2, 3, 4, 5, 6, 7, 9, 11, 12',
			],
			'inter first3 HV & ST' => '1, 2, 3, 4, 5, 6, 7, 9, 12',
			'union first3 HV & ST' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
	],
	8 => [
		'HV' => [
			'history' => [
				'2, 1, 11, 10',
				'4, 2, 10, 1',
				'8, 5, 3, 4',
			],
		'winners' => '2, 4, 8',
		'first2'  => '1, 2, 4, 5, 8',
		'first3'  => '1, 2, 3, 4, 5, 8, 10, 11',
		],
		'ST' => [
			'history' => [
				'11, 1, 4, 12',
				'11, 8, 3, 2',
				'14, 11, 8, 7',
				'4, 8, 1, 3',
				'6, 8, 4, 7',
				'8, 4, 2, 6',
				'8, 9, 5, 4',
			],
			'winners' => '4, 6, 8, 11, 14',
			'first2'  => '1, 4, 6, 8, 9, 11, 14',
			'first3'  => '1, 2, 3, 4, 5, 6, 8, 9, 11, 14',
		],
				'winners' => '4, 6, 8, 11, 14',
				'first2'  => '1, 4, 6, 8, 9, 11, 14',
				'first3'  => '1, 2, 3, 4, 5, 6, 8, 9, 11, 14',
			],
			'inter first3 HV & ST' => '1, 2, 3, 4, 5, 8, 11',
			'union first3 HV & ST' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 14',
	],
	9 => [
		'HV' => [
			'history' => [
				'1, 12, 9, 6',
				'9, 11, 1, 6',
			],
		'winners' => '1, 9',
		'first2'  => '1, 9, 11, 12',
		'first3'  => '1, 9, 11, 12',
		],
		'ST' => [
			'history' => [
				'11, 9, 13, 4',
				'14, 2, 1, 3',
				'2, 3, 14, 12',
				'2, 7, 9, 6',
				'6, 9, 3, 12',
				'7, 3, 9, 5',
				'8, 6, 10, 7',
			],
			'winners' => '2, 6, 7, 8, 11, 14',
			'first2'  => '2, 3, 6, 7, 8, 9, 11, 14',
			'first3'  => '1, 2, 3, 6, 7, 8, 9, 10, 11, 13, 14',
		],
				'winners' => '2, 6, 7, 8, 11, 14',
				'first2'  => '2, 3, 6, 7, 8, 9, 11, 14',
				'first3'  => '1, 2, 3, 6, 7, 8, 9, 10, 11, 13, 14',
			],
			'inter first3 HV & ST' => '1, 9, 11',
			'union first3 HV & ST' => '1, 2, 3, 6, 7, 8, 9, 10, 11, 12, 13, 14',
	],
	10 => [
		'HV' => [
			'history' => [
				'10, 9, 11, 1',
				'2, 12, 11, 4',
				'2, 5, 8, 10',
				'2, 8, 9, 11',
				'3, 1, 12, 10',
				'3, 11, 5, 2',
				'3, 2, 4, 8',
				'4, 5, 11, 10',
				'4, 8, 10, 1',
				'5, 7, 2, 1',
				'5, 9, 1, 3',
				'8, 1, 12, 11',
				'8, 3, 9, 2',
				'8, 4, 9, 5',
			],
		'winners' => '2, 3, 4, 5, 8, 10',
		'first2'  => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
		'first3'  => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
		],
		'ST' => [
			'history' => [
				'1, 11, 6, 7',
				'1, 4, 10, 2',
				'10, 13, 7, 14',
				'10, 14, 7, 5',
				'10, 4, 3, 7',
				'2, 10, 6, 7',
				'3, 10, 6, 5',
				'4, 10, 5, 3',
				'7, 9, 6, 1',
			],
			'winners' => '1, 2, 3, 4, 7, 10',
			'first2'  => '1, 2, 3, 4, 7, 9, 10, 11, 13, 14',
			'first3'  => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 13, 14',
		],
				'winners' => '1, 2, 3, 4, 7, 10',
				'first2'  => '1, 2, 3, 4, 7, 9, 10, 11, 13, 14',
				'first3'  => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 13, 14',
			],
			'inter first3 HV & ST' => '1, 2, 3, 4, 5, 7, 9, 10, 11',
			'union first3 HV & ST' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
	],
	11 => [
		'HV' => [
			'history' => [
				'1, 9, 6, 11',
				'11, 1, 10, 2',
				'5, 2, 9, 8',
				'6, 11, 4, 8',
				'9, 11, 1, 3',
			],
		'winners' => '1, 5, 6, 9, 11',
		'first2'  => '1, 2, 5, 6, 9, 11',
		'first3'  => '1, 2, 4, 5, 6, 9, 10, 11',
		],
		'ST' => [
			'history' => [
				'1, 2, 11, 9',
				'1, 4, 9, 10',
				'2, 1, 3, 8',
				'2, 5, 8, 6',
				'3, 8, 14, 5',
			],
			'winners' => '1, 2, 3',
			'first2'  => '1, 2, 3, 4, 5, 8',
			'first3'  => '1, 2, 3, 4, 5, 8, 9, 11, 14',
		],
				'winners' => '1, 2, 3',
				'first2'  => '1, 2, 3, 4, 5, 8',
				'first3'  => '1, 2, 3, 4, 5, 8, 9, 11, 14',
			],
			'inter first3 HV & ST' => '1, 2, 4, 5, 9, 11',
			'union first3 HV & ST' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 14',
	],
	12 => [
		'HV' => [
			'history' => [
				'3, 12, 5, 6',
			],
		'winners' => '3',
		'first2'  => '3, 12',
		'first3'  => '3, 5, 12',
		],
		'ST' => [
			'history' => [
				'11, 8, 7, 10',
				'2, 11, 12, 7',
				'2, 11, 4, 5',
				'5, 2, 13, 7',
				'7, 12, 4, 10',
			],
			'winners' => '2, 5, 7, 11',
			'first2'  => '2, 5, 7, 8, 11, 12',
			'first3'  => '2, 4, 5, 7, 8, 11, 12, 13',
		],
				'winners' => '2, 5, 7, 11',
				'first2'  => '2, 5, 7, 8, 11, 12',
				'first3'  => '2, 4, 5, 7, 8, 11, 12, 13',
			],
			'inter first3 HV & ST' => '5, 12',
			'union first3 HV & ST' => '2, 3, 4, 5, 7, 8, 11, 12, 13',
	],
	13 => [
		'HV' => [
			'history' => [
			],
		],
		'ST' => [
			'history' => [
			],
		],
			],
	],
	14 => [
		'HV' => [
			'history' => [
			],
		],
		'ST' => [
			'history' => [
			],
		],
			],
	],
];
?>
