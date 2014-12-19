<?php
/**
 * Created by PhpStorm.
 * User: Maikel
 * Date: 12/19/2014
 * Time: 14:09
 */

namespace Chronos\PHPDepGraph;

/**
 * Class for handling the options used in the PHPDepGraph application. Can be initialized from the commandline arguments.
 * @package Chronos\PHPDepGraph
 */
class Options
{

    public function __construct($argv = null)
    {
        if (!is_null($argv)) {
            $this->parseOptionArray($argv);
        } else {
            throw new \InvalidArgumentException("Options array should not be null.");
        }
    }

    /**
     * Parses the option array and sets the appropriate options.
     *
     * @param array $array Array containing options.
     */
    private function parseOptionArray(Array $array)
    {
        // -1 is here because the last argument should always be object to scan.
        for ($i = 0; $i < count($array) - 1; $i++) {
            switch ($array[$i]) {
                case '-r':
                    $this->RecursiveDependencyScan = true;
                    break;
            }
        }

        $this->ObjectToScan = $array[count($array) - 1];
    }

    /**
     * Decides whether a recursive dependency scan is done. If false it only scans the specified file or class. When true
     * it recursively scans all the dependencies.
     *
     * default value: false
     *
     * @var bool
     */
    public $RecursiveDependencyScan = false;

    /**
     * List of all file extensions that are considered PHP files by the grapher.
     *
     * default value: [".php", ".php5", ".php4"]
     *
     * @var array
     */
    public $PHPExtensions = array(".php", ".php5", ".php4");

    /**
     * default value: null
     *
     * @var String Object to scanned. Can be filepath or classname.
     */
    public $ObjectToScan = null;
} 