<?php

namespace PWParsons\PayGate\Foundation\Protocol;

class QueryProtocol extends BaseProtocol
{
    /*
     * Extending endpoint of the BaseProtocol.
     *
     * @var string
     */
    protected $endpoint = '/query.trans';

    /*
     * Create new instance of an empty initiate object.
     *
     * @return mixed
     */
    public function instantiate($data = [], $protocol = false)
    {
        return parent::instantiate([
            'data' => [
                'PAYGATE_ID'        => config('paygate.id'),
                'PAY_REQUEST_ID'    => '',
                'REFERENCE'         => '',
            ],
        ], $this);
    }
}