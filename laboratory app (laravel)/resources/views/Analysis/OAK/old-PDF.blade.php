
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Общий анализ крови</title>
    
    
        <style>
    
            * {
                padiing: 0 auto;
    
                font-family: DejaVu Serif, sans-serif;
            }
    
            .wrapper {
                width: 100%;
                margin: 0 auto;
    
            }
    
            /*tr, th ,td {
                border: 1px solid black;
    
            } */
            .table1 {
                 width:100%;
                 font-size: 20px;
            }
    
            .table2 {
                width:100%;
                font-size: 20px;
    
            }
            .table3 {
                width:100%;
                 font-size: 18px;
            }
    
            .table3 tr {
                border: 1px solid black;
            }
    
            .table3 th {
                border: 1px solid black;
            }
    
            .table3 td {
                border: 1px solid black;
            }
            .table4 {
                width:60%;
                font-size: 18px;
            }
    
            .table4Text {
                font-size: 24px;
            }
    
            .table5 {
                width:100%;
                 font-size: 20px;    
            }
    
            .table6 {
                width:100%;    
            }
    
            .table6 img {
                float:right;
                padding-right: 15px;    
            }
    
             table {
                 page-break-after: avoid;
                 border-collapse: collapse;
    
             }
             .table7{
                width:60%;
                font-size: 20px;
              
             }
             .table8, .table9{
                font-size: 18px;              
             
             }

           
            /* .table1Img {
                 margin: 0 auto;
             }
             */
    
    @page{margin: 0.1in 0.1in 0.1in 0.1in;}
    
        </style>
    </head>
    <body>
    <div class="wrapper">
        <div class="row">
        <table class="table1">
    
                <tr>
                    <th style="width: 45%; text-align:center; float:left;"><strong>Клинико-диагностическая лаборатория ГБУЗ РК "РКБ им. Н.А. Семашко"</strong></th>
                    <th class="table1Img" rowspan="3" style="width: 10%;"><img src="{{$path['logo']}}"></th>
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
             <td>№ договора: {{$oak->contract_number}}</td>
            </tr>
            <tr>
                <td style="width:60%;">
                    ФИО: {{$oak->patient_name}} {{$oak->patient_lastname }} {{$oak->patient_patronymic}}
                </td>
            </tr>
                <tr>
                <td style="width:40%;">Дата обращения: <i>{{$oak->dateVisit}} </i></td>
            </tr>
    
        </table>
    
        <table class="table3" style="border: 1px solid black;">
            <caption style=" font-size: 20px; margin-bottom:10px;"><strong>Общий анализ крови</strong></caption>
                <thead style=" font-size: 18px;">
                    <tr>
                        <th style="width: 70%;">Параметр</th>
                        <th style="width: 10%;">Результат</th>
                        <th style="width: 10%;">Единица измерения</th>
                        <th style="width: 10%;">Ном. диапазон</th>
                    </tr>
                </thead>
    
                <tbody style="">

                @if($oak->WBC)
                    <tr>
                        <td><strong>Лейкоциты (WBC)</strong></td>
                        <td><strong>{{$oak->WBC}}</strong></td>
                        <td><strong>10<sup>9</sup>L</strong></td>
                        <td><strong>4.00-10.00</strong></td>
                    </tr>
                @endif

                @if($oak->NEU)
                    <tr>
                        <td>Нейтрофилы (Neu%)</td>
                        <td>{{$oak->NEU}}</td>
                        <td>%</td>
                        <td>50.0-70.0</td>
                    </tr>
                @endif

                @if($oak->LYM)
                    <tr>
                        <td>Лимфоциты (Lym%)</td>
                        <td>{{$oak->LYM}}</td>
                        <td>%</td>
                        <td>20.0-40.0</td>
                    </tr>
                @endif

                @if($oak->MON)
                    <tr>
                        <td>Моноциты (Mon%)</td>
                        <td>{{$oak->MON}}</td>
                        <td>%</td>
                        <td>3.0-12.0</td>
                    </tr>
                @endif

                @if($oak->EOS)
                    <tr>
                        <td>Эозинофилы (Eos%)</td>
                        <td>{{$oak->EOS}}</td>
                        <td>%</td>
                        <td>0.5-5.0</td>
                    </tr>
                @endif

                @if($oak->BAS)     
                    <tr>
                        <td>Базофилы (Bas%)</td>
                        <td>{{$oak->BAS}}</td>
                        <td>%</td>
                        <td>0.0-1.0</td>
                    </tr>
                @endif

                @if($oak->RBC)
                    <tr>
                        <td><strong>Эритроциты (RBC)</strong></td>
                        <td><strong>{{$oak->RBC}}</strong></td>
                        <td><strong>10<sup>12</sup>L</strong></td>
                        <td><strong>3.5-5.5</strong></td>
                    </tr>
                @endif

                @if($oak->HGB)
                    <tr>
                        <td><strong>Гемоглобин (HGB)</strong></td>
                        <td><strong>{{$oak->HGB}}</strong></td>
                        <td><strong>g/l</strong></td>
                        <td><strong>110-160</strong></td>
                    </tr>
                @endif

                @if($oak->HCT)
                    <tr>
                        <td>Гематокрит (НСТ)</td>
                        <td>{{$oak->HCT}}</td>
                        <td>%</td>
                        <td>37-54</td>
                    </tr>
                @endif

                @if($oak->MCV)
                    <tr>
                        <td>Средний объём эпитроцитов (MCV)</td>
                        <td>{{$oak->MCV}}</td>
                        <td>fl</td>
                        <td>80.0-100.0</td>
                    </tr>
                @endif

                @if($oak->MCH)
                    <tr>
                        <td>Среднее содержание гемоглобина в эритроцитах (МСН)</td>
                        <td>{{$oak->MCH}}</td>
                        <td>Pg</td>
                        <td>27.0-34.0</td>
                    </tr>
                @endif

                @if($oak->MCHC)
                    <tr>
                        <td>Средняя концентрация гемоглобина в эритроцитах (МСНС)</td>
                        <td>{{$oak->MCHC}}</td>
                        <td>g/l</td>
                        <td>320-360</td>
                    </tr>
                @endif

                @if($oak->RDW_CV)
                    <tr>
                        <td>Ширина распределения эритроцитов по объёму (RDW-CV)</td>
                        <td>{{$oak->RDW_CV}}</td>
                        <td>g/l</td>
                        <td>11.0-16.0</td>
                    </tr>
                @endif

                @if($oak->PLT)
                    <tr>
                        <td><strong>Тромбоциты</strong></td>
                        <td><strong>{{$oak->PLT}}</strong></td>
                        <td><strong>10<sup>9</sup>L</strong></td>
                        <td><strong>100-300</strong></td>
                    </tr>
                @endif

                @if($oak->MPV)
                    <tr>
                        <td>Средний объём тромбоцитов</td>
                        <td>{{$oak->MPV}}</td>
                        <td>fl</td>
                        <td>6.5-12.0</td>
                    </tr>
                @endif

                @if($oak->RDW)
                    <tr>
                        <td>Ширина распределения тромбоцитов по объёму (RDW)</td>
                        <td>{{$oak->RDW}}</td>
                        <td>%</td>
                        <td>9.0-17.0</td>
                    </tr>
                @endif

                @if($oak->PST)
                <tr>    
                     <td>Тромбокрит  </td>
                        <td>{{$oak->PST}}</td>
                        <td>%</td>
                        <td>0.108-0.282</td>
                    </tr>   
                @endif

                </tbody>
        </table>
      
        @if($oak->anicitoz or $oak->anizohromiya or $oak->poikilocitos)
        <br>
        <table class="table4">

            <tr style="font-size: 20px; margin-bottom:10px;">
                <th colspan="2">Морфология эритроцитов</th>
            
            </tr>

            @if($oak->anicitoz)
            <tr>
                <td style="width: 45%; border: 1px solid black;" >Аницитоз</td>
                <td style="width: 10%; border: 1px solid black;">{{$oak->anicitoz}}</td>   
            </tr>
            @endif

            @if($oak->anizohromiya)
            <tr>              
                <td style="border: 1px solid black;">Анизохромия</td>
                <td style="border: 1px solid black;">{{$oak->anizohromiya }}</td>                       
            </tr>
            @endif  

            @if($oak->poikilocitos)
            <tr style="border: 1px solid black;">             
                <td style="border: 1px solid black;">Пойкилоцитоз</td>
                <td style="border: 1px solid black;">{{$oak->poikilocitos}}</td>             
            </tr>
            @endif

            @if($oak->RBC_BZ)
            <tr>
               <td style="border: 1px solid black;">Эритроциты с базофильной зернистостью</td>
                <td style="border: 1px solid black;">{{$oak->RBC_BZ}}</td>                
              
            </tr>
            @endif    

            @if($oak->polihromat)
            <tr>
                <td style="border: 1px solid black;">Полихроматофилия</td>
                <td style="border: 1px solid black;">{{$oak->polihromat}}</td>
            </tr>
            @endif

            @if($oak->joli)
            <tr>
                <td style="border: 1px solid black;">Тельца Жоли, кольца Кебота</td>
                <td style="border: 1px solid black;">{{$oak->joli}}</td>
            </tr>
            @endif

            @if($oak->eritronormoblasty)
            <tr>
                <td style="border: 1px solid black;">Эритро-нормобласты (на 100 лейкоцитов)</td>
                <td style="border: 1px solid black;">{{$oak->eritronormoblasty}}</td>
            </tr>
            @endif
        </table>
     
        @endif
     
    
        @if($oak->hipersegment_yader or $oak->toksogennaya_zernost or $oak->blasty)
        <br>
        <table class="table7">
            <tr style="font-size: 20px; margin-bottom:10px;">
            <th colspan="2"> Морфология лейкоцитов</th>
            </tr>

            @if($oak->hipersegment_yader)          
              <tr > 
                <td colspan="3" style="width: 45%; border: 1px solid black;">Гиперсегментация ядер</td>
                <td style="width: 10%; border: 1px solid black;">{{$oak->hipersegment_yader}}</td>                 
            </tr>
            @endif

            @if($oak->toksogennaya_zernost)
                <tr>  
                    <td style="border: 1px solid black;" colspan="3">Токсогенная зернистость</td>
                    <td style="border: 1px solid black;">{{$oak->toksogennaya_zernost}}</td>          
                </tr>
            @endif

            @if($oak->blasty)
                <tr style="border: 1px solid black;">
                
                    <td style="border: 1px solid black;" colspan="3">Бласты</td>
                    <td style="border: 1px solid black;">{{$oak->blasty}}</td>             
                </tr>
            @endif       
        </table>
        @endif

        <br>
        <table class="table8">
            <tr style="border: 1px solid black;">
                <td rowspan="2" width="15%"><img src="{{$path['info']}}"> </td>
                <td rowspan="2" width="60%">
                    <i>Анализ выполнен на автоматическом анализаторе <strong>{{$oak->analyser}}</strong><i>    
                 </td>
                </tr>
        </table>
        <br>
    

        <table class="table5">            
            <tr>
                <td style="width: 20%;">Анализ выполнил: {{$oak->laborant}} </td>            
                </tr>  

                <tr>
                    <td style="width: 50%;">Врач: {{$oak->doctor}}</td>                     
                     <td style="width: 30%; text-align:right;">Дата:  {{$oak->dateResult}}</td>
                </tr>            
        </table>
        <br>
    
        <table class="table6">
            <tr style="text-align:center;">
                <td style="width: 10%;"><img src="{{$path['info']}}"></td>
                <td style="width: 90%; font-size:18px; padding-top:10px;">
                    <i>Результаты исследований не являются диагнозом, необходима консультация специалиста</i></td>
            </tr>    
        </table>
    
        </div>
    </div>
    
    
    </body>
    
    </html>
    
    