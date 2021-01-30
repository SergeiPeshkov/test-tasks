@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('FolkislotaPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анемическая панель | 
 <!-- @foreach($patientList as $PatientItem)  
  @if($result->patient_id == $PatientItem->id)
    {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
   @endif
@endforeach  
 -->
  {{$result->patient_lastname}}  {{$result->patient_name}} {{$result->patient_patronymic}} 
 </h3>

<div class="input-group form-row">         


  <div class="form-group col">
    <span>Номер договора:</span>  <p class="fieldOutputAnalisHead">{{$result->contract_number}} </p>
   
  </div>    

  <div class="form-group col">
   
      <span>Дата обращения:</span>  <p class="fieldOutputAnalisHead">{{ date('d.m.yy', strtotime($result->dateVisit))}} </p>
  </div>   
</div>



<table class="table table-hover table-bordered table-sm analisisResult">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Норма</th>
  </thead>
  <tbody>
@if($result->folkislota)
    <tr>
      <td>Фолиевая кислота
      </td>  
      <td width="15%"> 
    
      <p class="fieldOutputAnalis">{{$result->folkislota}} </p>
      </td>
      <td class="unit"> нг/мл
      </td>
      <td><h6>до 4,6-34,8 нг/мл</h6>
      </td>
    </tr>  
@endif
@if($result->b12)
    <tr>
      <td>Витамин B<sub>12</sub>
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{ $result->b12}} </p>
      </td>
      <td class="unit"> нг/мл
      </td>
      <td><h6>197-771 нг/мл</h6>
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
      -->
    </tr>
  </table>
  </div>

       <br>
       <input type="hidden" name="analiseType" value={{$result->analiseType}}>
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















