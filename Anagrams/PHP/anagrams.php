<?php

function sort_string($str) {
    $stringParts = str_split($str);
    sort($stringParts);
    return implode('', $stringParts);
}

function find_anagrams($arr) {
    $map = [];
    for ($i = 0; $i < count($arr); $i++) {
        $sorted = sort_string($arr[$i]);
        if (!empty($sorted) && !empty($map[$sorted])) {
            // not in map
            $map[$sorted] = [$arr[$i]];
        } else {
            ($map[$sorted])[] = ($arr[$i]);
        }
    }
    foreach ($map as $k => $v) {
        if (count($v) > 1) {
            $res = '';
            for ($i = 0; $i < count($v); $i++) {
                $res .= ($v[$i]) . ($i == count($v) - 1 ? '' : ' - ');
            }
            return implode('', $res);
        }
    }
}

//print sort_string('hello');

$words = array('tovar', 'aroza', 'dfd', 'avtor', 'azora', 'tavro');
print find_anagrams($words);



//exit;
?>