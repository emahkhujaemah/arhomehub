@extends('layouts.master')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div style="text-align: right;margin: 20px;">
    <a class="btn btn-primary" href="{{ route('welcomes.create') }}">Add</a>
</div>
    <table style="margin-left:20px;width:96%;" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Heading</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($welcomes as $welcome)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $welcome->heading }}</td>
            <td>{{ $welcome->detail }}</td>
            <td>
                <form action="{{ route('welcomes.destroy',$welcome->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('welcomes.edit',$welcome->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection