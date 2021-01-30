@extends('layouts.app')

@section('content')

<style>
     .vertical {
                -webkit-transform: rotate(-90deg); 
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                height: 110px;
            }
</style>

<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('OAKstore')}}" method="POST">
		@csrf
		

<h3>Общий анализ крови | Добавить</h3>

<div class="input-group form-row analisisPatientField">  
  
  <div class="form-group col">
    <label for="patient_lastname">Фамилия пациента</label>
    <input type="text" class="form-control" placeholder="введите фамилию пациента" name="patient_lastname" required>
</div> 
   
  <div class="form-group col">   
        <label for="patient_name">Имя пациента</label>
        <input type="text" class="form-control" placeholder="введите имя пациента" name="patient_name" required>
    </div>
   

    <div class="form-group col">
        <label for="patient_patronymic">Отчество пациента</label>
        <input type="text" class="form-control"  placeholder="введите отчество пациента" name="patient_patronymic">
    </div>  

</div>

<div class="input-group form-row analisisPatientField">   

<!--
        <div class="col">
          <label for="status">Выбор пациента</label>
            <select class="form-control" name="patient_id" id="status" required> 
            @foreach($patientList as $patientItem)
              <option value="{{$patientItem->id}}">{{$patientItem->name}} {{$patientItem->lastname}} {{$patientItem->patronymic}}  </option>    
             @endforeach
          </select>
          </div>
    -->
    <div class="form-group col">
      <label for="sumInCheck">Возраст пациента</label>
      <input type="number" class="form-control" placeholder="возраст пациента" name="age">
    </div> 

        <div class="form-group col">
            <label for="sumInCheck">Номер договора</label>
            <input type="number" class="form-control" placeholder="Номер договора" name="contract_number" required>
        </div>    
    
        <div class="form-group col">
            <label for="sumInCheck">Дата обращения</label>
            <input type="date" class="form-control" placeholder="Номер договора" name="dateVisit" required>
        </div>   
		</div>



<table class="table table-hover analisis">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>
    <th width="25%">Единица измерения</th>
    <th>Норма</th>    
  </thead>
  <tbody>
  

    <tr>
      <td width="25%">Гемоглобин (HGB)
      </td> 
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control" placeholder="Количество" name="HGB">
      </td>
      <td class="unit">г/л
      </td>
      <td colspan="2"> М: 130,0-160,0<br>Ж: 120,0-140,0
      </td>
    </tr>

    <tr>
      <td width="25%">Эритроциты (RBC)
      </td> 
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control" placeholder="Количество" name="RBC">
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
      <input type="number" step="0.01" class="form-control" placeholder="Количество" name="color">
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
      <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="retic">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="PLT">
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
      <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="WBC">
      </td>
      <td class="unit">10*9/л
      </td>
      <td colspan="2"> 4,0-9,0
      </td>
  </tr>

  <tr>
    <td width="25%">Скорость оседания эритроцитов (СОЭ)
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="soe">
    </td>

    <td class="unit">мм/ч
    </td>

    <td colspan="2">  М: 1-10<br>Ж: 2-15
    </td>
   
  </tr>
</table>


<table class="table table-hover analisis">
  <tr>
    <td rowspan="5" style="vertical-align: middle; text-align:center; width:5%;" class="vertical" width="5%">Нейтрофилы</td>
</tr>

<tr>
  <td width="17%">Миелоциты
  </td> 
  <td width="15%"> 
  <input type="number" step="0.01" class="form-control" placeholder="Количество" name="mieloc">
  </td>
  <td class="unit" width="25%">
  </td>
  <td colspan="2"> 
</tr>

<tr>
  <td>Метамиелоциты
  </td> 
  <td width="15%"> 
  <input type="number" step="0.01" class="form-control" placeholder="Количество" name="metamieloc">
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
  <input type="number" step="0.01" class="form-control" placeholder="Количество" name="palyad">
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
  <input type="number" step="0.01" class="form-control" placeholder="Количество" name="segmentoyad">
  </td>
  <td class="unit">%
  </td>
  <td colspan="2"> 47-72
  </td>
</tr>

</table>

<table class="table table-hover analisis">
<tr>
  <td width="25%">Эозинофилы (Eos%)
  </td> 
  <td width="15%"> 
  <input type="number" step="0.01" class="form-control" placeholder="Количество" name="EOS">
  </td>
  <td class="unit" width="25%">%
  </td>
  <td> 0,5-5,0
  </td>
</tr>

  <tr>
    <td>Лимфоциты 
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="LYM">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="MON">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="BAS">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="plasma">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="HCT">
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
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="timeblood">
    </td>
    <td class="unit">
    </td>
    <td> 
    </td>
  </tr>


 
</tbody>
</table>

<div style="width: 100%;  display: inline-block; ">

<table class="table table-hover analisis" width="100%" >
  <tbody style="background-color: #EFFBF5; border: 1px solid #e1e1e1; padding-left: 5px;">

    <tr> 
      <td width="25%">Морфология лейкоцитов
      </td>
      <td width="50%"> 
      <input type="text"  class="form-control" name="morfley">
      </td>
  </tr>

    <tr> 
      <td>Гиперсегментация ядер
      </td>
      <td> 
      <input type="text"  class="form-control" name="hipersegment_yader">
      </td>
  </tr>


  <tr> 
    <td>Токсогенная зернистость
    </td>
    <td> 
    <input type="text" class="form-control" name="toksogennaya_zernost">
    </td>
  </tr>

  <tr> 
    <td>Морфология эритроцитов
    </td>
    <td> 
    <input type="text"  class="form-control" name="morferit">
    </td>
</tr>



  <tr> 
    <td>Аницитоз (макроциты, микроциты, мегалоциты)
    </td>
    <td> 
    <input type="text" class="form-control" name="anicitoz">
    </td>
  </tr>


  <tr> 
    <td>Пойкилоцитоз
    </td>
    <td> 
    <input type="text" class="form-control" name="poikilocitos">
    </td>
  </tr>



  <tr> 
    <td>Эритроциты с базофильной зернистостью
    </td>
    <td> 
    <input type="text" class="form-control" name="RBC_BZ">
    </td>
  </tr>


    <td>Тельца Жоли, кольца Кебота
    </td>
    <td> 
    <input type="text" class="form-control" name="joli">
    </td>
  </tr>

</tbody>
</table>

</div>

<div style="width: 60%; display: block;">

<table class="table table-hover" width="100%" >
    <tr> 
    <td width="15%">Дата
    </td>
    <td width="15%"> 
    <input type="date" class="form-control" name="dateResult" required>
    </td>
  </tr>
  <tr> 
    <td width="15%">Анализатор
    </td>
    <td width="15%"> 
    <select class="form-control" name="analyser">
      <option>Mindray 5300</option>
      <option>Mindray 3600</option>
     
    </select>    
    </td>
  </tr>

  <tr> 
    <td width="15%">Анализ выполнил:
    </td>
    <td width="15%"> 
      <input type="text"  class="form-control" name="laborant" required >
    </td>
  </tr>

<!--
  <tr> 
    <td width="15%">Врач
    </td>
    <td width="15%">  
    <input type="text"  class="form-control" name="doctor" required>
    </td>
  </tr>
-->

</table>
</div>

       <br>
       <input type="hidden" name="analiseType" value="Общий анализ крови">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















