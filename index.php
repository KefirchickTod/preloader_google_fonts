<?php
    include_once "vendor/autoload.php";

    $browser = new \Browser\BrowserBuilder();
    \preloader\debug([
        'type' => $browser->parser()->getType(),
        'browser' => $browser->parser()->getBrowser(),
        'version' => $browser->parser()->getVersion()
    ]);



