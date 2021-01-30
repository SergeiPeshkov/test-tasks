
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Mbelok->analiseType}}</title>
        <style>
  
           * {
                      padiing: 0 auto;  
                      font-family: DejaVu Serif, sans-serif;                   
                      
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
                <td>ФИО: {{$Mbelok->patient_lastname}} {{$Mbelok->patient_name}}  {{$Mbelok->patient_patronymic}}</td>              
                <td>№ договора: {{$Mbelok->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Mbelok->age)
                <td>Возраст пациента: {{$Mbelok->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Mbelok->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Mbelok->sex)
            <td>Пол пациента: {{$Mbelok->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Mbelok->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

        @if($Mbelok->gr)
            <tr>
                <td>Гр. </td>           
                <td> <i>{{$Mbelok->gr}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Mbelok->count)
            <tr>
                <td>Кол-во мочи </td>           
                <td> <i>{{$Mbelok->count}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Mbelok->specific_weight)
            <tr>
                <td>Уд. вес </td>           
                <td> <i>{{$Mbelok->specific_weight}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Mbelok->protein)
            <tr>
                <td>Белок </td>           
                <td> <i>{{$Mbelok->protein}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Mbelok->daily_protein)
            <tr>
                <td>Белок суточный </td>           
                <td> <i>{{$Mbelok->daily_protein}} </i></td>
                <td> </td>
            </tr>
        @endif
        </table>  
        <br>

        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Mbelok->laborant}} </td> 
               @if($Mbelok->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Mbelok->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Mbelok->dateResult))}} </td>
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
  
  