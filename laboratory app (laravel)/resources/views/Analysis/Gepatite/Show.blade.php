@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('GepatitePDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ крови на маркеры вирусных гепатитов |
   <!--@foreach($patientList as $PatientItem)  
      @if($result->patient_id == $PatientItem->id)
        {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
      @endif
    @endforeach  
-->
 {{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} 
 </h3>

<div class="input-group form-row">         

  <div class="form-group col">
    <span>Возраст пациента:</span>  <p class="fieldOutputAnalisHead">{{$result->age}} </p>
</div> 
   
     
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

  </thead>
  <tbody>
@if($result->hbsag)
    <tr>
      <td>HBsAg
      </td>  
      <td width="15%"> 
 
      <p class="fieldOutputAnalis">{{ $result->hbsag}} </p>
      </td>
      
      <td>Отрицательный
      </td>
    </tr>  
@endif 
@if($result->ab_hbcor)
    <tr>
      <td>AB-Hbcor
      </td>  
      <td width="15%"> 
     
      <p class="fieldOutputAnalis">{{ $result->ab_hbcor}} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr>  
@endif
@if($result->ab_hbcor_lgm)
    <tr>
      <td>AB-Hbcor-IgM
      </td>  
      <td width="15%"> 
     
      <p class="fieldOutputAnalis">{{ $result->ab_hbcor_lgm}} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr>  
@endif
@if($result->hbeag)
    <tr>
      <td>HBeAg
      </td>  
      <td width="15%"> 
    
      <p class="fieldOutputAnalis">{{ $result->hbeag }} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr> 
@endif
@if($result->ab_hbe)
    <tr>
      <td>AB-HBe
      </td>  
      <td width="15%"> 

      <p class="fieldOutputAnalis">{{ $result->ab_hbe}} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr> 
@endif
@if($result->ab_hdv)
    <tr>
      <td>AB-HDV
      </td>  
      <td width="15%"> 
    
      <p class="fieldOutputAnalis">{{ $result->ab_hdv}} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr> 
@endif
@if($result->ab_hcv)
    <tr>
      <td>AB-HCV
      </td>  
      <td width="15%"> 

      <p class="fieldOutputAnalis">{{ $result->ab_hcv}} </p>
      </td>
      <td>Отрицательный
      </td>
    </tr> 
@endif

@if($result->hcv)
    <tr>
      <td>HCV
      </td>  
      <td width="15%"> 

      <p class="fieldOutputAnalis">{{ $result->hcv}} </p>
      </td>
      <td>Отрицательный
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
      
        <td width="20%">Лаборант
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






















