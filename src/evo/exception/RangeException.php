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
class RangeException extends \RangeException implements \evo\exception\EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 945;

    /**
     *
     * {@inheritDoc}
     * @see \RangeException::__construct()
     */
    public function __construct($message = "", $code = 945, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}