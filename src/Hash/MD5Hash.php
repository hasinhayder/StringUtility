<?php
namespace HasinHayder\StringUtility\Hash;
use HasinHayder\StringUtility\Contract\HashInterface;

class MD5Hash implements HashInterface {
    public static function hash( $data ): string {
        return md5( $data );
    }
}