<?php

declare(strict_types=1);

namespace Tests\Tempest\Unit\Validation;

use PHPUnit\Framework\TestCase;
use Tempest\Validation\Exceptions\ValidationException;
use Tempest\Validation\GenericValidator;
use Tests\Tempest\Unit\Validation\Fixtures\ObjectToBeValidated;

/**
 * @internal
 * @small
 */
class ValidatorTest extends TestCase
{
    public function test_validator()
    {
        $this->expectException(ValidationException::class);

        $validator = new GenericValidator();

        $validator->validate(new ObjectToBeValidated(name: 'a'));
    }
}
