<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    protected function rules( Client $client = null)
    {
        return [ 
            'name' => 'required|unique:clients,name,'.$client->id ,
            'country_id' => 'required|exists:countries,id',
            'when' => 'date|nullable',
            'hour' => 'timestamp',
            'status' => 'numeric|exists:statuses,id',
        ];
    }

    public function index()
    {
        return view('user.clients.index');
    }

    public function create()
    {
        $client = New Client() ;
        $CountriesSelector = Country::selector();
        $StatusSelector = Status::selector();
        return view('user.clients.create',compact('client','CountriesSelector','StatusSelector'));
    }

    public function store(Request $request, Client $client)
    {
        $request->validate( $this->rules($client) );
        $client = New Client ;
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->country_id = $request->get('country_id');
        $client->when = $request->get('when');
        $client->datehour = $request->get('datehour');
        $client->obs = $request->get('obs');
        $client->status = $request->get('status');
        $client->save();
        $client->countries()->sync($request->get('countries'));
        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        $CountriesSelector = Country::selector();
        $StatusSelector = Status::selector();
        return view('user.clients.edit',compact('client','CountriesSelector','StatusSelector'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate( $this->rules($client) );
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->country_id = $request->get('country_id');
        $client->when = $request->get('when');
        $client->datehour = $request->get('datehour');
        $client->obs = $request->get('obs');
        $client->status = $request->get('status');
        $client->save();
        $client->countries()->sync($request->get('countries'));
        return redirect()->route('clients.index');
    }

}
