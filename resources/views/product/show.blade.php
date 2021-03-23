@extends('templates/layout')

@section('title', "Details For ".$customer->name)

@section('content')
    <div class="row mt-5">
        <div class="col-md-12 d-flex">
            <h3>Details For {{ $customer->name }}</h3>
            <a href="/customers/{{ $customer->id }}/edit" class="btn btn-md py-1.5 mb-4 btn-warning">Edit</a>
            <form action="/customers/{{ $customer->id }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-md py-1.5 mb-4 btn-danger">delete</button>
            </form>
        </div>

        <div class="col-md-4">
            <ul class='p-0'>
                <li class="list-group-item"><b>Name: </b>{{ $customer->name }}</li>
                <li class="list-group-item"><b>Email: </b>{{ $customer->email }}</li>
                <li class="list-group-item"><b>Company: </b>{{ $customer->company->name }}</li>
            </ul>
        </div>
    </div>    
    
@endsection