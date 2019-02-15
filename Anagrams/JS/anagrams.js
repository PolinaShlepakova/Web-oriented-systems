function sort_string(str) {
    return str.split("").sort().join("");
}

function find_anagrams(arr) {
    var map = [];
    for (var i = 0; i < arr.length; i++) {
        var sorted = sort_string(arr[i]);
        if (map[sorted] == null) {
            // not in map
            map[sorted] = [arr[i]];
        } else {
            map[sorted].push(arr[i]);
        }
    }
    for (var key in map) {
        if (map[key].length > 1) {
            var res = "";
            for (var i = 0; i < map[key].length; i++) {
                res += map[key][i] + (i === map[key].length - 1 ? "" : " - ");
            }
            console.log(res);
        }
    }
}

function parse_file(filename) {
    var fs = require('fs');
    return fs.readFileSync(filename).toString().split("\r\n");
}

// var words = ["tovar", "aroza", "dfd", "avtor", "azora", "tavro"];
//find_anagrams(words);
find_anagrams(parse_file('words.txt'));