<?php

namespace DhlInternational\Lib;

class ISService_1_0_deCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Version' => 'DhlInternational\\Lib\\VersionCustom',
      'AuthentificationType' => 'DhlInternational\\Lib\\AuthentificationTypeCustom',
      'NativeAddressType' => 'DhlInternational\\Lib\\NativeAddressTypeCustom',
      'PickupAddressType' => 'DhlInternational\\Lib\\PickupAddressTypeCustom',
      'DeliveryAddressType' => 'DhlInternational\\Lib\\DeliveryAddressTypeCustom',
      'BankType' => 'DhlInternational\\Lib\\BankTypeCustom',
      'NameType' => 'DhlInternational\\Lib\\NameTypeCustom',
      'Person' => 'DhlInternational\\Lib\\PersonCustom',
      'Company' => 'DhlInternational\\Lib\\CompanyCustom',
      'CommunicationType' => 'DhlInternational\\Lib\\CommunicationTypeCustom',
      'ContactType' => 'DhlInternational\\Lib\\ContactTypeCustom',
      'PackStationType' => 'DhlInternational\\Lib\\PackStationTypeCustom',
      'PostOfficeType' => 'DhlInternational\\Lib\\PostOfficeTypeCustom',
      'CustomerType' => 'DhlInternational\\Lib\\CustomerTypeCustom',
      'ErrorType' => 'DhlInternational\\Lib\\ErrorTypeCustom',
      'ZipType' => 'DhlInternational\\Lib\\ZipTypeCustom',
      'CountryType' => 'DhlInternational\\Lib\\CountryTypeCustom',
      'ShipmentNumberType' => 'DhlInternational\\Lib\\ShipmentNumberTypeCustom',
      'Status' => 'DhlInternational\\Lib\\StatusCustom',
      'Dimension' => 'DhlInternational\\Lib\\DimensionCustom',
      'TimeFrame' => 'DhlInternational\\Lib\\TimeFrameCustom',
      'DeveloperAuthentification' => 'DhlInternational\\Lib\\DeveloperAuthentificationCustom',
      'GetVersionResponse' => 'DhlInternational\\Lib\\GetVersionResponseCustom',
      'CreateShipmentTDRequest' => 'DhlInternational\\Lib\\CreateShipmentTDRequestCustom',
      'CreateShipmentDDRequest' => 'DhlInternational\\Lib\\CreateShipmentDDRequestCustom',
      'CreateShipmentResponse' => 'DhlInternational\\Lib\\CreateShipmentResponseCustom',
      'GetLabelTDRequest' => 'DhlInternational\\Lib\\GetLabelTDRequestCustom',
      'GetLabelDDRequest' => 'DhlInternational\\Lib\\GetLabelDDRequestCustom',
      'GetLabelResponse' => 'DhlInternational\\Lib\\GetLabelResponseCustom',
      'DoManifestTDRequest' => 'DhlInternational\\Lib\\DoManifestTDRequestCustom',
      'DoManifestDDRequest' => 'DhlInternational\\Lib\\DoManifestDDRequestCustom',
      'DoManifestResponse' => 'DhlInternational\\Lib\\DoManifestResponseCustom',
      'DeleteShipmentTDRequest' => 'DhlInternational\\Lib\\DeleteShipmentTDRequestCustom',
      'DeleteShipmentDDRequest' => 'DhlInternational\\Lib\\DeleteShipmentDDRequestCustom',
      'DeleteShipmentResponse' => 'DhlInternational\\Lib\\DeleteShipmentResponseCustom',
      'GetExportDocTDRequest' => 'DhlInternational\\Lib\\GetExportDocTDRequestCustom',
      'GetExportDocDDRequest' => 'DhlInternational\\Lib\\GetExportDocDDRequestCustom',
      'GetExportDocResponse' => 'DhlInternational\\Lib\\GetExportDocResponseCustom',
      'GetManifestDDRequest' => 'DhlInternational\\Lib\\GetManifestDDRequestCustom',
      'manifestDateRange' => 'DhlInternational\\Lib\\manifestDateRangeCustom',
      'GetManifestDDResponse' => 'DhlInternational\\Lib\\GetManifestDDResponseCustom',
      'UpdateShipmentDDRequest' => 'DhlInternational\\Lib\\UpdateShipmentDDRequestCustom',
      'UpdateShipmentResponse' => 'DhlInternational\\Lib\\UpdateShipmentResponseCustom',
      'CreationState' => 'DhlInternational\\Lib\\CreationStateCustom',
      'Statusinformation' => 'DhlInternational\\Lib\\StatusinformationCustom',
      'PieceInformation' => 'DhlInternational\\Lib\\PieceInformationCustom',
      'ShipmentOrderTDType' => 'DhlInternational\\Lib\\ShipmentOrderTDTypeCustom',
      'Shipment' => 'DhlInternational\\Lib\\ShipmentCustom',
      'Pickup' => 'DhlInternational\\Lib\\PickupCustom',
      'ShipmentOrderDDType' => 'DhlInternational\\Lib\\ShipmentOrderDDTypeCustom',
      'ShipperType' => 'DhlInternational\\Lib\\ShipperTypeCustom',
      'ShipperTDType' => 'DhlInternational\\Lib\\ShipperTDTypeCustom',
      'ShipperDDType' => 'DhlInternational\\Lib\\ShipperDDTypeCustom',
      'ReceiverType' => 'DhlInternational\\Lib\\ReceiverTypeCustom',
      'ReceiverTDType' => 'DhlInternational\\Lib\\ReceiverTDTypeCustom',
      'ReceiverDDType' => 'DhlInternational\\Lib\\ReceiverDDTypeCustom',
      'IdentityType' => 'DhlInternational\\Lib\\IdentityTypeCustom',
      'ShipmentDetailsType' => 'DhlInternational\\Lib\\ShipmentDetailsTypeCustom',
      'ShipmentDetailsTDType' => 'DhlInternational\\Lib\\ShipmentDetailsTDTypeCustom',
      'Account' => 'DhlInternational\\Lib\\AccountCustom',
      'AccountPaidBy' => 'DhlInternational\\Lib\\AccountPaidByCustom',
      'ShipmentDetailsDDType' => 'DhlInternational\\Lib\\ShipmentDetailsDDTypeCustom',
      'Attendance' => 'DhlInternational\\Lib\\AttendanceCustom',
      'ShipmentItemType' => 'DhlInternational\\Lib\\ShipmentItemTypeCustom',
      'ShipmentItemTDType' => 'DhlInternational\\Lib\\ShipmentItemTDTypeCustom',
      'ShipmentItemDDType' => 'DhlInternational\\Lib\\ShipmentItemDDTypeCustom',
      'ShipmentServiceTD' => 'DhlInternational\\Lib\\ShipmentServiceTDCustom',
      'TDServiceGroupDateTimeOptionType' => 'DhlInternational\\Lib\\TDServiceGroupDateTimeOptionTypeCustom',
      'ExpressSaturday' => 'DhlInternational\\Lib\\ExpressSaturdayCustom',
      'TDServiceGroupOtherType' => 'DhlInternational\\Lib\\TDServiceGroupOtherTypeCustom',
      'Insurance' => 'DhlInternational\\Lib\\InsuranceCustom',
      'ShipmentServiceDD' => 'DhlInternational\\Lib\\ShipmentServiceDDCustom',
      'DDServiceGroupDateTimeOptionType' => 'DhlInternational\\Lib\\DDServiceGroupDateTimeOptionTypeCustom',
      'DeliveryOnTime' => 'DhlInternational\\Lib\\DeliveryOnTimeCustom',
      'DDShipmentServiceGroupIdentType' => 'DhlInternational\\Lib\\DDShipmentServiceGroupIdentTypeCustom',
      'Ident' => 'DhlInternational\\Lib\\IdentCustom',
      'IdentExtra' => 'DhlInternational\\Lib\\IdentExtraCustom',
      'IdentPremium' => 'DhlInternational\\Lib\\IdentPremiumCustom',
      'ContractSubmission' => 'DhlInternational\\Lib\\ContractSubmissionCustom',
      'SMSAviso' => 'DhlInternational\\Lib\\SMSAvisoCustom',
      'CheckMinimumAge' => 'DhlInternational\\Lib\\CheckMinimumAgeCustom',
      'DDShipmentServiceGroupPickupType' => 'DhlInternational\\Lib\\DDShipmentServiceGroupPickupTypeCustom',
      'DDServiceGroupBusinessPackInternationalType' => 'DhlInternational\\Lib\\DDServiceGroupBusinessPackInternationalTypeCustom',
      'Endorsement' => 'DhlInternational\\Lib\\EndorsementCustom',
      'DDServiceGroupDHLPaketType' => 'DhlInternational\\Lib\\DDServiceGroupDHLPaketTypeCustom',
      'ShipmentAdvisory' => 'DhlInternational\\Lib\\ShipmentAdvisoryCustom',
      'AdvisoryData' => 'DhlInternational\\Lib\\AdvisoryDataCustom',
      'EndorsementServiceconfiguration' => 'DhlInternational\\Lib\\EndorsementServiceconfigurationCustom',
      'EndorsementServiceconfigurationTeZu' => 'DhlInternational\\Lib\\EndorsementServiceconfigurationTeZuCustom',
      'DDServiceGroupOtherType' => 'DhlInternational\\Lib\\DDServiceGroupOtherTypeCustom',
      'HigherInsurance' => 'DhlInternational\\Lib\\HigherInsuranceCustom',
      'COD' => 'DhlInternational\\Lib\\CODCustom',
      'Unfree' => 'DhlInternational\\Lib\\UnfreeCustom',
      'DangerousGoods' => 'DhlInternational\\Lib\\DangerousGoodsCustom',
      'Bulkfreight' => 'DhlInternational\\Lib\\BulkfreightCustom',
      'ShipmentNotificationType' => 'DhlInternational\\Lib\\ShipmentNotificationTypeCustom',
      'ExportDocumentTDType' => 'DhlInternational\\Lib\\ExportDocumentTDTypeCustom',
      'ExportDocPosition' => 'DhlInternational\\Lib\\ExportDocPositionCustom',
      'ExportDocumentDDType' => 'DhlInternational\\Lib\\ExportDocumentDDTypeCustom',
      'FurtherAddressesDDType' => 'DhlInternational\\Lib\\FurtherAddressesDDTypeCustom',
      'DeliveryAdress' => 'DhlInternational\\Lib\\DeliveryAdressCustom',
      'LabelData' => 'DhlInternational\\Lib\\LabelDataCustom',
      'ExportDocData' => 'DhlInternational\\Lib\\ExportDocDataCustom',
      'ManifestState' => 'DhlInternational\\Lib\\ManifestStateCustom',
      'DeletionState' => 'DhlInternational\\Lib\\DeletionStateCustom',
      'BookPickupRequest' => 'DhlInternational\\Lib\\BookPickupRequestCustom',
      'BookPickupResponse' => 'DhlInternational\\Lib\\BookPickupResponseCustom',
      'PickupDetailsType' => 'DhlInternational\\Lib\\PickupDetailsTypeCustom',
      'PickupOrdererType' => 'DhlInternational\\Lib\\PickupOrdererTypeCustom',
      'PickupBookingInformationType' => 'DhlInternational\\Lib\\PickupBookingInformationTypeCustom',
      'CancelPickupRequest' => 'DhlInternational\\Lib\\CancelPickupRequestCustom',
      'CancelPickupResponse' => 'DhlInternational\\Lib\\CancelPickupResponseCustom',
      'IdentityData' => 'DhlInternational\\Lib\\IdentityDataCustom',
      'DrivingLicense' => 'DhlInternational\\Lib\\DrivingLicenseCustom',
      'IdentityCard' => 'DhlInternational\\Lib\\IdentityCardCustom',
      'BankCard' => 'DhlInternational\\Lib\\BankCardCustom',
      'PackstationType' => 'DhlInternational\\Lib\\PackstationTypeCustom',
      'PostfilialeType' => 'DhlInternational\\Lib\\PostfilialeTypeCustom',
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
     * @param CreateShipmentTDRequestCustom $part1
     * @return CreateShipmentResponse
     */
    public function createShipmentTD($part1)
    {
      return $this->__soapCall('createShipmentTD', array($part1));
    }

    /**
     * Creates DD shipments.
     *
     * @param CreateShipmentDDRequestCustom $part1
     * @return CreateShipmentResponse
     */
    public function createShipmentDD($part1)
    {
      return $this->__soapCall('createShipmentDD', array($part1));
    }

    /**
     * Deletes the requested TD shipments.
     *
     * @param DeleteShipmentTDRequestCustom $part1
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentTD($part1)
    {
      return $this->__soapCall('deleteShipmentTD', array($part1));
    }

    /**
     * Deletes the requested DD shipments.
     *
     * @param DeleteShipmentDDRequestCustom $part1
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentDD($part1)
    {
      return $this->__soapCall('deleteShipmentDD', array($part1));
    }

    /**
     * Manifest the requested TD shipments.
     *
     * @param DoManifestTDRequestCustom $part1
     * @return DoManifestResponse
     */
    public function doManifestTD($part1)
    {
      return $this->__soapCall('doManifestTD', array($part1));
    }

    /**
     * Manifest the requested DD shipments.
     *
     * @param DoManifestDDRequestCustom $part1
     * @return DoManifestResponse
     */
    public function doManifestDD($part1)
    {
      return $this->__soapCall('doManifestDD', array($part1));
    }

    /**
     * Returns the request-url for getting a TD label.
     *
     * @param GetLabelTDRequestCustom $part1
     * @return GetLabelResponse
     */
    public function getLabelTD($part1)
    {
      return $this->__soapCall('getLabelTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD label.
     *
     * @param GetLabelDDRequestCustom $part1
     * @return GetLabelResponse
     */
    public function getLabelDD($part1)
    {
      return $this->__soapCall('getLabelDD', array($part1));
    }

    /**
     * Books a pickup order.
     *
     * @param BookPickupRequestCustom $part1
     * @return BookPickupResponse
     */
    public function bookPickup($part1)
    {
      return $this->__soapCall('bookPickup', array($part1));
    }

    /**
     * Cancels a pickup order.
     *
     * @param CancelPickupRequestCustom $part1
     * @return CancelPickupResponse
     */
    public function cancelPickup($part1)
    {
      return $this->__soapCall('cancelPickup', array($part1));
    }

    /**
     * Returns the actual version of the implementation of the whole ISService webservice.
     *
     * @param VersionCustom $part1
     * @return GetVersionResponse
     */
    public function getVersion($part1)
    {
      return $this->__soapCall('getVersion', array($part1));
    }

    /**
     * Returns the request-url for getting a TD export document.
     *
     * @param GetExportDocTDRequestCustom $part1
     * @return GetExportDocResponse
     */
    public function getExportDocTD($part1)
    {
      return $this->__soapCall('getExportDocTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD  export document.
     *
     * @param GetExportDocDDRequestCustom $part1
     * @return GetExportDocResponse
     */
    public function getExportDocDD($part1)
    {
      return $this->__soapCall('getExportDocDD', array($part1));
    }

    /**
     * Request the manifest.
     *
     * @param GetManifestDDRequestCustom $part1
     * @return GetManifestDDResponse
     */
    public function getManifestDD($part1)
    {
      return $this->__soapCall('getManifestDD', array($part1));
    }

    /**
     * Updates a DD shipment.
     *
     * @param UpdateShipmentDDRequestCustom $part1
     * @return UpdateShipmentResponse
     */
    public function updateShipmentDD($part1)
    {
      return $this->__soapCall('updateShipmentDD', array($part1));
    }

}
