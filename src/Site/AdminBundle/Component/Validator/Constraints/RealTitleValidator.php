<?php
namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Description of RealTitleValidator
 *
 * @author boyer
 */
class RealTitleValidator extends ConstraintValidator {
    
    public function isValid($value, Constraint $constraint)
    {
        if (!preg_match("#Mec#", $value)) {
            $this->setMessage($constraint->message, array('{{ value }}' => $value));
            return false;
        }
        return true;
    }
}
?>
