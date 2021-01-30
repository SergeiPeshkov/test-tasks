
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$Feces->analiseType}}</title>
        <style>
  
           * {
                      padiing: 0 auto;  
                      font-family: DejaVu Serif, sans-serif;                   
                      
                  }
  
                  p{
                    font-size: 16px;
                   
                  }
  
                  .wrapper {
                      width: 100%;
                      margin: 0 auto;
  
                  }
  
                 .table1, .table2, .table3, .table5, .table6 {
                       width:100%;
                       font-size: 16px;
                  }  
                
                  .table3 td{
                    padding:10px;                   
                  }  
  
                  .table4 {
                      width:100%;
                      font-size: 16px;
                  }
  
                  .table4Text {
                      font-size: 20px;
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
                    padding-left: 16px;
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
                <td>ФИО: {{$Feces->patient_lastname}} {{$Feces->patient_name}}  {{$Feces->patient_patronymic}}</td>              
                <td>№ договора: {{$Feces->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($Feces->age)
                <td>Возраст пациента: {{$Feces->age}} </td>    
                @endif               
                <td>Дата обращения: {{date('d.m.yy', strtotime($Feces->dateVisit))}} </td>
            </tr>
           <tr>
                @if($Feces->sex)
                <td>Пол пациента: {{$Feces->sex}} </td>    
                @endif
                @if($Feces->diagnosis)                                  
                    <td>Клинический диагноз: {{$Feces->diagnosis}} </td>                      
                @endif
            

           </tr>
           
            </table>
           
        <p style="text-align:center; font-size:22px;">{{$Feces->analiseType}}</p>
        <table class="table3">
            <th rowspan="2" style="text-align:center;"> Физические свойства</th>
        </table>
      

          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>         
        </tr>

        @if($Feces->count)
            <tr>
                <td>Количество</td>           
                <td> <i>{{$Feces->count}} </i></td>              
            </tr>
        @endif

        @if($Feces->forma)
            <tr>
                <td>Форма</td>           
                <td> <i>{{$Feces->forma}} </i></td>             
            </tr>
        @endif

        @if($Feces->consistency)
        <tr>
            <td>Консистенция</td>           
            <td> <i>{{$Feces->consistency}} </i></td>        
        </tr>
        @endif

        @if($Feces->reactionPh)
            <tr>
                <td>Реакция (pH)</td>           
                <td> <i>{{$Feces->reactionPh}} </i></td>
                <td>  5,0-7,0  </td>
            </tr>
        @endif

        @if($Feces->color)        
            <tr>
                <td>Цвет</td>           
                <td> <i>{{$Feces->color}} </i></td>               
            </tr>
        @endif

        @if($Feces->smell)        
            <tr>
                <td>Запах</td>           
                <td> <i>{{$Feces->smell}} </i></td>             
            </tr>
        @endif

        @if($Feces->nfood)   
            <tr>
                <td>Остатки непереваренной пищи</td>           
                <td> <i>{{$Feces->nfood}} </i></td>            
            </tr>
        @endif

        @if($Feces->bile_pigments)   
            <tr>
                <td>Желчные пигменты</td>           
                <td> <i>{{$Feces->bile_pigments}} </i></td>
                <td> </td>
            </tr>
        @endif

        @if($Feces->slim)  
            <tr>
                <td>Слизь</td>           
                <td> <i>{{$Feces->slim}} </i></td>            
            </tr>
        @endif

        @if($Feces->blood)  
            <tr>
                <td>Кровь</td>           
                <td> <i>{{$Feces->blood}} </i></td>              
            </tr>
        @endif
        
        @if($Feces->pus)  
            <tr>
                <td>Гной</td>           
                <td> <i>{{$Feces->pus}} </i></td>              
            </tr>
        @endif

        @if($Feces->cloth)  
            <tr>
                <td>Кусочки ткани</td>           
                <td> <i>{{$Feces->cloth}} </i></td>               
            </tr>
        @endif
        
        @if($Feces->conkrementy)  
            <tr>
                <td>Конкременти (копролиты)</td>           
                <td> <i>{{$Feces->conkrementy}} </i></td>              
            </tr>
        @endif
        </table>  

        <br>
        <table class="table3">
            <th rowspan="2" style="text-align:center;"> Микроскопические исследования</th>
        </table>

    <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>         
        </tr>

        @if($Feces->food)
            <tr>
                <td>Остатки пищи</td>           
                <td> <i>{{$Feces->food}} </i></td>              
            </tr>
        @endif

        @if($Feces->muscle_fibers_notchange)
            <tr>
                <td>Мышечные волокна не изменены</td>           
                <td> <i>{{$Feces->muscle_fibers_notchange}} </i></td>             
            </tr>
        @endif

        @if($Feces->muscle_fibers_change)
        <tr>
            <td>Мышечные волокна изменены (перетравлены)</td>           
            <td> <i>{{$Feces->muscle_fibers_change}} </i></td>        
        </tr>
        @endif

        @if($Feces->vegetable_fiber)
            <tr>
                <td>Растительная клетчатка, которая не переваривается</td>           
                <td> <i>{{$Feces->vegetable_fiber}} </i></td>                
            </tr>
        @endif

        @if($Feces->neutral_fat)        
            <tr>
                <td>Жир нейтральный</td>           
                <td> <i>{{$Feces->neutral_fat}} </i></td>
               
            </tr>
        @endif

        @if($Feces->fatty_acid)        
            <tr>
                <td>Жирные кислоты</td>           
                <td> <i>{{$Feces->fatty_acid}} </i></td>             
            </tr>
        @endif

        @if($Feces->soap)   
            <tr>
                <td>Мыла</td>           
                <td> <i>{{$Feces->soap}} </i></td>            
            </tr>
        @endif

        @if($Feces->crystals)   
            <tr>
                <td>Кристалы</td>           
                <td> <i>{{$Feces->crystals}} </i></td>               
            </tr>
        @endif

        @if($Feces->pus)  
            <tr>
                <td>Гной</td>           
                <td> <i>{{$Feces->pus}} </i></td>            
            </tr>
        @endif

        @if($Feces->micro_slime)  
            <tr>
                <td>Слизь</td>           
                <td> <i>{{$Feces->micro_slime}} </i></td>              
            </tr>
        @endif
        
        @if($Feces->epithelial_cells)  
            <tr>
                <td>Эпителиальные клетки</td>           
                <td> <i>{{$Feces->epithelial_cells}} </i></td>              
            </tr>
        @endif

        @if($Feces->leukocyte)  
            <tr>
                <td>Лейкоциты</td>           
                <td> <i>{{$Feces->leukocyte}} </i></td>               
            </tr>
        @endif
        
        @if($Feces->erythrocyte)  
            <tr>
                <td>Эритроциты</td>           
                <td> <i>{{$Feces->erythrocyte}} </i></td>
              
            </tr>
        @endif

        @if($Feces->elementsWithSignsOfMalignancy)  
            <tr>
                <td>Элементы с признаками злокачественности</td>           
                <td> <i>{{$Feces->elementsWithSignsOfMalignancy}} </i></td>          
            </tr>
         @endif


         @if($Feces->iodophilic_flora)  
            <tr>
                <td>Йодофильная флора</td>           
                <td> <i>{{$Feces->iodophilic_flora}} </i></td>          
            </tr>
          @endif


          @if($Feces->protozoa)  
            <tr>
                <td>Простейшие</td>           
                <td> <i>{{$Feces->protozoa}} </i></td>          
            </tr>
           @endif

           @if($Feces->helminth_eggs)  
                <tr>
                    <td>Яйца гельминтов</td>           
                    <td> <i>{{$Feces->helminth_eggs}} </i></td>          
                </tr>
            @endif

            @if($Feces->fungus_like_elements)  
                <tr>
                    <td>Элементы грибкоподобные до дрожжевого</td>           
                    <td> <i>{{$Feces->fungus_like_elements}} </i></td>          
                </tr>
             @endif 

        </table> 

        @if($Feces->conclusion)  
        <table class="table3">
            <tr>
                <td> Заключение:</td>
                <td> <i>{{$Feces->conclusion}} </i> </td>
            </tr>
        </table>
        @endif 
  
        <br>

        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$Feces->laborant}} </td> 
               @if($Feces->analyser)
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом ИФА анализаторе</i>              
                                <strong>{{$Feces->analyser}}</strong>
                    </td>
                @endif
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($Feces->dateResult))}} </td>
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
  
  