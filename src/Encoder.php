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
        $binaryCode = "";

        for($i = 0; $i < strlen($characters); $i++) {
            $binaryCode .= (string) str_pad(decbin(ord($characters[$i])), 7, '0', STR_PAD_LEFT);
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
        $previousNumber = "";
        $result = "";

        for($i = 0; $i < strlen($binaryCode); $i++) {
            if($previousNumber != $binaryCode[$i]) {
                $previousNumber = $binaryCode[$i];

                if($binaryCode[$i] == "0") {
                    $result .= " 00 0";
                } else {
                    $result .= " 0 0";
                }
                continue;
            }

            $result .= "0";
        }

        return trim($result);
    }
}
