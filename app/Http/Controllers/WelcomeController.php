<?php
  
namespace App\Http\Controllers;
  
use App\Models\Welcome;
use Illuminate\Http\Request;
  
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $welcomes = Welcome::latest()->paginate(5);
        return view('welcomes.index',compact('welcomes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Welcomes.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'detail' => 'required',
        ]);
      
        Welcome::create($request->all());
       
        return redirect()->route('welcomes.index')
                        ->with('success','Welcome created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        // dd($welcome);
        return view('Welcomes.show',compact('welcome'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        return view('welcomes.edit',compact('welcome'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        $request->validate([
            'heading' => 'required',
            'detail' => 'required',
        ]);
      
        $welcome->update($request->all());
      
        return redirect()->route('welcomes.index')
                        ->with('success','Welcome updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcome  $Welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        $welcome->delete();
       
        return redirect()->route('welcomes.index')
                        ->with('success','Welcome deleted successfully');
    }

   
}