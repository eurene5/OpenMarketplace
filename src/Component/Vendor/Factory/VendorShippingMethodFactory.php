<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\OpenMarketplace\Component\Vendor\Factory;

use BitBag\OpenMarketplace\Component\Vendor\Entity\VendorInterface;
use BitBag\OpenMarketplace\Component\Vendor\Entity\VendorShippingMethod;
use BitBag\OpenMarketplace\Component\Vendor\Entity\VendorShippingMethodInterface;
use Sylius\Component\Core\Model\ShippingMethodInterface;

final class VendorShippingMethodFactory implements VendorShippingMethodFactoryInterface
{
    public function createNew(): VendorShippingMethodInterface
    {
        return new VendorShippingMethod();
    }

    public function createNewWithChannelCodeShippingAndVendor(
        string $channelCode,
        ShippingMethodInterface $shippingMethod,
        VendorInterface $vendor
    ): VendorShippingMethodInterface {
        $vendorShippingMethod = $this->createNew();

        $vendorShippingMethod->setChannelCode($channelCode);
        $vendorShippingMethod->setShippingMethod($shippingMethod);
        $vendorShippingMethod->setVendor($vendor);

        return $vendorShippingMethod;
    }
}
