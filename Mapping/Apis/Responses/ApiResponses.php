<?php

namespace Mapping\Apis\Responses;

class ApiResponses
{
    /**
     * This Method Is an Array That Is like a api response
     * we used it because the speed of fetching data from API is so low
     * EX(Http::get('https://api.sampleapis.com/countries/countries')->body()
     * @return array
     */
    public function getData(): array
    {
        return [
            'full_name' => 'amin karimi',
            'Age' => 33,
            'user_name' => 'amiiiink',
            'info' => [
                'address' => 'No. 50 Azadi Street',
                'tel' => '+989120814408'
            ]
        ];
    }

}
