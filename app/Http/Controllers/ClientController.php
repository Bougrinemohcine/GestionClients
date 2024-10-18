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
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'code' => 'required|string|max:255|unique:clients',  // Ensure code is unique for new clients
            'address' => 'required|string',
            'telephone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
        ]);
        
    
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'code' => $request->code, // Include code in client creation
            'address' => $request->address,
            'telephone' => $request->telephone,
            'website' => $request->website,
            'admin_id' => Auth::id(),
        ]);
    
        return redirect()->route('clients.index')->with('message', 'Client created successfully.');
    }
    

    public function edit(Client $client)
    {
        return response()->json($client);
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            'code' => 'required|string|max:255|unique:clients,code,' . $client->id, // Unique code validation allowing current client
            'address' => 'required|string',
            'telephone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
        ]);
        

        $client->update($request->only('name', 'email','code', 'address', 'telephone', 'website')); // Include new fields

        return redirect()->route('clients.index')->with('message', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('message', 'Client deleted successfully.');
    }
}
