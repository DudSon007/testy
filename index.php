<?php

require_once __DIR__ . '/vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request :: createFromGlobals();

echo $request->query->get('hej');