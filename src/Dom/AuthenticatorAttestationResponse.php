<?php

namespace MadWizard\WebAuthn\Dom;

use MadWizard\WebAuthn\Format\ByteBuffer;

final class AuthenticatorAttestationResponse extends AbstractAuthenticatorResponse implements AuthenticatorAttestationResponseInterface
{
    /**
     * @var ByteBuffer
     */
    private $attestationObject;

    public function __construct(string $clientDataJson, ByteBuffer $attestationObject)
    {
        parent::__construct($clientDataJson);
        $this->attestationObject = $attestationObject;
    }

    public function getAttestationObject(): ByteBuffer
    {
        return $this->attestationObject;
    }

    public function asAttestationResponse(): AuthenticatorAttestationResponseInterface
    {
        return $this;
    }
}
