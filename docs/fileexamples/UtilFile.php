<?php

/*
 * This file is part of the BlockPuzzle application
 *
 * (c) Julien Brochet <mewt@madalynn.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Madalynn\Bundle\BlockPuzzleBundle\Util;

/**
 * KeyGenerator from Lichess
 *
 * @see https://github.com/ornicar/lichess
 */
class KeyGenerator {

    static public function generate($length) {
        $key = '';
        do {
            $key .= self::fastGenerateTwelveCharsKey(); //Use a static function
        } while ($length > strlen($key));

        return substr($key, 0, $length);
    }

    static protected function fastGenerateTwelveCharsKey() {
        if (is_int(9223372036854775807)) {
            return base_convert(mt_rand(0x1D39D3E06400000, 0x41C21CB8E0FFFFFF), 10, 36);
        }

        return array_rand(array_flip(preg_split('//', 'qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPPPPLKJHGFDSAZXCVBNM1234567890', -1)));
    }

}

?>
