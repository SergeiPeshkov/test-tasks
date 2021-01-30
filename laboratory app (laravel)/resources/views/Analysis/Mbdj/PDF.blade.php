
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Mbdj->analiseType}}</title>
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
                <td>ФИО: {{$Mbdj->patient_lastname}} {{$Mbdj->patient_name}}  {{$Mbdj->patient_patronymic}}</td>              
                <td>№ договора: {{$Mbdj->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Mbdj->age)
                <td>Возраст пациента: {{$Mbdj->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Mbdj->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Mbdj->sex)
            <td>Пол пациента: {{$Mbdj->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Mbdj->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

        <tr>
            <td>Анализ мочи Бенс Джонса </td>           
            <td> <i>{{$Mbdj->result}} </i></td>
            <td> </td>
        </tr>

        </table>  
        <br>



        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Mbdj->laborant}} </td> 
               @if($Mbdj->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Mbdj->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Mbdj->dateResult))}} </td>
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
  
  