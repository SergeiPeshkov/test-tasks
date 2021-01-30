@extends('layouts.app')

@section('content')


<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('SgomStore')}}" method="POST">
		@csrf		
<h3>Анализ крови на половые гормоны и онкомаркеры | Добавить</h3>
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
      <input type="text" class="form-control"  placeholder="введите отчество пациента" name="patient_patronymic" required>
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
            <label for="sumInCheck">Возраст пациента
            </label>
            <input type="number" class="form-control" placeholder="Номер договора" name="age">
        </div>  

        <div class="form-group col">
            <label for="sumInCheck">Номер договора</label>
            <input type="number" class="form-control" placeholder="Номер договора" name="contract_number" required>
        </div>   
    
        <div class="form-group col">
            <label for="sumInCheck">Дата обращения</label>
            <input type="date" class="form-control"  name="dateVisit" required>
        </div>   
		</div>



<table class="table table-hover analisis">
  <thead>
    <th>Параметр</th>
    <th>Результат</th>   
    <th style="align:center;">Норма</th>    

  </thead>
  <tbody>    

    <tr>
      <td>ПСА
      </td>  
      <td width="15%"> 
        <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="psa">
      </td>
      <td>
      </td>
    </tr>  
    
        
    <tr>
      <td>Тестостерон
      </td>  
      <td width="15%"> 
        <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="testosteron">
      </td>
      <td style="padding-left:center;">Ж. 0,06 -0,82 нг/мл<br>М.
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
    <select class="form-control" name="analyser" required >
      <option>Personal Lab</option>
    </select>    
    </td>
  </tr>
  
  <tr> 
    <td width="15%">Анализ выполнил:
    </td>
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
       <input type="hidden" name="analiseType" value="Анализ крови на половые гормоны и онкомаркеры">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>





















