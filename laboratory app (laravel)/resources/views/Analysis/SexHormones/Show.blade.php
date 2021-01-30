@extends('layouts.app')

@section('content')


<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('SexHormonesPDF', ['id'=>$result->id])}}" method="POST">
		@csrf		

<h3>Анализ крови на содержание половых гормонов | 
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
   
  </thead>
  <tbody class="analisis">


@if($result->age)
    <tr>
      <td>Возраст пациента
      </td>  
      <td width="15%">      
      <p class="fieldOutputAnalis">{{$result->age}}</p>
      </td>    
      <td style="padding-left: 50px;"> 
      </td>
    </tr>
@endif   
@if($result->prolaktin)
  <tr>
    <td>Пролактин (мкМЕ/мл)
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->prolaktin}}</p>
    </td>    
    <td style="padding-left: 50px;">  <h6>М: 105-540 <br>Ж: 67-726 <br> </h6>
    </td>
  </tr>
@endif
@if($result->progesteron)
  <tr>
    <td>Прогестерон (нмоль/л)
    </td>  
    <td width="15%">     
    <p class="fieldOutputAnalis">{{$result->progesteron}}</p>
    </td>  
    <td style="padding-left: 50px;">  <h6>М: 0-4
      <br>фолликулярная фаза 0,6-4,6
      <br>фаза овуляции 11-80
      <br>лютеиновая фаза 7,5-80
      <br>постменопауза 0-2,3
      <br><u><i>Беременные:</i></u>
       <br>&nbsp;&nbsp;&nbsp;&nbsp;1й триместр - 360 -240
       <br>&nbsp;&nbsp;&nbsp;&nbsp;2-й триместр - 60-240
       <br>&nbsp;&nbsp;&nbsp;&nbsp;3-й триместр - 156-722
     </h6>
    </td>
  </tr>
@endif
@if($result->estradiol)
   <tr>
    <td>Эстрадиол (нмоль/л) 
    </td>  
    <td width="15%">    
    <p class="fieldOutputAnalis">{{$result->estradiol}}</p>
    </td>    
    <td style="padding-left: 50px;">  <h6>М: 0-4
      <br>фолликулярная фаза 0,05-0,7
      <br>фаза овуляции 0,34-1,8
      <br>лютеиновая фаза 0,1-1,1
      <br>постменопауза 0-0,23
      <br><u><i>Беременные:</i></u>
       <br>&nbsp;&nbsp;&nbsp;&nbsp;1й триместр - 0,1 -10,5
       <br> &nbsp;&nbsp;&nbsp;&nbsp;2-й триместр - 3,0 - 21
       <br>&nbsp;&nbsp;&nbsp;&nbsp;3-й триместр - 6,0 - 80
     </h6>
    </td>
  </tr>
@endif
@if($result->folukulo_hormon)

  <tr>
    <td>Фолликулостимулирующий гормон (МЕ/л)
    </td>  
    <td width="15%">    <p class="fieldOutputAnalis">{{$result->folukulo_hormon}}</p>
    </td> 

    <td style="padding-left: 50px;">  <h6>М: 0-4
      <br>Ж: фолликулярная фаза 3-12
      <br>фаза овуляции 6-25
      <br>лютеиновая фаза 2-12
      <br>менопауза 10-150      
     </h6>
    </td>
  </tr>
@endif
@if($result->luten_hormon)
  <tr>
    <td>Лютеинизирующий гормон (МЕ/л)
    </td>  
    <td width="15%">     
    <p class="fieldOutputAnalis">{{$result->luten_hormon}}</p>
    </td>    
    <td style="padding-left: 50px;">  <h6>М: 1,5-9
      <br>Ж: фолликулярная фаза 2-9,5
      <br>фаза овуляции 10-45
      <br>лютеиновая фаза 0,5-17
      <br>менопауза 5,0-57      
     </h6>
    </td>
  </tr>
@endif
@if($result->testosteron)
  <tr>
    <td>Тестостерон (нмоль/л)  
    </td>  
    <td width="15%"> 
       <p class="fieldOutputAnalis">{{$result->testosteron}}</p>
    </td> 
    <td style="padding-left: 50px;">  <h6>М: 4,5-35,4
      <br>Ж: 0 - 3,1 нмоль/л          
     </h6>
    </td>
  </tr>
@endif

@if($result->testosteron_ob)
  <tr>
    <td>Тестостерон общий (нмоль/л)  
    </td>  
    <td width="15%"> 
       <p class="fieldOutputAnalis">{{$result->testosteron_ob}}</p>
    </td> 
    <td style="padding-left: 50px;">  
      
      <h6>
        М 20-39 лет: 9,0 - 38 <br>  
        &nbsp; &nbsp; &nbsp;40-55 лет: 6,9 - 21   <br>        
        &nbsp; &nbsp; &nbsp; > 55 лет: 5,9 - 18,1 <br>
        Ж: 0 -4,6
      
     </h6>

</h6>
     </h6>
    </td>
  </tr>
@endif

@if($result->testosteron_free)
  <tr>
    <td>Тестостерон свободный (pg/ml)
    </td>  
    <td width="15%"> 
       <p class="fieldOutputAnalis">{{$result->testosteron_free}}</p>
    </td> 
    <td style="padding-left: 50px;">  <h6>М: 5,7-32,2  pg/ml
      <br>Ж: 0,1 - 6,3 pg/ml        
     </h6>
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
       <input type="hidden" name="analiseType" value="{{$result->analiseType}}">
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>        
	</form>
  
@endsection

</div>






















