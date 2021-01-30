@extends('layouts.app')

@section('content')

<style>


</style>
<div class="container-new-contract">


	<form class="form-new-contract" action=" {{ route('saveOAKPDF', ['id'=>$result->id]) }} " method="GET">
		@csrf
		

<h3>Общий анализ крови | 
   <!--  @foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
             {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
            @endif
        @endforeach -->
      
 {{$result->patient_lastname}} {{$result->patient_name}} {{$result->patient_patronymic}} </h3>
<div class="input-group form-row">   

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



<table class="table table-hover table-bordered table-sm analisisResult ">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody class="analisis">
  

  <tr>
    <td width="25%">Гемоглобин (HGB)
    </td> 
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->HGB}}</p>
    </td>
    <td class="unit" width="20%">г/л
    </td>
    <td colspan="2"> М: 130,0-160,0<br>Ж: 120,0-140,0
    </td>
  </tr>


  <tr>
    <td width="25%">Эритроциты (RBC)
    </td> 
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->RBC}}</p>
    </td>
    <td class="unit">10<sup>12</sup>L
    </td>
    <td colspan="2"> М: 4,0-5,0<br>Ж: 3,9-4,7
    </td>
  </tr>


  <tr>
    <td width="25%">Цветовой показатель
    </td> 
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->color}}</p>
    </td>
    <td class="unit">
    </td>
    <td colspan="2"> 0.85-1.15
    </td>
  </tr>


  <tr>
    <td width="25%">Ретикулоциты
    </td>  
    <td width="15%">   
    <p class="fieldOutputAnalis">{{$result->retic}}</p>
    </td>
    <td class="unit">%
    </td>
    <td colspan="2"> 0.2-1.0
    </td>
  </tr>

  <tr>
    <td width="25%">Тромбоциты
    </td> 
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->PLT}}</p>
    </td>
    <td class="unit">10<sup>9</sup>L
    </td>
    <td colspan="2"> 180-300
    </td>
  </tr>
 
  <tr>
    <td width="25%">Лейкоциты
    </td>  
    <td width="15%"> 
     <p class="fieldOutputAnalis">{{$result->WBC}}</p>
    </td>
    <td class="unit"> 10*9/л
    </td>
    <td colspan="2"> 4,0-9,0
    </td>
</tr>


<tr>
  <td width="25%">Скорость оседания эритроцитов (СОЭ)
  </td>  
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->soe}}</p>
  </td>

  <td class="unit">мм/ч
  </td>

  <td colspan="2">  М: 1-10<br>Ж: 2-15
  </td>
 
</tr>
</table>

<table class="table table-hover table-bordered table-sm analisisResult ">
  <tr>
    <td rowspan="5" style="vertical-align: middle; text-align:center; width:5%;">Нейтрофилы</td>
</tr>

<tr>
  <td width="16%">Миелоциты
  </td> 
  <td width="15%"> 

  <p class="fieldOutputAnalis">{{$result->mieloc}}</p>
  </td>
  <td class="unit" width="20%">
  </td>
  <td colspan="2"> 
</tr>

<tr>
  <td>Метамиелоциты
  </td> 
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->metamieloc}}</p>
  </td>
  <td class="unit">
  </td>
  <td colspan="2"> 
  </td>
</tr>

<tr>
  <td>Палочкоядерные
  </td> 
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->palyad}}</p>
  </td>
  <td class="unit">%
  </td>
  <td colspan="2">1,0-6,0
  </td>
</tr>

<tr>
  <td>Сегментоядерные
  </td> 
  <td width="15%"> 
  <p class="fieldOutputAnalis">{{$result->segmentoyad}}</p>
  </td>
  <td class="unit">%
  </td>
  <td colspan="2"> 47-72
  </td>
</tr>

</table>

<table class="analisisResult table table-hover table-bordered table-sm">
  <tr>
    <td width="25%">Эозинофилы
    </td> 
    <td width="15%"> 
    <p class="fieldOutputAnalis">{{$result->EOS}}</p>
    </td>
    <td class="unit" width="20%">%
    </td>
    <td> 0,5-5,0
    </td>
  </tr>
  
    <tr>
      <td>Лимфоциты 
      </td> 
      <td width="15%"> 

      <p class="fieldOutputAnalis">{{$result->LYM}}</p>
      </td>
      <td class="unit">%
      </td>
      <td> 19-37
      </td>
    </tr>
    
    <tr>
      <td>Моноциты 
      </td> 
      <td width="15%">  
      <p class="fieldOutputAnalis">{{$result->MON}}</p>
      </td>
      <td class="unit">%
      </td>
      <td> 3,0-11,0
      </td>
    </tr>
     
  
    <tr>
      <td>Базофилы 
      </td> 
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->BAS}}</p>
      </td>
      <td class="unit">%
      </td>
      <td> 0-1
      </td>
    </tr>
  
    <tr>
      <td>Плазматические клетки
      </td> 
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->plasma}}</p>
      </td>
      <td class="unit">
      </td>
      <td> 
      </td>
    </tr>
    
    <tr>
      <td>Гематокрит (HCT)
      </td> 
      <td width="15%"> 
      <p class="fieldOutputAnalis">{{$result->HCT}}</p>
      </td>
      <td class="unit">%
      </td>
      <td>  М: 40-48<br>Ж: 36-42
      </td>
    </tr>

    <tr>
      <td>Время свертывания крови
      </td> 
      <td width="15%"> 

      <p class="fieldOutputAnalis">{{$result->timeblood}}</p>
      </td>
      <td class="unit">
      </td>
      <td> 
      </td>
    </tr>
  


</table>


    <table class="table table-hover table-bordered analisisResult " width="60%">
   
        <tr> 
          <td width="30%">Морфология лейкоцитов
          </td>
          <td>      
          <p class="fieldOutputAnalis" >{{$result->morfley}}</p>
          </td>
      </tr>
    
        <tr> 
          <td >Гиперсегментация ядер
          </td>
          <td >       
          <p class="fieldOutputAnalis">{{$result->hipersegment_yader}}</p>
          </td>
      </tr>
    
    
      <tr> 
        <td >Токсогенная зернистость
        </td>
        <td >      
        <p class="fieldOutputAnalis">{{$result->toksogennaya_zernost}}</p>
        </td>
      </tr>
    
      <tr> 
        <td >Морфология эритроцитов
        </td>
        <td > 
        <p class="fieldOutputAnalis">{{$result->morferit}}</p>
        </td>
    </tr>
    
    
    
      <tr> 
        <td >Аницитоз (макроциты, микроциты, мегалоциты)
        </td>
        <td >   
        <p class="fieldOutputAnalis">{{$result->anicitoz}}</p>
        </td>
      </tr>
    
    
      <tr> 
        <td >Пойкилоцитоз
        </td>
        <td >       
        <p class="fieldOutputAnalis">{{$result->poikilocitos}}</p>
        </td>
      </tr>
    
    
    
      <tr> 
        <td >Эритроциты с базофильной зернистостью
        </td>
        <td >   
        <p class="fieldOutputAnalis">{{$result->RBC_BZ}}</p>
        </td>
      </tr>

    <tr>
        <td >Тельца Жоли, кольца Кебота
        </td>
        <td > 
     
        <p class="fieldOutputAnalis">{{$result->joli}}</p>
        </td>
      </tr>
    

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
      -->

      </td>
   
  </table>
</div>


       <br>
       <input type="hidden" value="Общий анализ крови">
				<button class="btn btn-mainmenu" type="submit">Cформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















