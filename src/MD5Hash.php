<?php
namespace FirstShuai\Hash;

/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2016/10/27
 * Time: 9:28
 */
class MD5Hash
{
    public function  make($value,array $option = [])
    {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5',$value.$salt);
    }
    public function check($value,$hashValue,array $options = [])
    {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5',$value.$salt) === $hashValue;
    }

}