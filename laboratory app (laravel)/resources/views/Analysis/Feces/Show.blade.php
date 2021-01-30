@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('FecesPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ кала | 
      <!-- @foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
           {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
            @endif
        @endforeach  -->
      {{$result->patient_lastname}}    {{$result->patient_name}} {{$result->patient_patronymic}} 
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

      <div class="input-group form-row" >  
            <div class="form-group col">               
                <p class="fieldOutputAnalis"><b>Клинический диагноз</b>: &nbsp;&nbsp;&nbsp; {{$result->diagnosis}}</p>
                <h5 align="center"><b>Физические свойства<b></h5>
            </div> 
      </div>
    
<table class="table table-hover table-bordered table-sm analisisResult" width="70%"> 
  <tbody class="analisis">
  

  @if($result->count)
    <tr> 
      <td width="20%">Количество
      </td>
      <td width="30%">     
      <p class="fieldOutputAnalis"> {{$result->count}}</p>
      </td>
  </tr>
  @endif

  @if($result->forma)
      <tr> 
        <td>Форма
        </td>
        <td> 
        <p class="fieldOutputAnalis"> {{$result->forma}}</p>
        </td>
    </tr>
  @endif


  @if($result->consistency)
    <tr> 
        <td>Консистенция
        </td>
        <td>    
        <p class="fieldOutputAnalis"> {{$result->consistency}}</p>
        </td>
    </tr>
  @endif

  @if($result->color)
    <tr> 
        <td>Цвет
        </td>
        <td> 
        <p class="fieldOutputAnalis"> {{$result->color}}</p>
        </td>
    </tr>
  @endif

@if($result->smell)
  <tr> 
      <td>Запах
      </td>
      <td>    
      <p class="fieldOutputAnalis"> {{$result->smell}}</p>
      </td>
  </tr>      
@endif 

@if($result->nfood)
<tr> 
      <td>Остатки непереваренной пищи
      </td>
      <td> 

      <p class="fieldOutputAnalis"> {{$result->nfood}}</p>
      </td>
</tr>
@endif
   
@if($result->slime)
  <tr> 
        <td>Слизь
        </td>
        <td> 

        <p class="fieldOutputAnalis"> {{$result->slime}}</p>
        </td>
</tr>
@endif

@if($result->blood)
  <tr> 
        <td>Кровь
        </td>
        <td> 

        <p class="fieldOutputAnalis"> {{$result->blood}}</p>
        </td>
</tr>
@endif

@if($result->pus)
  <tr> 
        <td>
          Гной
        </td>
        <td>      
        <p class="fieldOutputAnalis"> {{$result->pus}}</p>
        </td>
      </tr>
@endif

@if($result->cloth)
  <tr> 
      <td>
        Кусочки ткани
      </td>
      <td> 
          <p class="fieldOutputAnalis"> {{$result->cloth}}</p>
      </td>
  </tr>
@endif

@if($result->conkrementy)
  <tr> 
      <td>
      Конкременти (копролиты)
      </td>
      <td>  
        <p class="fieldOutputAnalis"> {{$result->conkrementy}}</p>
      </td>
  </tr>
@endif

</tbody>
</table>


<div class="input-group form-row" >  
  <div class="form-group col">               
            <h5 align="center"><b>Микроскопические исследования<b></h5>
  </div> 
</div>

<table class="table table-hover table-bordered table-sm analisisResult" width="70%"> 
  <tbody class="analisis">

@if($result->food) 
    <tr> 
      <td width="20%">Остатки пищи
      </td>
      <td width="30%">     
      <p class="fieldOutputAnalis"> {{$result->food}}</p>
      </td>
  </tr>
@endif

@if($result->muscle_fibers_notchange) 
    <tr> 
      <td width="20%">Мышечные волокна не изменены
      </td>
      <td width="30%"> 
      <p class="fieldOutputAnalis"> {{$result->muscle_fibers_notchange}}</p>
      </td>
  </tr>
@endif


@if($result->muscle_fibers_change) 
  <tr> 
      <td>Мышечные волокна изменены (перетравлены)
      </td>
      <td>    
      <p class="fieldOutputAnalis"> {{$result->muscle_fibers_change}}</p>
      </td>
  </tr>
@endif

@if($result->vegetable_fiber) 
  <tr> 
      <td>Растительная клетчатка, которая не переваривается
      </td>
      <td> 
      <p class="fieldOutputAnalis"> {{$result->vegetable_fiber}}</p>
      </td>
  </tr>
@endif   

@if($result->neutral_fat)
  <tr> 
      <td>Жир нейтральный
      </td>
      <td>    
      <p class="fieldOutputAnalis"> {{$result->neutral_fat}}</p>
      </td>
  </tr>      
@endif 

@if($result->fatty_acid)
<tr> 
      <td width="20%">Жирные кислоты
      </td>
      <td width="30%"> 

      <p class="fieldOutputAnalis"> {{$result->fatty_acid}}</p>
      </td>
</tr>
@endif 

@if($result->soap)    
  <tr> 
        <td>Мыла
        </td>
        <td> 

        <p class="fieldOutputAnalis"> {{$result->soap}}</p>
        </td>
</tr>
@endif 

@if($result->crystals)   
  <tr> 
        <td>Кристалы
        </td>
        <td> 

        <p class="fieldOutputAnalis"> {{$result->crystals}}</p>
        </td>
  </tr>
@endif 

@if($result->pus)  
  <tr> 
        <td>
          Гной
        </td>
        <td>      
        <p class="fieldOutputAnalis"> {{$result->pus}}</p>
        </td>
      </tr>
@endif 

@if($result->micro_slime)  
  <tr> 
      <td>
        Слизь
      </td>
      <td> 
          <p class="fieldOutputAnalis"> {{$result->micro_slime}}</p>
      </td>
  </tr>
@endif 

@if($result->epithelial_cells)  
  <tr> 
      <td>
        Эпителиальные клетки
      </td>
      <td>  
        <p class="fieldOutputAnalis"> {{$result->epithelial_cells}}</p>
      </td>
  </tr>
@endif  

@if($result->leukocyte)  
    <tr> 
      <td>
        Лейкоциты
      </td>
      <td>  
        <p class="fieldOutputAnalis"> {{$result->leukocyte}}</p>
      </td>
  </tr>
@endif

@if($result->erythrocyte)  
  <tr> 
    <td>
      Эритроциты
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->erythrocyte}}</p>
    </td>
  </tr>
@endif

@if($result->elementsWithSignsOfMalignancy)  
  <tr> 
    <td>
      Элементы с признаками злокачественности
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->elementsWithSignsOfMalignancy}}</p>
    </td>
  </tr>
@endif


@if($result->iodophilic_flora) 
  <tr> 
    <td>
      Йодофильная флора
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->iodophilic_flora}}</p>
    </td>
  </tr>
@endif

@if($result->protozoa) 
  <tr> 
    <td>
      Простейшие
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->protozoa}}</p>
    </td>
  </tr>
@endif

@if($result->helminth_eggs) 
  <tr> 
    <td>
      Яйца гельминтов
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->helminth_eggs}}</p>
    </td>
  </tr>
@endif

@if($result->fungus_like_elements) 
  <tr> 
    <td>
      Элементы грибкоподобные до дрожжевого
    </td>
    <td>  
      <p class="fieldOutputAnalis"> {{$result->fungus_like_elements}}</p>
    </td>
  </tr>
@endif

</tbody>
</table>

@if($result->conclusion) 
<div class="input-group form-row" >  
  <div class="form-group col">               
      <p class="fieldOutputAnalis"><b>Заключение</b>: &nbsp;&nbsp;&nbsp; {{$result->conclusion}}</p>    
  </div> 
</div>
@endif

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






















