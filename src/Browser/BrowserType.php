<?php


namespace Browser;


use function preloader\debug;

class BrowserType
{

    const BROWSER_TYPE_CHROME = 1;
    const BROWSER_TYPE_MOZILLA = 2;
    const BROWSER_TYPE_OPERA = 3;
    const BROWSER_TYPE_EXPLOLER = 4;
    const BROWSER_TYPE_YANDEX = 5;
    const BROWSER_TYPE_TOR = 6;

    const BROWSER_TYPE_UNDEFINDED = 0;
    /**
     * @var \ReflectionClass
     */
    protected $reflaction;

    private $type;

    public function __construct()
    {
        $this->reflaction = new \ReflectionClass(__CLASS__);
    }

    public function getNameByValue(int $val){
        $const = $this->all();
        foreach ($const as $name => $value){
            if($val == $value){
                return $name;
            }
        }
        return "Undefined";
    }

    public function all()
    {
        $const = $this->reflaction->getConstants();

        if (!$const) {
            throw new \RuntimeException("Cant load cont of class " . __CLASS__);
        }

        return $const;

    }

    public function getType(){
        return $this->type;
    }

    public function getConstType(string $key)
    {
        $key = strtoupper($key);
        if ($this->reflaction->getConstant("BROWSER_TYPE_{$key}")) {
            $this->type = "BROWSER_TYPE_{$key}";
            return $this->reflaction->getConstant($this->type);
        }
        switch ($key) {
            default:
                return self::BROWSER_TYPE_UNDEFINDED;
        }


    }

}