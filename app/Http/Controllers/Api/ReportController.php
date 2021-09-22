<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ReportController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('valida_id_post');
    }
    
    public function index()
    {
        $client = new Client([
        
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            
            'timeout'  => 2.0,
        ]);
    
        $response = $client->request('GET', 'posts');
    
        return $response->getBody()->getContents();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $client = new Client([
        
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            
            'timeout'  => 2.0,
        ]);
    
        $response = $client->request('GET', "posts/{$id}");
    
        return $response->getBody()->getContents();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
