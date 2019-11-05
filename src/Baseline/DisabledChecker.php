<?php

namespace PHP_CodeSniffer\Baseline;

/**
 * Ignore checker.
 *
 * Can be used as a default and when the baseline is to be ignored on purpose.
 */
final class DisabledChecker implements CheckerInterface
{
    /**
     * @return bool
     */
    public function isIgnored()
    {
        return false;
    }
}
