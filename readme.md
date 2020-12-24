##Usage
```php
    $browser = new \Browser\BrowserBuilder();
    \preloader\debug([
        'type' => $browser->parser()->getType(),
        'browser' => $browser->parser()->getBrowser(),
        'version' => $browser->parser()->getVersion()
    ]);
```
##Todo list
- Create preloader class
- Clean up borwser modules
- Organizte const