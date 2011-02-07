<?php

namespace Application\FrontendBundle\Validator;

use Symfony\Component\Validator\Constraint;

class Category extends Constraint
{
    public $message = 'The category you selected {{ property }} does not exist.';
    public $property;

    public function defaultOption()
    {
        return 'property';
    }

    public function requiredOptions()
    {
        return array('property');
    }

    public function validatedBy()
    {
        return 'validator.doctrine_odm.mongodb.unique';
    }

    /**
     * @see Symfony\Component\Validator.Constraint::targets()
     */
    public function targets()
    {
        return Constraint::CLASS_CONSTRAINT;
    }
}
