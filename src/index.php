<?php

    /**
     * Project starter
     * Code should follow the PSR-12: Coding Style
     * @url: https://www.php-fig.org/psr/psr-12/
     */
    declare(strict_types=1);

    namespace Project;

    // Load composer components
    require_once dirname(__DIR__).'/vendor/autoload.php';

    /**
     * Console interface class
     */
    class App
    {
        public function __construct()
        {
            echo 'foo';
        }

        public function foo(): string
        {
            return 'bar';
        }
    }

    new App();
