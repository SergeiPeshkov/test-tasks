@extends('layouts.app')

@section('content')

<div class="container-new-contract">

	<form class="form-new-contract" action="{{route('TTGPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ крови на антитела к рецепторам ТТГ |
   <!--@foreach($patientList as $PatientItem)  
  @if($result->patient_id == $PatientItem->id)
     {{$PatientItem->lastname}} {{$PatientItem->name}} {{$PatientItem->patronymic}}
   @endif
@endforeach 
   -->
{{$result->patient_name}} {{$result->patient_lastname}} {{$result->patient_patronymic}} 
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

    <tr>
      <td>Антитела к рецепторам ТТГ
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->ttg}}</p>
      </td>
      <td class="unit"> МЕ/л
      </td>
      <td><h6>0-1,22 МЕ/л -нет заболеваний щитовидной железы <br>
      0-1,58 МЕ/л - при заболеваниях щитовидной железы без болезни Грейвса</h6>
      </td>
    </tr>   


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
        <td width="20%">Анализ выполнен:
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






















