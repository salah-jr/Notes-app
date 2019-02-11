@extends('layouts.app')

@section('content')
    
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Note <a href="/dashboard" class="float-right btn btn-secondary btn-sm text-white">Go Back</a></div>

                <div class="card-body">
                   
                    {!! Form::open(['action' => ['NotesController@update', $note->id], 'method'=> 'post']) !!}


                        {{ Form::bsText('title', $note->Title) }}
                        {{ Form::bsTextArea('body',  $note->body) }} 
                        {{ Form::bsSubmit('Update', ['class' => 'btn btn-primary']) }}
                        {{ Form::hidden('_method',  'PUT') }} 

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection