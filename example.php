<?php
require_once('./index.php');
$positions = [[10, 10], [20, 10], [30, 30], [40, 40], [100, 100], [100, 120]];
$circle = getCircleContainingAllPositions($positions);
var_dump($circle);