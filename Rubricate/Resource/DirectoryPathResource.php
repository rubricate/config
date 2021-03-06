<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/resource
 * @copyright   2017 - 2018
 * 
 */



namespace Rubricate\Resource;


class DirectoryPathResource implements IDirectoryPathResource
{
    private $dirPath;



    public function __construct($dirPath = null)
    {
        self::init($dirPath);
    }


    public function getDirectoryPath()
    {
        return $this->dirPath;
    } 



    private function init($dir)
    {
        $dir     = (!empty($dir))? $dir: '.';
        $dirPath = rtrim($dir, '\\/') . DIRECTORY_SEPARATOR;


        if(!is_dir($dirPath)){
            throw new \Exception(sprintf(
                 "Directory Not Found.\npath:'%s'\n", $dirPath
            ));
        }


        $this->dirPath = $dirPath;

        return $this;


    } 

}

