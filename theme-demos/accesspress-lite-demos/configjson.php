<?php 
/**
* Demo import configuration file
*
*
*/



$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-lite-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings' 	=> $git_url . 'default/customizer.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspresslite',
		'menus' 			=> array(
			'primary' => 'Primary menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'kirki',
					'init' 	=> 'kirki/kirki.php',
					'name' 	=> 'Kirki Customizer Framework',
				),
			),
			'premium' => array()
		)
	)
);
	
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/8degree/config.json) and find config.json downloaded there.</h2>";
//}
