<?php
namespace HasinHayder\StringUtility;
use HasinHayder\StringUtility\Hash\MD5Hash;
use HasinHayder\StringUtility\Hash\PassWordHash;
use HasinHayder\StringUtility\Hash\Sha1Hash;
use HasinHayder\StringUtility\Hash\Sha256Hash;

class StringUtility {
    public static function createMD5Hash( $data ) {
        return MD5Hash::hash( $data );
    }

    public static function createSha1Hash( $data ) {
        return Sha1Hash::hash( $data );
    }

    public static function createSha256Hash( $data ) {
        return Sha256Hash::hash( $data );
    }

    public static function createPassWordHash( $data ) {
        return PassWordHash::hash( $data );
    }
}