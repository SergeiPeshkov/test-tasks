@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('OMStore')}}" method="POST">
		@csrf
		

<h3>Определение уровня онкомаркеров | Добавить</h3>
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
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>
    <tr>
      <td>Возраст пациента
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="укажите возраст" name="age">
      </td>
      <td class="unit"> 
      </td>
      <td> 
      </td>
    </tr>

    <tr>
      <td>Пол пациента
      </td>  
      <td width="15%"> 
   
      <select class="form-control" name="sex" required >
        <option>Не указан</option>
        <option>Мужской</option>
        <option>Женский</option>
      </select>    

      </td>
      <td class="unit"> 
      </td>
      <td> 
      </td>
    </tr>

    <tr>
      <td>Альфа-фетопротеин, (АФП)
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="afp">
      </td>
      <td class="unit"> МЕ/мл
      </td>
      <td>  <h6>0-14,4  МЕ/мл</h6>
      </td>
    </tr>

  <tr>
    <td>СА-242
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="sa242">
    </td>
    <td class="unit"> Е/мл
    </td>
    <td>  <h6>0-20 Е/мл</h6>
    </td>
  </tr>

  <tr>
    <td>(РЭА)
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="rea">
    </td>
    <td class="unit">нг/мл
    </td>
    <td>  <h6>0-5,0 нг/мл </h6>
    </td>
  </tr>

  <tr>
    <td>СА-125
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="sa125">
    </td>
    <td class="unit"> МЕ/мл
    </td>
    <td>  <h6>0-35 МЕ/мл </h6>
    </td>
  </tr>

  <tr>
    <td>HE-4
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="he4">
    </td>
    <td class="unit">
    </td>
    <td>  <h6>0-158 </h6>
    </td>
  </tr>

  <tr>
    <td>Простатспецифический антиген, (ПСА)
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="psa">
    </td>
    <td class="unit">нг/мл
    </td>
    <td>  <h6>0-4 нг/мл</h6>
    </td>
  </tr>

  <tr>
    <td>СА 15-3
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="sa153">
    </td>
    <td class="unit">МЕ/мл
    </td>
    <td>  <h6>0-30 МЕ/мл</h6>
    </td>
  </tr>

  <tr>
    <td>СА 19-9
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="sa199">
    </td>
    <td class="unit">МЕ/мл
    </td>
    <td>  <h6>0-37 МЕ/мл</h6>
    </td>
  </tr>

  <tr>
    <td>СА 72-4
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="sa724">
    </td>
    <td class="unit">н/мл
    </td>
    <td>  <h6>0-4 н/мл</h6>
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
      <option>Сobas e411</option>
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
       <input type="hidden" name="analiseType" value="Определение уровня онкомаркеров">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















