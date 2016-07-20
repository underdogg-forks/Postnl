<?php namespace DivideBV\Postnl\ComplexTypes;

class Location extends BaseLocation
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var Coordinate $Coordinates
     */
    protected $Coordinates = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string $Postalcode
     */
    protected $Postalcode = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @param bool $PostalCode
     * @param bool $AllowSundaySorting
     * @param null $DeliveryDate
     * @param null $Coordinates
     * @param array $DeliveryOptions
     * @param array $Options
     */
    public function __construct($PostalCode, $AllowSundaySorting, $DeliveryDate = null,
                                $DeliveryOptions = ['PG'], $Options = ['Daytime'], $Coordinates = null)
    {
        parent::__construct($AllowSundaySorting, $DeliveryDate, $DeliveryOptions, $Options);
        $this->setPostalcode($PostalCode);
        $this->setCoordinates($Coordinates);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Location
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }

    /**
     * @param Coordinate $Coordinates
     * @return Location
     */
    public function setCoordinates($Coordinates)
    {
        $this->Coordinates = $Coordinates;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr()
    {
        return $this->HouseNr;
    }

    /**
     * @param string $HouseNr
     * @return Location
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNrExt()
    {
        return $this->HouseNrExt;
    }

    /**
     * @param string $HouseNrExt
     * @return Location
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
        return $this->Postalcode;
    }

    /**
     * @param string $Postalcode
     * @return Location
     */
    public function setPostalcode($Postalcode)
    {
        $this->Postalcode = $Postalcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Location
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

}
