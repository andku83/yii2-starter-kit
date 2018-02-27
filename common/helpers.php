<?php
/**
 * Yii2 Shortcuts
 * @author Eugene Terentev <eugene@terentev.net>
 * -----
 * This file is just an example and a place where you can add your own shortcuts,
 * it doesn't pretend to be a full list of available possibilities
 * -----
 */

/**
 * @return int|string
 */
function getMyId()
{
    return Yii::$app->user->getId();
}

/**
 * @param string $view
 * @param array $params
 * @return string
 */
function render($view, $params = [])
{
    return Yii::$app->controller->render($view, $params);
}

/**
 * @param $url
 * @param int $statusCode
 * @return \yii\web\Response
 */
function redirect($url, $statusCode = 302)
{
    return Yii::$app->controller->redirect($url, $statusCode);
}

/**
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function env($key, $default = null)
{

    $value = getenv($key) ?? $_ENV[$key] ?? $_SERVER[$key];

    if ($value === false) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;

        case 'false':
        case '(false)':
            return false;
    }

    return $value;
}



/**
 * Dump a value with elegance.
 *
 * @param  mixed  $data
 * @return bool
 */
if (!function_exists('dump')) {
    function dump($data, $die = false){
        ob_start();
        var_dump($data);
        $output = ob_get_clean();
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        echo '<pre>'.($output).'</pre>';
        if ($die){
            exit;
        }
        return false;
    }
}

/**
 * Dump a value with elegance and exit.
 *
 * @param  mixed  $data
 * @return void
 */
if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
        die();
    }
}

/**
 * Dump a value with elegance.
 *
 * @param  mixed  $data
 * @return void
 */
if (!function_exists('d')) {
    function d()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
    }
}
//if (!function_exists('d')) {
//    function d()
//    {
//        ob_start();
//        var_dump($data);
//        $output = ob_get_clean();
//        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
//        echo '<pre>'.($output).'</pre>';
//        if ($die){
//            exit;
//        }
//        return false;
//    }
//}