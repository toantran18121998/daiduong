<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;

if (!defined('ABSPATH')) exit;


/**
 * Validates values are less than the previous (<).
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LessThanValidator extends \MailPoetVendor\Symfony\Component\Validator\Constraints\AbstractComparisonValidator
{
    /**
     * {@inheritdoc}
     */
    protected function compareValues($value1, $value2)
    {
        return null === $value2 || $value1 < $value2;
    }
    /**
     * {@inheritdoc}
     */
    protected function getErrorCode()
    {
        return \MailPoetVendor\Symfony\Component\Validator\Constraints\LessThan::TOO_HIGH_ERROR;
    }
}
