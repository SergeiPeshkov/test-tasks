
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Zimnicky->analiseType}}</title>
        <style>
  
           * {
                      padiing: 0 auto;  
                      font-family: DejaVu Serif, sans-serif;                   
                      
                  }
                  p{font-size: 20px;

                  }
  
                  .wrapper {
                      width: 100%;
                      margin: 0 auto;
  
                  }
  
                 .table1, .table2, .table3, .table5, .table6 {
                       width:100%;
                       font-size: 20px;
                  }  
                
                  .table3 td{
                    padding:10px;                   
                  }  
  
                  .table4 {
                      width:100%;
                      font-size: 18px;
                  }
  
                  .table4Text {
                      font-size: 24px;
                  }
  
                 
                  .table5 td:nth-child(2)
                  {
                    padding: 0 7px 0 0;
                  } 
                                
                  .table6 td:nth-child(1)
                  {
                    text-align:right;
                  }
    
                  .table6 td:nth-child(2)
                  {
                    padding-left: 20px;
                  }                   
                   table {
                       page-break-after: avoid;
                       border-collapse: collapse;                     
                   }
                
                   
    @page{margin: 0.1in 0.1in 0.1in 0.1in;}
  
        </style>
    </head>
    <body>
    <div class="wrapper">
        <div class="row">
        <table class="table1">
  
                <tr>
                    <th style="width: 45%; text-align:center;"><strong>Клинико-диагностическая лаборатория ГБУЗ РК "РКБ им. Н.А. Семашко"</strong></th>
                    <th class="table1Img" rowspan="3" style="width: 10%; text-align:center; "><img src="{{$path['logo']}}"></th>
                    <th style="width: 45%; text-align:center;"><strong>Отделение платных медицинских консультативно-диагностических услуг</strong></th>
                </tr>
                <tr>
                    <td style=" text-align:center;">295017, Российская Федерация, Республика Крым, г. Симферополь, ул. Киевская 69</td>
                    <td  style="text-align:center;">Кабинеты №101, 104</td>
                </tr>
                <tr>
                    <td style=" text-align:center;" >E-mail: labsemashko@mail.ru</td>  
                    <td style="text-align:center;">моб.тел: +7 (978) 060-95-67</td>
                </tr>
  
        </table>
    <hr>
    <br>
   
        <table class="table2">
            <tr>
                <td>ФИО: {{$Zimnicky->patient_lastname}} {{$Zimnicky->patient_name}}  {{$Zimnicky->patient_patronymic}}</td>              
                <td>№ договора: {{$Zimnicky->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Zimnicky->age)
                <td>Возраст пациента: {{$Zimnicky->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Zimnicky->dateVisit))}} </td>
            </tr>
           <tr>
                    @if($Zimnicky->sex)
                    <td>Пол пациента: {{$Zimnicky->sex}} </td>    
                    @endif
           </tr>
        
        </table>
      
        <div>
           <p><b>  Количество принятой жидкости:  {{$Zimnicky->countFluid}}</b> </p>
         </div>

         
        <h3 style="text-align:center; font-size:24px;">{{$Zimnicky->analiseType}}</h3>
          <table class="table3" border="1">
           
        <tr>
            <th>Номер порции</th>
            <th>Часы</th>
            <th>Относительная плотность</th>
            <th>Количество мочи в л. </th>          
        </tr>



        @if($Zimnicky->relative_density1)
            <tr>
                <td width="10%">1</td>           
                <td> <i>{{$Zimnicky->h1}} </i></td>
                <td><i>{{$Zimnicky->relative_density1}} </i> </td>
                <td><i>{{$Zimnicky->count1}} </i> </td>
            </tr>
        @endif

        @if($Zimnicky->relative_density2)
        <tr>
            <td width="10%">2</td>           
            <td> <i>{{$Zimnicky->h2}} </i></td>
            <td><i>{{$Zimnicky->relative_density2}} </i> </td>
            <td><i>{{$Zimnicky->count2}} </i> </td>
        </tr>
        @endif

        @if($Zimnicky->relative_density3)
        <tr>
            <td width="10%">3</td>           
            <td> <i>{{$Zimnicky->h3}} </i></td>
            <td><i>{{$Zimnicky->relative_density3}} </i> </td>
            <td><i>{{$Zimnicky->count3}} </i> </td>
        </tr>
        @endif

        @if($Zimnicky->relative_density4)
        <tr>
            <td width="10%">4</td>           
            <td> <i>{{$Zimnicky->h4}} </i></td>
            <td><i>{{$Zimnicky->relative_density4}} </i> </td>
            <td><i>{{$Zimnicky->count4}} </i> </td>
        </tr>
        @endif
    
        @if($Zimnicky->relative_density5)
        <tr>
            <td width="10%">5</td>           
            <td> <i>{{$Zimnicky->h5}} </i></td>
            <td><i>{{$Zimnicky->relative_density5}} </i> </td>
            <td><i>{{$Zimnicky->count5}} </i> </td>
        </tr>
        @endif

         
        @if($Zimnicky->relative_density6)
        <tr>
            <td width="10%">6</td>           
            <td> <i>{{$Zimnicky->h6}} </i></td>
            <td><i>{{$Zimnicky->relative_density6}} </i> </td>
            <td><i>{{$Zimnicky->count6}} </i> </td>
        </tr>
        @endif

         
        @if($Zimnicky->relative_density7)
        <tr>
            <td width="10%">7</td>           
            <td> <i>{{$Zimnicky->h7}} </i></td>
            <td><i>{{$Zimnicky->relative_density7}} </i> </td>
            <td><i>{{$Zimnicky->count7}} </i> </td>
        </tr>
        @endif
                 
        @if($Zimnicky->relative_density8)
        <tr>
            <td width="10%">8</td>           
            <td> <i>{{$Zimnicky->h8}} </i></td>
            <td><i>{{$Zimnicky->relative_density8}} </i> </td>
            <td><i>{{$Zimnicky->count8}} </i> </td>
        </tr>
        @endif

    
        </table>  
        <br>

        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Zimnicky->laborant}} </td> 
               @if($Zimnicky->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Zimnicky->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Zimnicky->dateResult))}} </td>
           </tr>  
        </table>

        <br>        

        <table class="table6">
            <tr> 
                <td width="10%"><img src="{{$path['info']}}"></td>        
                <td width="80%"><i>Результаты исследований не являются диагнозом, необходима консультация специалиста</i></td>
            </tr>
    
        </table>


        </div>
    </div>
  
  
    </body>
  
    </html>
  
  