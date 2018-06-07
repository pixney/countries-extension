<?php

namespace Pixney\CountriesExtension\Country;

use Pixney\CountriesExtension\Country\Contract\CountryInterface;
use Anomaly\Streams\Platform\Model\Countries\CountriesCountriesEntryModel;

class CountryModel extends CountriesCountriesEntryModel implements CountryInterface
{
    public function isEea()
    {
        return $this->eea;
    }

    public function getIso2()
    {
        return $this->iso_3166_2;
    }
    public function getIso3()
    {
        return $this->iso_3166_3;
    }
}
