@extends('layouts.app')

@section('content')

<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <span class="float-right">
                         <a href="/notes/create" class="btn btn-success btn-sm">Add Note</a>
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Notes</h3>
                    @if (count($notes)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Note</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($notes as $note)
                                <tr>
                                    <td>{{$note->Title}}</td>
                                    <td><a href="/notes/{{$note->id}}/edit" class="btn btn-dark text-white float-right">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['NotesController@destroy', $note->id], 'method'=> 'POST', 'class'=> 'float-right', 'onsubmit'=>'return confirm("Are you sure?")']) !!}

                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                                            
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                                
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
