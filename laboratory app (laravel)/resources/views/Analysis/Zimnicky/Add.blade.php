@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('ZimnickyStore')}}" method="POST">
		@csrf
		

<h3>Анализ мочи по Зимницкому | Добавить</h3>

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
            <input type="date" class="form-control" name="dateVisit" required>
        </div>   
  </div>
  <div class="form-group col-md-3">
    <p><b>Количество принятой жидкости</b></p> <input type="text" class="form-control"  name="countFluid">
  </div>

<table class="table table-hover analisis">
  <thead>
    <th>Номер порции</th>
    <th>Часы</th>
    <th>Относительная плотность</th>
    <th>Количество мочи в л. </th>    
  </thead>
  <tbody>
  
    <tr>
        <td width="15%">1
        </td>  
        <td width="15%"> 
        <input type="text" class="form-control input-sm" name="h1">
        </td>
        <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density1">
        </td>
        <td> <input type="text" class="form-control input-sm" name="count1">
        </td>
    </tr>    
  
    <tr>
      <td width="15%">2
      </td>  
      <td width="15%"> 
      <input type="text" class="form-control input-sm" name="h2">
      </td>
      <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density2">
      </td>
      <td> <input type="text" class="form-control input-sm" name="count2">
      </td>
  </tr>

  <tr>
    <td width="15%">3
    </td>  
    <td width="15%"> 
    <input type="text" class="form-control input-sm" name="h3">
    </td>
    <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density3">
    </td>
    <td> <input type="text" class="form-control input-sm" name="count3">
    </td>
</tr>

<tr>
  <td width="15%">4
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="h4">
  </td>
  <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density4">
  </td>
  <td> <input type="text" class="form-control input-sm" name="count4">
  </td>
</tr>


<tr>
  <td width="15%">5
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="h5">
  </td>
  <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density5">
  </td>
  <td> <input type="text" class="form-control input-sm" name="count5">
  </td>
</tr>

<tr>
  <td width="15%">6
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="h6">
  </td>
  <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density6">
  </td>
  <td> <input type="text" class="form-control input-sm" name="count6">
  </td>
</tr>

<tr>
  <td width="15%">7
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="h7">
  </td>
  <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density7">
  </td>
  <td> <input type="text" class="form-control input-sm" name="count7">
  </td>
</tr>

<tr>
  <td width="15%">8
  </td>  
  <td width="15%"> 
  <input type="text" class="form-control input-sm" name="h8">
  </td>
  <td class="unit"> <input type="text" class="form-control input-sm" name="relative_density8">
  </td>
  <td> <input type="text" class="form-control input-sm" name="count8">
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
       <input type="hidden" name="analiseType" value="Анализ мочи по Зимницкому">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















