<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\WooCommerce\s2MemberX\Classes\Utils;

use WebSharks\WpSharks\WooCommerce\s2MemberX\Classes;
use WebSharks\WpSharks\WooCommerce\s2MemberX\Interfaces;
use WebSharks\WpSharks\WooCommerce\s2MemberX\Traits;
#
use WebSharks\WpSharks\WooCommerce\s2MemberX\Classes\AppFacades as a;
use WebSharks\WpSharks\WooCommerce\s2MemberX\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WooCommerce\s2MemberX\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Installer.
 *
 * @since 160524 Installer.
 */
class Installer extends SCoreClasses\SCore\Base\Core
{
    /**
     * Other install routines.
     *
     * @since 160524 Restrictions.
     */
    public function onOtherInstallRoutines()
    {
        a::addDefaultRestrictionCaps();

        a::clearSystematicCache();
        a::clearRestrictionsCache();
        a::clearUserPermissionsCache();
    }
}
