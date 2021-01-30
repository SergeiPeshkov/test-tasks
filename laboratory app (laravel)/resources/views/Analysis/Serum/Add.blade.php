@extends('layouts.app')

@section('content')


<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('SerumStore')}}" method="POST">
		@csrf		
<h3>Гормон щитовидной железы| Добавить</h3>
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
      <td>Т3
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="t3">
      </td>
      <td class="unit"> нм/л
      </td>
      <td><h6>1-2,8 нм/л</h6>
      </td>
    </tr>  

    <tr>
      <td>Т3 свобод.
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="t3free">
      </td>
      <td class="unit"> нм/л
      </td>
      <td><h6>0,5-1,8 нм/л</h6>
      </td>
    </tr>  

    <tr>
      <td>Т4
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="t4">
      </td>
      <td class="unit"> нмоль/л
      </td>
      <td><h6>66-181</h6>
      </td>
    </tr> 

    <tr>
      <td>Т4 свобод.
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="t4free">
      </td>
      <td class="unit"> нмоль/л
      </td>
      <td><h6>12-22</h6>
      </td>
    </tr> 
    
    <tr>
      <td>ТТГ
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="ttg">
      </td>
      <td class="unit"> мк NE/ml
      </td>
      <td><h6>0,27 - 4,2</h6>
      </td>
    </tr> 

    <tr>
      <td>АткТГ
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="atktg">
      </td>
      <td class="unit"> ед/мл
      </td>
      <td><h6>до 65 ед/мл</h6>
      </td>
    </tr> 

    <tr>
      <td>АткТПО
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="количество" name="atktpo">
      </td>
      <td class="unit"> ед/мл
      </td>
      <td><h6>до 30 ед/мл</h6>
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
    <select class="form-control" name="analyser" required>
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
       <input type="hidden" name="analiseType" value="Гормон щитовидной железы">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















