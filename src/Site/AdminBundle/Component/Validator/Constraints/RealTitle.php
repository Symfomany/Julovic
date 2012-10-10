<?php

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RealTitle extends Constraint {

    public $message = 'This value should have a word "Mec"';
    public function validatedBy() {
           return 'alias_realtitle';
    }
    public function requiredOptions()
    {
        return array('entity', 'property');
    }
    public function targets()
    {
        return self::PROPERTY_CONSTRAINT;
    }
}

?>
