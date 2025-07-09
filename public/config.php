<?php
define('BASE_URL', ($_SERVER['SERVER_NAME'] == 'localhost')
    ? "http://localhost:8080"
    : "https://ваш-домен"
);

define('IS_LOCAL', ($_SERVER['SERVER_NAME'] == 'localhost'));