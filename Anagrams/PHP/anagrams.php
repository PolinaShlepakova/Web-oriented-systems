<?php

function sort_string($str) {
    $stringParts = str_split($str);
    sort($stringParts);
    return implode('', $stringParts);
}

function map_anagrams($sorted, $arr) {
    return (array($sorted => $arr));
}

function find_anagrams($arr) {
    $map = [];
    for ($i = 0; $i < count($arr); $i++) {
        $sorted = sort_string($arr[$i]);
//        if (map[sorted] == null) {
//            // not in map
//            map[sorted] = [arr[i]];
//        } else {
//            map[sorted].push(arr[i]);
//        }
    }
//    for (var key in map) {
//        if (map[key].length > 1) {
//            var res = "";
//            for (var i = 0; i < map[key].length; i++) {
//                res += map[key][i] + (i === map[key].length - 1 ? "" : " - ");
//            }
//            console.log(res);
//        }
//    }
}

//print sort_string('hello');

$words = array('tovar', 'aroza', 'dfd', 'avtor', 'azora', 'tavro');
print find_anagrams(words);



//exit;
?>