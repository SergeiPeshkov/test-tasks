
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Serum->analiseType}}</title>
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
                <td>ФИО:  {{$Serum->patient_lastname}} {{$Serum->patient_name}}  {{$Serum->patient_patronymic}}</td>              
                <td>№ договора: {{$Serum->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Serum->age)
                <td>Возраст пациента: {{$Serum->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Serum->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Serum->sex)
            <td>Пол пациента: {{$Serum->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Serum->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

        @if($Serum->t3)
            <tr>
                <td>Т3 </td>           
                <td> <i>{{$Serum->t3}} </i></td>
                <td> 1-2,8 нм/л</td>
            </tr>
        @endif

        @if($Serum->t3free)
            <tr>
                <td>Т3 свобод.     </td>           
                <td> <i>{{$Serum->t3free}}  </i></td>
                <td>0,5-1,8 нм/л  </td>
            </tr>
       @endif

        @if($Serum->t4)
            <tr>
                <td>Т4    </td>           
                <td> <i>{{$Serum->t4}}  </i></td>
                <td>66-181 нмоль/л  </td>
            </tr>
         @endif

        @if($Serum->t4free)
            <tr>
                <td>Т4 свобод.    </td>           
                <td> <i>{{$Serum->t4free}}  </i></td>
                <td>12-22 нмоль/л  </td>
            </tr>
        @endif

        @if($Serum->ttg)
        <tr>
            <td>ТТГ     </td>           
            <td> <i>{{$Serum->ttg}}  </i></td>
            <td>0,27 - 4,2 мк NE/ml   </td>
        </tr>
        @endif

        @if($Serum->atktg)
            <tr>
                <td>АткТГ   </td>           
                <td> <i>{{$Serum->atktg}}  </i></td>
                <td>до 65 ед/мл  </td>
            </tr>
        @endif
        
         @if($Serum->atktpo)
                <tr>
                    <td>АткТПО    </td>           
                    <td> <i>{{$Serum->atktpo}}  </i></td>
                    <td>до 30 ед/мл</td>
                </tr>
          @endif   

             </table>  
        <br>

        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Serum->laborant}} </td> 
               <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
               <td  rowspan="3">                     
                   <i>Анализ выполнен на автоматическом ИХЛ анализаторе</i>              
                        <strong>{{$Serum->analyser}}</strong>
               </td>
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Serum->dateResult))}} </td>
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
  
  