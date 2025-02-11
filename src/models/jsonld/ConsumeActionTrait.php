<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for ConsumeAction.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/ConsumeAction
 */

trait ConsumeActionTrait
{
    
    /**
     * An Offer which must be accepted before the user can perform the Action. For
     * example, the user may need to buy a movie before being able to watch it.
     *
     * @var Offer
     */
    public $expectsAcceptanceOf;

    /**
     * A set of requirements that a must be fulfilled in order to perform an
     * Action. If more than one value is specied, fulfilling one set of
     * requirements will allow the Action to be performed.
     *
     * @var ActionAccessSpecification
     */
    public $actionAccessibilityRequirement;

}
