<?php

function sort_string($str) {
    $stringParts = str_split($str);
    sort($stringParts);
    return implode('', $stringParts);
}

function find_anagrams($arr) {
    $map = Array();
    foreach ($arr as $v) {
        $sorted = sort_string($v);
        if (!empty($sorted) && empty($map[$sorted])) {
            // not in map
            $map[$sorted] = array();
            $map[$sorted][] = $v;
        } else if (!empty($sorted)) {
            $map[$sorted][] = $v;
        }
    }

    $res = '';
    foreach ($map as $k => $v) {
        if (count($v) > 1) {
            for ($i = 0; $i < count($v); $i++) {
                $res .= ($v[$i]) . ($i == count($v) - 1 ? '' : ' - ');
            }
        }
        $res .= "<br>";
    }
    return $res;
}

function parse_file($path) {
    $txt_file    = file_get_contents($path);
    $rows        = explode("\n", $txt_file);
    return $rows;
}

print(find_anagrams(parse_file("words.txt")));

?>