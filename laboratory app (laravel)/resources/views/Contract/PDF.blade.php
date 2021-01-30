<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Договор</title>
    <style>
  body { font-family: DejaVu Sans, sans-serif; }
    </style>
  </head>
  <body>
  
<table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Номер договора </b></td>
        <td><b>ID пациента</b></td>
        <td><b>Статус договора</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
       
        {{$contract->number}}
        </td>
        <td>
        {{$contract->patient_id}}
      
        </td>
        <td>
        @foreach ($patientList as $patientItem )
      
        {{$patientItem->name}}
      
        @endforeach
        </td>
      </tr>
      </tbody>
    </table>
    </body>
</html>