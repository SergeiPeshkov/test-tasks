
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>Биохимический анализ крови</title>
        <style>
  
           * {
                      padiing: 0 auto;  
                      /*font-family: times;*/
                      font-family: DejaVu Serif, sans-serif;
                      
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
                    padding:3px;
                   
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

   
        <table class="table2">
            <tr>
                <td>ФИО: {{$biohimy->patient_lastname}}  {{$biohimy->patient_name}} {{$biohimy->patient_patronymic}}</td>           
                <td>№ договора: {{$biohimy->contract_number}}</td>                         
              </tr>  
            <tr>
                <td>Пол пациента: {{$biohimy->sex}}</td>  
             
                <td>Дата обращения: {{date('d.m.yy', strtotime($biohimy->dateVisit))}} </td>
            </tr>  
            <tr>
                <td>Возраст пациента: {{$biohimy->age}}</td>  

            </tr>       
        </table>

  
        <h3 style="text-align:center; font-size:24px;">Биохимический анализ крови</h3>
          <table class="table3" border="1">
        <tr>
            <th>Исследуемые компоненты</th>
            <th>Результат</th>
            <th>Норма (в единицах СИ)</th>            
        </tr>
        @if($biohimy->alt)
            <tr>
                <td>АЛТ</td>           
                <td> <i>{{$biohimy->alt}} </i></td>
                <td>до 41 Е/л</td>
            </tr>
        @endif
        
        @if($biohimy->ast)
            <tr>
                <td>АСТ</td>           
                <td> <i>{{$biohimy->ast}} </i></td>
                <td>до 41 Е/л</td>
            </tr>
        @endif
        
        @if($biohimy->bilirubin_ob)
            <tr>
                <td>Билирубин общий</td>           
                <td> <i>{{$biohimy->bilirubin_ob}} </i></td>
                <td>до 21 мкмоль/л</td>
            </tr>
        @endif

        @if($biohimy->bilirubin_pr)
            <tr>
                <td>Билирубин прямой</td>           
                <td> <i>{{$biohimy->bilirubin_pr}} </i></td>
                <td>до 4 мкмоль/л</td>
            </tr>
        @endif

        @if($biohimy->bilirubin_npr)
        <tr>
            <td>Билирубин не прямой</td>           
            <td> <i>{{$biohimy->bilirubin_npr}} </i></td>
            <td></td>
        </tr>
        @endif

        @if($biohimy->mochevina)
        <tr>
            <td>Мочевина</td>           
            <td> <i>{{$biohimy->mochevina}} </i></td>
            <td>2,6-8,1 мкмоль</td>
        </tr>
        @endif

        @if($biohimy->kreatinin)
        <tr>
            <td>Креатинин</td>           
            <td> <i>{{$biohimy->kreatinin}} </i></td>
            <td>М. 80-115 мкмоль/л<br>Ж. 53-97 мкмоль/л</td>
        </tr>
        @endif

        @if($biohimy->belok_ob)
        <tr>
            <td>Общий белок</td>           
            <td> <i>{{$biohimy->belok_ob}} </i></td>
            <td>64-84 г/л</td>
        </tr>
        @endif

        @if($biohimy->albumin)
        <tr>
            <td>Альбумин</td>           
            <td> <i>{{$biohimy->albumin}} </i></td>
            <td>38-53 г/л</td>
        </tr>
        @endif

        @if($biohimy->c_belok)
            <tr>
                <td>С - реативный белок</td>           
                <td> <i>{{$biohimy->c_belok}} </i></td>
                <td>до 5 мг/л</td>
            </tr>
        @endif

        @if($biohimy->revmo_factor)
            <tr>
                <td>Ревматоидный фактор</td>           
                <td> <i>{{$biohimy->revmo_factor}} </i></td>
                <td>до 15 МЕ/л</td>
            </tr>
        @endif

        @if($biohimy->moch_kislota)
        <tr>
            <td>Мочевая кислота</td>           
            <td> <i>{{$biohimy->moch_kislota}} </i></td>
            <td>М. 202-416 мкмоль/л<br>Ж. 143-339 мкмоль/л</td>
        </tr>
        @endif

        @if($biohimy->kalij)
            <tr>
                <td>Калий</td>           
                <td> <i>{{$biohimy->kalij}} </i></td>
                <td>3,5-5,3 ммоль/л</td>
            </tr>
        @endif
        
        @if($biohimy->natrij)
            <tr>
                <td>Натрий</td>           
                <td> <i>{{$biohimy->natrij}} </i></td>
                <td>135-148 ммоль/л</td>
             </tr>
        @endif

        @if($biohimy->hloridy)
            <tr>
                <td>Хлориды</td>           
                <td> <i>{{$biohimy->hloridy}} </i></td>
                <td>98-107 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->kalcij_ion)
            <tr>
                <td>Кальций ионизированный</td>           
                <td> <i>{{$biohimy->kalcij_ion}} </i></td>
                <td>1,15-1,29 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->kalcij_ob)
            <tr>
                <td>Кальций общий</td>           
                <td> <i>{{$biohimy->kalcij_ob}} </i></td>
                <td>2,15-2,60 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->magnij)
            <tr>
                <td>Магний</td>           
                <td> <i>{{$biohimy->magnij}} </i></td>
                <td>1,8-2,6 мг/мл</td>
            </tr>
        @endif

        @if($biohimy->zhelezo)
        <tr>
            <td>Железо</td>           
            <td> <i>{{$biohimy->zhelezo}} </i></td>
            <td>М. 11-28 мкмоль/л<br>Ж. 6,6-26 мкмоль/л</td>
        </tr>
        @endif

        @if($biohimy->holesterin)        
            <tr>
                <td>Холестерин</td>           
                <td> <i>{{$biohimy->holesterin}} </i></td>
                <td>3,6-5,3 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->trigliceridy)
            <tr>
                <td>Триглицериды</td>           
                <td> <i>{{$biohimy->trigliceridy}} </i></td>
                <td>до 1,7 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->lpvp)       
            <tr>
                <td>ЛПВП</td>           
                <td> <i>{{$biohimy->lpvp}} </i></td>
                <td>М > 1,45 ммоль/л<br>Ж > 1,68 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->lpnp) 
            <tr>
                <td>ЛПНП</td>           
                <td> <i>{{$biohimy->lpnp}} </i></td>
                <td>до 3,34 ммоль/л</td>
            </tr>
        @endif

        @if($biohimy->fostofaza)
            <tr>
                <td>Щелочная фосфотаза</td>           
                <td> <i>{{$biohimy->fostofaza}} </i></td>
                <td>до 258 Е/л</td>
            </tr>
        @endif

        @if($biohimy->ggt)
            <tr>
                <td>ГГТ</td>           
                <td> <i>{{$biohimy->ggt}} </i></td>
                <td>М. до 55 Е/л<br>Ж. до 38 Е/л</td>
            </tr>
        @endif

        @if($biohimy->alfa_amilaza)
            <tr>
                <td>Альфа-амилаза</td>           
                <td> <i>{{$biohimy->alfa_amilaza}} </i></td>
                <td>до 110 Е/л</td>
            </tr>
        @endif

        @if($biohimy->diastaza)
            <tr>
                <td>Диастаза</td>           
                <td> <i>{{$biohimy->diastaza}} </i></td>
                <td>до 500 Е/л</td>
            </tr>
        @endif

        @if($biohimy->kfk)
            <tr>
                <td>КФК</td>           
                <td> <i>{{$biohimy->kfk}} </i></td>
                <td>М. до 171 Е/л<br>Ж. до 145 Е/л</td>
            </tr>
        @endif

        @if($biohimy->ldg)
            <tr>
                <td>ЛДГ</td>           
                <td><i>{{$biohimy->ldg}} </i></td>
                <td>до 480 Е/л</td>
            </tr>
        @endif

        
        @if($biohimy->ferritin)
            <tr>
                <td>Ферритин</td>           
                <td><i>{{$biohimy->ferritin}} </i></td>
                <td>М. 30-300 мкл/л <br> 
                    Ж. до 50 лет: 10-160 мкл/л <br>
                  свыше 50 лет: 10-300 мкл/л</td>
            </tr>
        @endif


        @if($biohimy->transferrin)
            <tr>
                <td>Трансферрин</td>           
                <td><i>{{$biohimy->transferrin}} </i></td>
                <td>2.0-3.6 г/л</td>
            </tr>
        @endif

        

        </table>  
        <br>
        <table class="table5">  

                 <tr>                     
                    <td width="50%">Анализ выполнил: {{$biohimy->laborant}} </td>
                 
                
                    <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
                    <td  rowspan="3">                     
                        <i>Анализ выполнен на автоматическом анализаторе</i>
                   
                             <strong>{{$biohimy->analyser}}</strong>

                    </td>
                </tr>
         
                <tr>
                        <td width="30%">Дата: {{date('d.m.yy', strtotime($biohimy->dateResult))}} </td>
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
  
  