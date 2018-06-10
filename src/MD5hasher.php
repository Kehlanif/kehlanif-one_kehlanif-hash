<?php

/**
 * Created by PhpStorm.
 * User: L
 * Date: 2018/6/9
 * Time: 23:03
 */

namespace laravist\hash;

/**
 * Class MD5hasher
 * @package laravist\hash
 */
class MD5hasher
{
    /**
     * @param $value
     * @param array $option
     * @return string
     */
    public function make($value, array $option=[])
    {
        $salt = isset($option['salt'])?$option['salt']:'';
        return hash('md5',$value.$option['salt']);//指定加密算法为md5
    }

    /**
     * @param $value
     * @param $hash
     * @param array $option
     * @return bool
     */
    public function check($value, $hash, array $option=[])
    {
        $salt = isset($option['salt'])?$option['salt']:'';
        return hash('md5',$value.$salt)===$hash;
    }
}