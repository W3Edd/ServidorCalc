<?php
namespace calculadora;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

interface CalculadoraIf
{
    /**
     * @param int $numero1
     * @param int $numero2
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function sumar($numero1, $numero2);
    /**
     * @param int $minuendo
     * @param int $sustraendo
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function restar($minuendo, $sustraendo);
    /**
     * @param int $factor1
     * @param int $factor2
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function multiplicar($factor1, $factor2);
    /**
     * @param int $dividendo
     * @param int $divisor
     * @return double
     * @throws \calculadora\CalculadoraException
     */
    public function dividir($dividendo, $divisor);
}