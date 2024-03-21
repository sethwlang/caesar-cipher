<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarCipherController extends Controller
{
    public function encrypt(Request $request)
    {
        $text = $request->input('text');
        $shift = $request->input('shift');
        $result = '';

        // Loop through each character in the text
        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
    
            // Encrypt alphabetic characters only
            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $isUpperCase = ctype_upper($char);
    
                // Calculate the new ASCII value after shifting
                $shiftedAscii = $isUpperCase ? (($ascii - 65 + $shift) % 26) + 65 : (($ascii - 97 + $shift) % 26) + 97;
    
                // Convert the shifted ASCII value back to character
                $result .= chr($shiftedAscii);
            } else {
                // Leave non-alphabetic characters unchanged
                $result .= $char;
            }
        }
    
        return $result;
    }

    public function decrypt(Request $request)
    {
        $text = $request->input('text');
        $shift = $request->input('shift');
        $result = '';

    // Loop through each character in the text
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        // Decrypt alphabetic characters only
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $isUpperCase = ctype_upper($char);

            // Calculate the new ASCII value after shifting
            $shiftedAscii = $isUpperCase ? (($ascii - 65 - $shift + 26) % 26) + 65 : (($ascii - 97 - $shift + 26) % 26) + 97;

            // Convert the shifted ASCII value back to character
            $result .= chr($shiftedAscii);
        } else {
            // Leave non-alphabetic characters unchanged
            $result .= $char;
        }
    }

    return $result;
    }
}
