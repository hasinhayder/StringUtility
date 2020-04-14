<?php
namespace HasinHayder\StringUtility\Hash;

use HasinHayder\StringUtility\Contract\HashInterface;

class Sha256Hash implements HashInterface {
    public static function hash( $data ): string {
        return bin2hex( mhash( MHASH_SHA256, $data ) );
    }
}