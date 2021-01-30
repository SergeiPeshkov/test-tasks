@extends('layouts.app')

@section('content')

<div class="container-new-contract">

	<form class="form-new-contract" action="{{route('PeptidPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		


  @if($result->a_ssr and !$result->peptid)
    <h3>
    Анализ на антитела к циклическому цитруллиновому пептиду | 
  {{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} 
    </h3>
  @endif

  @if($result->peptid and !$result->a_ssr)
    <h3>
    С пептид | 
  {{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} 
    </h3>
  @endif

  @if($result->peptid and $result->a_ssr)  
  <h3>
  Пептиды | 
{{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} 
  </h3>
@endif



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

@if($result->a_ssr)
    <tr>
      <td>А-ССР
      </td>  
      <td width="15%">   
      <p class="fieldOutputAnalis">{{$result->a_ssr}}</p>
      </td>
      <td class="unit">Ед/мл
      </td>
      <td><h6>< 20 Ед/мл - отриц. <br> >= 20 Ед/мл - полож. </h6>
      </td>
    </tr> 
 @endif
 
 @if($result->peptid)
    <tr>
      <td>С пептид
      </td>  
      <td width="15%">   
      <p class="fieldOutputAnalis">{{$result->peptid}}</p>
      </td>
      <td class="unit">Ед/мл
      </td>
      <td><h6>0,7 - 1,9 ng/ml </h6>
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
    <!--   <input type="hidden" name="analiseType" value={{$result->analiseType}}>-->
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>  
@endsection

</div>






















