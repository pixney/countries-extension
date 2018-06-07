<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionCountriesCreateCountriesFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'                                                                                                        => 'anomaly.field_type.text',
        'capital'                                                                                                     => 'anomaly.field_type.text',
        'citizenship'                                                                                                 => 'anomaly.field_type.text',
        'country_code'                                                                                                => 'anomaly.field_type.integer',
        'currency'                                                                                                    => 'anomaly.field_type.text',
        'currency_code'                                                                                               => 'anomaly.field_type.text',
        'currency_sub_unit'                                                                                           => 'anomaly.field_type.text',
        'full_name'                                                                                                   => 'anomaly.field_type.text',
        'iso_3166_2'                                                                                                  => 'anomaly.field_type.text',
        'iso_3166_3'                                                                                                  => 'anomaly.field_type.text',
        'region_code'                                                                                                 => 'anomaly.field_type.integer',
        'sub_region_code'                                                                                             => 'anomaly.field_type.integer',
        'eea'                                                                                                         => 'anomaly.field_type.boolean',
        'currency_symbol'                                                                                             => 'anomaly.field_type.text',
        'currency_decimals'                                                                                           => 'anomaly.field_type.integer',

        'slug' => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '_'
            ],
        ],
    ];
}
