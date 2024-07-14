<?php

function detectaSqlInjection($input) {
            $padrões = [
                '/\bSELECT\b/i',
                '/\bINSERT\b/i',
                '/\bUPDATE\b/i',
                '/\bDELETE\b/i',
                '/\bDROP\b/i',
                '/\bUNION\b/i',
                '/--/',
                '/;/', 
                '/\'/',
                '/"/',
                '/\/\*/',
                '/\*\//'
            ];

            foreach ($padrões as $p) {
                if (preg_match($p, $input)) {
                    return true;
                }
            }
            return false;
        }