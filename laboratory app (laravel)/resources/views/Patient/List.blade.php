@extends('layouts.app')

@section('content')
<div class="container">
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-12">
          
        <div class="card">                  
                    <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                          <th> ID    </th>
                          <th> ФИО пациента  </th>                        
                          <th> Дата рождения </th>
                          <th> Список договоров </th>
                          
                          </thead>    
                          <tbody>                
                             @foreach($patientList as $patientItem)                         
                                                    
                            <tr>
                            
                            <td>{{ $patientItem->id }}</td>
                            <td>  <a href="{{ route('patientShow', ['id'=>$patientItem->id]) }}">{{ $patientItem->lastname }} {{$patientItem->name }} {{$patientItem->patronymic }}</a></td>
                          
                                  <td> {{ date('d.m.yy', strtotime($patientItem->dateOfBirth))}}</td>

                                <td>                    
                              @foreach($contractList as $contractItem)
                                @if ($patientItem->id == $contractItem->patient_id)                                    
                                <p style="line-height: 0.3;"> <a href="{{ route('contractShow', ['id'=>$contractItem->id]) }}">Договор № {{ $contractItem->number}} </a>от {{$contractItem->created_at->format('d.m.y')}}</p>                                    
                                @endif  
                             @endforeach
                                </td>                         


                            </tr>
                           
                         @endforeach                       
                     


                         </tbody>

                    </table>
                    <p class="center-top">{{ $patientList->links() }} </p>

                      
             </div>
    </div>
</div>
@endsection
