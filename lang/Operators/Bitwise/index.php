<?php

/**
 * Bitwise Operators.
 */
$bin = 0b0101; // 5

$bin | 0b0100; // 0b0101
$bin & 0b0100; // 0b0100
$bin ^ 0b0100; // 0b0001
$bin << 1; // 0b1010
$bin >> 1; // 0b0010
~$bin; // 0b1010 = -6