<h1 align="center">Conequate_AddressAutoComplete</h1> 

<div align="center">
  <p>The Address Auto-Complete is an extension to enhance the customer(s) shopping experience. It enhances the address
fields in the checkout, multi-shipping checkout, and user account settings. As the customer starts typing the address in
the address field the extension Conequate_AddressAutoComplete will show the customer a list of matching
addresses by using the customer’s location. Once the customer selects one of the addresses in the generated list, the
rest of the address fields are automatically filled to save the customer's time. This extension works for the community,
enterprise, and cloud versions.</p>
  <img src="https://img.shields.io/badge/magento-2.2%20%7C%202.3%20%7C%202.4-brightgreen?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

## Table of contents

- [Feature](#feature)
- [Shared Package](#SharedPackage)
- [Admin Configurations](#adminConfiguration)
- [Key Features](#KeyFeatures)
- [Installation](#installation)
- [License](#license)

## Feature
<ul>
<li>Works in address fields of checkout, multi-shipping checkout, and user account settings.</li>
<li>Increase accuracy in address fields.</li>
<li>Generates a list of relevant addresses as soon as the customer starts typing in address fields.</li>
<li>Autofills address fields when the customer selects an address from the generated list.</li>
<li>Customers can enter any address, international or domestic.</li>
</ul>

## SharedPackage
There is a shared package (core module) associated with this extension having store configuration, menu items, and
logos. This extension expects to have a core module installed along/before with the extension as this extension has a
dependency on the Core module. `Conequate_Core` is free of cost.
The following command is to install `Conequate_Core` before installation of `Conequate_AddressAutoComplete`
module:

```php
composer require conequate/core
```

## AdminConfigurations

Vendor(s) can modify some configurations for this feature as per their need.
To achieve this,
<ul>
<li>Log in to the admin panel with the admin user.</li>
<li>Click the Conequate admin dashboard menu item.</li>
<li>Beneath Address AutoComplete, click Configuration.</li>
<li>You will be seeing the configuration</li>
<ul>
<li> Enable: (Yes/No) </li>
<li> Google API Key: (KEY FIELD) </li>
<li> Use Geo Location: (Yes/No) </li>
<li> Use Long PostCode: (Yes/No) </li>
</ul>

Keep the Enabled configuration to Yes if you want to use the functionality of Address AutoComplete extension. It will
be set to No by default.

Enter Google API key. If you don’t have Google API key, register Google API key.

Set Use Geolocation to Yes to increase the accuracy of autocompletion results.

Save the configuration and refresh cache in Magento from `System > Cache Management`.

## KeyFeatures
### Default Billing and Shipping Addresses:
When the customer edits the address from the account settings address book and starts typing address in the
address field. The generated address will be shown to the customer. When the customer selects an address from the
generated list. Other address fields will be automatically filled.

### Checkout Shipping Address:
When the customer enters a new address from the checkout shipping page by ‘New Address’ button and starts typing
address in the address field. The generated address will be shown to the customer. When the customer selects an
address from the generated list. Other address fields will be automatically filled.

### Multishipping Checkout Address:
When the customer enters a new address from the checkout with multiple addresses by ‘Add New Address’ button
and starts typing address in the address field. The generated address will be shown to the customer. When the
customer selects an address from the generated list. Other address fields will be automatically filled.

## Installation

```sh
composer require conequate/core
composer require conequate/address-autocomplete
bin/magento module:enable Conequate_*
bin/magento setup:upgrade
```

### if your website is running in production mode you need to deploy static content and then clear the cache
```sh
php bin/magento setup:static-content:deploy
php bin/magento setup:di:compile
```

## License

[MIT](https://opensource.org/licenses/MIT)