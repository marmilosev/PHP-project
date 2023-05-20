<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraint;

class EUCountry extends Constraint
{
    public $message = 'The country should be a valid European Union country.';
}