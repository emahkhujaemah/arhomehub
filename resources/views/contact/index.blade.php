@extends('layouts.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table style="margin-left:20px;" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>
                <form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $contacts->links() !!}
      
@endsection