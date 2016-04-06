<?php
namespace PaulGibbs\WordpressBehatExtension\Context;

use Behat\MinkExtension\Context\MinkContext;
use PaulGibbs\WordpressBehatExtension\Context\Initializer\WordpressContextInitializer;
use PaulGibbs\WordpressBehatExtension\Context\DatabaseTransactions;

class WordpressContext extends MinkContext
{
    use DatabaseTransactions;

    /**
     * @var WordpressContextInitializer
     */
    protected $contextInitializer = null;


    /**
     * Set reference back to this context's initializer.
     *
     * @param array $parameters
     */
    public function setContextInitializer(WordpressContextInitializer $initializer)
    {
        $this->contextInitializer = $initializer;
    }
}