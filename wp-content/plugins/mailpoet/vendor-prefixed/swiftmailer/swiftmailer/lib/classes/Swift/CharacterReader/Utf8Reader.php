<?php

namespace MailPoetVendor;

if (!defined('ABSPATH')) exit;


/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Analyzes UTF-8 characters.
 *
 * @author Chris Corbyn
 * @author Xavier De Cock <xdecock@gmail.com>
 */
class Swift_CharacterReader_Utf8Reader implements \MailPoetVendor\Swift_CharacterReader
{
    /** Pre-computed for optimization */
    private static $length_map = [
        // N=0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x0N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x1N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x2N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x3N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x4N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x5N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x6N
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        // 0x7N
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        // 0x8N
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        // 0x9N
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        // 0xAN
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        // 0xBN
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        // 0xCN
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        2,
        // 0xDN
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        3,
        // 0xEN
        4,
        4,
        4,
        4,
        4,
        4,
        4,
        4,
        5,
        5,
        5,
        5,
        6,
        6,
        0,
        0,
    ];
    private static $s_length_map = ["\0" => 1, "\1" => 1, "\2" => 1, "\3" => 1, "\4" => 1, "\5" => 1, "\6" => 1, "\7" => 1, "\10" => 1, "\t" => 1, "\n" => 1, "\v" => 1, "\f" => 1, "\r" => 1, "\16" => 1, "\17" => 1, "\20" => 1, "\21" => 1, "\22" => 1, "\23" => 1, "\24" => 1, "\25" => 1, "\26" => 1, "\27" => 1, "\30" => 1, "\31" => 1, "\32" => 1, "\33" => 1, "\34" => 1, "\35" => 1, "\36" => 1, "\37" => 1, " " => 1, "!" => 1, "\"" => 1, "#" => 1, "\$" => 1, "%" => 1, "&" => 1, "'" => 1, "(" => 1, ")" => 1, "*" => 1, "+" => 1, "," => 1, "-" => 1, "." => 1, "/" => 1, "0" => 1, "1" => 1, "2" => 1, "3" => 1, "4" => 1, "5" => 1, "6" => 1, "7" => 1, "8" => 1, "9" => 1, ":" => 1, ";" => 1, "<" => 1, "=" => 1, ">" => 1, "?" => 1, "@" => 1, "A" => 1, "B" => 1, "C" => 1, "D" => 1, "E" => 1, "F" => 1, "G" => 1, "H" => 1, "I" => 1, "J" => 1, "K" => 1, "L" => 1, "M" => 1, "N" => 1, "O" => 1, "P" => 1, "Q" => 1, "R" => 1, "S" => 1, "T" => 1, "U" => 1, "V" => 1, "W" => 1, "X" => 1, "Y" => 1, "Z" => 1, "[" => 1, "\\" => 1, "]" => 1, "^" => 1, "_" => 1, "`" => 1, "a" => 1, "b" => 1, "c" => 1, "d" => 1, "e" => 1, "f" => 1, "g" => 1, "h" => 1, "i" => 1, "j" => 1, "k" => 1, "l" => 1, "m" => 1, "n" => 1, "o" => 1, "p" => 1, "q" => 1, "r" => 1, "s" => 1, "t" => 1, "u" => 1, "v" => 1, "w" => 1, "x" => 1, "y" => 1, "z" => 1, "{" => 1, "|" => 1, "}" => 1, "~" => 1, "" => 1, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 0, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 2, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 3, "�" => 4, "�" => 4, "�" => 4, "�" => 4, "�" => 4, "�" => 4, "�" => 4, "�" => 4, "�" => 5, "�" => 5, "�" => 5, "�" => 5, "�" => 6, "�" => 6, "�" => 0, "�" => 0];
    /**
     * Returns the complete character map.
     *
     * @param string $string
     * @param int    $startOffset
     * @param array  $currentMap
     * @param mixed  $ignoredChars
     *
     * @return int
     */
    public function getCharPositions($string, $startOffset, &$currentMap, &$ignoredChars)
    {
        if (!isset($currentMap['i']) || !isset($currentMap['p'])) {
            $currentMap['p'] = $currentMap['i'] = [];
        }
        $strlen = \strlen($string);
        $charPos = \count($currentMap['p']);
        $foundChars = 0;
        $invalid = \false;
        for ($i = 0; $i < $strlen; ++$i) {
            $char = $string[$i];
            $size = self::$s_length_map[$char];
            if (0 == $size) {
                /* char is invalid, we must wait for a resync */
                $invalid = \true;
                continue;
            } else {
                if (\true === $invalid) {
                    /* We mark the chars as invalid and start a new char */
                    $currentMap['p'][$charPos + $foundChars] = $startOffset + $i;
                    $currentMap['i'][$charPos + $foundChars] = \true;
                    ++$foundChars;
                    $invalid = \false;
                }
                if ($i + $size > $strlen) {
                    $ignoredChars = \substr($string, $i);
                    break;
                }
                for ($j = 1; $j < $size; ++$j) {
                    $char = $string[$i + $j];
                    if ($char > "" && $char < "�") {
                        // Valid - continue parsing
                    } else {
                        /* char is invalid, we must wait for a resync */
                        $invalid = \true;
                        continue 2;
                    }
                }
                /* Ok we got a complete char here */
                $currentMap['p'][$charPos + $foundChars] = $startOffset + $i + $size;
                $i += $j - 1;
                ++$foundChars;
            }
        }
        return $foundChars;
    }
    /**
     * Returns mapType.
     *
     * @return int mapType
     */
    public function getMapType()
    {
        return self::MAP_TYPE_POSITIONS;
    }
    /**
     * Returns an integer which specifies how many more bytes to read.
     *
     * A positive integer indicates the number of more bytes to fetch before invoking
     * this method again.
     * A value of zero means this is already a valid character.
     * A value of -1 means this cannot possibly be a valid character.
     *
     * @param string $bytes
     * @param int    $size
     *
     * @return int
     */
    public function validateByteSequence($bytes, $size)
    {
        if ($size < 1) {
            return -1;
        }
        $needed = self::$length_map[$bytes[0]] - $size;
        return $needed > -1 ? $needed : -1;
    }
    /**
     * Returns the number of bytes which should be read to start each character.
     *
     * @return int
     */
    public function getInitialByteSize()
    {
        return 1;
    }
}
