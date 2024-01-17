<?php

$stringList = file_get_contents('./json/list.json');
header('Content-Type: application/json');
echo $stringList;