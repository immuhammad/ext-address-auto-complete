<?php

namespace PHPStudios\AddressAutoComplete\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use PHPStudios\AddressAutoComplete\Helper\Data;
use Magento\Framework\Encryption\EncryptorInterface;

/**
 * Class AutocompleteConfigProvider
 * @package PHPStudios\AddressAutoComplete\Model
 */
class AutocompleteConfigProvider implements ConfigProviderInterface
{
    /**
     * @var Data
     */
    private $helper;

    /**
     * @var EncryptorInterface
     */
    private $encryptor;

    /**
     * @param Data $helper
     * @param EncryptorInterface $encryptor
     */
    public function __construct(
        Data $helper,
        EncryptorInterface $encryptor
    ) {
        $this->helper = $helper;
        $this->encryptor = $encryptor;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $config['phpstudios_autocomplete'] = [
            'active' => $this->helper->getConfigValue('address_autocomplete/general/active'),
            'api_key' => $this->encryptor->decrypt($this->helper->getConfigValue('address_autocomplete/general/google_api_key')),
            'use_geolocation' => $this->helper->getConfigValue('address_autocomplete/general/use_geolocation'),
            'use_long_postcode' => $this->helper->getConfigValue('address_autocomplete/general/use_long_postcode')
        ];
        return $config;
    }
}
