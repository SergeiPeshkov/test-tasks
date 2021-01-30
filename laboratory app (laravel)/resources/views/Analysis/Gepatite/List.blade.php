@extends('layouts.app')

@section('content')
<div class="container">
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
@if (session('msgerror'))
<div class="alert alert-info">
    {{ session('msgerror') }}
</div>
@endif  

    <div class="form-group">
	<form action="{{route('analisysList')}}" method="GET">
	
        <div class="row" style="margin-left: -15px;">
 
            <div class="col-md-4">
                <select class="form-control chosen-select" name="analysisList" id="analysisList">    
               
                <option value="{{$slug}}">Анализ крови на маркеры вирусных гепатитов </option>   
                <option>--------------------------------------</option>  
                @foreach($analysisList as $analysisName)
                    <option value="{{$analysisName->slug}}">{{$analysisName->title}}  </option>    
                @endforeach
                    
            </select>
        </div>
        <div class="col">
             <button class="btn btn-mainmenu" type="submit">Показать</button>
        </div>

  </div>
  </form>
</div>

<div class="row justify-content-center">
        <div class="col-md-12">
          
        <div class="card">                  
                    <table class="table table-hover">
                            <thead class="thead-light">
                          <th> №</th>
                          <th> ФИО пациента  </th>                        
                          <th> Дата обращения </th>
                          <th> Номер договора </th>
                          <th> Тип анализа </th>
                          <th> Дата исследования </th>
                          <th> Выполнил </th>
                          </thead>    
                          <tbody>                
                             @foreach($resultList as $index=>$resultItem)                      
                                                    
                            <tr>                               
                            
                            <td>{{$index + 1}}</td>

                            <td>
                            
                           {{$resultItem->patient_lastname}}   {{$resultItem->patient_name}} {{$resultItem->patient_patronymic}} 
                            </td>

                            <td> {{ date('d.m.yy', strtotime($resultItem->dateVisit))}}</td>
                            <td>
                            @foreach($ContractList as $ContractItem)  
                                @if($resultItem->contract_number == $ContractItem->number)                              
                                <p style="line-height: 1.5;"> <a href="{{ route('contractShow', ['id'=>$ContractItem->id]) }}">                          
                                @endif
                                
                            @endforeach
                            
                            {{$resultItem->contract_number}}
                            </a></p> 
                            </td>

                            <td>                                
                            <p style="line-height: 1.5;"> <a href="{{ route('GepatiteShow', ['id'=>$resultItem->id]) }}">  {{$resultItem->analiseType}} </a></p> 
                            </td>

                            <td> {{ date('d.m.yy', strtotime($resultItem->dateResult))}}</td>
                            <td>{{$resultItem->laborant}}</td>
                            </tr>
                           
                             @endforeach   
                         </tbody>

                    </table>
                
                    <p class="center-top">{{ $resultList->links() }} </p>
                      
             </div>
    </div>
</div>
@endsection
