<?php

namespace Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Model\Error;

/**
 * Class ErrorResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class ErrorResponse extends Response
{
    /**
     * @var Error[]
     */
    private $errors = [];

    /**
     * ErrorResponse constructor.
     *
     * @param array $errors
     */
    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @inheritdoc
     */
    public function isErrorResponse(): bool
    {
        return true;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @return Error
     */
    public function getFirstError(): Error
    {
        return $this->errors[0];
    }
}
