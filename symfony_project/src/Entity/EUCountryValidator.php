<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EUCountryValidator extends ConstraintValidator
{

    public function validate(mixed $value, Constraint $constraint)
    {
        // TODO: Implement validate() method.
        if(!in_array($value, ['Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden'])){
            $this->context->buildViolation(($constraint->message))->addViolation();
        }
    }
}