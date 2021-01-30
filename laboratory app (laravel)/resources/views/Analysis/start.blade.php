@extends('layouts.app')

@section('content')


<div class="container-new-contract">
	<form class="form-new-contract" action="{{route('analisysRoute')}}" method="POST">
		@csrf
		
<div class="input-group form-row">
               <div class="form-group col-md-6">

                  <label for="analysisList">Добавление нового анализа | Выберите анализ</label>

                      <select class="form-control chosen-select" name="analysisList" id="analysisList">         
                        @foreach($analysisList as $analysisName)
                            <option value="{{$analysisName->slug}}">{{$analysisName->title}}  </option>    
                        @endforeach
                    </select>
                    <button class="btn btn-mainmenu" type="submit">Перейти</button>
               </div>
             
  </div>
		
        
	</form>
  
@endsection

</div>






















