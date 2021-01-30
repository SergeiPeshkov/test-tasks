@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('BiohimyStore')}}" method="POST">
		@csrf
		

<h3>Общий биохимический анализ | Добавить</h3>

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
              <option value="{{$patientItem->id}}">{{$patientItem->name}} {{$patientItem->lastname}} {{$patientItem->patronymic}} </option>    
             @endforeach
          </select>
           </div>
          -->
           <div class="form-group col">
            <label for="sumInCheck">Пол</label>           
            <select class="form-control"  name="sex">
              <option>Не выбран</option>
              <option>Мужской</option>
              <option>Женский</option>
            </select>  

        </div>

        <div class="form-group col">
          <label for="sumInCheck">Возраст пациента</label>
          <input type="number" class="form-control" placeholder="Возраст пациента" name="age">
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
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>
  
    <tr>
    <td>АЛТ
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="alt">
    </td>
    <td class="unit"> ед/л
    </td>
    <td> до 41 ед/л
    </td>
  </tr>



  <tr>
    <td>АСТ
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="ast">
    </td>
    <td class="unit">ед/л
    </td>
    <td> до 40 ед/л
    </td>
  </tr>



  <tr>
    <td>Билирубин общий
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="bilirubin_ob">
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> до 21 мкмоль/л
    </td>
  </tr>


  <tr>
    <td>Билирубин прямой
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="bilirubin_pr">
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> до 4 мкмоль/л
    </td>
  </tr>

  
  <tr>
    <td>Билирубин не прямой
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="bilirubin_npr" >
    </td>
    <td class="unit">
    </td>
    <td>
    </td>
  </tr>

  <tr>
    <td>Мочевина
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="mochevina">
    </td>
    <td class="unit">мкмоль
    </td>
    <td>2,6 - 8,1 мкмоль
    </td>
  </tr>

  <tr>
    <td>Креатинин
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="kreatinin">
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> М. 80-115; Ж. 53-97
    </td>
  </tr>

  <tr>
    <td>Общий белок
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="belok_ob">
    </td>
    <td class="unit">г/л
    </td>
    <td> 64-83 г/л
    </td>
  </tr>

  <tr>
    <td>Альбумин
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="albumin">
    </td>
    <td class="unit">г/л
    </td>
    <td> 38-53
    </td>
  </tr>


  <tr>
    <td>С-реактивный белок
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="c_belok">
    </td>
    <td class="unit">мг/л
    </td>
    <td> до 5 мг/л
    </td>
  </tr>

  <tr>
    <td>Ревматоидный фактор
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="revmo_factor">
    </td>
    <td class="unit">МЕ/л
    </td>
    <td> до 15 МЕ/л
    </td>
  </tr>
  
  <tr>
    <td>Мочевая кислота
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="moch_kislota">
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td> М. 202-416; Ж. 143-339 мкмоль/л
    </td>
  </tr>

  <tr>
    <td>Калий
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="kalij">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td> 3,5-5,3 ммоль/л
    </td>
  </tr>


  <tr>
    <td>Натрий
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="natrij">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>135-148 ммоль/л
    </td>
  </tr>

   <tr>
    <td>Хлориды
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="hloridy">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>98-107 ммоль/л
    </td>
  </tr>

  <tr>
    <td>Кальций ионизированный
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="kalcij_ion">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>1,15-1,29 ммоль/л
    </td>
  </tr>


  <tr>
    <td>Кальций общий
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="kalcij_ob">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>2,15 -2,60 ммоль/л
    </td>
  </tr>

  <tr>
    <td>Магний
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="magnij">
    </td>
    <td class="unit">мг/мл
    </td>
    <td>1,8-2,6 мг/мл
    </td>
  </tr>

  <tr>
    <td>Железо
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="zhelezo">
    </td>
    <td class="unit">мкмоль/л
    </td>
    <td>М. 11-28; Ж. 6,6-26 мкмоль/л.
    </td>
  </tr>

  <tr>
    <td>Холестерин
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="holesterin">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>3,6-5,3 ммоль/л.
    </td>
  </tr>


  <tr>
    <td>Триглицериды
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="trigliceridy">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>до 1,7 ммоль/л.
    </td>
  </tr>

  <tr>
    <td>ЛПВП
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="lpvp">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>М > 1,45; Ж > 1,68 ммоль/л.
    </td>
  </tr>

  <tr>
    <td>ЛПНП
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="lpnp">
    </td>
    <td class="unit">ммоль/л
    </td>
    <td>до 3,34 ммоль/л.
    </td>
  </tr>

  <tr>
    <td>Щелочная фостофаза
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="fostofaza">
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 258 Е/л.
    </td>
  </tr>

  <tr>
    <td>ГГТ
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="ggt">
    </td>
    <td class="unit">Е/л
    </td>
    <td>М. до 55 Е/л; Ж. до 38 Е/л;
    </td>
  </tr>

  <tr>
    <td>Альфа-амилаза
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="alfa_amilaza">
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 110 Е/л
    </td>
  </tr>

  <tr>
    <td>Диастаза
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="diastaza">
    </td>
    <td class="unit">Е/л
    </td>
    <td>до 500 Е/л
    </td>
    </tr>

    <tr>
    <td>КФК
    </td> 
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control" placeholder="Количество" name="kfk">
    </td>
    <td class="unit">Е/л
    </td>
    <td>М. до 171 Е/л; Ж. до 145 Е/л;
    </td>
    </tr>

    <tr>
      <td>ЛДГ </td> 
      <td width="15%"> 
          <input type="number" step="0.01" class="form-control" placeholder="Количество" name="ldg">
      </td>
          <td class="unit">Е/л
      </td>
         <td>до 480 Е/л</td>
    </tr>

    <tr>
      <td>Ферритин </td> 
      <td width="15%"> 
          <input type="number" step="0.01" class="form-control" placeholder="Количество" name="ferritin">
      </td>
          <td class="unit">мкл/л
      </td>
         <td>М. 30-300 мкл/л <br> 
        Ж. до 50 лет: 10-160 мкл/л <br>
      свыше 50 лет: 10-300 мкл/л</td>
    </tr>

    <tr>
      <td>Трансферрин</td> 
      <td width="15%"> 
          <input type="number" step="0.01" class="form-control" placeholder="Количество" name="transferrin">
      </td>
          <td class="unit">г/л
      </td>
         <td>2.0-3.6 г/л</td>
    </tr>



</tbody>
</table>

<div style="width: 60%; display: block;">
<hr>
<table class="table table-hover" width="60%" >
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
      <option>Furuno CA-400</option>
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
       <input type="hidden" name="analiseType" value="Общий биохимический анализ">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















