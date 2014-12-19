<?php
/**
 * Created by PhpStorm.
 * User: Maikel
 * Date: 12/19/2014
 * Time: 15:30
 */

namespace Chronos\PHPDepGraph;

/**
 * Class Grapher
 * @package Chronos\PHPDepGraph
 */
class Grapher
{
    private $options;

    public function __construct(Options $options)
    {
        $this->options = $options;
    }

    /**
     * Creates a dependency tree and outputs it to the specified output format.
     */
    public function Graph()
    {

    }
} 