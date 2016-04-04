@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <div class="container text-center">
                            <h2>Bienvenido usuario {{ Auth::user()->name }}</h2>
                            <a href="{{url('/pacientes')}}" class="btn btn-primary btn-lg">Comenzar</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
