<?php
  
namespace App\Http\Controllers;
  
use App\Models\Contact;
use Illuminate\Http\Request;
  
class ContactController extends Controller
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
        $contacts = Contact::latest()->paginate(5);
        return view('contact.index',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
      
        Contact::create($request->all());
       
        return redirect()->route('contact.index')
                        ->with('success','Contact created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // dd($welcome);
        return view('contact.show',compact('contact'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
      
        $contact->update($request->all());
      
        return redirect()->route('contact.index')
                        ->with('success','Contact updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\welcome  $Welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
       
        return redirect()->route('contact.index')
                        ->with('success','Contact deleted successfully');
    }
}