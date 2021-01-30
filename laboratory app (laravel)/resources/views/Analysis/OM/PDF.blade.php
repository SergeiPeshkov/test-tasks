
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>{{$OM->analiseType}}</title>
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
                <td>ФИО:  {{$OM->patient_lastname}} {{$OM->patient_name}}  {{$OM->patient_patronymic}}</td>              
                <td>№ договора: {{$OM->contract_number}}</td>                         
              </tr>  

            <tr>
                @if($OM->age)
                <td>Возраст пациента: {{$OM->age}} </td>    
                @endif
               
                <td>Дата обращения: {{date('d.m.yy', strtotime($OM->dateVisit))}} </td>
            </tr>
           <tr>
            @if($OM->sex)
            <td>Пол пациента: {{$OM->sex}} </td>    
            @endif
           </tr>
        
        </table>
      
        <h3 style="text-align:center; font-size:24px;">{{$OM->analiseType}}</h3>
          <table class="table3" border="1">
        <tr>
            <th>Наименование исследования</th>
            <th>Результат</th>
            <th>Норма</th>            
        </tr>

        @if($OM->afp)
            <tr>
                <td>Альфа-фетопротеин, (АФП)  </td>           
                <td> <i>{{$OM->afp}} </i></td>
                <td>0-14,4 МЕ/мл   </td>
            </tr>
        @endif

        @if($OM->sa242)
            <tr>
                <td>СА-242  </td>           
                <td> <i>{{$OM->sa242}}  </i></td>
                <td>0-20 Е/мл </td>
            </tr>
        @endif

        @if($OM->rea)        
            <tr>
                <td>(РЭА)  </td>           
                <td> <i> {{$OM->rea}}</i></td>
                <td>0-5,0 нг/мл  </td>
            </tr>
        @endif
        
        @if($OM->sa125) 
            <tr>
                <td>СА-125  </td>           
                <td> <i> {{$OM->sa125}}</i></td>
                <td> 0-35 МЕ/мл </td>
            </tr>
        @endif

        @if($OM->he4)
            <tr>
                <td>HE-4</td>           
                <td> <i> {{$OM->he4 }} </i></td>
                <td> 0-158 </td>
            </tr>
        @endif

        @if($OM->psa)
            <tr>
                <td>Простатспецифический антиген, (ПСА)   </td>           
                <td> <i> {{$OM->psa }} </i></td>
                <td> 0-4 нг/мл</td>
            </tr>
        @endif

        @if($OM->sa153)
            <tr>
                <td>СА 15-3   </td>           
                <td> <i>{{$OM->sa153 }}  </i></td>
                <td> 0-30 МЕ/мл</td>
            </tr>
        @endif

        @if($OM->sa199)
            <tr>
                <td>СА 19-9    </td>           
                <td> <i>{{$OM->sa199 }} </i></td>
                <td>0-37 МЕ/мл </td>
            </tr>
        @endif

        @if($OM->sa724)
            <tr>
                <td>СА 72-4     </td>           
                <td> <i> {{$OM->sa724 }} </i></td>
                <td>0-4 н/мл </td>
            </tr>
        @endif


        </table>  
        <br>


          <table class="table5"> 
            <tr>                     
               <td width="50%">Анализ выполнил: {{$OM->laborant}} </td> 
               <td rowspan="3" width="5%"><img src="{{$path['info']}}"> </td>
               <td  rowspan="3">                     
                   <i>Анализ выполнен на автоматическом ИХЛ анализаторе</i>              
                        <strong>{{$OM->analyser}}</strong>
               </td>
           </tr>    
           <tr>
                   <td width="30%">Дата: {{date('d.m.yy', strtotime($OM->dateResult))}} </td>
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
  
  