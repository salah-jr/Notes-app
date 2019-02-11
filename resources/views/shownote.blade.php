@extends('layouts.app')

@section('content')
    
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$note->Title}} <a href="/dashboard" class="float-right btn btn-secondary btn-sm text-white">Go Back</a></div>

                <div class="card-body">
                    
                    {{$note->body}}
                   
                </div>
            </div>
        </div>
    </div>

@endsection