@extends('layouts.app')

@section('content')

<div class="container-new-contract">

	<form class="form-new-contract" action="{{route('ImunoglobinPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Определение иммуноглобина |
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
          <span>Дата обращения:</span>  <p class="fieldOutputAnalisHead">{{ date('d.m.yy', strtotime($result->dateVisit))}}</p>
      </div>   
</div>



<table class="table table-hover table-bordered table-sm analisisResult">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Норма</th>
   
  </thead>
  <tbody class="analisis">

@if($result->imE)
      <tr>
      <td>Определение иммуноглобина E
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->imE}} </p>    
      </td>
      <td class="unit">МЕ/мл
      </td>
      <td>до 130 МЕ/мл
      </td>
    </tr>  
@endif


@if($result->imG)
      <tr>
      <td>Определение иммуноглобина G
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->imG}} </p>    
      </td>
      <td class="unit">г/л
      </td>
      <td>7-16 г/л
      </td>
    </tr>  
@endif


@if($result->imA)
      <tr>
      <td>Определение иммуноглобина A
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->imA}} </p>    
      </td>
      <td class="unit">г/л
      </td>
      <td>0,7-4,0 г/л
      </td>
    </tr>  
@endif


@if($result->imM)
      <tr>
      <td>Определение иммуноглобина M
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->imM}} </p>    
      </td>
      <td class="unit">г/л
      </td>
      <td>0,4-2,3 г/л
      </td>
    </tr>  
@endif


</tbody>
</table>

<div style="width: 60%; display: block;">
  <table class="table" width="60%">
      <tr> 
      <td width="20%">Дата:
      </td>
      <td width="20%"> 
           <p class="fieldOutputAnalis">{{ date('d.m.yy', strtotime($result->dateResult))}} </p>
      </td>
    </tr>
    <tr> 
      <td width="20%">Анализатор:
      </td>
      <td width="20%">      
      <p class="fieldOutputAnalis">{{$result->analyser}} </p>    
      </td>
    </tr>

    <tr> 
      
        <td width="20%">Анализ выполнил:
        </td>
        <td width="20%"> 
                <p class="fieldOutputAnalis">{{$result->laborant}} </p>     
        </td>
      </tr>
      <!--
      <td width="20%">Врач:
      </td>
      <td width="20%"> 
       
      <p class="fieldOutputAnalis">{{$result->doctor}} </p>  
      </td>
    -->
      
  </table>
</div>
       <br>
       <input type="hidden" name="analiseType" value={{$result->analiseType}}>
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















