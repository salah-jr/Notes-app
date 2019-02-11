@extends('layouts.app')

@section('content')
    
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Note <a href="/dashboard" class="float-right btn btn-secondary btn-sm text-white">Go Back</a></div>

                <div class="card-body">
                   
                    {!! Form::open(['action' => 'NotesController@store', 'method'=> 'post']) !!}


                        {{ Form::bsText('title') }}
                        {{ Form::bsTextArea('body') }} 
                        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection