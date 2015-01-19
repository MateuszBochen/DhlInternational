<?php

namespace DhlInternational\Lib;

class PieceInformationCustom
{

    /**
     * @var ShipmentNumberType $PieceNumber
     */
    protected $PieceNumber = null;

    /**
     * @param ShipmentNumberType $PieceNumber
     */
    public function __construct($PieceNumber = null)
    {
      $this->PieceNumber = $PieceNumber;
    }

    /**
     * @return ShipmentNumberType
     */
    public function getPieceNumber()
    {
      return $this->PieceNumber;
    }

    /**
     * @param ShipmentNumberType $PieceNumber
     * @return \DhlInternational\Lib\PieceInformation
     */
    public function setPieceNumber($PieceNumber)
    {
      $this->PieceNumber = $PieceNumber;
      return $this;
    }

}
