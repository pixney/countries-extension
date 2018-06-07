<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionCountriesCreateCountriesStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'          => 'countries',
         'title_column' => 'name',
         'translatable' => true,
         'versionable'  => true,
         'trashable'    => true,
         'searchable'   => true,
         'sortable'     => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required'     => true,
        ],
        'capital'                                                                                                     => [
            'translatable' => true,
            'required'     => true,
        ],
        'citizenship'                                                                                                 => [
            'translatable' => true,
            'required'     => true,
        ],
        'country_code'                                                                                                => [
            'translatable' => false,
            'required'     => true,
        ],
        'currency'                                                                                                    => [
            'translatable' => false,
            'required'     => true,
        ],
        'currency_code'                                                                                               => [
            'translatable' => false,
            'required'     => true,
        ],
        'currency_sub_unit'                                                                                           => [
            'translatable' => false,
            'required'     => true,
        ],
        'full_name'                                                                                                   => [
            'translatable' => true,
            'required'     => true,
        ],
        'iso_3166_2'                                                                                                  => [
            'translatable' => false,
            'required'     => true,
        ],
        'iso_3166_3'                                                                                                  => [
            'translatable' => false,
            'required'     => true,
        ],
        'region_code'                                                                                                 => [
            'translatable' => false,
            'required'     => true,
        ],
        'sub_region_code'                                                                                             => [
            'translatable' => false,
            'required'     => true,
        ],
        'eea'                                                                                                         => [
            'translatable' => false,
            'required'     => true,
        ],
        'currency_symbol'                                                                                             => [
            'translatable' => false,
            'required'     => true,
        ],
        'currency_decimals'                                                                                           => [
            'translatable' => false,
            'required'     => true,
        ],
        'slug' => [
            'unique'   => true,
            'required' => true,
        ],
    ];
}
