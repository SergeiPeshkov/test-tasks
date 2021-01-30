@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('OMPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Определение уровня онкомаркеров |
  <!-- @foreach($patientList as $PatientItem)  
  @if($result->patient_id == $PatientItem->id)
    {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
   @endif   
@endforeach -->
{{$result->patient_lastname}} {{$result->patient_name}}  {{$result->patient_patronymic}} 
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

  @if($result->sex)
      <tr>
      <td>Пол пациента
      </td>  
      <td width="15%"> 
       <p class="fieldOutputAnalis">{{$result->sex}}</p>
      </td>
      <td class="unit"> 
      </td>
      <td> 
      </td>
    </tr>
@endif
@if($result->age)
    <tr>
      <td>Возраст пациента
      </td>  
      <td width="15%"> 
       <p class="fieldOutputAnalis">{{$result->age}}</p>
      </td>
      <td class="unit"> 
      </td>
      <td> 
      </td>
    </tr>  
@endif
@if($result->afp)
    <tr>
      <td>Альфа-фетопротеин, (АФП)
      </td>  
      <td width="15%">       
      <p class="fieldOutputAnalis">{{$result->afp}}</p>
      </td>
      <td class="unit"> МЕ/мл
      </td>
      <td>  <h6>0-14,4 МЕ/мл</h6>
      </td>
    </tr>
@endif
@if($result->sa242)
  <tr>
    <td>СА-242
    </td>  
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->sa242}}</p>
    </td>
    <td class="unit"> Е/мл
    </td>
    <td>  <h6>0-20 Е/мл</h6>
    </td>
  </tr>
@endif
@if($result->rea)
  <tr>
    <td>(РЭА)
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->rea}}</p>
    </td>
    <td class="unit">нг/мл
    </td>
    <td>  <h6>0-5,0 нг/мл </h6>
    </td>
  </tr>
@endif
@if($result->sa125)
  <tr>
    <td>СА-125
    </td>  
    <td width="15%">     
    <p class="fieldOutputAnalis">{{$result->sa125}}</p>
    </td>
    <td class="unit"> МЕ/мл
    </td>
    <td>  <h6>0-35 МЕ/мл </h6>
    </td>
  </tr>
@endif
@if($result->he4)
  <tr>
    <td>HE-4
    </td>  
    <td width="15%">     
    <p class="fieldOutputAnalis">{{$result->he4}}</p>
    </td>
    <td class="unit">
    </td>
    <td>  <h6>0-158 </h6>
    </td>
  </tr>
@endif
@if($result->psa)
  <tr>
    <td>Простатспецифический антиген, (ПСА)
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->psa}}</p>
    </td>
    <td class="unit">нг/мл
    </td>
    <td>  <h6>0-4 нг/мл</h6>
    </td>
  </tr>
  @endif

@if($result->sa153)
  <tr>
    <td>СА 15-3
    </td>  
    <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->sa153}}</p>
    </td>
    <td class="unit">МЕ/мл
    </td>
    <td>  <h6>0-30 МЕ/мл</h6>
    </td>
  </tr>
@endif
@if($result->sa199)
  <tr>
    <td>СА 19-9
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->sa199}}</p>
    </td>
    <td class="unit">МЕ/мл
    </td>
    <td>  <h6>0-37 МЕ/мл</h6>
    </td>
  </tr>
@endif
@if($result->sa724)
  <tr>
    <td>СА 72-4
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->sa724}}</p>
    </td>
    <td class="unit">н/мл
    </td>
    <td>  <h6>0-4 н/мл</h6>
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






















