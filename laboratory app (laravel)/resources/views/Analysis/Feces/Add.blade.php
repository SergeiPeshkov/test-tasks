@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('FecesStore')}}" method="POST">
		@csrf
		

<h3>Анализ кала | Добавить</h3>

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

<div class="input-group form-row analisisPatientField">   
        <div class="form-group col">
          <label for="sumInCheck">Клинический диагноз</label>
          <input type="text" class="form-control" placeholder="клинический диагноз" name="diagnosis">
      </div>
</div>


    <div style="width: 70%;  display: inline-block; ">
      <br><h5 align="center"><b>Физические свойства<b></h5>
      <table class="table table-hover analisis" width="70%" >
        <tbody style="background-color: #EFFBF5; border: 1px solid #e1e1e1; padding-left: 5px;">
      
          <tr> 
            <td width="25%">Количество
            </td>
            <td width="30%"> 
            <input type="text"  class="form-control" name="count">
            </td>
        </tr>
      
          <tr> 
            <td>Форма
            </td>
            <td> 
            <input type="text"  class="form-control" name="forma">
            </td>
        </tr>
            
        <tr> 
          <td>Консистенция
          </td>
          <td> 
          <input type="text" class="form-control" name="consistency">
          </td>
        </tr>
      
        <tr> 
          <td>Цвет
          </td>
          <td> 
          <input type="text"  class="form-control" name="color">
          </td>
      </tr>
            
      
        <tr> 
          <td>Запах
          </td>
          <td> 
          <input type="text" class="form-control" name="smell">
          </td>
        </tr>      
      
        <tr> 
          <td>Остатки непереваренной пищи
          </td>
          <td> 
          <input type="text" class="form-control" name="nfood">
          </td>
        </tr>
      
           
        <tr> 
          <td>Слизь
          </td>
          <td> 
          <input type="text" class="form-control" name="slime">
          </td>
        </tr>
      
        <tr> 
          <td>Кровь
          </td>
          <td> 
          <input type="text" class="form-control" name="blood">
          </td>
        </tr>

      <tr> 
          <td>
             Гной
          </td>
          <td> 
               <input type="text" class="form-control" name="pus">
          </td>
      </tr>

      <tr> 
        <td>
           Кусочки ткани
        </td>
        <td> 
             <input type="text" class="form-control" name="cloth">
        </td>
    </tr>

    <tr> 
      <td>
        Конкременти (копролиты)
      </td>
      <td> 
           <input type="text" class="form-control" name="conkrementy">
      </td>
  </tr>

      </tbody>
      </table>

      <br><h5 align="center"><b>Микроскопические исследования<b></h5>
        <table class="table table-hover analisis" width="70%" >
          <tbody style="background-color: #EFFBF5; border: 1px solid #e1e1e1; padding-left: 5px;">
        
            <tr> 
              <td width="30%">Остатки пищи
              </td>
              <td width="30%"> 
              <input type="text"  class="form-control" name="food">
              </td>
          </tr>
        
            <tr> 
              <td>Мышечные волокна не изменены
              </td>
              <td> 
              <input type="text"  class="form-control" name="muscle_fibers_notchange">
              </td>
          </tr>
              
          <tr> 
            <td>Мышечные волокна изменены (перетравлены)
            </td>
            <td> 
            <input type="text" class="form-control" name="muscle_fibers_change">
            </td>
          </tr>
        
          <tr> 
            <td>Растительная клетчатка, которая не переваривается
            </td>
            <td> 
            <input type="text"  class="form-control" name="vegetable_fiber">
            </td>
        </tr>
              
        
          <tr> 
            <td>Жир нейтральный
            </td>
            <td> 
            <input type="text" class="form-control" name="neutral_fat">
            </td>
          </tr>      
        
          <tr> 
            <td>Жирные кислоты
            </td>
            <td> 
            <input type="text" class="form-control" name="fatty_acid">
            </td>
          </tr>
        
             
          <tr> 
            <td>Мыла
            </td>
            <td> 
            <input type="text" class="form-control" name="soap">
            </td>
          </tr>
        
          <tr> 
            <td>Кристалы
            </td>
            <td> 
            <input type="text" class="form-control" name="crystals">
            </td>
          </tr>
  
        <tr> 
            <td>
               Слизь
            </td>
            <td> 
                 <input type="text" class="form-control" name="micro_slime">
            </td>
        </tr>
  
        <tr> 
          <td>
             Эпителиальные клетки
          </td>
          <td> 
               <input type="text" class="form-control" name="epithelial_cells">
          </td>
      </tr>
  
      <tr> 
        <td>
          Лейкоциты
        </td>
        <td> 
             <input type="text" class="form-control" name="leukocyte">
        </td>
    </tr>
  
    <tr> 
      <td>
        Эритроциты
      </td>
      <td> 
           <input type="text" class="form-control" name="erythrocyte">
      </td>
     </tr>

     <tr> 
      <td>
        Элементы с признаками злокачественности
      </td>
      <td> 
           <input type="text" class="form-control" name="elementsWithSignsOfMalignancy">
      </td>
     </tr>

     <tr> 
      <td>
       Йодофильная флора
      </td>
      <td> 
           <input type="text" class="form-control" name="iodophilic_flora">
      </td>
     </tr>

     <tr> 
      <td>
       Простейшие
      </td>
      <td> 
           <input type="text" class="form-control" name="protozoa">
      </td>
     </tr>

     <tr> 
      <td>
       Яйца гельминтов
      </td>
      <td> 
           <input type="text" class="form-control" name="helminth_eggs">
      </td>
     </tr>

     <tr> 
      <td>
       Элементы грибкоподобные до дрожжевого
      </td>
      <td> 
           <input type="text" class="form-control" name="fungus_like_elements">
      </td>
     </tr>

        </tbody>
        </table>
    </div>


    <div class="input-group form-row analisisPatientField">   
      <div class="form-group col">
        <label for="sumInCheck">Заключение</label>
        <input type="text" class="form-control"  name="conclusion">
    </div>
</div>



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
  
      <input type="text"  class="form-control" placeholder="оставьте пустым, если используются ручные методики" name="analyser">  

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
       <input type="hidden" name="analiseType" value="Анализ кала">
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















