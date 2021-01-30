@extends('layouts.app')


@section('content')
<div class="container">
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  {{$patient->name}} {{$patient->lastname}} {{$patient->patronymic}}</div>

                <div class="card-body">

                 @if($contractItem)

                 <table class="table table-hover table-bordered">
              
                <tbody>
                   
                    <tr>                   

                        <td>Номер договора:</td>
                        <td>{{$contractItem->number}}</td>                        
                    </tr>

                    <tr>                     
                        <td>Пациент:</td>
                        <td>
                     {{$patient->name}} {{$patient->lastname}} {{$patient->patronymic}}
                        </td>
                    </tr>
                   
                    <tr>                     
                        <td>Дата создания договора в системе:</td>
                        <td>{{$contractItem->created_at }}</td>
                     </tr>    

                    

                    <tr>                     
                       
                        @if($contractItem->status == "Не указано")
                            <td class="bg-light">Статус:</td>
                            <td class="bg-light">{{$contractItem->status}}</td>
                        @endif
                        @if($contractItem->status == "Не оплачено")
                            <td class="bg-warning">Статус:</td>
                            <td class="bg-warning">{{$contractItem->status}}</td>
                        @endif
                        @if($contractItem->status == "Оплачено")
                            <td class="bg-success">Статус:</td>
                            <td class="bg-success">{{$contractItem->status}}</td>
                        @endif
                        
                     </tr>                

                </tbody>
                </table> 

                <table class="table table-hover table-bordered">
                <thead>
                    <tr>        <th>№</th>
                            <th>Наименование</th>
                            <th>Количество</th>
                            <th>Стоимость</th>
                            
                    </tr>
                </thead>
              
                @foreach ($serviceOrdered as $index=> $serviceitem)
                 
                <tr> 
                    <td>{{$index+1}}</td>                    
                    <td>  @foreach ($paidServiceList as $paidServiceListItem)
                        @if($serviceitem->service_id == $paidServiceListItem->id)
                            {{$paidServiceListItem->name}}
                        @endif

                    @endforeach</td> 
                    <td>{{$serviceitem->count}}</td>
                    <td>
                    
                    @foreach ($paidServiceList as $paidServiceListItem)
                        @if($serviceitem->service_id == $paidServiceListItem->id)
                            {{$paidServiceListItem->price}}

                        @endif


                    @endforeach
                    </td>
                 </tr>                           
                        
                 @endforeach
                                  
                <tr>                   
                        <td colspan=2> <b> Итого: </b> </td> 
                        <td>                        
                        <b>  {{$count}}    </b>                      
                      </td>
                        <td>
                        <b>  {{$sum}}  </b>
                        </td>
                       
                 </tr>  

                     </table>
                     <br>
             <form action="{{ route('saveContractFDF', ['id'=>$contractItem->id]) }}" method="GET">

				<button class="btn btn-mainmenu" type="submit">Cформировать PDF файл</button>

            </form>
                <table class="table-sm float-right">
            
                    <tr><td>
                    <form action="{{ route('contractEdit', ['id'=>$contractItem->id]) }}" method="post">             
                    
                        <button type="submit" class="btn btn-link "> Редактировать </button>                
                        @csrf
                    </form>
                        </td>
                        <td>
                <form action="{{ route('contractDelete', ['contract'=>$contractItem->id]) }}" method="post">
                
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-link text-danger"> Удалить </button>
                        @csrf
                </form>
                    </td>
                    </tr>
              </table>

      
                 @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
