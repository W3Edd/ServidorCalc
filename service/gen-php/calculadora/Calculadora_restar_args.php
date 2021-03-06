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

class Calculadora_restar_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'minuendo',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'sustraendo',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $minuendo = null;
    /**
     * @var int
     */
    public $sustraendo = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['minuendo'])) {
                $this->minuendo = $vals['minuendo'];
            }
            if (isset($vals['sustraendo'])) {
                $this->sustraendo = $vals['sustraendo'];
            }
        }
    }

    public function getName()
    {
        return 'Calculadora_restar_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->minuendo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->sustraendo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('Calculadora_restar_args');
        if ($this->minuendo !== null) {
            $xfer += $output->writeFieldBegin('minuendo', TType::I32, 1);
            $xfer += $output->writeI32($this->minuendo);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sustraendo !== null) {
            $xfer += $output->writeFieldBegin('sustraendo', TType::I32, 2);
            $xfer += $output->writeI32($this->sustraendo);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
