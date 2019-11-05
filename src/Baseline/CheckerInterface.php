<?php

namespace PHP_CodeSniffer\Baseline;

interface CheckerInterface
{
    /**
     * @return bool
     */
    public function isIgnored();
}
