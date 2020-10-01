WebAuthn Relying Party server library for PHP
=============================================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/badges/build.png?b=master)](https://scrutinizer-ci.com/g/madwizard-org/webauthn-server/build-status/master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Current state
-------------
**Beta**
All basic functionality of this library is functional but the API interface may change at any time until the first stable release.

Goal
----
This library aims to implement the relying party server of the WebAuthn specification in PHP.

Installation
------------
Installation via composer:
```bash
composer require madwizard/webauthn:^0.3
```

Support
-------

- Attestation types:
    - FIDO U2F
    - Packed
    - TPM
    - Android SafetyNet
    - Android Key
    - None
- Metadata service
- Validating metadata
- Extensions:
    - appid




Usage
-----

The library is still in development so documentation is limited. The general pattern to follow is:

1. Implement `CredentialStoreInterface` (you will need `UserCredential` or your own implementation of `UserCredentialInterface`)
2. Create an instance of `RelyingParty` and use the `ServerBuilder` class to build a server object:
```php
$server = (new ServerBuilder())
    ->setRelyingParty($rp)
    ->setCredentialStore($store)
    ->build();
```
3. Use `startRegistration`/`finishRegistration` to register credentials. Be sure to store the temporary `AttestationContext` server side!
4. and `startAuthentication`/`finishAuthentication` to authenticate. Be sure to store the temporary `AssertionContext` server side!

Resources
---------
[WebAuthn specification](https://www.w3.org/TR/webauthn/)
