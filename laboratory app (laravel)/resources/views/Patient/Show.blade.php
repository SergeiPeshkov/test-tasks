@extends('layouts.app')


@section('content')
<div class="container">
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$patient->name}} {{$patient->lastname}} {{$patient->patronymic}}</div>

                <div class="card-body">

                 @if($patient)

                 <table class="table table-hover table-bordered">
              
                <tbody>
                    <tr>                     
                        <td>ID</td>
                        <td>{{$patient->id}}</td>                      
                    </tr>
                    <tr>                      
                        <td>ФИО:</td>
                        <td>{{$patient->name}} {{$patient->lastname}} {{$patient->patronymic}}</td>                        
                    </tr>

                    <tr>                     
                        <td>Дата рождения:</td>
                        <td>{{$patient->dateOfBirth }}</td>
                    </tr>
                    <tr>                     
                        <td>Серия и номер паспорта:</td>
                        <td><span>{{$patient->passportSeries}}</span> &nbsp;<span>{{$patient->passportNumber}}</span> </td>
                    </tr>

                    <tr>                     
                        <td>Выдан:</td>
                        <td>{{$patient->issuedBy}}  &nbsp;<span>{{$patient->issuedDate}}</span> </td>
                    </tr>

                    <tr>                     
                        <td>Телефон:</td>
                        <td>{{$patient->phone}}  </td>
                    </tr>
                    <tr>                     
                        <td>Адрес:</td>
                        <td>{{$patient->address}}  </td>
                    </tr>

                    <tr>                     
                        <td>Дата создания пациента в системе:</td>
                        <td>{{$patient->created_at }}</td>
                     </tr>                   

                </tbody>
                </table>  


            <table class="table table-hover">
                            <tbody>
                  <tr>                     
                      <td>Оператор:</td>
                      <td>{{$patient->operator}}</td>                      
                  </tr>
                  <tr>                      
                      <td>Доктор:</td>
                      <td>{{$patient->doctor}}</td>                      
                  </tr>

                  <tr>                     
                      <td>Отдел:</td>
                      <td>{{$patient->departament }}</td>
                  </tr>
                                 

              </tbody>
              

              <table class="table-sm float-right">
            
                    <tr><td>
                    <form action="{{ route('patientEdit', ['id'=>$patient->id]) }}" method="post">             
                    
                        <button type="submit" class="btn btn-link "> Редактировать </button>
                
                        @csrf
                    </form>
                        </td>
                        <td>
                <form action="{{ route('patientDelete', ['patient'=>$patient->id]) }}" method="post">
                
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-link text-danger"> Удалить </button>
                        @csrf
                </form>
                    </td>
                    </tr>
              </table> 
                 @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
