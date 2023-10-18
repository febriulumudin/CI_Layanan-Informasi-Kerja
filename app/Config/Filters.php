<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'auth_filter' => \App\Filters\Auth_Filter::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'auth_filter' => ['except' => [	//Controller yang dapat diakses tanpa login
				'auth/__cuntruct', 'auth/register', 'auth/save_register',
				'auth/login', 'auth/cek_login', 'auth/logout',
				'auth/register_perusahaan', 'auth/save_register_perusahaan',
				'auth/login_perusahaan', 'auth/cek_login_perusahaan',
				'auth/logout_perusahaan',
				'web', 'web/*',
				'webcadangan', 'webcadangan/*',
				'ImageUpload', 'ImageUpload/*',
				'Pengunjung', 'Pengunjung/*',
				'/'
			]]
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'auth_filter' => ['except' => [		//Controller yang harus login terlebih dahulu
				'home', 'home/*',
				'auth/register_lanjut',
				'kategori', 'kategori/*',
				'kategori_perusahaan', 'kategori_perusahaan/*',
				'lowongan', 'lowongan/*',
				'lowongan2', 'lowongan2/*',
				'Keahlian', 'Keahlian/*'
			]],
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
