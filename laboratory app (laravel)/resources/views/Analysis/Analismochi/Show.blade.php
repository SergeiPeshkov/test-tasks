@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('AnalismochiPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ мочи | 
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
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody class="analisis">
  
 @if($result->color)
    <tr>
          <td>Цвет
          </td>  
          <td width="25%"> 
          <p class="fieldOutputAnalis">{{$result->color}} </p>   
          </td>
          <td class="unit"> 
          </td>
          <td> светло-желтый
          </td>
    </tr>
@endif
  
@if($result->relative_density)
  <tr>
    <td>Относительная плотность
    </td>  
    <td width="15%"> 

    <p class="fieldOutputAnalis">{{$result->relative_density}} </p>
    </td>
    <td class="unit"> 
    </td>
    <td>  1,001-1,028
    </td>
  </tr>
@endif

@if($result->transparency)
  <tr>
    <td>Прозрачность
    </td>  
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->transparency}} </p>
    </td>
    <td class="unit"> 
    </td>
    <td> Прозрачная
    </td>
</tr>
@endif

@if($result->reactionPh)
<tr>
  <td>Реакция (pH)
  </td>  
  <td width="15%">   
  <p class="fieldOutputAnalis">{{$result->reactionPh}} </p>
  </td>
  <td class="unit"> 
  </td>
  <td> 5,0-7,0
  </td>
</tr>
@endif

@if($result->protein)
<tr>
  <td>Белок
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->protein}} </p>
  </td>
  <td class="unit"> г/л
  </td>
  <td> до 0,1241 г/л
  </td>
</tr>
@endif


@if($result->glukoza)
<tr>
  <td>Глюкоза
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->glukoza}} </p>
  </td>
  <td class="unit"> ммоль/л
  </td>
  <td> Отсутствует
  </td>
</tr>
@endif

@if($result->aceton)
<tr>
  <td>Ацетон
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->aceton}} </p>
  </td>
  <td class="unit">
  </td>
  <td> 
  </td>
</tr>
@endif

@if($result->bile_pigments)
<tr>
  <td>Желчные пигменты
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->bile_pigments}} </p>
  </td>
  <td class="unit">
  </td>
  <td> 
  </td>
</tr>
@endif

@if($result->epithelium_flat)
<tr>
  <td>Эпителий плоский
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->epithelium_flat}} </p>
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>
@endif

@if($result->epithelium_transition)
<tr>
  <td>Эпителий переходной
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->epithelium_transition}} </p>
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>
@endif

@if($result->epithelium_renal)
<tr>
  <td>Эпителий почечный
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->epithelium_renal}} </p>
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>
@endif

@if($result->leukocyte)
<tr>
  <td>Лейкоциты
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->leukocyte}} </p>
  </td>
  <td class="unit">
  </td>
  <td> 3-4 в поле зрения
  </td>
</tr>
@endif

@if($result->erythrocyte_nochange)
<tr>
  <td>Эритроциты неизмененные
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->erythrocyte_nochange}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Един. в поле зрения
  </td>
</tr>
@endif

@if($result->erythrocyte_change)
<tr>
  <td>Эритроциты измененные
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->erythrocyte_change}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>
@endif

@if($result->cylinders_hyaline)
<tr>
  <td>Цилиндры гиалиновые
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->cylinders_hyaline}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>
@endif

@if($result->cylinders_grainy)
<tr>
  <td>Цилиндры зернистые
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->cylinders_grainy}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>
@endif

@if($result->slime)
<tr>
  <td>Слизь
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->slime}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Отсутствует
  </td>
</tr>
@endif

@if($result->salt)
<tr>
  <td>Соли
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->salt}} </p>
  </td>
  <td class="unit">
  </td>
  <td>
  </td>
</tr>
@endif


@if($result->bacterias)
<tr>
  <td>Бактерии
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->bacterias}} </p>
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
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






















