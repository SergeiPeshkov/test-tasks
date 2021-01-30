
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Analismochi->analiseType}}</title>
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
                <td>ФИО: {{$Analismochi->patient_lastname}} {{$Analismochi->patient_name}}  {{$Analismochi->patient_patronymic}}</td>              
                <td>№ договора: {{$Analismochi->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Analismochi->age)
                <td>Возраст пациента: {{$Analismochi->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Analismochi->dateVisit))}} </td>
            </tr>
           <tr>
            @if($Analismochi->sex)
            <td>Пол пациента: {{$Analismochi->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$Analismochi->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

        @if($Analismochi->color)
            <tr>
                <td>Цвет</td>           
                <td> <i>{{$Analismochi->color}} </i></td>
                <td> светло-желтый </td>
            </tr>
        @endif

        @if($Analismochi->relative_density)
            <tr>
                <td>Относительная плотность</td>           
                <td> <i>{{$Analismochi->relative_density}} </i></td>
                <td>1,001-1,028  </td>
            </tr>
        @endif

        @if($Analismochi->transparency)
        <tr>
            <td>Прозрачность</td>           
            <td> <i>{{$Analismochi->transparency}} </i></td>
            <td> Прозрачная  </td>
        </tr>
        @endif

        @if($Analismochi->reactionPh)
            <tr>
                <td>Реакция (pH)</td>           
                <td> <i>{{$Analismochi->reactionPh}} </i></td>
                <td>  5,0-7,0  </td>
            </tr>
        @endif

        @if($Analismochi->protein)        
            <tr>
                <td>Белок</td>           
                <td> <i>{{$Analismochi->protein}} </i></td>
                <td>  до 0,1241 г/л  </td>
            </tr>
        @endif

        @if($Analismochi->glukoza)        
            <tr>
                <td>Глюкоза</td>           
                <td> <i>{{$Analismochi->glukoza}} </i></td>
                <td> Отсутствует  </td>
            </tr>
        @endif

        @if($Analismochi->aceton)   
            <tr>
                <td>Ацетон</td>           
                <td> <i>{{$Analismochi->aceton}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Analismochi->bile_pigments)   
            <tr>
                <td>Желчные пигменты</td>           
                <td> <i>{{$Analismochi->bile_pigments}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Analismochi->epithelium_flat)  
            <tr>
                <td>Эпителий плоский</td>           
                <td> <i>{{$Analismochi->epithelium_flat}} </i></td>
                <td> Един. в поле зрения</td>
            </tr>
        @endif

        @if($Analismochi->epithelium_transition)  
            <tr>
                <td>Эпителий переходной</td>           
                <td> <i>{{$Analismochi->epithelium_transition}} </i></td>
                <td> Един. в поле зрения</td>
            </tr>
        @endif
        
        @if($Analismochi->epithelium_renal)  
            <tr>
                <td>Эпителий почечный</td>           
                <td> <i>{{$Analismochi->epithelium_renal}} </i></td>
                <td> Един. в поле зрения</td>
            </tr>
        @endif

        @if($Analismochi->leukocyte)  
            <tr>
                <td>Лейкоциты</td>           
                <td> <i>{{$Analismochi->leukocyte}} </i></td>
                <td>  3-4 в поле зрения </td>
            </tr>
        @endif
        
        @if($Analismochi->erythrocyte_nochange)  
            <tr>
                <td>Эритроциты неизмененные</td>           
                <td> <i>{{$Analismochi->erythrocyte_nochange}} </i></td>
                <td> Един. в поле зрения </td>
            </tr>
        @endif

        @if($Analismochi->erythrocyte_change)  
            <tr>
                <td>Эритроциты измененные</td>           
                <td> <i>{{$Analismochi->erythrocyte_change}} </i></td>
                <td> Отсутствуют </td>
            </tr>
        @endif

        @if($Analismochi->cylinders_hyaline)  
            <tr>
                <td>Цилиндры гиалиновые</td>           
                <td> <i>{{$Analismochi->cylinders_hyaline}} </i></td>
                <td> Отсутствуют </td>
            </tr>
        @endif

        @if($Analismochi->cylinders_grainy)
        <tr>
            <td>Цилиндры зернистые</td>           
            <td> <i>{{$Analismochi->cylinders_grainy}} </i></td>
            <td> Отсутствуют </td>
        </tr>
        @endif

        @if($Analismochi->slime)
            <tr>
                <td>Слизь</td>           
                <td> <i>{{$Analismochi->slime}} </i></td>
                <td> Отсутствуют </td>
            </tr>
        @endif

        @if($Analismochi->salt)
        <tr>
            <td>Соли</td>           
            <td> <i>{{$Analismochi->salt}} </i></td>
            <td></td>
        </tr>
        @endif

        @if($Analismochi->bacterias)
        <tr>
            <td>Бактерии</td>           
            <td> <i>{{$Analismochi->bacterias}} </i></td>
            <td></td>
        </tr>
        @endif



        </table>  
        <br>

        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Analismochi->laborant}} </td> 
               @if($Analismochi->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Analismochi->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Analismochi->dateResult))}} </td>
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
  
  