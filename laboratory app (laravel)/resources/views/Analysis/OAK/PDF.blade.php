
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Клинический анализ крови</title>
    
    
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
                 font-size: 16px;
            }
    
            .table3 tr {
                border: 1px solid black;
            }
    
            .table3 th {
                border: 1px solid black;
                text-align:center;
            }
    
            .table3 td {
                border: 1px solid black;              
                padding-left:5px;   
                text-align:left;                
                 
            }
            
            .table4 {
                width:100%;
                font-size: 16px;
            }
    
            .table4Text {
                font-size: 16px;
            }
    
            .table5 {
                width:100%;
                 font-size: 16px;
    
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
            <td style="width:60%;">ФИО:  {{$oak->patient_lastname }} {{$oak->patient_name}} {{$oak->patient_patronymic}}</td>
            </tr>
            <tr>
            <td style="width:40%;">Возраст: <i></i></td>
            <td style="width:40%;">Дата обращения: <i>{{$oak->dateVisit}} </i></td>
            </tr>
    
        </table>
    <br>
        
        <table class="table3" style="border: 1px solid black;">
            <caption style=" font-size: 20px; margin-bottom:10px;"><strong>Клинический анализ крови</strong></caption>
                <thead style="font-size: 18px; text-align:center;">
                    <tr>
                        <th style="width: 30%;" colspan="3">Наименование показателей</th>
                        <th style="width: 30%;">Результат</th>
                        <th style="width: 40%;" colspan="2" align="left">Норма (в единицах СI)</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <tr>
                    <td rowspan="2" colspan="2">Гемоглобин</td>
                    <td>М</td>
                    <td rowspan="2">{{$oak->HGB}}</td>
                    <td style="width:20%">130,0 - 160,0</td>
                    <td style="width:20%" rowspan="2">г/л</td>
                    </tr>
                    <tr>
                        <td>Ж</td>
                        <td>120,0 - 140,0</td>
                        
                    </tr>

                    <tr>
                        <td rowspan="2" colspan="2">Эритроциты</td>
                        <td>М</td>
                        <td rowspan="2">{{$oak->RBC}}</td>
                        <td style="width:20%">4,0 - 5,0</td>
                        <td style="width:20%">10*12/л</td>
                        </tr>
                        <tr>
                            <td>Ж</td>
                            <td>3,9 - 4,7</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="3">Цветовой показатель</td>
                            <td>{{$oak->color}}</td>
                            <td>0,85 - 1,15</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="3">Ретикулоциты</td>
                            <td>{{$oak->retic}}</td>
                            <td>0,2 - 1,0</td>
                            <td>%</td>
                        </tr>

                        <tr>
                            <td colspan="3">Тромбоциты</td>
                            <td>{{$oak->PLT}}</td>
                            <td>180 - 300 10</td>
                            <td>10*9/л</td>
                        </tr>

                        <tr>
                            <td colspan="3">Лейкоциты</td>
                            <td>{{$oak->WBC}}</td>
                            <td>4,0 - 9,0</td>
                            <td>10*9/л</td>
                        </tr>

                        <tr>
                            <td rowspan="2" colspan="2">Скорость оседания эритроцитов (СОЭ)</td>
                            <td>М</td>
                            <td rowspan="2">{{$oak->soe}}</td>
                            <td style="width:20%">1 - 10</td>
                            <td style="width:20%" rowspan="2">мм/за час</td>                           
                        </tr>

                            <tr>
                                <td>Ж</td>
                                <td>2 - 15</td>
                            </tr> 

                            <tr>
                                <td rowspan="5"  style="width: 5%;">Нейтрофилы</td>
                            </tr>


                            <tr>
                                <td>Миелоциты</td>
                                <td> </td>
                                <td>{{$oak->mieloc}}</td>
                                <td> - </td>
                                <td></td>
                            </tr>


                            <tr>
                                <td>Метамиелоциты</td>
                                <td></td>
                                <td>{{$oak->metamieloc}}</td>
                                <td> - </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Палочкоядерные</td>
                                <td></td>
                                <td>{{$oak->palyad}}</td>
                                <td>1,0 - 6,0</td>
                                <td>%</td>
                            </tr>
                            <tr>
                                <td>Сегментоядерные</td>
                                <td></td>
                                <td>{{$oak->segmentoyad}}</td>
                                <td>47 - 72</td>
                                <td>%</td>
                            </tr>

                            <tr>
                                <td colspan="2">Эозинофилы</td>
                                <td></td>
                                <td>{{$oak->EOS}}</td>
                                <td>0,5 - 5,0</td>
                                <td>%</td>
                            </tr>

                            <tr>
                                <td colspan="2">Лимфоциты</td>
                                <td></td>
                                <td>{{$oak->LYM}}</td>
                                <td>19 - 37</td>
                                <td>%</td>
                            </tr>

                            <tr>
                                <td colspan="2">Моноциты</td>
                                <td></td>
                                <td>{{$oak->MON}}</td>
                                <td>3,0 - 11,0</td>
                                <td>%</td>
                            </tr>

                            <tr>
                                <td colspan="2">Базофилы</td>
                                <td></td>
                                <td>{{$oak->BAS}}</td>
                                <td>0 - 1</td>
                                <td>%</td>
                            </tr>

                            <tr>
                                <td colspan="2">Плазматические клетки</td>
                                <td></td>
                                <td>{{$oak->plasma}}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td rowspan="2" colspan="2">Гематокрит</td>
                                <td>М</td>
                                <td rowspan="2">{{$oak->HCT}}</td>
                                <td style="width:20%">40 - 48</td>
                                <td style="width:20%" rowspan="2">%</td>
                                
                            </tr>
                                <tr>
                                    <td>Ж</td>
                                    <td>36 - 42</td>
                                </tr>

                                <tr>
                                    <td colspan="2">Время свертывания крови</td>
                                    <td></td>
                                    <td>{{$oak->timeblood}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                </tbody>  
        </table>
        <br>

        <table class="table4">
            <tbody>
                <tr>
                    <td width="30%">Морфология лейкоцитов:</td>
                    <td width="35%"><u>{{$oak->morfley}}</u></td>
                    <td rowspan="5" width="5%"><img src="{{$path['info']}}"> </td>
                    <td rowspan="5" >                     
                      <i>Анализ выполнен на автоматическом гематологическом анализаторе</i>              
                        <strong>{{$oak->analyser}}</strong>
               </td>
                </tr>

                <tr>
                    <td>Гиперсегментация ядер:</td>
                    <td><u>{{$oak->hipersegment_yader}}</u></td>
                </tr>

                <tr>
                    <td>Токсикогенная зернистость:</td>
                    <td><u>{{$oak->toksogennaya_zernost}}</u></td>
                </tr>

                <tr>
                    <td>Морфология эритроцитов:</td>
                    <td><u>{{$oak->morferit}}</u></td>
                </tr>

                <tr>
                    <td>Анизоцитоз (макроциты, микроциты, мегалоциты):</td>
                    <td><u>{{$oak->anicitoz}}</u></td>
                </tr>

                <tr>
                    <td>Пойкилоцитоз:</td>
                    <td><u>{{$oak->poikilocitos}}</u></td>
                </tr>

                <tr>
                    <td>Эритроциты с базофильной зернистостью:</td>
                    <td><u>{{$oak->RBC_BZ}}</u></td>
                </tr>

                <tr>
                    <td>Тельца Жоли, кольца Кебота:</td>
                    <td><u>{{$oak->joli}}</u></td>
                </tr>
            </tbody>
        </table>
        <br>
    
        <table class="table5">
    
            <tr>
                <td style="width: 20%;">Анализ выполнил: {{$oak->laborant}} </td>
                
                </tr>
                <tr>
                    <td style="width: 30%;">Дата:  {{$oak->dateResult}}</td>
                    <td style="text-align: right;">Подпись __________________________</td>
                </tr>
        </table>
       
       
        <br>
    
        <table class="table6">
            <tr style="text-align:center;">
                <td style="width: 10%;"><img src="{{$path['info']}}"></td>
                <td style="width: 90%; font-size:18px; padding-top:10px;"><i>Результаты исследований не являются диагнозом, необходима консультация специалиста</i></td>
            </tr>
    
        </table>
    
        </div>
    </div>
    
    
    </body>
    
    </html>
    
    