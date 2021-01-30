@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('AnalismochiStore')}}" method="POST">
		@csrf
		

<h3>Анализ мочи | Добавить</h3>

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
  <label for="sumInCheck">Возраст пациента: </label>
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
    <th>Един.ица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>
  
    <tr>
        <td>Цвет
        </td>  
        <td width="25%"> 
        <input type="text"  class="form-control input-sm" placeholder="Количество" name="color">
        </td>
        <td class="unit"> 
        </td>
        <td> светло-желтый
        </td>
  </tr>
  
    <tr>
        <td>Относительная плотность
        </td>  
        <td width="15%"> 
        <input type="number" step="0.0001" class="form-control input-sm" placeholder="Количество" name="relative_density">
        </td>
        <td class="unit"> 
        </td>
        <td>  1,001-1,028
        </td>
    </tr>
    
  <tr>
      <td>Прозрачность
      </td>  
      <td width="15%"> 
      <input type="text" class="form-control input-sm" name="transparency">
      </td>
      <td class="unit"> 
      </td>
      <td> Прозрачная
      </td>
  </tr>

  <tr>
    <td>Реакция (pH)
    </td>  
    <td width="15%"> 
    <input type="text" class="form-control input-sm" placeholder="Количество" name="reactionPh">
    </td>
    <td class="unit"> 
    </td>
    <td> 5,0-7,0
    </td>
</tr>

<tr>
  <td>Белок
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" placeholder="Количество" name="protein">
  </td>
  <td class="unit"> г/л
  </td>
  <td> до 0,1241 г/л
  </td>
</tr>

<tr>
  <td>Глюкоза
  </td>  
  <td width="15%"> 

    <select class="form-control" name="glukoza" value="Отсутствует">
      <option>Отсутствует</option>
      <option>Присутствует</option>
    </select>    

  </td>
  <td class="unit"> ммоль/л
  </td>
  <td> Отсутствует
  </td>
</tr>

<tr>
  <td>Ацетон
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="aceton">
  </td>
  <td class="unit">
  </td>
  <td> 
  </td>
</tr>

<tr>
  <td>Желчные пигменты
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="bile_pigments">
  </td>
  <td class="unit">
  </td>
  <td> 
  </td>
</tr>

<tr>
  <td>Эпителий плоский
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="epithelium_flat">
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>

<tr>
  <td>Эпителий переходной
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="epithelium_transition">
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>

<tr>
  <td>Эпителий почечный
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="epithelium_renal">
  </td>
  <td class="unit">
  </td>
  <td> Един. в поле зрения
  </td>
</tr>

<tr>
  <td>Лейкоциты
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="leukocyte">
  </td>
  <td class="unit">
  </td>
  <td> 3-4 в поле зрения
  </td>
</tr>

<tr>
  <td>Эритроциты неизмененные
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="erythrocyte_nochange">
  </td>
  <td class="unit">
  </td>
  <td>Един. в поле зрения
  </td>
</tr>

<tr>
  <td>Эритроциты измененные
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="erythrocyte_change">
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>

<tr>
  <td>Цилиндры гиалиновые
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm"  name="cylinders_hyaline">
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>

<tr>
  <td>Цилиндры зернистые
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="cylinders_grainy">
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
</tr>

<tr>
  <td>Слизь
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="slime">
  </td>
  <td class="unit">
  </td>
  <td>Отсутствует
  </td>
</tr>

<tr>
  <td>Соли
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="salt">
  </td>
  <td class="unit">
  </td>
  <td>
  </td>
</tr>

<tr>
  <td>Бактерии
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="bacterias">
  </td>
  <td class="unit">
  </td>
  <td>Отсутствуют
  </td>
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
      <option></option>
      <option>SuperGL</option>
    </select>    
    </td>
  </tr>

  <tr> 
    <td width="15%">Анализ выполнил: 
    <td width="15%"> 
      <input type="text"  class="form-control" name="laborant" required>  
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
       <input type="hidden" name="analiseType" value="Анализ мочи">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















