<?php

/**
 * @author Jose Carlos Arjona
 * @copyright Copyright (c) 2017 Jose Carlos Arjona
 * @license https://www.gnu.org/licenses/gpl.txt
 */

/*
 * Esto es sólo un ESQUELETO para el ejercicio de los "isogramas".
 */

function esIsograma($s)
{
    $s = mb_strtolower($s);
    $s = str_replace([' ', '-'], '', $s);
    $lon = mb_strlen($s);

    for ($i = 0; $i < $lon; $i++) {
        for ($j= $i + 1 ; $j < $lon; $j++) {
            if (mb_substr($s, $i, 1) === mb_substr($s, $j, 1)) {
                return false;
            }
        }
    }
    // for ($i=0; $i < $lon; $i++) {
    //     if (mb_stripos(mb_substr($s, $i + 1), mb_substr($s, $i, 1))) {
    //         return false;
    //     }
    // }

    return true;
}
