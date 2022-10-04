<?php

return [

	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => 'Bulbul Chandra Sarker',
	'subject'               => 'Report Generator',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('./temp/'),

	'font_path' => base_path('resources/fonts/'),
	'font_data' => [
		'nikosh' => [
			'R'  => 'Nikosh/Nikosh.ttf',    // regular font
			'useOTL' => 0xFF,
		],
		'english' => [
			'R'  => 'Times_New_Roman_Normal.ttf',    // regular font
			'B'  => 'Times_New_Roman_Normal.ttf',       // optional: bold font
			'I'  => 'Times_New_Roman_Normal.ttf',     // optional: italic font
			'BI' => 'Times_New_Roman_Normal.ttf', // optional: bold-italic font
		]
	]









];
