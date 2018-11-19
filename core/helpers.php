<?php
/**
 * Define path relative to 
 * local root directory.
 *
 * @param  string $target
 */

function local($target = false)
{
    if (!$target) {
        return rtrim(getcwd() , 'public');
    }
    
	$paths = [
	    rtrim(getcwd() , 'public') . $target,
	    rtrim(getcwd() , '/public') . $target,
	    rtrim(getcwd() , 'public') . $target . ".php",
	    rtrim(getcwd() , '/public') . $target . ".php"
	];

	foreach ($paths as $path)
		{
		if (file_exists($path)) {
			return $path;
			}
		}

	throw new Exception('Helper function local() was unable to find target "' . $target . '". Attempted to look in the following locations: ' . implode(", ", $paths));
}



/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require local("app/views/{$name}");
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}

/**
 * Dump readable variables and die.
 *
 * @param  * $data
 */

function dd($data) {
    echo '
    <head>
    <link rel="stylesheet" type="text/css" href="/css/tote.css">
    </head>
    <body class="tote-dd-body">
    <pre class="tote-dd-pre">
    ';
    var_dump($data);
    die();
}