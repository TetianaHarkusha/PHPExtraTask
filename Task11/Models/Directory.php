<?php

declare(strict_types=1);

namespace Task11;

use Task11\Tree;

class Directory extends Tree
{
    /**
     * The static method that finds subdirectories (with a full path)
     * one level down directories from the array
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public static function listSubDir(array $listDir): array
    {
        $listDNew = [];
        foreach ($listDir as $dir) {
            $listDNew = array_merge($listDNew, glob($dir . '\\*', GLOB_ONLYDIR));
        }
        return $listDNew;
    }

    /**
     * The static method that finds files and subdirectories (with a full path)
     * to directories from the array,
     * without searching in subdirectories
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public static function listDirAndFile(array $listDir): array
    {
        $listDF = [];
        foreach ($listDir as $dir) {
            $listDF = array_merge($listDF, glob($dir . '\\*'));
        }
        sort($listDF);
        return $listDF;
    }

    /**
     * The static method that finds files (with a full path)
     * to directories from the array,
     * without searching in subdirectories
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public static function listFile(array $listDir): array
    {
        $listDF = self::listDirAndFile($listDir);
        $listD = self::listSubDir($listDir);
        $listF = array_diff($listDF, $listD);
        return $listF;
    }

     /**
     * The static method that adds all subdirectories (with a full path)
     * to directories from the array
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public static function listAllDir(array $listDir): array
    {
        $listAllDir = array_merge([], $listDir);
        do {
            $listSubDir = self::listSubDir($listDir);
            $listAllDir = array_merge($listAllDir, $listSubDir);
            $listDir = array_merge([], $listSubDir);
        } while ($listSubDir);
        sort($listAllDir);
        return $listAllDir;
    }

    /**
     * The method that finds the most common file name in a directory
     * and number of matches
     *
     * @param Directory $dir The object class Directory
     * @return array ['count', 'name'])
     */
    public function mostCommonName(Directory $dir): array
    {
        $listDir[] = $dir->name;
        $list = self::listDirAndFile(self::listAllDir($listDir));
        foreach ($list as $key => $obj) {
            $list[$key] = basename($obj);
        }
        $list = array_count_values($list);
        $resMax['count'] = max($list);
        $resMax['name'] = array_search($resMax['count'], $list);
        return $resMax;
    }
}