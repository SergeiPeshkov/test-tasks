@extends('layouts.app')

@section('content')

<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('CoagulationPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Показатели системы свертывания крови |
  <!--
   @foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
           {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
            @endif
        @endforeach 
  -->
  {{$result->patient_lastname}}  {{$result->patient_name}}   {{$result->patient_patronymic}} 
       </h3>
<div class="input-group form-row">   


        <div class="form-group col">
          <span>Номер договора:</span>  <p class="fieldOutputAnalisHead">{{$result->contract_number}} </p>
         
        </div>    
    
        <div class="form-group col">
         
            <span>Дата обращения:</span>  <p class="fieldOutputAnalisHead">{{ date('d.m.yy', strtotime($result->dateVisit))}} </p>
        </div>   
        <div class="form-group col">
         
          <span>Возраст пациента:</span>  <p class="fieldOutputAnalisHead">{{$result->age}} </p>
      </div> 
</div>
    
<table class="table table-hover table-bordered table-sm analisisResult">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>

@if($result->pro_index)  
    <tr>
      <td>Протромбиновый индекс
      </td>  
      <td width="15%"> 
     
      <p class="fieldOutputAnalis">{{$result->pro_index}} </p>
      
      </td>
      <td class="unit"> %
      </td>
      <td> 90-120%
      </td>
    </tr>
@endif  

@if($result->mno)   
    <tr>
      <td>МНО
      </td>  
      <td width="15%"> 
         <p class="fieldOutputAnalis">{{$result->mno}} </p>
      </td>
      <td class="unit"> 
      </td>
      <td> 0,9-1,4
      </td>
    </tr>
@endif
 
@if($result->pro_time)  
    <tr>
      <td>Протромбиновое время
      </td>  
      <td width="15%"> 
         <p class="fieldOutputAnalis">{{$result->pro_time}} </p>
      </td>
      <td class="unit"> сек
      </td>
      <td> 11,5-16,5 сек
      </td>
    </tr>
@endif  


@if($result->achtv)   
    <tr>
      <td>АЧТВ
      </td>  
      <td width="15%"> 
     
      <p class="fieldOutputAnalis">{{$result->achtv}} </p>
      </td>
      <td class="unit"> сек
      </td>
      <td> 25-45 сек
      </td>
    </tr>
@endif

@if($result->fibrinogenA)    
    <tr>
      <td>Фибриноген A
      </td>  
      <td width="15%"> 
   
      <p class="fieldOutputAnalis">{{$result->fibrinogenA}} </p>
      </td>
      <td class="unit"> г/л
      </td>
      <td> 2,22-4,44 г/л
      </td>
    </tr>
@endif

@if($result->tromb_time)  
    <tr>
      <td>Тромбиновое время
      </td>  
      <td width="15%"> 
         <p class="fieldOutputAnalis">{{$result->tromb_time}} </p>
      </td>
      <td class="unit"> сек
      </td>
      <td> 15-18 сек
      </td>
    </tr>
@endif  



</tbody>
</table>

<div style="width: 60%; display: block;">

  <table class="table table-hover" width="60%">
      <tr> 
      <td width="20%">Дата
      </td>
      <td width="20%"> 
       <p class="fieldoutputanalis">{{ date('d.m.yy', strtotime($result->dateResult))}}</p>
      </td>
    </tr>
    <tr> 
      <td width="20%">Анализатор
      </td>
      <td width="20%"> 
      
      <p class="fieldoutputanalis">{{$result->analyser}}</p>
      </td>
    </tr>


      <tr> 
        <td width="20%">Анализ выполнил:
        </td>
        <td width="20%"> 
         
        <p class="fieldoutputanalis">{{$result->laborant}}</p> 
        </td>
      </tr>
    <!--
          <td width="20%">Врач
          </td>
          <td width="20%"> 
        
          <p class="fieldoutputanalis">{{$result->doctor}}</p>   
          </td>
        </tr>
  -->
  </table>
  </div>

      <br>    
			<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















