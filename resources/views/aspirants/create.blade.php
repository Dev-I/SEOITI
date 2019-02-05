@extends('layouts.original')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aspiranes</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'aspirants.store']) !!}
                        @include('aspirants.partials.registerAspirant')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection