<?php

/**
 * CertPolicyId
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace UMich_OIDC\Vendor\phpseclib3\File\ASN1\Maps;

use UMich_OIDC\Vendor\phpseclib3\File\ASN1;
/**
 * CertPolicyId
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class CertPolicyId
{
    const MAP = ['type' => ASN1::TYPE_OBJECT_IDENTIFIER];
}
