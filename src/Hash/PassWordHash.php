<?php
namespace HasinHayder\StringUtility\Hash;
use HasinHayder\StringUtility\Contract\HashInterface;

class PassWordHash implements HashInterface {
    public static function hash( $data ): string {
        return password_hash( $data, PASSWORD_BCRYPT );
    }
}