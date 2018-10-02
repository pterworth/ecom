<?php

# Start a session if ain't already started
if(!isset($_SESSION)) seccion_start();

# Load env-file from the config folder
require_once __DIR__ . '/../app/config/env.php';
