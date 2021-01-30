
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Gelminty->analiseType}}</title>
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
                <td>ФИО: {{$Gelminty->patient_lastname}} {{$Gelminty->patient_name}}  {{$Gelminty->patient_patronymic}}</td>              
                <td>№ договора: {{$Gelminty->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Gelminty->age)
                <td>Возраст пациента: {{$Gelminty->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Gelminty->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Gelminty->sex)
            <td>Пол пациента: {{$Gelminty->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Gelminty->analiseType}}</h3>
        <table class="table3" border="1">
        <tr>
            <th width="40%">Наименование исследования</th>
            <th>Результат</th>          
        </tr>

        @if($Gelminty->helminth_eggs)
            <tr>
                <td>Яйца гельминтов</td>           
                <td> <i>{{$Gelminty->helminth_eggs}} </i></td>          
            </tr>
        @endif

        @if($Gelminty->protozoa)
            <tr>
                <td>Простейшие</td>           
                <td> <i>{{$Gelminty->protozoa}} </i></td>          
            </tr>
        @endif

        @if($Gelminty->occultBloodReaction)
            <tr>
                <td>Реакция на скрытую кровь</td>           
                <td> <i>{{$Gelminty->occultBloodReaction}} </i></td>          
            </tr>
        @endif

        @if($Gelminty->sterkobilin)
            <tr>
                <td>Реакция на стеркобилин</td>           
                <td> <i>{{$Gelminty->sterkobilin}} </i></td>          
            </tr>
        @endif

        @if($Gelminty->bilirubin)
            <tr>
                <td>Реакция на билирубин </td>           
                <td><i>{{$Gelminty->bilirubin}} </i></td>          
            </tr>
        @endif

        </table>  
        <br>



        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Gelminty->laborant}} </td> 
                @if($Gelminty->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Gelminty->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Gelminty->dateResult))}} </td>
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
  
  