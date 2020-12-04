<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class blogUserController extends Controller
{
    public function index(Request $request)
    {
        $entries = Auth::user()->postEntries()
                ->paginate(12);
        
        return view('dashboard.index')
            ->with('entries',$entries); 
    }
   
    public function show($id)
    {
       $entry = \App\Models\blog::find($id);
       
        if (empty($entry)){
            Flash::error('No se ha encontrado la entrada en el blog buscada.');
            return back()->withInput();
        }

        return view('blog.index')
            ->with('entry',$entry);
    }
    
    public function create()
    {
        return view('dashboard.create');
    }
    
    public function store(\App\Http\Requests\storeBlogRequest $request)
    {
        $blog =new \App\Models\blog();
        //$blog->id_user = $request['id_user'];
        //$blog->title = $request['title'];
        //$blog->description = $request['description'];
        $blog->create($request->all());
        Flash::success('La entrada al blog fue guardada correctamente');
        
        return redirect(route('dashboard'));
    }
    
    public function import(){
        $client = new Client();
        
        $response = $client->request('GET', env('API_ENDPOINT'));
        $data = json_decode($response->getBody());
        
        if (empty($data)){
            Flash::error('No se pudieron obtener las entradas del blog para importar');
            return redirect()->back();
        }
        
        foreach ($data as $entry){
            foreach($entry as $e){
                $blog = new \App\Models\blog();
                $blog->id_user = Auth::user()->id;
                $blog->title = $e->title;
                $blog->description = $e->description;
                $blog->publication_date = $e->publication_date;
                $blog->save();
            }
        }
        Flash::success('La entradas al blog fueron importadas correctamente');
        
        return redirect(route('dashboard'));
    }
}
