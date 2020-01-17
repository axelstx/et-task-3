<?php

namespace Classes;

class File
{
    public static function getFromFile(string $fileName): array
    {
        $file = file_get_contents($fileName);
        $array = json_decode($file, TRUE);
        unset($file);
        return $array;
    }

    public static function saveToFile(string $fileName, array $data): void
    {
        $file = file_get_contents($fileName);
        $array = json_decode($file, TRUE);
        unset($file);
        $array[] = $data;
        file_put_contents($fileName, json_encode($array));
        unset($array);
    }
}
