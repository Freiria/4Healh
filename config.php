<?php

define('DS', DIRECTORY_SEPARATOR);

define('BASE_PATH', rtrim(__DIR__, '/\\'));

define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');
