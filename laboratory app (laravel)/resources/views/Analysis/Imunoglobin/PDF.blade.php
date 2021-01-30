
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Imunoglobin->analiseType}}</title>
        <style>
  
           * {      padiing: 0 auto;  
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
                <td>ФИО:  {{$Imunoglobin->patient_lastname}} {{$Imunoglobin->patient_name}} {{$Imunoglobin->patient_patronymic}}</td>              
                <td>№ договора: {{$Imunoglobin->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Imunoglobin->age)
                <td>Возраст пациента: {{$Imunoglobin->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Imunoglobin->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Imunoglobin->sex)
            <td>Пол пациента: {{$Imunoglobin->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Imunoglobin->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

    @if($Imunoglobin->imE)     
        <tr>
            <td>Определение иммуноглобина E  </td>           
            <td> <i>{{$Imunoglobin->imE}} </i></td>
            <td>до 130 МЕ/мл
             </td>
        </tr>
    @endif

    @if($Imunoglobin->imG)     
        <tr>
            <td>Определение иммуноглобина G </td>           
            <td> <i>{{$Imunoglobin->imG}} </i></td>
            <td>7-16 г/л
            </td>
        </tr>
    @endif
       
    @if($Imunoglobin->imA)     
        <tr>
            <td>Определение иммуноглобина A</td>           
            <td> <i>{{$Imunoglobin->imA}} </i></td>
            <td>0,7-4,0 г/л
            </td>
        </tr>
    @endif 

    @if($Imunoglobin->imM)     
            <tr>
                <td>Определение иммуноглобина M </td>           
                <td> <i>{{$Imunoglobin->imM}} </i></td>
                <td>0,4-2,3 г/л
                </td>
            </tr>
    @endif

        </table>  
        <br>


    <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Imunoglobin->laborant}} </td> 
               <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
               <td  rowspan="3">                     
                   <i>Анализ выполнен на автоматическом ИХЛ анализаторе</i>              
                        <strong>{{$Imunoglobin->analyser}}</strong>
               </td>
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Imunoglobin->dateResult))}} </td>
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
  
  