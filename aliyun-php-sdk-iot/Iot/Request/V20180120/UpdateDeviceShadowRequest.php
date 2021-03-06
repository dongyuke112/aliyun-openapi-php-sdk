<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateDeviceShadow
 *
 * @method string getShadowMessage()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 * @method string getDeltaUpdate()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getDeviceName()
 */
class UpdateDeviceShadowRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Iot',
            '2018-01-20',
            'UpdateDeviceShadow',
            'iot'
        );
    }

    /**
     * @param string $shadowMessage
     *
     * @return $this
     */
    public function setShadowMessage($shadowMessage)
    {
        $this->requestParameters['ShadowMessage'] = $shadowMessage;
        $this->queryParameters['ShadowMessage'] = $shadowMessage;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $deltaUpdate
     *
     * @return $this
     */
    public function setDeltaUpdate($deltaUpdate)
    {
        $this->requestParameters['DeltaUpdate'] = $deltaUpdate;
        $this->queryParameters['DeltaUpdate'] = $deltaUpdate;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->requestParameters['DeviceName'] = $deviceName;
        $this->queryParameters['DeviceName'] = $deviceName;

        return $this;
    }
}
