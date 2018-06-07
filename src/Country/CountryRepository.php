<?php

namespace Pixney\CountriesExtension\Country;

use Anomaly\Streams\Platform\Entry\EntryRepository;
use Pixney\CountriesExtension\Country\Contract\CountryRepositoryInterface;

class CountryRepository extends EntryRepository implements CountryRepositoryInterface
{
    /**
     * The entry model.
     *
     * @var CountryModel
     */
    protected $model;

    /**
     * Create a new CountryRepository instance.
     *
     * @param CountryModel $model
     */
    public function __construct(CountryModel $model)
    {
        $this->model = $model;
    }

    public function findByIso($abbr)
    {
        return $this->model->where('iso_3166_2', $abbr)->first();
    }
}
