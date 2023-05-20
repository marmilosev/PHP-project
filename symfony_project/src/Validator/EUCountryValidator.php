<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EUCountryValidator extends ConstraintValidator
{
    private const EU_COUNTRIES = [
        'Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Republic of Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany',
        'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands',
        'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'Spain', 'Sweden'
    ];

    public function validate($value, Constraint $constraint)
    {
        // TODO: Implement validate() method.
        if(!in_array($value, self::EU_COUNTRIES, true)){
            $this->context->buildViolation(($constraint->message))
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}