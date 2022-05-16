<?php
/**
 * SEOmatic plugin for Craft CMS 4
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
 * Trait for Gene.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Gene
 */

trait GeneTrait
{
    
    /**
     * Another gene which is a variation of this one.
     *
     * @var Gene
     */
    public $alternativeOf;

    /**
     * A symbolic representation of a BioChemEnity. For example, a nucleotide
     * sequence of a Gene or an amino acid sequence of a Protein.
     *
     * @var string|Text
     */
    public $hasBioPolymerSequence;

    /**
     * Another BioChemEntity encoded by this one. 
     *
     * @var BioChemEntity
     */
    public $encodesBioChemEntity;

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has
     * been observed experimentally. For example brain, digestive system.
     *
     * @var AnatomicalStructure|BioChemEntity|DefinedTerm|AnatomicalSystem
     */
    public $expressedIn;

}
