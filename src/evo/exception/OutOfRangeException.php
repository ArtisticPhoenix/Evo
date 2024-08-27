<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception handler
 *
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Evo
 * @link https://github.com/ArtisticPhoenix//issues
 * @version 1.0.0
 * @license 
 * @eJinn:buildVersion 2.0.0
 * @eJinn:buildTime 1724726717.6419
 */
class OutOfRangeException extends \OutOfRangeException implements \evo\exception\EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 935;

    /**
     *
     * {@inheritDoc}
     * @see \OutOfRangeException::__construct()
     */
    public function __construct($message = "", $code = 935, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}