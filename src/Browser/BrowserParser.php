<?php


namespace Browser;


use function preloader\debug;

class BrowserParser
{


    public static $BROWSER_POSITION = 10;
    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var BrowserType
     */
    private $browserType;

    private $browser;
    private $version;

    private $type;


    public function __construct(BrowserType $browserType)
    {

        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->browserType = $browserType;

    }

    public function parse()
    {
        $browser = explode(" ", $this->userAgent)[self::$BROWSER_POSITION] ?? null;
        if (!$browser) {
            debug($browser);
        }
        [$this->browser, $this->version] = explode("/", $browser);

        $this->type = $this->browserType->getConstType($this->browser);

    }

    public function getType()
    {
        return $this->type;
    }

    public function getBrowser()
    {
        return $this->browser;
    }

    public function getVersion()
    {
        return $this->version;
    }
}