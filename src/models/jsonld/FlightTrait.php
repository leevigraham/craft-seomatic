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
 * Trait for Flight.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Flight
 */

trait FlightTrait
{
    
    /**
     * The distance of the flight.
     *
     * @var string|Distance|Text
     */
    public $flightDistance;

    /**
     * The time when a passenger can check into the flight online.
     *
     * @var DateTime
     */
    public $webCheckinTime;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @var string|Vehicle|Text
     */
    public $aircraft;

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @var Organization|Person
     */
    public $seller;

    /**
     * The airport where the flight terminates.
     *
     * @var Airport
     */
    public $arrivalAirport;

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @var string|Text
     */
    public $arrivalTerminal;

    /**
     * The airport where the flight originates.
     *
     * @var Airport
     */
    public $departureAirport;

    /**
     * Identifier of the flight's arrival gate.
     *
     * @var string|Text
     */
    public $arrivalGate;

    /**
     * Identifier of the flight's departure terminal.
     *
     * @var string|Text
     */
    public $departureTerminal;

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @var Organization
     */
    public $carrier;

    /**
     * The estimated time the flight will take.
     *
     * @var string|Text|Duration
     */
    public $estimatedFlightDuration;

    /**
     * Identifier of the flight's departure gate.
     *
     * @var string|Text
     */
    public $departureGate;

    /**
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United is
     * 'UA', the flightNumber is 'UA110'.
     *
     * @var string|Text
     */
    public $flightNumber;

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @var string|Text
     */
    public $mealService;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @var BoardingPolicyType
     */
    public $boardingPolicy;

}
