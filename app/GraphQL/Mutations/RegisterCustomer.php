<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Customer;

final class RegisterCustomer
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $customer = new Customer();
        $customer->fill($args['customer']);
        $customer->save();

        return $customer;
    }
}
