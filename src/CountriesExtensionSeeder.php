<?php

namespace Pixney\CountriesExtension;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Pixney\CountriesExtension\Country\CountrySeeder;

/**
 * Class CountriesExtensionSeeder
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class CountriesExtensionSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        
        $this->call(CountrySeeder::class);
    }
}
