<?php
/**
 * Alpha Validator
 */
class Alpha {

    /**
     * @param null $value
     * @return bool
     */
    public static function validate($value = null){
        if(empty($value))return false;

        if(ctype_alpha($value)){
            return true;
        }
        return false;
    }
}