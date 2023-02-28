
<?php
// A valid json string
// $json[] = '{"A": "Json_error}';
$json[] = '{"A": "Json_error"}';  

// $json_data = '{"A": "aa"}';

foreach ($json as $string) {
    echo 'Decoding: ' . $string;
    json_decode($string);
    print_r($string. " ". json_last_error());

    switch (json_last_error()) {
        case 0:
            echo ' - No errors';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
        default:
            echo ' - Unknown error';
        break;
    }
}
?>
