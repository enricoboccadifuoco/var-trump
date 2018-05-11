<?php

function var_trump() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => "https://api.whatdoestrumpthink.com/api/v1/quotes/random"
    ));

    $result = json_decode(curl_exec($curl));

    $charStart = (PHP_SAPI == 'cli') ? "\033[31m" : "";
    $charEnd = (PHP_SAPI == 'cli') ? "\033[0m\n" : "";

    $message = $charStart . "Trump said: " . $result->message . $charEnd;

    echo $message;

    $arguments = func_get_args();
    call_user_func_array("var_dump", $arguments);
}
