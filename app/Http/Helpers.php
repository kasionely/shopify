<?php

function translit_link($str)
{
    $str = translit_rus($str);

    $str = strtolower($str);

    $str = preg_replace('~[^-a-z0-9_]+~u', '_', $str);
    $str = str_replace('-', '_', $str);

    $str = trim($str, "_");

    return $str;
}

function translit_rus($str)
{
    $matches = array(
        '/а/u', '/ә/u', '/б/u', '/в/u', '/г/u', '/ғ/u', '/д/u', '/е/u', '/ё/u', '/ж/u',
        '/з/u', '/и/u', '/й/u', '/к/u', '/қ/u', '/л/u', '/м/u', '/н/u', '/ң/u', '/о/u',
        '/ө/u', '/п/u', '/р/u', '/с/u', '/т/u', '/у/u', '/ұ/u', '/ү/u', '/ф/u', '/х/u',
        '/һ/u', '/ц/u', '/ч/u', '/ш/u', '/щ/u', '/ъ/u', '/ы/u', '/і/u', '/ь/u', '/э/u',
        '/ю/u', '/я/u', '/ь/u',
        '/А/u', '/Ә/u', '/Б/u', '/В/u', '/Г/u', '/Ғ/u', '/Д/u', '/Е/u', '/Ё/u', '/Ж/u',
        '/З/u', '/И/u', '/Й/u', '/К/u', '/Қ/u', '/Л/u', '/М/u', '/Н/u', '/Ң/u', '/О/u',
        '/Ө/u', '/П/u', '/Р/u', '/С/u', '/Т/u', '/У/u', '/Ұ/u', '/Ү/u', '/Ф/u', '/Х/u',
        '/Һ/u', '/Ц/u', '/Ч/u', '/Ш/u', '/Щ/u', '/Ъ/u', '/Ы/u', '/І/u', '/Ь/u', '/Э/u',
        '/Ю/u', '/Я/u', '/Ь/u',
    );

    $replaces = array(
        'a',	'e',	'b',	'v',	'g',	'g',	'd',	'e',	'yo',	'zh',
        'z',	'i',	'y',	'k',	'q',	'l',	'm',	'n',	'n',	'o',
        'o',	'p',	'r',	's',	't',	'u',	'u',	'yu',	'f',	'h',
        'h',	'ts',	'ch',	'sh',	'sch',	'\'',	'y',	'i',	'\'',	'e',
        'yu',	'ya',	'',
        'A',	'e',	'B',	'V',	'G',	'G',	'D',	'E',	'Yo',	'Zh',
        'Z',	'I',	'Y',	'K',	'Q',	'L',	'M',	'N',	'N',	'O',
        'O',	'P',	'R',	'S',	'T',	'U',	'U',	'YU',	'F',	'h',
        'H',	'Ts',	'Ch',	'SH',	'SCH',	'\'',	'Y',	'I',	'\'',	'E',
        'Yu',	'Ya', '',
    );

    return preg_replace($matches, $replaces, $str);
}