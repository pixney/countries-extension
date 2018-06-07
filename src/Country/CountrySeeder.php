<?php

namespace Pixney\CountriesExtension\Country;

use Illuminate\Filesystem\Filesystem;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Pixney\CountriesExtension\Country\Contract\CountryRepositoryInterface;

class CountrySeeder extends Seeder
{
    protected $files;
    protected $file;
    protected $countries;
    protected $JSONCountriesPath;
    protected $country;

    public function __construct(Filesystem $files, CountryRepositoryInterface $country)
    {
        $this->files   = $files;
        $this->file    = app('Pixney\CountriesExtension\CountriesExtension')->path . '/seed/Countries.json';
        $this->country = $country;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->countries = json_decode($this->files->get($this->file), 1);
        foreach ($this->countries as $key => $value) {
            $this->country->create([
                'name'                            => $value['name'],
                'capital'                         => (isset($value['capital'])) ? $value['capital'] : '',
                'citizenship'                     => $value['citizenship'],
                'country_code'                    => $value['country-code'],
                'currency'                        => (isset($value['currency'])) ? $value['currency'] : '',
                'currency_code'                   => (isset($value['currency_code'])) ? $value['currency_code'] : '',
                'currency_sub_unit'               => (isset($value['currency_sub_unit'])) ? $value['currency_sub_unit'] : '',
                'full_name'                       => (isset($value['full_name'])) ? $value['full_name'] : '',
                'iso_3166_2'                      => $value['iso_3166_2'],
                'iso_3166_3'                      => $value['iso_3166_3'],
                'region_code'                     => $value['region-code'],
                'sub_region_code'                 => $value['sub-region-code'],
                'eea'                             => $value['eea'],
                'currency_symbol'                 => (isset($value['currency_symbol'])) ? $value['currency_symbol'] : '',
                'currency_decimals'               => (isset($value['currency_decimals'])) ? $value['currency_decimals'] : '',
            ]);
        }
    }
}
