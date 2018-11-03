<?php
namespace Omnipay\Iyzico;
use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway {
    public function getName() {
        return 'Iyzico';
    }
    public function getDefaultParameters() {
        return array(
            'bank' => 'Denizbank',
            'apiid' => '',
            'secretkey' => '',
            'installment' => '',
            'type' => 'CC.DB',
            'currency' => 'TRY',
            'orderId' => rand(),
            'testMode' => false,
            'returnUrl' => 'http://google.com'
        );
    }
    public function authorize(array $parameters = array()) {
        return $this->createRequest('\Omnipay\Iyzico\Message\AuthorizeRequest', $parameters);
    }
    public function capture(array $parameters = array()) {
        return $this->createRequest('\Omnipay\Iyzico\Message\CaptureRequest', $parameters);
    }
    public function purchase(array $parameters = array()) {
        return $this->createRequest('\Omnipay\Iyzico\Message\PurchaseRequest', $parameters);
    }
    public function refund(array $parameters = array()) {
        return $this->createRequest('\Omnipay\Iyzico\Message\RefundRequest', $parameters);
    }
    public function void(array $parameters = array()) {
        return $this->createRequest('\Omnipay\Iyzico\Message\VoidRequest', $parameters);
    }
    public function getBank() {
        return $this->getParameter('bank');
    }
    public function setBank($value) {
        return $this->setParameter('bank', $value);
    }
    public function getApiId() {
        return $this->getParameter('apiId');
    }
    public function setApiId($value) {
        return $this->setParameter('apiId', $value);
    }
    public function getSecretKey() {
        return $this->getParameter('secretKey');
    }
    public function setSecretKey($value) {
        return $this->setParameter('secretKey', $value);
    }
    public function getInstallment() {
        return $this->getParameter('installment');
    }
    public function setInstallment($value) {
        return $this->setParameter('installment', $value);
    }
    public function getType() {
        return $this->getParameter('type');
    }
    public function setType($value) {
        return $this->setParameter('type', $value);
    }
    public function getOrderId() {
        return $this->getParameter('orderid');
    }
    public function setOrderId($value) {
        return $this->setParameter('orderid', $value);
    }
    public function getTransId() {
        return $this->getParameter('transId');
    }
    public function setTransId($value) {
        return $this->setParameter('transId', $value);
    }
}