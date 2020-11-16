<?php

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function DummyFunction()
    {
    }
}
function unik()
{
    return Generator::uuid4()->toString();
}
function salam($jam)
{
    $b = strtotime($jam);
    $hour = date("G", $b);

    if ($hour >= 0 && $hour <= 11) {
        return "Selamat Pagi ";
    } elseif ($hour >= 12 && $hour <= 14) {
        return "Selamat Siang ";
    } elseif ($hour >= 15 && $hour <= 17) {
        return "Selamat Petang  ";
    } elseif ($hour >= 17 && $hour <= 18) {
        return "Selamat Malam ";
    } elseif ($hour >= 19 && $hour <= 23) {
        return "Selamat Malam ";
    }
}
function slug($data)
{
    return Str::slug($data, '-');
}
