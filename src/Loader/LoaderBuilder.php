<?php


namespace Loader;


use Browser\BrowserBuilder;

class LoaderBuilder
{


    /**
     * @var BrowserBuilder
     */
    private $browserBuilder;

    private $callback;

    private $type;

    private $folder;

    public function __construct(BrowserBuilder $browserBuilder)
    {
        $this->browserBuilder = $browserBuilder;
    }


    public function bind(callable $callback)
    {
        $callback->bindTo($this->browserBuilder);
        $this->callback = $callback;
        return $this;
    }


    public function parserFolder(string $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    public function setType(int $type)
    {

        $this->type = $type;
        return $this;
    }

    public function render()
    {
        $preLoader = new PreLoaderRender();

        return '';
    }

    public function __toString()
    {
        return "";
    }


}