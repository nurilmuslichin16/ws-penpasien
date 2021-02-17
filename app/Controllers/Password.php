<?php

namespace App\Controllers;

class Password extends BaseController
{
    public function index()
    {
        $config         = new \Config\Encryption();
        $config->key    = 'aBigsecret_ofAtleast32Characters';
        $config->driver = 'OpenSSL';
        $enkripsi = \Config\Services::encrypter($config);

        $pass = "admin";
        $cipherText = $enkripsi->encrypt($pass);

        echo $cipherText;

        $cek = $enkripsi->decrypt($cipherText);
        if ($cek == "admin ") {
            echo "Password Benar";
        } else {
            echo "Password Salah";
        }
    }
}
