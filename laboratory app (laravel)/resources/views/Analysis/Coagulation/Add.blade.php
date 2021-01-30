@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('CoagulationStore')}}" method="POST">
		@csrf
		

<h3>Показатели системы свертывания крови | Добавить</h3>


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



<div class="input-group form-row analisisPatientField ">   
<!--
        <div class="col">
          <label for="status">Выбор пациента</label>
            <select class="form-control" name="patient_id" id="status" required> 
            @foreach($patientList as $patientItem)
              <option value="{{$patientItem->id}}">{{$patientItem->name}} {{$patientItem->lastname}}  {{$patientItem->patronymic}}</option>    
             @endforeach
          </select>
           </div>
          -->
          <div class="form-group col">
            <label for="sumInCheck">Возраст пациента: </label>
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
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>

    <tr>
      <td>Протромбиновый индекс
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="pro_index">
      </td>
      <td class="unit"> %
      </td>
      <td> 90-120%
      </td>
    </tr>

    
  <tr>
    <td>МНО
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="mno">
    </td>
    <td class="unit"> 
    </td>
    <td> 0,9-1,4
    </td>
  </tr>
  
    <tr>
    <td>Протромбиновое время
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="pro_time">
    </td>
    <td class="unit"> сек
    </td>
    <td> 11,5-16,5 сек
    </td>
  </tr>

 
  <tr>
    <td>АЧТВ
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="achtv">
    </td>
    <td class="unit"> сек
    </td>
    <td> 25-45 сек
    </td>
  </tr>

  <tr>
    <td>Фибриноген А
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="fibrinogenA">
    </td>
    <td class="unit"> г/л
    </td>
    <td> 2,22-4,44 г/л
    </td>
  </tr>

  <tr>
    <td>Тромбиновое время
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="tromb_time">
    </td>
    <td class="unit"> сек
    </td>
    <td> 15-18 сек
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
      <option>GH-500</option>
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
       <input type="hidden" name="analiseType" value="Показатели системы свертывания крови">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















