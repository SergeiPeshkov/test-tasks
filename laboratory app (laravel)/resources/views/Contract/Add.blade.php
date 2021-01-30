@extends('layouts.app')

@section('content')

<script language="JavaScript">
    $(document).ready(function () {
      $(".chosen-select").chosen();
   });

 function a(){
	//s1=document.getElementById('s1').value;
	//document.getElementById('p1').value=parseInt(s1.match(/\d+/)); 

	for(i=1;i<=30;i++){
	document.getElementById('p'+i).value=i;

	}

//	document.getElementById('p1').value = parseInt(s1.match(/\d+/)); 	
/*	
			if (document.getElementById('s1').value){
			var s1= document.getElementById('s1').value;
			var c1= document.getElementById('c1').value;
			if (c1 == "" ){ c1 = 1}				 
			 summa.value = parseInt(s1.match(/\d+/)) * c1; 	
		*/
			
		
		}	
		
function clearForm(){   
summa.value=null;	
location.reload();	
			 
 }
 
</script>

<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('contractStore')}}" method="POST">
		@csrf
		
<div class="input-group form-row">
               <div class="form-group col-md-6">

                  <label for="patient_id">Выберите пациента</label>
                      <select class="form-control chosen-select" name="patient_id" id="patient_id">         
                        @foreach($patientList as $patientName)
                            <option value="{{$patientName ->id}}">{{$patientName->name}} {{$patientName->lastname}} {{$patientName->patronymic}} </option>    
                        @endforeach
                    </select>                   
                  
               </div>
	
                <div class="form-group col-md-6">
                      <label for="name">Введите номер договора</label>
                      <input type="text" class="form-control" id="name" name="number" required>
                </div>
  </div>

  <fieldset class="fielsetContractAdd">
  <legend class="legendContractAdd">Выбор услуги</legend>
  <div class="input-group form-row">

  <div class="container">   
  <div class="row">
           <div class="col-8">       
               <select class="form-control chosen-select" name="s1" id="s1" onchange="
							document.getElementById('s2').style.display = 'block'; 
							document.getElementById('c2').style.display = 'block'; 
							document.getElementById('p2').style.display = 'block'; 
						  	a();" required>   
                <option></option>
                @foreach($serviceList as $serviceItem)
                <option value="{{$serviceItem->id}}">{{$serviceItem->name }} | {{$serviceItem->unit }} | {{$serviceItem->price }} руб. </option>
                @endforeach	                   
              </select>
		  </div>
		  <div class="col">
			<input type="number" step="1" class="form-control" name="p1" id="p1">
		</div> 
          <div class="col">
         	 <input type="number" class="form-control" placeholder="Количество: 1" name="c1" id="c1">
          </div> 
  </div>
    </div>    
              @for($i=2; $i<=30; $i++)
					<div class="container"> 
				<div class="row">
				<div class="col-8">
				
					<select class="form-control" name="s{{$i}}" id="s{{$i}}"onchange="
					document.getElementById('s{{$i+1}}').style.display = 'block'; 
					document.getElementById('c{{$i+1}}').style.display = 'block';
					document.getElementById('p{{$i+1}}').style.display = 'block'; 
					a();" 
					style="display:none">   
						<option></option>
						@foreach($serviceList as $serviceItem)
						<option value="{{$serviceItem->id}}"> {{$serviceItem->name }} | {{$serviceItem->unit }} | {{$serviceItem->price }} руб. </option>
						@endforeach	                   
					</select>
				</div> 
				<div class="col">
					<input type="number"  step="1"  class="form-control" name="p{{$i}}" id="p{{$i}}" style="display:none;"  onchange="a();">
				</div> 
				<div class="col">
							<input type="number" class="form-control" placeholder="Количество: 1" name="c{{$i}}" id="c{{$i}}" style="display:none;"  onchange="a();">
				</div> 
					</div>   
				</div> 
              @endfor   

    <div class="container"> 
	 <div class="col-2">
              <div class="row">
        Итого (руб):<input type='text' class="form-control" id="summa" name="summa">
		<a href="#" onclick="clearForm();">Очистить</a>
        </div>        
      </div>    
	   </div>   
</div>
</fieldset> 


    <div class="input-group form-row">          
  <div class="input-group form-row">   
        <div class="form-group col-md-6">
            <label for="sumInCheck">Сумма по чеку (не обязательно)</label>
            <input type="text" class="form-control" placeholder="Сумма по чеку" name="sumInCheck" id="sumInCheck">
        </div>
      <div class="col">
          <label for="status">Статус договора</label>
            <select class="form-control" name="status" id="status"> 
              <option>Не указано</option>
              <option>Не оплачено</option>
              <option>Оплачено</option>
          </select>
      </div>	  
		</div>  
       <br>
				<button class="btn btn-mainmenu" type="submit">Сохранить</button>
        
	</form>
  
@endsection

</div>






















