<?php
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "p@ddOo7J7QsS7XpMF";
$db["db_name"] = "cms_2021";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if ($connection) {
//     echo "We are connected";
// } else {
//     echo "Something went wrong, not connected";
// }
