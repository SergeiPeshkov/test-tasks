@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('BiohimyPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Общий биохимический анализ |
   <!--@foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
            {{$PatientItem->lastname}}    {{$PatientItem->name}} {{$PatientItem->patronymic}}
            @endif
        @endforeach 
   -->
   {{$result->patient_lastname}}   {{$result->patient_name}} {{$result->patient_patronymic}} 
  </h3>
<div class="input-group form-row">   

  <div class="form-group col">
     
    <span>Пол:</span>  <p class="fieldOutputAnalisHead">{{$result->sex}} </p>
</div> 

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



    <table class="table table-hover table-bordered table-sm analisisResult ">
      <thead class="thead-light">
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>

@if($result->alt) 
  <tr>
        <td>АЛТ
        </td>  
        <td width="20%"> 
      
        <p class="fieldOutputAnalis">{{$result->alt}}</p>
        </td>
        <td class="unit"> ед/л
        </td>
        <td> до 41 ед/л
        </td>
  </tr>
@endif
@if($result->ast) 
    <tr>
      <td>АСТ
      </td>  
      <td width="20%"> 
      <p class="fieldOutputAnalis">{{$result->ast}}</p>
      </td>
      <td class="unit">ед/л
      </td>
      <td> до 40 ед/л
      </td>
  </tr>
@endif
@if($result->bilirubin_ob) 
  <tr>
    <td>Билирубин общий
    </td> 
    <td width="20%"> 
    <p class="fieldOutputAnalis">{{$result->bilirubin_ob}}</p>
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> до 21 мкмоль/л
    </td>
  </tr>
@endif
@if($result->bilirubin_pr) 
  <tr>
    <td>Билирубин прямой
    </td> 
    <td width="20%"> 

    <p class="fieldOutputAnalis">{{$result->bilirubin_pr}}</p>
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> до 4 мкмоль/л
    </td>
  </tr>
@endif
@if($result->bilirubin_npr)   
  <tr>
    <td>Билирубин не прямой
    </td> 
    <td width="20%"> 

    <p class="fieldOutputAnalis">{{$result->bilirubin_npr}}</p>
    </td>
    <td class="unit">
    </td>
    <td>
    </td>
  </tr>
 @endif
@if($result->mochevina)   
  <tr>
    <td>Мочевина
    </td> 
    <td width="20%"> 

    <p class="fieldOutputAnalis">{{$result->mochevina}}</p>
    </td>
    <td class="unit">мкмоль
    </td>
    <td>2,6 - 8,1 мкмоль
    </td>
  </tr>
@endif
@if($result->kreatinin)   
  <tr>
    <td>Креатинин
    </td> 
    <td width="20%"> 

    <p class="fieldOutputAnalis">{{$result->kreatinin}}</p>
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> М. 80-115; Ж. 53-97
    </td>
  </tr>
@endif
@if($result->belok_ob)   
  <tr>
    <td>Общий белок
    </td> 
    <td width="20%"> 
    <p class="fieldOutputAnalis">{{$result->belok_ob}}</p>
    </td>
    <td class="unit">г/л
    </td>
    <td> 64-83 г/л
    </td>
  </tr>
@endif
@if($result->albumin)  
  <tr>
    <td>Альбумин
    </td> 
    <td width="20%"> 
    <p class="fieldOutputAnalis">{{$result->albumin}}</p>
    </td>
    <td class="unit">г/л
    </td>
    <td> 38-53
    </td>
  </tr>
@endif

@if($result->c_belok) 
  <tr>
    <td>С-реактивный белок</td> 
    <td width="20%"> 
    <p class="fieldOutputAnalis">{{$result->c_belok}}</p>
    </td>
    <td class="unit">мг/л </td>
    <td>до 5 мг/л</td>
  </tr>
@endif

@if($result->revmo_factor) 
  <tr>
    <td>Ревматоидный фактор
    </td> 
    <td width="20%"> 
    <p class="fieldOutputAnalis">{{$result->revmo_factor}}</p></td>
    <td class="unit">МЕ/л</td>
    <td> до 15 МЕ/л</td>
  </tr>
@endif  
@if($result->moch_kislota) 
  <tr>
    <td>Мочевая кислота
    </td> 
    <td width="20%"> 

    <p class="fieldOutputAnalis">{{$result->moch_kislota}}</p>
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> М. 202-416; Ж. 143-339 мкмоль/л
    </td>
  </tr>
  @endif
@if($result->kalij) 
  <tr>
    <td>Калий
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->kalij}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td> 3,5-5,3 ммоль/л
    </td>
  </tr>
@endif
@if($result->natrij) 
  <tr>
    <td>Натрий
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->natrij}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>135-148 ммоль/л
    </td>
  </tr>
@endif
@if($result->hloridy) 
   <tr>
    <td>Хлориды
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->hloridy}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>98-107 ммоль/л
    </td>
  </tr>
@endif
@if($result->kalcij_ion) 
  <tr>
    <td>Кальций ионизированный
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->kalcij_ion}}</P>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>1,15-1,29 ммоль/л
    </td>
  </tr>
@endif

@if($result->kalcij_ob) 
  <tr>
    <td>Кальций общий
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->kalcij_ob}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>2,15 -2,60 ммоль/л
    </td>
  </tr>
@endif
@if($result->magnij) 
  <tr>
    <td>Магний
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->magnij}}</p>
    </td>
    <td class="unit">мг/мл
    </td>
    <td>1,8-2,6 мг/мл
    </td>
  </tr>
@endif
@if($result->zhelezo) 
  <tr>
    <td>Железо
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->zhelezo}}</p>
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td>М. 11-28; Ж. 6,6-26 мкмоль/л.
    </td>
  </tr>
@endif
@if($result->holesterin) 
  <tr>
    <td>Холестерин
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->holesterin}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>3,6-5,3 ммоль/л.
    </td>
  </tr>
@endif
@if($result->trigliceridy) 
  <tr>
    <td>Триглицериды
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->trigliceridy}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>до 1,7 ммоль/л.
    </td>
  </tr>
@endif
@if($result->lpvp) 
  <tr>
    <td>ЛПВП
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->lpvp}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>М > 1,45; Ж > 1,68 ммоль/л.
    </td>
  </tr>
@endif
@if($result->lpnp) 
  <tr>
    <td>ЛПНП
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->lpnp}}</p>
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>до 3,34 ммоль/л.
    </td>
  </tr>
@endif
@if($result->fostofaza) 
  <tr>
    <td>Щелочная фостофаза
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->fostofaza}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 258 Е/л.
    </td>
  </tr>
@endif
@if($result->ggt) 
  <tr>
    <td>ГГТ
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->ggt}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>М. до 55 Е/л; Ж. до 38 Е/л;
    </td>
  </tr>
@endif
@if($result->alfa_amilaza) 
  <tr>
    <td>Альфа-амилаза
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->alfa_amilaza}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 110 Е/л
    </td>
  </tr>
@endif
@if($result->diastaza) 
  <tr>
    <td>Диастаза
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->diastaza}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 500 Е/л
    </td>
    </tr>
@endif
@if($result->kfk) 
    <tr>
    <td>КФК
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->kfk}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>М. до 171 Е/л; Ж. до 145 Е/л;
    </td>
    </tr>
@endif

@if($result->ldg) 
    <tr>
    <td>ЛДГ
    </td> 
    <td width="20%"> 
     <p class="fieldoutputanalis">{{$result->ldg}}</p>
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 480 Е/л
    </td>
    </tr>
@endif

@if($result->ferritin) 
<tr>
  <td>Ферритин </td> 
  <td width="20%"> 
     
      <p class="fieldoutputanalis">{{$result->ferritin}}</p>
  </td>
      <td class="unit">мкл/л
  </td>
     <td>М. 30-300 мкл/л <br> 
    Ж. до 50 лет: 10-160 мкл/л <br>
  свыше 50 лет: 10-300 мкл/л</td>
</tr>
@endif

@if($result->transferrin) 
<tr>
  <td>Трансферрин</td> 
  <td width="15%">       
      <p class="fieldoutputanalis">{{$result->transferrin}}</p>
  </td>
      <td class="unit">г/л
  </td>
     <td>2.0-3.6 г/л</td>
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
      <td width="20%">Анализ выполнил: 
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


</table>
</div>

       <br>
    
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















