@extends('layouts.app')

@section('content')

<div class="container-new-reg">

	
    <form method="POST" action="{{route('patientStore')}}" class="form-new-reg">
	
		<fieldset class="fieldNewReg">
		<legend>Информация о пациенте</legend>
  <div class="form-row">
    <div class="form-group col">
      <label for="name">Фамилия</label>
      <input type="text" class="form-control" id="name" name="lastname" required>
    </div>

    <div class="form-group col">
      <label for="name">Имя</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group col">
      <label for="name">Отчество</label>
      <input type="text" class="form-control" id="name" name="patronymic" required>
    </div>
    
    
  </div>
    <div class="form-row">
      
      <div class="form-group col">
        <label for="dateOfBirth">Дата рождения</label>
        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
      </div>

	  <div class="form-group col-md-6">
      <label for="phone">Номер телефона</label>
      <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
       

    <div class="form-group col-md-6">
      <label for="address">Адрес</label>
      <input type="text" class="form-control" id="address" name="address" required>
    </div>
  </div>	
		</fieldset>
		
		<fieldset class="fieldNewReg">
		<legend>Паспортные данные пациента</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="passportSeries">Серия паспорта</label>
      <input type="text" class="form-control" id="passportSeries" name="passportSeries">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="passportNumber">Номер паспорта</label>
      <input type="text" class="form-control" id="passportNumber" name="passportNumber">
    </div>
  </div>
			
			<div class="form-row">
    <div class="form-group col-md-6">
      <label for="issuedBy">Кем выдан</label>
      <input type="text" class="form-control" id="issuedBy" name="issuedBy">
    </div>
				
    <div class="form-group col-md-6">
      <label for="issuedDate">Дата выдачи</label>
      <input type="date" class="form-control" id="issuedDate" name="issuedDate">
    </div>
  </div>
		</fieldset>
		
		<!-- PANEL ACCORDION FOR PREDSTAFITEL   -->
		
		<fieldset class="fieldNewRegAccordion">
			
			
			<div class="accordion" id="accordionExample">
  
  
  <div class="card">
    <div class="card-header card-header-acccordion" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed btn-acc" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Данные представителя
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <fieldset class="fieldNewReg">
		<legend>Информация о представителе</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Ф.И.О.</label>
      <input type="text" class="form-control" id="name" name="nameMember">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="dateOfBirth">Дата рождения</label>
      <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirthMember">
    </div>
	  
	  <div class="form-group col-md-6">
      <label for="phone">Номер телефона</label>
      <input type="text" class="form-control" id="phone" name="phoneMember">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="address">Адрес</label>
      <input type="text" class="form-control" id="address" name="addressMember">
    </div>
  </div>	
		</fieldset>
		
		<fieldset class="fieldNewReg">
		<legend>Паспортные данные представителя</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="passportSeries">Серия паспорта</label>
      <input type="text" class="form-control" id="passportSeries" name="passportSeriesMember">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="passportNumber">Номер паспорта</label>
      <input type="text" class="form-control" id="passportNumber" name="passportNumberMember">
    </div>
  </div>
			
			<div class="form-row">
    <div class="form-group col-md-6">
      <label for="issuedBy">Кем выдан</label>
      <input type="text" class="form-control" id="issuedBy" name="issuedByMember">
    </div>
				
    <div class="form-group col-md-6">
      <label for="issuedDate">Дата выдачи</label>
      <input type="date" class="form-control" id="issuedDate" name="issuedDateMember">
    </div>
  </div>
      </div>
    </div>
  </div>
</div>
			
		</fieldset>
		
		<!-- PANEL ACCORDION FOR PREDSTAFITEL  !!!!!END  -->
		
		<fieldset class="fieldNewReg">
		<legend>Выполнил</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="operator">Оператор</label>
      <input type="text" class="form-control" id="operator" name="operator" placeholder="">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="doctor">Врач</label>
      <input type="text" class="form-control" id="doctor" name="doctor">
    </div>
	  
	  <div class="form-group col-md-6">
      <label for="departament">Отделение</label>
		  <select type="text" id="departament" name="departament" class="form-control">
        <option >.....</option>
        <option>...</option>
      </select>
    </div>
	  
  </div>
  <button type="submit" class="btn-mainmenu">Сохранить</button>
			
  @csrf
</form>
	
</div>

@endsection






















