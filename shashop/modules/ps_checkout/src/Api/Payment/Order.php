<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PrestashopCheckout\Api\Payment;

use PrestaShop\Module\PrestashopCheckout\Api\Payment\Client\PaymentClient;
use PrestaShop\Module\PrestashopCheckout\Exception\PsCheckoutException;

/**
 * Handle order requests
 */
class Order extends PaymentClient
{
    /**
     * Create order to paypal api
     *
     * @param array $payload Cart details (json)
     *
     * @return array data with paypal order id or false if error
     */
    public function create($payload)
    {
        $this->setRoute('/payments/order/create');

        return $this->post($payload);
    }

    /**
     * Capture order funds
     *
     * @param string $orderId paypal
     * @param string $merchantId
     * @param string $fundingSource
     *
     * @return array response from paypal if the payment is accepted or false if error occured
     */
    public function capture($orderId, $merchantId, $fundingSource)
    {
        $this->setRoute('/payments/order/capture');

        return $this->post([
            'mode' => $fundingSource,
            'orderId' => (string) $orderId,
            'payee' => [
                'merchant_id' => $merchantId,
            ],
        ]);
    }

    /**
     * Get paypal order details
     *
     * @param string $orderId paypal
     *
     * @return array paypal order
     */
    public function fetch($orderId)
    {
        $this->setRoute('/payments/order/fetch');

        return $this->post([
            'orderId' => $orderId,
        ]);
    }

    /**
     * Authorize an order
     *
     * @param string $orderId paypal
     * @param string $merchantId
     *
     * @return array paypal order
     */
    public function authorize($orderId, $merchantId)
    {
        // TODO : waiting maasland integration
        return [];
    }

    /**
     * Refund an order
     *
     * @param array $payload
     *
     * @return array paypal order
     */
    public function refund($payload)
    {
        $this->setRoute('/payments/order/refund');

        return $this->post($payload);
    }

    /**
     * Patch paypal order
     *
     * @param array $payload
     *
     * @return array response from paypal if the payment is accepted or false if error occured
     */
    public function patch($payload)
    {
        $this->setRoute('/payments/order/update');

        return $this->post($payload);
    }

    /**
     * @param string $merchantId
     *
     * @return string
     *
     * @throws PsCheckoutException
     */
    public function generateClientToken($merchantId)
    {
        $this->setRoute('/payments/order/generate_client_token');

        $response = $this->post([
            'return_payload' => true,
            'payee' => [
                'merchant_id' => $merchantId,
            ],
        ]);

        if (empty($response['body']) || empty($response['body']['client_token'])) {
            $exception = null;

            if (!empty($response['exceptionMessage'])) {
                $exception = new \Exception($response['exceptionMessage'], $response['exceptionCode']);
            }

            throw new PsCheckoutException('Unable to retrieve PayPal Client Token', PsCheckoutException::MISSING_PAYPAL_CLIENT_TOKEN, $exception);
        }

        return $response['body']['client_token'];
    }

    /**
     * @param string $merchantId
     * @param int|null $customerId
     *
     * @return array{client_token:string, id_token: string, expires_in: int}
     *
     * @throws PsCheckoutException
     */
    public function getClientToken($merchantId, $customerId = null)
    {
        $this->setRoute('/payments/order/generate_client_token');

        $payload = [
            'return_payload' => true,
            'payee' => [
                'merchant_id' => $merchantId,
            ],
        ];

        if ($customerId) {
            $payload['customer_id'] = $customerId;
        }

        $response = $this->post($payload);

        if (empty($response['body']) || empty($response['body']['client_token'])) {
            $exception = null;

            if (!empty($response['exceptionMessage'])) {
                $exception = new \Exception($response['exceptionMessage'], $response['exceptionCode']);
            }

            throw new PsCheckoutException('Unable to retrieve PayPal Client Token', PsCheckoutException::MISSING_PAYPAL_CLIENT_TOKEN, $exception);
        }

        return $response['body'];
    }
}
