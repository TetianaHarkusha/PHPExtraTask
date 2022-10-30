<?php

declare(strict_types=1);

namespace Task11;

use Task11\Directory;
use Task11\File;
use Exception;

//The class with the set of methods for working with tree directories and files
class Tree
{
    /**
     * The method that created an object of a class Directory or File
     * one level down directories from the array
     *
     * @param string $name The directory or file full 
     * @return Directory or File
     */
    public function directoryOrFile(string $name)
    {
        if (!is_dir($name) and !is_file($name)) {
            throw new Exception('The directory or the file with that name does not exist');
        }
        if (is_file($name)) {
            echo 'Файл: ';
            return new File($name);
        }
        if (is_dir($name)) {
            echo 'Директорія: ';
            return new Directory($name);
        }
    }
    
    /**
     * The method that finds subdirectories (with a full path)
     * one level down directories from the array
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public function listSubDir(array $listDir): array
    {
        $listDNew = [];
        foreach ($listDir as $dir) {
            $listDNew = array_merge($listDNew, glob($dir . '\\*', GLOB_ONLYDIR));
        }
        return $listDNew;
    }

    /**
     * The method that finds files and subdirectories (with a full path)
     * to directories from the array,
     * without searching in subdirectories
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public function listDirAndFile(array $listDir): array
    {
        $listDF = [];
        foreach ($listDir as $dir) {
            $listDF = array_merge($listDF, glob($dir . '\\*'));
        }
        sort($listDF);
        return $listDF;
    }

    /**
     * The method that finds files (with a full path)
     * to directories from the array,
     * without searching in subdirectories
     *
     * @param array $listDir The list of directories with a full path
     * @return array
     */
    public function listFile(array $listDir): array
    {
        $listDF = $this->listDirAndFile($listDir);
        $listD = $this->listSubDir($listDir);
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
    public function listAllDir(array $listDir): array
    {
        $listAllDir = array_merge([], $listDir);
        do {
            $listSubDir = $this->listSubDir($listDir);
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
        $listDir[] = $dir->getName();
        $list = $this->listDirAndFile($this->listAllDir($listDir));
        foreach ($list as $key => $obj) {
            $list[$key] = basename($obj);
        }
        $list = array_count_values($list);
        $resMax['count'] = max($list);
        $resMax['name'] = array_search($resMax['count'], $list);
        return $resMax;
    }
}
