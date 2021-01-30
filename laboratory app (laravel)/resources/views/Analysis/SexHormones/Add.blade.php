@extends('layouts.app')

@section('content')


<script language="JavaScript">

  function normaProgesteron(){  
        if(  document.getElementById('var1').checked) { 
        document.getElementById('normaProgesteronValue').innerHTML="<h6>М: 0-4<br>фолликулярная фаза 0,6-4,6<br>фаза овуляции 11-80<br>лютеиновая фаза 7,5-80<br>постменопауза 0-2,3 <br><u><i>Беременные:</i></u><br>&nbsp;&nbsp;&nbsp;&nbsp;1й триместр - 360 -240<br>&nbsp;&nbsp;&nbsp;&nbsp;2-й триместр - 60-240<br>&nbsp;&nbsp;&nbsp;&nbsp;3-й триместр - 156-722</h6>";
         }

      if(  document.getElementById('var2').checked) { 
        document.getElementById('normaProgesteronValue').innerHTML="<h6>М: 0-3<br>фолликулярная фаза 0,6-4,6<br>лютеиновая фаза 10-120<br>постменопауза 0-2,3 <br><u><i>Беременные:</i></u><br>&nbsp;&nbsp;&nbsp;&nbsp;1й триместр - 360 -240<br>&nbsp;&nbsp;&nbsp;&nbsp;2-й триместр - 60-240<br>&nbsp;&nbsp;&nbsp;&nbsp;3-й триместр - 156-722</h6>";
      }
  
      if(  document.getElementById('var3').checked)
        { 
        document.getElementById('normaProgesteronValue').innerHTML="<h6>М: 0-5<br>фолликулярная фаза 0,6-4,6<br>фаза овуляции 11-80<br>постменопауза 5-8 <br><u><i>Беременные:</i></u><br>&nbsp;&nbsp;&nbsp;&nbsp;1й триместр - 360 -240<br>&nbsp;&nbsp;&nbsp;&nbsp;2-й триместр - 60-240<br>&nbsp;&nbsp;&nbsp;&nbsp;3-й триместр - 156-722</h6>";
      }
    
  }
 



</script>

<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('SexHormonesStore')}}" method="POST">
		@csrf
		

<h3>Анализ крови на содержание половых гормонов | Добавить</h3>
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
      <input type="number" class="form-control" placeholder="возраст пациента" name="age">
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
    <th>Единица измерения</th>
    <th>Ном. диапазон</th>    
  </thead>
  <tbody>
   

    <tr>
      <td>Пролактин
      </td>  
      <td width="15%"> 
      <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="prolaktin">
      </td>
      <td class="unit"> мкМЕ/мл
      </td>
      <td>  <h6>М: 105-540 <br>Ж: 67-726 <br> </h6>
      </td>
  </tr>


  <tr>
    <td>Прогестерон 
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="progesteron">
    </td>
    <td class="unit"> нмоль/л
    </td>
    <td>  <h6>М: 0-4
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

  <tr>
    <td>Эстрадиол
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="estradiol">
    </td>
    <td class="unit"> нмоль/л
    </td>
    <td>  <h6>М: 0-4
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

  <tr>
    <td>Фолликулостимулирующий гормон
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="folukulo_hormon" >
    </td>
    <td class="unit"> МЕ/л
    </td>
    <td>  <h6>М: 0-4
      <br>Ж: фолликулярная фаза 3-12
      <br>фаза овуляции 6-25
      <br>лютеиновая фаза 2-12
      <br>менопауза 10-150
      
     </h6>
    </td>
  </tr>


  <tr>
    <td>Лютеинизирующий гормон
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="luten_hormon">
    </td>
    <td class="unit"> МЕ/л
    </td>
    <td>  <h6>М: 1,5-9
      <br>Ж: фолликулярная фаза 2-9,5
      <br>фаза овуляции 10-45
      <br>лютеиновая фаза 0,5-17
      <br>менопауза 5,0-57
      
     </h6>
    </td>
  </tr>

  <tr>
    <td>Тестостерон
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="testosteron">
    </td>
    <td class="unit"> нмоль/л
    </td>
    <td>  <h6>М: 4,5-35,4
      <br>Ж: 0 - 3,1 нмоль/л    
      
     </h6>
    </td>
  </tr>

  <tr>
    <td>Тестостерон общий
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="testosteron_ob" >
    </td>
    <td class="unit"> нмоль/л
    </td>
    <td>  
      <h6>
        М 20-39 лет: 9,0 - 38 <br>  
        &nbsp; &nbsp; &nbsp;40-55 лет: 6,9 - 21   <br>        
        &nbsp; &nbsp; &nbsp; > 55 лет: 5,9 - 18,1 <br>
        Ж: 0 -4,6
      
     </h6>
    </td>
  </tr>

  <tr>
    <td>Тестостерон свободный
    </td>  
    <td width="15%"> 
    <input type="number" step="0.01" class="form-control input-sm" placeholder="Количество" name="testosteron_free">
    </td>
    <td class="unit"> pg/ml
    </td>
    <td>  <h6>М: 5,7-32,2 pg/ml
      <br>Ж: 0,1 - 6,3   pg/ml
      
     </h6>
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
      <option>Униплан</option>
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
       <input type="hidden" name="analiseType" value="Анализ крови на содержание половых гормонов">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















