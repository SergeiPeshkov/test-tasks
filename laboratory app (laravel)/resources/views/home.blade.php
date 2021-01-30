@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                <div class="row">
                  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                     <!--   <a class="btn btn-primary" href="{{ url('/patient/add') }}">Добавить пациента</a>
                        <a class="btn btn-primary"  href="{{ url('/patient/list') }}">Открыть список пациентов</a>
                       -->                     
                     </div>
               
            </div>
        </div>
    </div>

</div>
@endsection
