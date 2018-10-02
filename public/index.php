<?php

# Initialize all necessary files
require_once __DIR__ . '/../bootstrap/init.php';

# Define the APP NAME through the getenv function 
# which loads the .env variables
$app_name = getenv('APP_NAME');

echo $app_name;