<?php

/*
|--------------------------------------------------------------------------
| PongoCMS bundle settings
|--------------------------------------------------------------------------|
*/

return array(

	/*
	|--------------------------------------------------------------------------
	| SITE ACTIVE THEME NAME
	|--------------------------------------------------------------------------|
	*/

	'theme' => 'default',
	
	/*
	|--------------------------------------------------------------------------
	| CMS :: app name - Do not change!
	|--------------------------------------------------------------------------|
	*/

	'name' => 'PongoCMS',

	/*
	|--------------------------------------------------------------------------
	| CMS :: copyright details
	|--------------------------------------------------------------------------|
	*/

	'copyright' => 'PongoCMS v1.2 rc1.2.1 &copy; pongoweb.it',

	/*
	|--------------------------------------------------------------------------
	| CMS :: generator details
	|--------------------------------------------------------------------------|
	*/

	'generator' => 'PongoCMS by PongoWeb - 2012 (c) pongocms.com',

	/*
	|--------------------------------------------------------------------------
	| CMS :: url path
	|--------------------------------------------------------------------------|
	*/

	'url' => '/cms',

	/*
	|--------------------------------------------------------------------------
	| CMS :: preview url path
	|--------------------------------------------------------------------------|
	*/

	'preview' => '/preview',

	/*
	|--------------------------------------------------------------------------
	| CMS :: pagination items per page
	|--------------------------------------------------------------------------|
	*/

	'pag' => 20,

	/*
	|--------------------------------------------------------------------------
	| CMS :: data upload base path ** MUST BE IN PUBLIC ROOT AND WRITE ENABLED
	|--------------------------------------------------------------------------|
	*/

	'data' => 'files/',

	/*
	|--------------------------------------------------------------------------
	| CMS :: data mime allowed for uplod
	|--------------------------------------------------------------------------|
	*/

	'mimes' => 'jpg, jpeg, gif, png, mp3, mp4, pdf, zip',

	/*
	|--------------------------------------------------------------------------
	| CMS :: data max size upload (in Mb) // 10Mb
	|--------------------------------------------------------------------------|
	*/

	'max_size' => 1,	

	/*
	|--------------------------------------------------------------------------
	| CMS :: thumb type default on THUMB tag - Sync with existent thumb key!!!
	|--------------------------------------------------------------------------|
	*/

	'thumb_default' => 'quad',

	/*
	|--------------------------------------------------------------------------
	| CMS :: thumb path inside settings.data path
	|--------------------------------------------------------------------------|
	*/	

	'thumb_path' => 'thumb/',

	/*
	|--------------------------------------------------------------------------
	| CMS :: thumb options for ThumbLib
	|--------------------------------------------------------------------------|
	*/

	'thumb_options' => array(
								'resizeUp' => true,
								'jpegQuality' => 80
							),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Flowplayer options v5.2.1
	| Don't remove 'flowplayer' from options, just add classes
	|--------------------------------------------------------------------------|
	*/

	'flowplayer' => array(
								'skin' => 'playful',
								'options' => 'flowplayer'
							),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Standard roles
	|--------------------------------------------------------------------------|
	*/

	'roles' => array(
		
		'admin' => 50,

		'manager' => 40,

		'editor' => 30,

		'user' => 1
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: admin setup login/password
	|--------------------------------------------------------------------------|
	*/

	'admin_setup' => array(

		'login' => 'admin',

		'password' => 'admin'
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: extra_id page/subpage binding | Sync with pages extra_id
	|--------------------------------------------------------------------------|
	*/

	'extra_id' => array(

		0 => 'pages',

		1 => 'blogs'
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Sections' menu array
	|--------------------------------------------------------------------------|
	*/

	'sections' => array(
		
		'dashboard' => array(
			'path' => 'dashboard',
			'level' => 30,
		),
		
		'pages' => array(
			'path' => 'page',
			'level' => 30
		),
		
		'access' => array(
			
			'roles' => array(
				'path' => 'role',
				'level' => 40
			),
			
			'users' => array(
				'path' => 'user',
				'level' => 40
			),
		),

		'contents' => array(			

			'blog' => array(
				'path' => 'blog',
				'level' => 30,
			),
			
		),

		'services' => array(

			'banners' => array(
				'path' => 'banner',
				'level' => 30
			),

			'downloads' => array(
				'path' => 'download',
				'level' => 30
			),

			'galleries' => array(
				'path' => 'gallery',
				'level' => 30
			),

			'files' => array(
				'path' => 'file',
				'level' => 30
			),			

			'menus' => array(
				'path' => 'menu',
				'level' => 30
			),

			'tags' => array(
				'path' => 'tag',
				'level' => 30
			),

			'translations' => array(
				'path' => 'translation',
				'level' => 30
			),

		),
		
	),	

	/*
	|--------------------------------------------------------------------------
	| CMS :: default language
	|--------------------------------------------------------------------------|
	*/

	'language' => 'en',

	/*
	|--------------------------------------------------------------------------
	| CMS :: default locale
	|--------------------------------------------------------------------------|
	*/

	'locale' => 'en_US',

	/*
	|--------------------------------------------------------------------------
	| CMS :: date and time format
	|--------------------------------------------------------------------------|
	*/

	'dateformat' => 'm/d/Y',
	'timeformat' => 'H:i',

	/*
	|--------------------------------------------------------------------------
	| CMS :: available languages
	|--------------------------------------------------------------------------|
	*/

	'langs' => array(		

		'en' => 'English',

		'it' => 'Italiano',
			
		'pt' => 'Português'
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: interface language
	|--------------------------------------------------------------------------|
	*/

	'interface' => array(		

		'en' => 'English',

		'it' => 'Italiano',
			
		'pt' => 'Português'
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Default WYSIWYG editor -> ckeditor || markitup
	|--------------------------------------------------------------------------|
	*/

	'editor' => array(
		
		'ckeditor' => 'CKEditor',

		'markitup' => 'MarkitUp'

	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Google Analytics details
	|--------------------------------------------------------------------------|
	*/

	'analytics' => array(

		'id' => '',

		'account' => '',

		'password' => '',

		'profile_id' => ''
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: Google Webmaster Tool verification string
	|--------------------------------------------------------------------------|
	*/

	'verification' => '',

	/*
	|--------------------------------------------------------------------------
	| CMS :: cache patterns
	|--------------------------------------------------------------------------|
	*/

	'cache_pattern' => array(

		'' => 'all',

		'blog' => 'blogs',

		'file' => 'files',

		'img' => 'images',

		'menu' => 'menus',

		'page' => 'pages',

		'size' => 'sizes',

		'trans' => 'translations'
	),

	/*
	|--------------------------------------------------------------------------
	| CMS :: default order_id value
	|--------------------------------------------------------------------------|
	*/

	'order' => 1000000,

	/*
	|--------------------------------------------------------------------------
	| CMS :: cache engine flag (on || off)
	|--------------------------------------------------------------------------|
	*/

	'cache_engine' => true,

	/*
	|--------------------------------------------------------------------------
	| CMS :: Clean HTML output filter
	|--------------------------------------------------------------------------|
	*/

	'clear_engine' => true,

	/*
	|--------------------------------------------------------------------------
	| SwiftMailer :: Swift_SmtpTransport credentials | NEED SwiftMailer bundle!
	|--------------------------------------------------------------------------|
	*/

	'mail_smtp' 	=> 'smtp.yourhosting.tld',
	'mail_username' => 'smtp.login',
	'mail_password' => 'smtp.password'


);
