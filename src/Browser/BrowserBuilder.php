<?php


namespace Browser;

use function preloader\debug;

/**
 * Class BrowserBuilder
 * @package Browser
 */
class BrowserBuilder
{


    /**
     * @var BrowserType
     */
    protected $type;

    /**
     * @var BrowserParser
     */
    protected $parser;

    public function __construct()
    {

        $this->parser = new BrowserParser(new BrowserType());
        $this->parser->parse();
    }

    /**
     * @return BrowserParser
     */
    public function parser()
    {
        return $this->parser;
    }

}