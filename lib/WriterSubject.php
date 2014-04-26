<?php

namespace Aerys;

class WriterSubject {
    public $socket;
    public $writeWatcher;
    public $mustClose;
    public $dateHeader;
    public $serverHeader;
    public $keepAliveHeader;
    public $defaultContentType;
    public $defaultTextCharset;
    public $autoReasonPhrase;
    public $debug;
}
