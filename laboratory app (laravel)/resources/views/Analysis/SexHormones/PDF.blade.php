
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$SexHormones->analiseType}}</title>
        <style>
  
           * {
                      padiing: 0 auto;  
                    /*font-family: DejaVu Serif, sans-serif;    */
                        font-family: times;       
                      
                  }
  
  
                  .wrapper {
                      width: 100%;
                      margin: 0 auto;
  
                  }
  
                 .table1, .table2, .table3, .table5, .table6 {
                       width:100%;
                       font-size: 18px;
                  }  
                
                  .table3 td{
                    padding:10px;                   
                  }  
  
                  .table4 {
                      width:100%;
                      font-size: 18px;
                  }
  
                  .table4Text {
                      font-size: 22px;
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
                    padding-left: 18px;
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
                <td>ФИО:  {{$SexHormones->patient_lastname}} {{$SexHormones->patient_name}} {{$SexHormones->patient_patronymic}}</td>              
                <td>№ договора: {{$SexHormones->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($SexHormones->age)
                <td>Возраст пациента: {{$SexHormones->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($SexHormones->dateVisit))}} </td>
            </tr>
           <tr>
            @if($SexHormones->sex)
            <td>Пол пациента: {{$SexHormones->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$SexHormones->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>
        @if($SexHormones->prolaktin)
        <tr>
            <td>Пролактин (мкМЕ/мл) </td>           
            <td> <i>{{$SexHormones->prolaktin}} </i></td>
            <td> М: 105-540<br>
                Ж: 67-726
            </td>
        </tr>
        @endif

        @if($SexHormones->progesteron)
        <tr>
            <td>Прогестерон (нмоль/л)     </td>           
            <td> <i>{{$SexHormones->progesteron}}  </i></td>
            <td>М: 0-4<br>
                фолликулярная фаза 0,6-4,6<br>
                фаза овуляции 11-80<br>
                лютеиновая фаза 7,5-80<br>
                постменопауза 0-2,3<br>
                <i>Беременные:</i><br>
                    1й триместр - 360 -240<br>
                    2-й триместр - 60-240<br>
                    3-й триместр - 156-722  </td>
        </tr>
        @endif

        @if($SexHormones->estradiol)
        <tr>
            <td>Эстрадиол (нмоль/л)  </td>           
            <td> <i>{{$SexHormones->estradiol}}  </i></td>
            <td>М: 0-4 <br>
                фолликулярная фаза 0,05-0,7<br>
                фаза овуляции 0,34-1,8<br>
                лютеиновая фаза 0,1-1,1<br>
                постменопауза 0-0,23<br>
                <i>Беременные:</i><br>
                    1й триместр - 0,1 -10,5
                    2-й триместр - 3,0 - 21<br>
                    3-й триместр - 6,0 - 80   </td>
        </tr>
        @endif

        @if($SexHormones->folukulo_hormon)
        <tr>
            <td>Фолликулостимулирующий гормон (МЕ/л)    </td>           
            <td> <i>{{$SexHormones->folukulo_hormon}}  </i></td>
            <td>М: 0-4<br>
                Ж: фолликулярная фаза 3-12<br>
                фаза овуляции 6-25<br>
                лютеиновая фаза 2-12<br>
                менопауза 10-150 
            </td>
        </tr>
        @endif

        @if($SexHormones->luten_hormon)
        <tr>
            <td>Лютеинизирующий гормон (МЕ/л)  </td>           
            <td> <i>{{$SexHormones->luten_hormon }}  </i></td>
            <td>М: 1,5-9<br>
                Ж: фолликулярная фаза 2-9,5<br>
                фаза овуляции 10-45<br>
                лютеиновая фаза 0,5-17<br>
                менопауза 5,0-57  </td>
        </tr>
        @endif

        @if($SexHormones->testosteron)
        <tr>
            <td>Тестостерон (нмоль/л)    </td>           
            <td> <i>{{$SexHormones->testosteron}}  </i></td>
            <td>М: 4,5-35,4<br>
                Ж: 0 - 3,1 нмоль/л   </td>
        </tr>
        @endif

        @if($SexHormones->testosteron_ob)
        <tr>
            <td>Тестостерон общий  (нмоль/л)  </td>           
            <td> <i>{{$SexHormones->testosteron_ob}}  </i></td>
            <td> 
                М 20-39 лет: 9,0 - 38 <br>  
                40 - 55 лет: 6,9 - 21   <br>        
                > 55 лет: 5,9 - 18,1 <br>
                Ж: 0 - 4,6             
             
        
       
        </tr>
        @endif

        @if($SexHormones->testosteron_free)
        <tr>
            <td>Тестостерон свободный (pg/ml)</td>           
            <td> <i>{{$SexHormones->testosteron_free}}  </i></td>
            <td>М: 5,7-32,2 pg/ml<br>
                Ж: 0,1 - 6,3 pg/ml </td>
        </tr>
        @endif

             </table>  
        <br>
        <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$SexHormones->laborant}} </td> 
               <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
               <td  rowspan="3">                     
                   <i>Анализ выполнен на автоматическом ИХЛ <br>анализаторе</i>              
                        <strong>{{$SexHormones->analyser}}</strong>
               </td>
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($SexHormones->dateResult))}} </td>
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
  
  