<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacient;
use App\Contract;
use App\PaidService;
use App\ServiceOrdered;
use PDF;
class ContractController extends Controller
{
    //метод добавления нового договора
    public function contractAdd()
    {
        $patientList= Pacient::select(['id','name','lastname','patronymic','dateOfBirth'])->get();
        $serviceList= PaidService::select(['id','name', 'unit', 'price'])->get();
           
        return view('Contract.Add')->with(['patientList' => $patientList, 'serviceList' => $serviceList]);   
        
    }

        //метод сохранения договора
    public function ContractStore(Request $request)
        {                  
            
            $this->validate($request, [
                'number'=>'required|integer',
                's1'=>'required'
            ]);  
            
           for ($i=1; $i<=30; $i++)
           {

            $itemS = 's'.$i;  
            $itemC = 'c'.$i;         
            if ($request->$itemS)
                 {
              
                    if ($request->$itemC == null)
                    {
                      
                        $request->$itemC = 1; 
                     
                    }
                  
                //$str=strpos($request->$itemS, "|");
               // $row=substr($request->$itemS, 0, $str);
               // $serviceName=trim($row);
                $serviceId=$request->$itemS;
                $request->number=trim($request->number);
               
                $service_ordereds= new ServiceOrdered();
                $service_ordereds->fill([
                    'patient_id' => $request->patient_id,
                    'contract_number'=> $request->number,
                    'service_id'=> $serviceId,
                    'count'=> $request->$itemC,

                    ]);
                $service_ordereds->save(); 
                              
            }
        }    
           
            
             $contract = new Contract();            
             $contract->fill([
                
            'patient_id' => $request->patient_id,
            'number' => $request->number,
            'sum' =>  $request->summa,
            'sumInCheck' => $request->sumInCheck,
            'status' => $request->status

            ]);

            $contract->save(); 

            $result=$contract->save();
                
            if($result){
                return redirect('/patient/list')->with(['msg'=>"Договор № '$request->number' добавлен."]); 
            }
            else{
                return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
                }
        }

         //вывод страницы одного договора
         public function contractShow($id)
         {
             $contract= Contract::find($id);
             $patient= Pacient::find($contract->patient_id);  
             $serviceOrdered=ServiceOrdered::select('service_id', 'count', 'contract_number', 'patient_id')
            ->where(['contract_number'=> $contract->number])->get(); 
             $paidServiceList= PaidService::select(['id','name', 'unit', 'price'])->get();
             $count=0; $sum=0;
             foreach ($serviceOrdered as $serviceItem)
             {                
                 $count+=$serviceItem->count;
                             
                foreach($paidServiceList as $serviceItemList)
                {

                    if($serviceItem->service_id == $serviceItemList->id)
                    {
                        $sum+= $serviceItemList->price * $serviceItem->count;
                      
                    }
                }
             }
                                 
             
             return view('Contract.Show')->with(['contractItem' => $contract, 
            'patient'=>$patient,
            'serviceOrdered' => $serviceOrdered,
            'count'=>$count,
            'paidServiceList' => $paidServiceList,
            'sum'=>$sum
              
              ]);         
         }

         public function contractEdit($id){
            $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get();            
            $contract=Contract::find($id);
            return view('Contract.Edit')->with(['patientList' => $patientList, 'contract'=>$contract]); 
            }
             

        public function contractUpdate(Request $request, $id)
             {
             $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get();
             $item=Contract::find($id);
               
                     if (empty($item))
                     {
                         return back()
                             ->withErrors(['msg'=> "Запись id= [{$id}]не найдена"])
                             ->withInput();
                     }
                  
                    $item->fill([
                        
                    'number' => $request->number,                   
                    'sum' =>  $request->sum,
                    'sumInCheck' => $request->sumInCheck,
                    'status' => $request->status
        
                    ]);
        
                    $item->save();                
                    $result=$item->save();
                
                 if($result){
                     return redirect()->route('contractShow', $item->id)->with(['msg'=>"Запись успешно отредактирована."]);
                 }
                 else{
                     return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
                     }
     
             }  

             public function downloadPDF($id)
              {
                $contract=Contract::find($id);
                $patientList= Pacient::select(['id','name', 'lastname', 'patronymic' ])->get();
                $pdf = PDF::loadView('Contract.PDF', compact('contract', 'patientList'));        
                return $pdf->download('Договор.pdf');               

              }
              


}
