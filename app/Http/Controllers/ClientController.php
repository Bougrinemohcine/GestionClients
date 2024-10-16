<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;



class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::where('admin_id', Auth::id())->get();
        return view('admin.settings.clients', compact('clients'));
    }

    public function create()
    {
        return view('admin.settings.create-client');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'address' => 'required|string',
        ]);

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'admin_id' => Auth::id(),
        ]);

        return redirect()->route('clients.index')->with('message', 'Client created successfully.');
    }

    // Add this method to the ClientController
public function edit(Client $client)
{
    return response()->json($client);
}


    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            'address' => 'required|string',
        ]);

        $client->update($request->only('name', 'email', 'address'));

        return redirect()->route('clients.index')->with('message', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('message', 'Client deleted successfully.');
    }
}
