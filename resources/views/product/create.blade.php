@extends('templates/layout')

@section('title', 'Customers List')

@section('content')
    
    <div class="row mt-5">
        <div class="col-md-8 m-auto">

            <form action="/customers" method="post" class="z-depth-1">
                <div class="form-head teal lighten-2 text-white px-4 py-3">
                    <h5 class="font-weight-normal mb-0">Create Customer</h5>
                </div>

                @include('customers.form')
            </form>

        </div>
    </div>

@endsection