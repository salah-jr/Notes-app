@extends('layouts.app')

@section('content')

<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Notes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>All Notes</h3>
                    @if (count($notes)>0)
                       
                           <ul class="list-group">
                                @foreach ($notes as $note)
                                    <li class="list-group-item"><a href="/notes/{{$note->id}}" style="text-decoration: none;">{{$note->Title}}</a></li>
                                @endforeach
                           </ul>
                    @else
                         <p>No notes found</p>       
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
