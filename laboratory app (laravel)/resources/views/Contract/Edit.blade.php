@extends('layouts.app')

@section('content')
  <script>
      $(document).ready(function () {
        $(".chosen-select").chosen();
    });
  </script>

<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('contractUpdate', $contract->id)}}" method="POST">
		@csrf


<div class="card">
    <p>Договор № {{$contract->number}} для пациента 
    @foreach($patientList as $PatientItem)
        @if ($contract->patient_id == $PatientItem->id)
          {{$PatientItem->name }}  {{$PatientItem->lastname }} {{$PatientItem->patronymic }}
        @endif
  @endforeach	 
  </p>   

</div>


		
<div class="input-group form-row">
  



		<fieldset class="fieldNewContract">
		
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Введите номер договора</label>
      <input type="text" class="form-control" id="name" name="number" value="{{$contract->number}}">
    </div>
	  
    <!--
    <div class="form-group col-md-6">
      <label for="dateOfBirth">Дата создания договора</label>
      <input type="date" class="form-control" id="dateOfBirth">
    </div>
	  -->

	  <div class="form-group col-md-6">
      <label for="dateOfBirth">Лабораторные услуги</label>
    
  <datalist id=mycoollist>
		
  @foreach($serviceList as $serviceItem)
     <option>{{$serviceItem->name }} | {{$serviceItem->unit }} | {{$serviceItem->price }} руб. </option>
  @endforeach	 
        
</datalist>
<input type="text" list=mycoollist class="form-control" id="patientlist"  placeholder="Введите наименование для выбора" value="{{$contract->service_name}}"  name="service_name">
    </div>
    
	  
    <div class="col">
		<label>Сумма</label>
      <input type="text" class="form-control" placeholder="Сумма" name="sum" value="{{$contract->sum}}">
    
    </div>

    <div class="col">
		<label>Количество</label>
      <input type="number" class="form-control" placeholder="Количество" name="service_count" value="{{$contract->service_count}}">
    </div>
    
	 <!--<div class="form-group btn-new-contract-download">
    <label for="exampleFormControlFile1 ">Загрузите скан чека</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>-->
	  <div class="col">
		<label>Сумма по чеку</label>
      <input type="text" class="form-control" placeholder="Сумма по чеку" name="sumInCheck" value="{{$contract->sumInCheck}}">
    </div>

    <div class="col">
		<label>Статус договора</label>
      <select class="form-control" name="status" id="status"> 
          <option selected>{{$contract->status}}</option>
          <option>Не указано</option>
          <option>Не оплачено</option>
          <option>Оплачено</option>
      </select>
    </div>
	  
		</div>
       <br>
				<button class="btn btn-mainmenu" type="submit">Сохранить договор для пациента</button>
   
	</form>

  
@endsection





</div>






















