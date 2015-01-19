<?php

namespace DhlInternational\Lib;

class ShipmentCustom
{

    /**
     * @var ShipmentDetailsDDType $ShipmentDetails
     */
    protected $ShipmentDetails = null;

    /**
     * @var ShipperDDType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var ReceiverDDType $Receiver
     */
    protected $Receiver = null;

    /**
     * @var ExportDocumentDDType $ExportDocument
     */
    protected $ExportDocument = null;

    /**
     * @var IdentityType $Identity
     */
    protected $Identity = null;

    /**
     * @var FurtherAddressesDDType $FurtherAddresses
     */
    protected $FurtherAddresses = null;

    /**
     * @param ShipmentDetailsDDType $ShipmentDetails
     * @param ShipperDDType $Shipper
     * @param ReceiverDDType $Receiver
     * @param ExportDocumentDDType $ExportDocument
     * @param IdentityType $Identity
     * @param FurtherAddressesDDType $FurtherAddresses
     */
    public function __construct($ShipmentDetails = null, $Shipper = null, $Receiver = null, $ExportDocument = null, $Identity = null, $FurtherAddresses = null)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      $this->Shipper = $Shipper;
      $this->Receiver = $Receiver;
      $this->ExportDocument = $ExportDocument;
      $this->Identity = $Identity;
      $this->FurtherAddresses = $FurtherAddresses;
    }

    /**
     * @return ShipmentDetailsDDType
     */
    public function getShipmentDetails()
    {
      return $this->ShipmentDetails;
    }

    /**
     * @param ShipmentDetailsDDType $ShipmentDetails
     * @return \DhlInternational\Lib\Shipment
     */
    public function setShipmentDetails($ShipmentDetails)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      return $this;
    }

    /**
     * @return ShipperDDType
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param ShipperDDType $Shipper
     * @return \DhlInternational\Lib\Shipment
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return ReceiverDDType
     */
    public function getReceiver()
    {
      return $this->Receiver;
    }

    /**
     * @param ReceiverDDType $Receiver
     * @return \DhlInternational\Lib\Shipment
     */
    public function setReceiver($Receiver)
    {
      $this->Receiver = $Receiver;
      return $this;
    }

    /**
     * @return ExportDocumentDDType
     */
    public function getExportDocument()
    {
      return $this->ExportDocument;
    }

    /**
     * @param ExportDocumentDDType $ExportDocument
     * @return \DhlInternational\Lib\Shipment
     */
    public function setExportDocument($ExportDocument)
    {
      $this->ExportDocument = $ExportDocument;
      return $this;
    }

    /**
     * @return IdentityType
     */
    public function getIdentity()
    {
      return $this->Identity;
    }

    /**
     * @param IdentityType $Identity
     * @return \DhlInternational\Lib\Shipment
     */
    public function setIdentity($Identity)
    {
      $this->Identity = $Identity;
      return $this;
    }

    /**
     * @return FurtherAddressesDDType
     */
    public function getFurtherAddresses()
    {
      return $this->FurtherAddresses;
    }

    /**
     * @param FurtherAddressesDDType $FurtherAddresses
     * @return \DhlInternational\Lib\Shipment
     */
    public function setFurtherAddresses($FurtherAddresses)
    {
      $this->FurtherAddresses = $FurtherAddresses;
      return $this;
    }

}
