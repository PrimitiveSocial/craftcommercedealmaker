<?php
/**
 * CraftCommerce Deal Maker plugin for Craft CMS 3.x
 *
 * Checks if you are close a deal and tries to upsell ya
 *
 * @link      primitivesocial.com
 * @copyright Copyright (c) 2019 Primitive Social
 */

/**
 * CraftCommerce Deal Maker config.php
 *
 * This file exists only as a template for the CraftCommerce Deal Maker settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'craft-commerce-deal-maker.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // This controls the amount of the deal to parse before.
    // So, if the deal happens at 5 and you want to upsell at 3, make this 2
    // Because 2+3 = 5. That's just math.
    "upsellAt" => 2,
    "upsellAtPercentage" => .5

];
