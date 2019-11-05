<?php

namespace PHP_CodeSniffer\Baseline;

final class DefinitionChecker implements CheckerInterface
{
    /**
     * @param string $filename
     */
    public function __construct($filename)
    {
        $this->parseDefinitionFile($filename);
    }

    /**
     * @return bool
     */
    public function isIgnored()
    {
        return false;
    }

    private function parseDefinitionFile($filename)
    {
        // read the definition file
    }
}
