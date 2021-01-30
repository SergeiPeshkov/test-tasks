@extends('layouts.app')

@section('content')


<div class="container-new-reg">

	
    <form method="POST" action="{{route('patientUpdate', $patient->id)}}" class="form-new-reg">
	
		<fieldset class="fieldNewReg">
		<legend>Информация о пациенте</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Ф.И.О.</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$patient->name}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="dateOfBirth">Дата рождения</label>
      <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" value="{{$patient->dateOfBirth}}">
    </div>
	  
	  <div class="form-group col-md-6">
      <label for="phone">Номер телефона</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{$patient->phone}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="address">Адрес</label>
      <input type="text" class="form-control" id="address" name="address" value="{{$patient->address}}">
    </div>
  </div>	
		</fieldset>
		
		<fieldset class="fieldNewReg">
		<legend>Паспортные данные пациента</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="passportSeries">Серия паспорта</label>
      <input type="text" class="form-control" id="passportSeries" name="passportSeries" value="{{$patient->passportSeries}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="passportNumber">Номер паспорта</label>
      <input type="text" class="form-control" id="passportNumber" name="passportNumber" value="{{$patient->passportNumber}}">
    </div>
  </div>
			
			<div class="form-row">
    <div class="form-group col-md-6">
      <label for="issuedBy">Кем выдан</label>
      <input type="text" class="form-control" id="issuedBy" name="issuedBy" value="{{$patient->issuedBy}}">
    </div>
				
    <div class="form-group col-md-6">
      <label for="issuedDate">Дата выдачи</label>
      <input type="date" class="form-control" id="issuedDate" name="issuedDate" value="{{$patient->issuedDate}}">
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
      <input type="text" class="form-control" id="name" name="nameMember" value="{{$patient->nameMember}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="dateOfBirth">Дата рождения</label>
      <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirthMember" value="{{$patient->dateOfBirthMember}}">
    </div>
	  
	  <div class="form-group col-md-6">
      <label for="phone">Номер телефона</label>
      <input type="text" class="form-control" id="phone" name="phoneMember" value="{{$patient->phoneMember}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="address">Адрес</label>
      <input type="text" class="form-control" id="address" name="addressMember" value="{{$patient->addressMember}}">
    </div>
  </div>	
		</fieldset>
		
		<fieldset class="fieldNewReg">
		<legend>Паспортные данные представителя</legend>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="passportSeries">Серия паспорта</label>
      <input type="text" class="form-control" id="passportSeries" name="passportSeriesMember" value="{{$patient->passportSeriesMember}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="passportNumber">Номер паспорта</label>
      <input type="text" class="form-control" id="passportNumber" name="passportNumberMember" value="{{$patient->passportNumberMember}}">
    </div>
  </div>
			
			<div class="form-row">
    <div class="form-group col-md-6">
      <label for="issuedBy">Кем выдан</label>
      <input type="text" class="form-control" id="issuedBy" name="issuedByMember" value="{{$patient->issuedByMember}}">
    </div>
				
    <div class="form-group col-md-6">
      <label for="issuedDate">Дата выдачи</label>
      <input type="date" class="form-control" id="issuedDate" name="issuedDateMember" value="{{$patient->issuedDateMember}}">
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
      <input type="text" class="form-control" id="operator" name="operator" value="{{$patient->operator}}">
    </div>
	  
    <div class="form-group col-md-6">
      <label for="doctor">Врач</label>
      <input type="text" class="form-control" id="doctor" name="doctor" value="{{$patient->doctor}}">
    </div>
	  
	  <div class="form-group col-md-6">
      <label for="departament">Отделение</label>
		  <select type="text" id="departament" name="departament" class="form-control" value="{{$patient->departament}}">
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
