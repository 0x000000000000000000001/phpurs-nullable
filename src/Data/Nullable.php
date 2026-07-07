<?php

$exports = [
    'null' => null,
    'notNull' => function($x) { return $x; },
    'nullable' => function($a, $r, $f) {
        return $a === null ? $r : $f($a);
    }
];

return $exports;
