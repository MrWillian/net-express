<?php

namespace Domain\Client\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;
use Api\Client\Requests\ClientRequest;

class ClientData extends DataTransferObject {

    /** @var string */
    public $name;

    /** @var string */
    public $email;

    /** @var date|null */
    public $birthday;
    
    /** @var string */
    public $phone_number;
    
    /** @var int */
    public $client_type;

    /** @var string */
    public $gender;
    
    /** @var string */
    public $rg;

    /** @var string */
    public $document;
    
    /** @var string */
    public $cep;
    
    /** @var string */
    public $country;

    /** @var string */
    public $state;

    /** @var string */
    public $city;

    /** @var string */
    public $district;

    /** @var string|null */
    public $place;

    /** @var string */
    public $number;

    public static function fromRequest(ClientRequest $request): ClientData {
        return new Self([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'phone_number' => str_replace([' ', '.', '-', '(', ')'], '', $request['phone_number']),
            'client_type' => (int) $request['client_type'],
            'gender' => $request['gender'],
            'rg' => $request['rg'],
            'document' => str_replace(['.', '-', '/'], '', strval($request['documentValue'])),
            'cep' => $request['cep'],
            'country' => $request['country'],
            'state' => $request['state'],
            'city' => $request['city'],
            'district' => $request['district'],
            'place' => $request['place'],
            'number' => $request['number'],
        ]);
    }
}
