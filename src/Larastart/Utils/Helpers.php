<?php
/** Larastart
 *
 * (The MIT license)
 * Copyright (c) 2017 andrealeixo.com
 */

namespace Larastart\Utils;

class Helpers
{

    public static function getStorage($storagePath, $defaultStoragePath)
    {
        if (realpath($storagePath) === false) {
            return getcwd().DIRECTORY_SEPARATOR.$storagePath.$defaultStoragePath;
        }

        return realpath($storagePath).$defaultStoragePath;
    }
}
