<?php

namespace ChuckNorrisEncode;

class Encoder
{
    const BINARY_LENGTH = 7;

    /**
     * Encode the string parameter in Chuck Norris Encoding
     *
     * @param string $characters
     *
     * @return string
     */
    public static function encode(string $characters): string
    {
        $binaryCode = self::getBinaryCode($characters);
        $characterEncoded = self::getChuckNorrisEncode($binaryCode);

        return $characterEncoded;
    }

    /**
     * Return the binary code of the string given in parameter
     *
     * @param string $characters
     *
     * @return string
     */
    private static function getBinaryCode(string $characters): string
    {
        $binaryCode = '';

        for($i = 0; $i < strlen($characters); $i++) {
            $binaryCode .= (string) str_pad(
                decbin(ord($characters[$i])),
                self::BINARY_LENGTH,
                '0',
                STR_PAD_LEFT
            );
        }

        return $binaryCode;
    }

    /**
     * Encode a binary code to chuck norris encoding
     *
     * @param string $binaryCode
     *
     * @return string
     */
    private static function getChuckNorrisEncode(string $binaryCode): string
    {
        $previousBinaryNumber = '';
        $result = '';

        for($i = 0; $i < strlen($binaryCode); $i++) {

            if($previousBinaryNumber != $binaryCode[$i]) {
                $previousNumber = $binaryCode[$i];
                $result .= ($previousNumber == '0' ? ' 00 0' : ' 0 0');
                continue;
            }

            $result .= '0';

        }

        return trim($result);
    }
}
