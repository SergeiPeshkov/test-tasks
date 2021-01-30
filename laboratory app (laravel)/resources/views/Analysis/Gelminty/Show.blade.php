@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('GelmintyPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ кала на яйца гельминтов | 
      <!-- @foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
           {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
            @endif
        @endforeach  -->
        {{$result->patient_lastname}}  {{$result->patient_name}} {{$result->patient_patronymic}} 
      </h3>

    
      <div class="input-group form-row" >  

        <div class="form-group col"> 
          <span>Возраст пациента:</span>  <p class="fieldOutputAnalisHead">{{$result->age}} </p>      
        </div>  
 
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
  </thead>
  <tbody class="analisis">
  
@if($result->helminth_eggs)
  <tr>
    <td>Яйца гельминтов
    </td>  
    <td width="60%">  
    <p class="fieldOutputAnalis">{{$result->helminth_eggs}} </p>  
    </td>
  </tr>
@endif

@if($result->protozoa)
    <tr>   
      <td>Простейшие
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->protozoa}} </p>  
      </td>   
  </tr>
@endif

@if($result->occultBloodReaction)
    <tr>  
      <td>Реакция на скрытую кровь
    </td>  
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->occultBloodReaction}} </p>  
    </td>   
  </tr>
@endif

@if($result->sterkobilin)
  <tr>   
    <td>Реакция на стеркобилин</td>  
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->sterkobilin}} </p> 
    </td>  
  </tr>
@endif

@if($result->bilirubin)

  <tr>  
    <td>Реакция на билирубин </td>  
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->bilirubin}} </p>
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
    </tr>

  </table>
</div>

       <br>
    
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















