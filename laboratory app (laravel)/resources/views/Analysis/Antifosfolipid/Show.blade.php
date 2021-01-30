@extends('layouts.app')

@section('content')

<div class="container-new-contract">

	<form class="form-new-contract" action="{{route('AntifosfolipidPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Антифосфолипидный скрининг |
 <!--  @foreach($patientList as $PatientItem)  
  @if($result->patient_id == $PatientItem->id)
    {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
   @endif
@endforeach  -->
{{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} 
</h3>

<div class="input-group form-row" >  

        <div class="form-group col"> 
          <span>Номер договора:</span>  <p class="fieldOutputAnalisHead">{{$result->contract_number}} </p>
        </div>    
    
        <div class="form-group col">               
             <span>Дата обращения:</span>  <p class="fieldOutputAnalisHead">{{ date('d.m.yy', strtotime($result->dateVisit))}}</p>
         </div>   
</div>

<table class="table table-hover table-bordered table-sm analisisResult">
  <thead class="thead-light">
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Референсные значения</th>
  </thead>
  <tbody class="analisis">

  @if($result->lgg)
    <tr>
      <td>Антифосфолипидный скрининг LgG
      </td>  
      <td width="15%">    
      <p class="fieldOutputAnalis">{{$result->lgg}}</p>
      </td>
      <td class="unit">
      </td>
      <td><h6>< 10 отрицательный <br> >= 10 положительный </h6>
      </td>
    </tr>  
  @endif  
  
@if($result->lgm)
    <tr>
      <td>Антифосфолипидный скрининг LgM
      </td>  
      <td width="15%"> 
           <p class="fieldOutputAnalis">{{$result->lgm}}</p>
      </td>
      <td class="unit">
      </td>
      <td><h6>< 10 отрицательный <br> >= 10 положительный </h6>
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






















