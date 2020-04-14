<?php
namespace HasinHayder\StringUtility\Hash;
use HasinHayder\StringUtility\Contract\HashInterface;

class Sha1Hash implements HashInterface {
    public static function hash( $data ): string {
        return sha1( $data );
    }
}