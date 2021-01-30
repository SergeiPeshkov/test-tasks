@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('SerumPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Гормон щитовидной железы|
  <!-- @foreach($patientList as $PatientItem)  
  @if($result->patient_id == $PatientItem->id)
    {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
   @endif
@endforeach   -->
{{$result->patient_lastname}}   {{$result->patient_name}}  {{$result->patient_patronymic}} 
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
@if($result->t3)
    <tr>
      <td>Т3
      </td>  
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->t3}}</p>
      </td>
      <td class="unit"> нм/л
      </td>
      <td><h6>1-2,8 нм/л</h6>
      </td>
    </tr>  
@endif
@if($result->t3free)
    <tr>
      <td>Т3 свобод.
      </td>  
      <td width="15%">     
      <p class="fieldOutputAnalis">{{$result->t3free}}</p>
      </td>
      <td class="unit"> нм/л
      </td>
      <td><h6>0,5-1,8 нм/л</h6>
      </td>
    </tr>  
@endif
@if($result->t4)
    <tr>
      <td>Т4
      </td>  
      <td width="15%">  
      <p class="fieldOutputAnalis">{{$result->t4}}</p>
      </td>
      <td class="unit"> нмоль/л
      </td>
      <td><h6>66-181</h6>
      </td>
    </tr> 
@endif
@if($result->t4free)
    <tr>
      <td>Т4 свобод.
      </td>  
      <td width="15%"> 
          <p class="fieldOutputAnalis">{{$result->t4free}}</p>
      </td>
      <td class="unit"> нмоль/л
      </td>
      <td><h6>12-22</h6>
      </td>
    </tr> 
@endif  
@if($result->ttg)
    <tr>
      <td>ТТГ
      </td>  
      <td width="15%"> 
          <p class="fieldOutputAnalis">{{$result->ttg}}</p>
      </td>
      <td class="unit"> мк NE/ml
      </td>
      <td><h6>0,27 - 4,2</h6>
      </td>
    </tr> 
@endif  
@if($result->atktg)
    <tr>
      <td>АткТГ
      </td>  
      <td width="15%">      
      <p class="fieldOutputAnalis">{{$result->atktg}}</p>
      </td>
      <td class="unit"> ед/мл
      </td>
      <td><h6>до 65 ед/мл</h6>
      </td>
    </tr> 
@endif  
@if($result->atktpo)
    <tr>
      <td>АткТПО
      </td>  
      <td width="15%">     
      <p class="fieldOutputAnalis">{{$result->atktpo}}</p>
      </td>
      <td class="unit"> ед/мл
      </td>
      <td><h6>до 30 ед/мл</h6>
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






















