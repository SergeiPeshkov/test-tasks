<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacient;
use App\Contract;
class PatientController extends Controller
{
        //метод создания пациента
     public function patientAdd()
    {
        return view('Patient.Add');
    }


       //метод сохранения пациента
       public function patientStore(Request $request)
       {          
       
        $this->validate($request, [
            'name'=>'required', 
            'dateOfBirth'=>'required'
        ]);
                 
            $data= $request->all();            
            $patient = new Pacient();
            $patient->fill($data);            
            $patient->save();                
            return redirect('/patient/list')->with(['msg'=>"Пациент '$request->lastname $request->name $request->patronymic ' добавлен."]);
       }
   
        //вывод страницы списка пациентов
        public function patientList()
        {
            $patientList= Pacient::select(['id','name','lastname','patronymic','dateOfBirth'])->orderByDesc('created_at')->paginate(10);             
            $contractList= Contract::select(['id','created_at','patient_id', 'number'])->get();
            return view('Patient.List')->with(['patientList' => $patientList, 'contractList' => $contractList]);
        
        }

    //вывод страницы одного пациента
        public function patientShow($id)
        {
            $patient= Pacient::find($id);
        // dump($pacient);
        return view('Patient.Show')->with(['patient' => $patient]);
        
        }

        public function patientEdit($id){
            $patient=Pacient::find($id);
            return view('Patient.Edit')->with(['patient' => $patient]);    

        }

        public function patientUpdate(Request $request, $id)
        {
        
            $item=Pacient::find($id);
          
                if (empty($item))
                {
                    return back()
                        ->withErrors(['msg'=> "Запись id= [{$id}]не найдена"])
                        ->withInput();
                    
                }
            $data=$request->all();
           
            $result=$item->fill($data)->save();
           
            if($result){
                return redirect()->route('patientShow', $item->id)->with(['msg'=>"Запись успешно отредактирована."]);
            }
            else{
                return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
                }
        


        }
       
}
