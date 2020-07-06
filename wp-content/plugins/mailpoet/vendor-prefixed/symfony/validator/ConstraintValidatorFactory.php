<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MailPoetVendor\Symfony\Component\Validator;

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Symfony\Component\Validator\Constraints\ExpressionValidator;
/**
 * Default implementation of the ConstraintValidatorFactoryInterface.
 *
 * This enforces the convention that the validatedBy() method on any
 * Constraint will return the class name of the ConstraintValidator that
 * should validate the Constraint.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ConstraintValidatorFactory implements \MailPoetVendor\Symfony\Component\Validator\ConstraintValidatorFactoryInterface
{
    protected $validators = [];
    public function __construct()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getInstance(\MailPoetVendor\Symfony\Component\Validator\Constraint $constraint)
    {
        $className = $constraint->validatedBy();
        if (!isset($this->validators[$className])) {
            $this->validators[$className] = 'validator.expression' === $className ? new \MailPoetVendor\Symfony\Component\Validator\Constraints\ExpressionValidator() : new $className();
        }
        return $this->validators[$className];
    }
}
