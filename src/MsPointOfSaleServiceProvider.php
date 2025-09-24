<?php

namespace WellmedLite\MsPointOfSale;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsPointOfSaleServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsPointOfSale::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
