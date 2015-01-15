<?php

namespace DhlInternational\Lib;

class ISService_1_0_de extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Version' => 'DhlInternational\\Lib\\Version',
      'AuthentificationType' => 'DhlInternational\\Lib\\AuthentificationType',
      'NativeAddressType' => 'DhlInternational\\Lib\\NativeAddressType',
      'PickupAddressType' => 'DhlInternational\\Lib\\PickupAddressType',
      'DeliveryAddressType' => 'DhlInternational\\Lib\\DeliveryAddressType',
      'BankType' => 'DhlInternational\\Lib\\BankType',
      'NameType' => 'DhlInternational\\Lib\\NameType',
      'Person' => 'DhlInternational\\Lib\\Person',
      'Company' => 'DhlInternational\\Lib\\Company',
      'CommunicationType' => 'DhlInternational\\Lib\\CommunicationType',
      'ContactType' => 'DhlInternational\\Lib\\ContactType',
      'PackStationType' => 'DhlInternational\\Lib\\PackStationType',
      'PostOfficeType' => 'DhlInternational\\Lib\\PostOfficeType',
      'CustomerType' => 'DhlInternational\\Lib\\CustomerType',
      'ErrorType' => 'DhlInternational\\Lib\\ErrorType',
      'ZipType' => 'DhlInternational\\Lib\\ZipType',
      'CountryType' => 'DhlInternational\\Lib\\CountryType',
      'ShipmentNumberType' => 'DhlInternational\\Lib\\ShipmentNumberType',
      'Status' => 'DhlInternational\\Lib\\Status',
      'Dimension' => 'DhlInternational\\Lib\\Dimension',
      'TimeFrame' => 'DhlInternational\\Lib\\TimeFrame',
      'DeveloperAuthentification' => 'DhlInternational\\Lib\\DeveloperAuthentification',
      'GetVersionResponse' => 'DhlInternational\\Lib\\GetVersionResponse',
      'CreateShipmentTDRequest' => 'DhlInternational\\Lib\\CreateShipmentTDRequest',
      'CreateShipmentDDRequest' => 'DhlInternational\\Lib\\CreateShipmentDDRequest',
      'CreateShipmentResponse' => 'DhlInternational\\Lib\\CreateShipmentResponse',
      'GetLabelTDRequest' => 'DhlInternational\\Lib\\GetLabelTDRequest',
      'GetLabelDDRequest' => 'DhlInternational\\Lib\\GetLabelDDRequest',
      'GetLabelResponse' => 'DhlInternational\\Lib\\GetLabelResponse',
      'DoManifestTDRequest' => 'DhlInternational\\Lib\\DoManifestTDRequest',
      'DoManifestDDRequest' => 'DhlInternational\\Lib\\DoManifestDDRequest',
      'DoManifestResponse' => 'DhlInternational\\Lib\\DoManifestResponse',
      'DeleteShipmentTDRequest' => 'DhlInternational\\Lib\\DeleteShipmentTDRequest',
      'DeleteShipmentDDRequest' => 'DhlInternational\\Lib\\DeleteShipmentDDRequest',
      'DeleteShipmentResponse' => 'DhlInternational\\Lib\\DeleteShipmentResponse',
      'GetExportDocTDRequest' => 'DhlInternational\\Lib\\GetExportDocTDRequest',
      'GetExportDocDDRequest' => 'DhlInternational\\Lib\\GetExportDocDDRequest',
      'GetExportDocResponse' => 'DhlInternational\\Lib\\GetExportDocResponse',
      'GetManifestDDRequest' => 'DhlInternational\\Lib\\GetManifestDDRequest',
      'manifestDateRange' => 'DhlInternational\\Lib\\manifestDateRange',
      'GetManifestDDResponse' => 'DhlInternational\\Lib\\GetManifestDDResponse',
      'UpdateShipmentDDRequest' => 'DhlInternational\\Lib\\UpdateShipmentDDRequest',
      'UpdateShipmentResponse' => 'DhlInternational\\Lib\\UpdateShipmentResponse',
      'CreationState' => 'DhlInternational\\Lib\\CreationState',
      'Statusinformation' => 'DhlInternational\\Lib\\Statusinformation',
      'PieceInformation' => 'DhlInternational\\Lib\\PieceInformation',
      'ShipmentOrderTDType' => 'DhlInternational\\Lib\\ShipmentOrderTDType',
      'Shipment' => 'DhlInternational\\Lib\\Shipment',
      'Pickup' => 'DhlInternational\\Lib\\Pickup',
      'ShipmentOrderDDType' => 'DhlInternational\\Lib\\ShipmentOrderDDType',
      'ShipperType' => 'DhlInternational\\Lib\\ShipperType',
      'ShipperTDType' => 'DhlInternational\\Lib\\ShipperTDType',
      'ShipperDDType' => 'DhlInternational\\Lib\\ShipperDDType',
      'ReceiverType' => 'DhlInternational\\Lib\\ReceiverType',
      'ReceiverTDType' => 'DhlInternational\\Lib\\ReceiverTDType',
      'ReceiverDDType' => 'DhlInternational\\Lib\\ReceiverDDType',
      'IdentityType' => 'DhlInternational\\Lib\\IdentityType',
      'ShipmentDetailsType' => 'DhlInternational\\Lib\\ShipmentDetailsType',
      'ShipmentDetailsTDType' => 'DhlInternational\\Lib\\ShipmentDetailsTDType',
      'Account' => 'DhlInternational\\Lib\\Account',
      'AccountPaidBy' => 'DhlInternational\\Lib\\AccountPaidBy',
      'ShipmentDetailsDDType' => 'DhlInternational\\Lib\\ShipmentDetailsDDType',
      'Attendance' => 'DhlInternational\\Lib\\Attendance',
      'ShipmentItemType' => 'DhlInternational\\Lib\\ShipmentItemType',
      'ShipmentItemTDType' => 'DhlInternational\\Lib\\ShipmentItemTDType',
      'ShipmentItemDDType' => 'DhlInternational\\Lib\\ShipmentItemDDType',
      'ShipmentServiceTD' => 'DhlInternational\\Lib\\ShipmentServiceTD',
      'TDServiceGroupDateTimeOptionType' => 'DhlInternational\\Lib\\TDServiceGroupDateTimeOptionType',
      'ExpressSaturday' => 'DhlInternational\\Lib\\ExpressSaturday',
      'TDServiceGroupOtherType' => 'DhlInternational\\Lib\\TDServiceGroupOtherType',
      'Insurance' => 'DhlInternational\\Lib\\Insurance',
      'ShipmentServiceDD' => 'DhlInternational\\Lib\\ShipmentServiceDD',
      'DDServiceGroupDateTimeOptionType' => 'DhlInternational\\Lib\\DDServiceGroupDateTimeOptionType',
      'DeliveryOnTime' => 'DhlInternational\\Lib\\DeliveryOnTime',
      'DDShipmentServiceGroupIdentType' => 'DhlInternational\\Lib\\DDShipmentServiceGroupIdentType',
      'Ident' => 'DhlInternational\\Lib\\Ident',
      'IdentExtra' => 'DhlInternational\\Lib\\IdentExtra',
      'IdentPremium' => 'DhlInternational\\Lib\\IdentPremium',
      'ContractSubmission' => 'DhlInternational\\Lib\\ContractSubmission',
      'SMSAviso' => 'DhlInternational\\Lib\\SMSAviso',
      'CheckMinimumAge' => 'DhlInternational\\Lib\\CheckMinimumAge',
      'DDShipmentServiceGroupPickupType' => 'DhlInternational\\Lib\\DDShipmentServiceGroupPickupType',
      'DDServiceGroupBusinessPackInternationalType' => 'DhlInternational\\Lib\\DDServiceGroupBusinessPackInternationalType',
      'Endorsement' => 'DhlInternational\\Lib\\Endorsement',
      'DDServiceGroupDHLPaketType' => 'DhlInternational\\Lib\\DDServiceGroupDHLPaketType',
      'ShipmentAdvisory' => 'DhlInternational\\Lib\\ShipmentAdvisory',
      'AdvisoryData' => 'DhlInternational\\Lib\\AdvisoryData',
      'EndorsementServiceconfiguration' => 'DhlInternational\\Lib\\EndorsementServiceconfiguration',
      'EndorsementServiceconfigurationTeZu' => 'DhlInternational\\Lib\\EndorsementServiceconfigurationTeZu',
      'DDServiceGroupOtherType' => 'DhlInternational\\Lib\\DDServiceGroupOtherType',
      'HigherInsurance' => 'DhlInternational\\Lib\\HigherInsurance',
      'COD' => 'DhlInternational\\Lib\\COD',
      'Unfree' => 'DhlInternational\\Lib\\Unfree',
      'DangerousGoods' => 'DhlInternational\\Lib\\DangerousGoods',
      'Bulkfreight' => 'DhlInternational\\Lib\\Bulkfreight',
      'ShipmentNotificationType' => 'DhlInternational\\Lib\\ShipmentNotificationType',
      'ExportDocumentTDType' => 'DhlInternational\\Lib\\ExportDocumentTDType',
      'ExportDocPosition' => 'DhlInternational\\Lib\\ExportDocPosition',
      'ExportDocumentDDType' => 'DhlInternational\\Lib\\ExportDocumentDDType',
      'FurtherAddressesDDType' => 'DhlInternational\\Lib\\FurtherAddressesDDType',
      'DeliveryAdress' => 'DhlInternational\\Lib\\DeliveryAdress',
      'LabelData' => 'DhlInternational\\Lib\\LabelData',
      'ExportDocData' => 'DhlInternational\\Lib\\ExportDocData',
      'ManifestState' => 'DhlInternational\\Lib\\ManifestState',
      'DeletionState' => 'DhlInternational\\Lib\\DeletionState',
      'BookPickupRequest' => 'DhlInternational\\Lib\\BookPickupRequest',
      'BookPickupResponse' => 'DhlInternational\\Lib\\BookPickupResponse',
      'PickupDetailsType' => 'DhlInternational\\Lib\\PickupDetailsType',
      'PickupOrdererType' => 'DhlInternational\\Lib\\PickupOrdererType',
      'PickupBookingInformationType' => 'DhlInternational\\Lib\\PickupBookingInformationType',
      'CancelPickupRequest' => 'DhlInternational\\Lib\\CancelPickupRequest',
      'CancelPickupResponse' => 'DhlInternational\\Lib\\CancelPickupResponse',
      'IdentityData' => 'DhlInternational\\Lib\\IdentityData',
      'DrivingLicense' => 'DhlInternational\\Lib\\DrivingLicense',
      'IdentityCard' => 'DhlInternational\\Lib\\IdentityCard',
      'BankCard' => 'DhlInternational\\Lib\\BankCard',
      'PackstationType' => 'DhlInternational\\Lib\\PackstationType',
      'PostfilialeType' => 'DhlInternational\\Lib\\PostfilialeType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://cig.dhl.de/cig-wsdls/com/dpdhl/wsdl/geschaeftskundenversand-api/1.0/geschaeftskundenversand-api-1.0.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates TD shipments.
     *
     * @param CreateShipmentTDRequest $part1
     * @return CreateShipmentResponse
     */
    public function createShipmentTD(CreateShipmentTDRequest $part1)
    {
      return $this->__soapCall('createShipmentTD', array($part1));
    }

    /**
     * Creates DD shipments.
     *
     * @param CreateShipmentDDRequest $part1
     * @return CreateShipmentResponse
     */
    public function createShipmentDD(CreateShipmentDDRequest $part1)
    {
      return $this->__soapCall('createShipmentDD', array($part1));
    }

    /**
     * Deletes the requested TD shipments.
     *
     * @param DeleteShipmentTDRequest $part1
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentTD(DeleteShipmentTDRequest $part1)
    {
      return $this->__soapCall('deleteShipmentTD', array($part1));
    }

    /**
     * Deletes the requested DD shipments.
     *
     * @param DeleteShipmentDDRequest $part1
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentDD(DeleteShipmentDDRequest $part1)
    {
      return $this->__soapCall('deleteShipmentDD', array($part1));
    }

    /**
     * Manifest the requested TD shipments.
     *
     * @param DoManifestTDRequest $part1
     * @return DoManifestResponse
     */
    public function doManifestTD(DoManifestTDRequest $part1)
    {
      return $this->__soapCall('doManifestTD', array($part1));
    }

    /**
     * Manifest the requested DD shipments.
     *
     * @param DoManifestDDRequest $part1
     * @return DoManifestResponse
     */
    public function doManifestDD(DoManifestDDRequest $part1)
    {
      return $this->__soapCall('doManifestDD', array($part1));
    }

    /**
     * Returns the request-url for getting a TD label.
     *
     * @param GetLabelTDRequest $part1
     * @return GetLabelResponse
     */
    public function getLabelTD(GetLabelTDRequest $part1)
    {
      return $this->__soapCall('getLabelTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD label.
     *
     * @param GetLabelDDRequest $part1
     * @return GetLabelResponse
     */
    public function getLabelDD(GetLabelDDRequest $part1)
    {
      return $this->__soapCall('getLabelDD', array($part1));
    }

    /**
     * Books a pickup order.
     *
     * @param BookPickupRequest $part1
     * @return BookPickupResponse
     */
    public function bookPickup(BookPickupRequest $part1)
    {
      return $this->__soapCall('bookPickup', array($part1));
    }

    /**
     * Cancels a pickup order.
     *
     * @param CancelPickupRequest $part1
     * @return CancelPickupResponse
     */
    public function cancelPickup(CancelPickupRequest $part1)
    {
      return $this->__soapCall('cancelPickup', array($part1));
    }

    /**
     * Returns the actual version of the implementation of the whole ISService webservice.
     *
     * @param Version $part1
     * @return GetVersionResponse
     */
    public function getVersion(Version $part1)
    {
      return $this->__soapCall('getVersion', array($part1));
    }

    /**
     * Returns the request-url for getting a TD export document.
     *
     * @param GetExportDocTDRequest $part1
     * @return GetExportDocResponse
     */
    public function getExportDocTD(GetExportDocTDRequest $part1)
    {
      return $this->__soapCall('getExportDocTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD  export document.
     *
     * @param GetExportDocDDRequest $part1
     * @return GetExportDocResponse
     */
    public function getExportDocDD(GetExportDocDDRequest $part1)
    {
      return $this->__soapCall('getExportDocDD', array($part1));
    }

    /**
     * Request the manifest.
     *
     * @param GetManifestDDRequest $part1
     * @return GetManifestDDResponse
     */
    public function getManifestDD(GetManifestDDRequest $part1)
    {
      return $this->__soapCall('getManifestDD', array($part1));
    }

    /**
     * Updates a DD shipment.
     *
     * @param UpdateShipmentDDRequest $part1
     * @return UpdateShipmentResponse
     */
    public function updateShipmentDD(UpdateShipmentDDRequest $part1)
    {
      return $this->__soapCall('updateShipmentDD', array($part1));
    }

}
