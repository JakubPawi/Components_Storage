<?php

namespace App\Http\Controllers;

use App\Models\Komponent;
use App\Http\Requests\ApiRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\json_decode;

class PlaceSimpleController extends Controller
{
    
    public function index(Request $request) {
        return view('place-simple');
    }

    public function findPlace(Request $request)
    {

        $appId = 'Q67ECGB5aQEcpsryt2ps';
        $appCode = 'hVlfxNF-5V3s-h5w1GrmKg';
        $client = new Client();
        $location = $request->input('location');
        $placeType = $request->input('placeType');
        $validateInputs = !empty($location) && !empty($placeType);
        $result = view('place-simple');
        if ($validateInputs) {
            $locationEndpoint = 'https://geocoder.api.here.com/6.2/geocode.json?'
            . 'searchtext=' . $location
            . '&app_id=' . $appId . '&app_code=' . $appCode ;
            $locationResponse = $client->request('GET', $locationEndpoint);
        $locationResponseBody = $locationResponse->getBody();
        $locationResponseJSON = json_decode($locationResponseBody);
        $latitude = $locationResponseJSON->Response->View[0]->Result[0]->Location->DisplayPosition->Latitude;
        $longitude = $locationResponseJSON->Response->View[0]->Result[0]->Location->DisplayPosition->Longitude;
        $placesEndpoint = 'https://places.cit.api.here.com/places/v1/autosuggest?'
            . 'at=' . $latitude . ',' . $longitude . '&q=' . $placeType
            . '&app_id=' . $appId . '&app_code=' . $appCode;
            $placesResponse = $client->request('GET', $placesEndpoint);
        $placesResponseBody = $placesResponse->getBody();
        $placesResponseJSON = json_decode($placesResponseBody);
        $places = $placesResponseJSON->results;
        $filteredPlaces = [];
foreach($places as $place) {
    if (!empty($place->distance) && $place->distance < 10000 ) {
       array_push($filteredPlaces, $place);
    }
}
        $result = view('place-simple')
            ->with('places', $filteredPlaces)
            ->with('location', $location)
            ->with('placeType', $placeType);
            return $result;
        }
        

    }

}

