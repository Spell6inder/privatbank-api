<?php declare(strict_types=1);

namespace SergeyNezbritskiy\PrivatBank\Response;

use SergeyNezbritskiy\PrivatBank\Base\AbstractResponse;

/**
 * Class PaymentMobileResponse
 * @package SergeyNezbritskiy\PrivatBank\Response
 */
class PaymentMobileResponse extends AbstractResponse
{

    /**
     * Response sample
     * ```xml
     *  <?xml version="1.0" encoding="UTF-8"?>
     *  <response version="1.0">
     *      <merchant>
     *          <id>75482</id>
     *          <signature>553995c5ccc8c81815b58cf6374f68f00a28bbd7</signature>
     *      </merchant>
     *      <data>
     *          <oper>cmt</oper>
     *          <payment id="1234567" state="ok" message="Исполнен" />
     *      </data>
     *  </response>
     * ```
     * @return array
     */
    protected function getMap(): array
    {
        return [
            'merchant' => [
                'id' => 'id',
                'signature' => 'signature',
            ],
            'data' => [
                'oper' => 'oper',
                'payment' => [
                    'id' => '@id',
                    'state' => '@state',
                    'message' => '@message',
                ],
            ],
        ];
    }

}