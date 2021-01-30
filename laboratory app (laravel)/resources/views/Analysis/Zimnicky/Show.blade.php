@extends('layouts.app')

@section('content')


<div class="container-new-contract">


	<form class="form-new-contract" action="{{route('ZimnickyPDF', ['id'=>$result->id])}}" method="POST">
		@csrf
		

<h3>Анализ мочи по Зимницкому | 
      <!-- @foreach($patientList as $PatientItem)  
           @if($result->patient_id == $PatientItem->id)
           {{$PatientItem->name}} {{$PatientItem->lastname}} {{$PatientItem->patronymic}}
            @endif
        @endforeach  -->
        {{$result->patient_lastname}}  {{$result->patient_name}} {{$result->patient_patronymic}} 
      </h3>

    
      <div class="input-group form-row" >  

        <div class="form-group col"> 
          <span>Возраст пациента:</span>  <p class="fieldOutputAnalisHead">{{$result->age}} </p>      
        </div>  
 
          <div class="form-group col"> 
            <span>Номер договора:</span>  <p class="fieldOutputAnalisHead">{{$result->contract_number}} </p>      
          </div>  

          <div class="form-group col">               
            <span>Дата обращения:</span>  <p class="fieldOutputAnalisHead">{{ date('d.m.yy', strtotime($result->dateVisit))}}</p>
          </div> 
      </div>

      <div class="form-group col-md-3">
         <p class="fieldOutputAnalis">  <b>Количество принятой жидкости:</b>   {{$result->countFluid}}</p>
      </div>


      <table class="table table-hover table-bordered table-sm analisisResult">
   <thead>
    <th>Номер порции</th>
    <th>Часы</th>
    <th>Относительная плотность</th>
    <th>Количество мочи в л. </th>    
  </thead>
  <tbody class="analisis">

    <tr>
      <td width="15%">1
      </td>  
      <td width="15%">      
        <p class="fieldOutputAnalis">{{$result->h1}}</p>
      </td>     
    <td>
        <p class="fieldOutputAnalis">{{$result->relative_density1}}</p>
      </td>
      <td>
        <p class="fieldOutputAnalis">{{$result->count1}}</p>
      </td>
  </tr>    

  <tr>
    <td width="15%">2
    </td>  
    <td width="15%">      
      <p class="fieldOutputAnalis">{{$result->h2}}</p>
    </td>  
    <td>   
      <p class="fieldOutputAnalis">{{$result->relative_density2}}</p>
    </td>
    <td>
      <p class="fieldOutputAnalis">{{$result->count2}}</p>
    </td>
</tr>    


<tr>
  <td width="15%">3
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h3}}</p>
  </td>   
  <td>  
    <p class="fieldOutputAnalis">{{$result->relative_density3}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count3}}</p>
  </td>
</tr>    


<tr>
  <td width="15%">4
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h4}}</p>
  </td>     
  <td>
    <p class="fieldOutputAnalis">{{$result->relative_density4}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count4}}</p>
  </td>
</tr>    


<tr>
  <td width="15%">5
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h5}}</p>
  </td> 
  <td>    
    <p class="fieldOutputAnalis">{{$result->relative_density5}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count5}}</p>
  </td>
</tr>   


<tr>
  <td width="15%">6
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h6}}</p>
  </td>  
  <td>   
    <p class="fieldOutputAnalis">{{$result->relative_density6}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count6}}</p>
  </td>
</tr>   

<tr>
  <td width="15%">7
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h7}}</p>
  </td>  
  <td>   
    <p class="fieldOutputAnalis">{{$result->relative_density7}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count7}}</p>
  </td>
</tr>


<tr>
  <td width="15%">8
  </td>  
  <td width="15%">      
    <p class="fieldOutputAnalis">{{$result->h8}}</p>
  </td>   
  <td>  
    <p class="fieldOutputAnalis">{{$result->relative_density8}}</p>
  </td>
  <td>
    <p class="fieldOutputAnalis">{{$result->count8}}</p>
  </td>
</tr>


</tbody>
</table>

<div style="width: 60%; display: block;">

  <table class="table" width="60%">
      <tr> 
      <td width="20%">Дата:
      </td>
      <td width="20%"> 
           <p class="fieldOutputAnalis">{{ date('d.m.yy', strtotime($result->dateResult))}} </p>
      </td>
    </tr>
    <tr> 
      <td width="20%">Анализатор:
      </td>
      <td width="20%">      
      <p class="fieldOutputAnalis">{{$result->analyser}} </p>    
      </td>
    </tr>

 
      <tr> 
        <td width="20%">Анализ выполнил:
        </td>
        <td width="20%"> 
                <p class="fieldOutputAnalis">{{$result->laborant}} </p>     
        </td>
      </tr>
<!--
      <td width="20%">Врач:
      </td>
      <td width="20%">        
      <p class="fieldOutputAnalis">{{$result->doctor}} </p>  
      </td>
    -->
    </tr>

  </table>
</div>

       <br>
    
				<button class="btn btn-mainmenu" type="submit">Сформировать PDF файл</button>
        
	</form>
  
@endsection

</div>






















