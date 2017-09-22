<?php


namespace App\Classes;

use App\Models\Product;
use App\User;

class LicenseRepository {
    /**
     * @var User
     */
    private $user;
    /**
     * @var Product
     */
    private $product;

    /**
     * LicenseRepository constructor.
     *
     * @param User    $user
     * @param Product $product
     */
    public function __construct(User $user, Product $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function generateLicense()
    {
        return $this->licenseKey();
    }

    private function licenseKey()
    {
        return $this->user->createToken($this->tokenName())->accessToken;
    }

    private function tokenName() {
        return "{$this->product->name}-{$this->user->name}";
    }


}