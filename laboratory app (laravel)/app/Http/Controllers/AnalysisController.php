<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; use PDF;
use App\AnalysisList, App\Pacient, App\Contract, App\OAK, App\Biohimy, App\Glukoza, App\Coagulation, 
App\Glgem, App\SexHormone, App\OM, App\Insuline, App\PSA, App\Folkislota, App\B12, App\Serum, App\Gepatite,
App\Kortizol, App\Hpylory, App\TTG, App\Gleadin,  App\Imunoglobine, App\Antifosfolipid, App\Peptid, App\Urogenital,
App\Kumbsa, App\Imunogem, App\Infekcii, App\Ukartizol, App\Toxo, App\Sgom, App\Feces, App\Glm, App\Mbdj, App\Mbelok,
App\Formelm, App\Analismochi, App\Zimnicky, App\Gelminty, App\ASLO; 

class AnalysisController extends Controller
{
     //метод создания анализа крови
public function AnalysisStart()
   {
      $analysisList= AnalysisList::select(['id','title','slug'])->get();
      return view('Analysis.start')->with(['analysisList' =>  $analysisList]);
   }

public function AnalysisRoute(Request $request)  
   {
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic', 'dateOfBirth' ])->get();               
         if($request->analysisList == "oak")
            { 
               return view('Analysis.OAK.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "biohimy")
            { 
               return view('Analysis.Biohimy.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "glukoza")
            { 
               return view('Analysis.Glukoza.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "coagulation")
            { 
               return view('Analysis.Coagulation.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "glgem")
            { 
               return view('Analysis.Glgem.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "sex_hormones")
            { 
               return view('Analysis.SexHormones.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "om")
            { 
               return view('Analysis.OM.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "insuline")
            { 
               return view('Analysis.Insuline.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "psa")
            { 
               return view('Analysis.PSA.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "folkislota")
            { 
               return view('Analysis.Folkislota.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "serum")
            { 
               return view('Analysis.Serum.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "gepatite")
            { 
               return view('Analysis.Gepatite.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "kortizol")
            { 
               return view('Analysis.Kortizol.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "hpylori")
            { 
               return view('Analysis.Hpylori.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "ttg")
            { 
               return view('Analysis.TTG.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "gliadin")
            { 
               return view('Analysis.Gliadin.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "imunoglobin")
            { 
               return view('Analysis.Imunoglobin.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "antifosfolipid")
            { 
               return view('Analysis.Antifosfolipid.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "peptid")
            { 
               return view('Analysis.Peptid.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "urogenital")
            { 
               return view('Analysis.Urogenital.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "kumbsa")
            { 
               return view('Analysis.Kumbsa.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "imunogem")
            { 
               return view('Analysis.Imunogem.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "infekcii")
            { 
               return view('Analysis.Infekcii.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "ukortizol")
            { 
               return view('Analysis.Ukortizol.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "toxo")
            { 
               return view('Analysis.Toxo.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "sgom")
            { 
               return view('Analysis.Sgom.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "feces")
            { 
               return view('Analysis.Feces.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "glm")
            { 
               return view('Analysis.Glm.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "mbdj")
            { 
               return view('Analysis.Mbdj.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "mbelok")
            { 
               return view('Analysis.Mbelok.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "formelm")
            { 
               return view('Analysis.Formelm.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "analismochi")
            { 
               return view('Analysis.Analismochi.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "zimnicky")
            { 
               return view('Analysis.Zimnicky.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "gelminty")
            { 
               return view('Analysis.Gelminty.Add')->with(['patientList' =>  $patientList]);
            }
         if($request->analysisList == "aslo")
            { 
               return view('Analysis.ASLO.Add')->with(['patientList' =>  $patientList]);
            }
         
         
  }

public function analysisList(Request $request)
   {
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get();
      $ContractList= Contract::select(['id','number'])->get();
      $analysisList= AnalysisList::select(['id','title','slug'])->get();          
      $resultList= OAK::first()->orderByDesc('created_at')->paginate(10);
      $resultList-> withPath('?analysisList=oak');      

         if($request->analysisList == "oak")
            {
              $resultList= OAK::first();  
              if($resultList){
               $resultList= OAK::first()->orderByDesc('created_at')->paginate(10);
               $resultList-> withPath('?analysisList=oak');                 
               return view('Analysis.OAK.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList]);
              }

            else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }

         if($request->analysisList == "biohimy")
            {
               $resultList= Biohimy::first();
               if($resultList){
                  $resultList= Biohimy::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=biohimy');              
                  return view('Analysis.Biohimy.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] ); 
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
               
            }
         if($request->analysisList == "glukoza")
            {
               $resultList= Glukoza::first();
               if($resultList){
                  $resultList= Glukoza::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=glukoza');                  
                  return view('Analysis.Glukoza.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] ); 
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }  
         if($request->analysisList == "coagulation")
            {
               $resultList= Coagulation::first();
               if($resultList){
                  $resultList= Coagulation::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=glukoza');               
                  return view('Analysis.Coagulation.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }               
            }
         if($request->analysisList == "glgem")
            {
               $resultList= Glgem::first();
               if($resultList){
                  $resultList= Glgem::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=glgem');               
                  return view('Analysis.Glgem.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               } 

            }
            if($request->analysisList == "sex_hormones")
            {
               $resultList= SexHormone::first();
               if($resultList){
                  $resultList= SexHormone::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=sex_hormones');               
                  return view('Analysis.SexHormones.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }
            if($request->analysisList == "om")
            {
               $resultList= OM::first();
               if($resultList){
                  $resultList= OM::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=om');               
                  return view('Analysis.OM.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] ); 
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }
            if($request->analysisList == "insuline")
            {
               $resultList= Insuline::first();
               if($resultList){
                  $resultList= Insuline::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=om');               
                  return view('Analysis.Insuline.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
             
            }
            if($request->analysisList == "psa")
            {
               $resultList= PSA::first();
               if($resultList){
                  $resultList= PSA::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=psa');               
                  return view('Analysis.PSA.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }
            if($request->analysisList == "folkislota")
            {
               $resultList= Folkislota::first();
               if($resultList)
               {
                  $resultList= Folkislota::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=folkislota');               
                  return view('Analysis.Folkislota.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }
            }
           
            if($request->analysisList == "serum")
            {
               $resultList= Serum::first();
               if($resultList)
               {
                  $resultList= Serum::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=serum');               
                  return view('Analysis.Serum.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }  
                
            }
            if($request->analysisList == "gepatite")
            {
               $resultList=Gepatite::first();
               if($resultList)
               {
                  $resultList= Gepatite::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=gepatite');               
                  return view('Analysis.Gepatite.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );    
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }  
               
            }
            if($request->analysisList == "kortizol")
            {
               $resultList=Kortizol::first();
               if($resultList)
               {
                  $resultList= Kortizol::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=kortizol');               
                  return view('Analysis.Kortizol.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] ); 
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }   
            }
            if($request->analysisList == "hpylori")
            {
               $resultList=Hpylory::first();
               if($resultList)
               {
                  $resultList= Hpylory::first()->orderByDesc('created_at')->paginate(10);              
                  $resultList-> withPath('?analysisList=hpylori');               
                  return view('Analysis.Hpylori.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }                 
            }
            if($request->analysisList == "ttg")
            {
               $resultList= TTG::first();
               if($resultList){   
                  $resultList= TTG::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=ttg'); 
                  return view('Analysis.TTG.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }   
               
            }
            if($request->analysisList == "gliadin")
            {
               $resultList= Gleadin::first();
               if($resultList){   
                  $resultList= Gleadin::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=gliadin'); 
                  return view('Analysis.Gliadin.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                  
               }               
            }

            if($request->analysisList == "imunoglobin")
            {
               $resultList= Imunoglobine::first();
               if($resultList){   
                  $resultList= Imunoglobine::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=imunoglobin'); 
                  return view('Analysis.Imunoglobin.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
               }                
            }

            if($request->analysisList == "antifosfolipid")
            {
               $resultList= Antifosfolipid::first();
               if($resultList){   
                  $resultList= Antifosfolipid::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=antifosfolipid'); 
                  return view('Analysis.Antifosfolipid.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                    
               }                
            }
            
            if($request->analysisList == "peptid")
            {
               $resultList= Peptid::first();
               if($resultList){   
                  $resultList= Peptid::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=peptid'); 
                  return view('Analysis.Peptid.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                        
               }                
            }

            if($request->analysisList == "urogenital")
            {
               $resultList= Urogenital::first();
               if($resultList){   
                  $resultList= Urogenital::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=urogenital'); 
                  return view('Analysis.Urogenital.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
               }                
            }

            if($request->analysisList == "kumbsa")
            {
               $resultList= Kumbsa::first();
               if($resultList){   
                  $resultList= Kumbsa::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=kumbsa'); 
                  return view('Analysis.Kumbsa.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                  
               }                
            }
            if($request->analysisList == "imunogem")
            {
               $resultList= Imunogem::first();
               if($resultList){   
                  $resultList= Imunogem::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=imunogem'); 
                  return view('Analysis.Imunogem.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
               } 
            }  
            if($request->analysisList == "infekcii")
               {
                  $resultList= Infekcii::first();
                  if($resultList){   
                     $resultList= Infekcii::first()->orderByDesc('created_at')->paginate(10);          
                     $resultList->withPath('?analysisList=infekcii'); 
                     return view('Analysis.Infekcii.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                     'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
                  }
                  else{
                     return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
                  }              
            }
            if($request->analysisList == "ukortizol")
            {
               $resultList= Ukartizol::first();
               if($resultList){   
                  $resultList= Ukartizol::first()->orderByDesc('created_at')->paginate(10);          
                  $resultList->withPath('?analysisList=ukortizol'); 
                  return view('Analysis.Ukortizol.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                  'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
               }
               else{
                  return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
               } 
            }
            if($request->analysisList == "toxo")
               {
                  $resultList= Toxo::first();
                  if($resultList){   
                     $resultList= Toxo::first()->orderByDesc('created_at')->paginate(10);          
                     $resultList->withPath('?analysisList=toxo'); 
                     return view('Analysis.Toxo.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                     'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
                  }
                  else{
                     return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
                  }                
             }

             if($request->analysisList == "sgom")
             {
                $resultList= Sgom::first();
                if($resultList){   
                   $resultList= Sgom::first()->orderByDesc('created_at')->paginate(10);          
                   $resultList->withPath('?analysisList=sgom'); 
                   return view('Analysis.Sgom.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                   'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
                }
                else{
                   return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
                }                
           }

           if($request->analysisList == "feces")
           {
              $resultList= Feces::first();
              if($resultList){   
                 $resultList= Feces::first()->orderByDesc('created_at')->paginate(10);          
                 $resultList->withPath('?analysisList=feces'); 
                 return view('Analysis.Feces.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
                 'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
              }
              else{
                 return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
              }                
         }

         if($request->analysisList == "glm")
         {
            $resultList= Glm::first();
            if($resultList){   
               $resultList= Glm::first()->orderByDesc('created_at')->paginate(10);          
               $resultList->withPath('?analysisList=glm'); 
               return view('Analysis.Glm.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
               'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
            }
            else{
               return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
            }                
       }

       if($request->analysisList == "mbdj")
       {
          $resultList= Mbdj::first();
          if($resultList){   
             $resultList= Mbdj::first()->orderByDesc('created_at')->paginate(10);          
             $resultList->withPath('?analysisList=mbdj'); 
             return view('Analysis.Mbdj.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
             'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
          }
          else{
             return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
          }                
     }

      if($request->analysisList == "mbelok")
      {
         $resultList= Mbelok::first();
         if($resultList){   
            $resultList= Mbelok::first()->orderByDesc('created_at')->paginate(10);          
            $resultList->withPath('?analysisList=mbelok'); 
            return view('Analysis.Mbelok.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
            'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
         }
         else{
            return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
         }                
      }


      if($request->analysisList == "formelm")
      {
         $resultList= Formelm::first();
         if($resultList){   
            $resultList= Formelm::first()->orderByDesc('created_at')->paginate(10);          
            $resultList->withPath('?analysisList=formelm'); 
            return view('Analysis.Formelm.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
            'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
         }
         else{
            return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
         }                
      }

   if($request->analysisList == "analismochi")
   {
      $resultList= Analismochi::first();
      if($resultList){   
         $resultList= Analismochi::first()->orderByDesc('created_at')->paginate(10);          
         $resultList->withPath('?analysisList=analismochi'); 
         return view('Analysis.Analismochi.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
         'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
      }
      else{
         return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
      }                
   }

   if($request->analysisList == "zimnicky")
   {
      $resultList= Zimnicky::first();
      if($resultList){   
         $resultList= Zimnicky::first()->orderByDesc('created_at')->paginate(10);          
         $resultList->withPath('?analysisList=zimnicky'); 
         return view('Analysis.Zimnicky.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
         'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
      }
      else{
         return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
      }                
   }

   if($request->analysisList == "gelminty")
   {
     
      $resultList= Gelminty::first();
      if($resultList){   
         $resultList= Gelminty::first()->orderByDesc('created_at')->paginate(10);          
         $resultList->withPath('?analysisList=gelminty'); 
         return view('Analysis.Gelminty.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
         'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
      }
      else{
         return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
      }                
   }
    

   if($request->analysisList == "aslo")
   {
      
      $resultList= ASLO::first();
      if($resultList){   
         $resultList= ASLO::first()->orderByDesc('created_at')->paginate(10);          
         $resultList->withPath('?analysisList=aslo'); 
         return view('Analysis.ASLO.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
         'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );   
      }
      else{
         return back()->with(['msgerror'=> "В базе данных нет записей по выбранному типу анализа!"]);                   
      }                
  
   }


   else{
         return view('Analysis.List')->with(['patientList' => $patientList, 'analysisList' => $analysisList,
         'ContractList' => $ContractList, 'resultList' =>  $resultList, 'slug'=>$request->analysisList] );  
   }    


          
}

         
//=общий анализ крови = //
public function OAKstore(Request $request)  
   {                  
      $data= $request->all(); 
      $oak = new OAK(); 
      $oak->fill($data);
      $oak->save();        
      $result=$oak->save();
      if($result){
         return redirect('analysis/list?analysisList=oak')->with(['msg'=>"Результат анализа 'Общий анализ крови' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else{
               return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }

public function OAKshow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= OAK::find($id);     
      return view('Analysis.OAK.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }

public function OAKPDF($id) 
   {                  
    // $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get();
     $oak= OAK::find($id);       
     PDF::setOptions(['isRemoteEnabled' => TRUE]); 
     $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"];             
     $pdf = PDF::loadView('Analysis.OAK.PDF', compact('oak', 'path'))->setPaper('a4', 'portrait');  
     return $pdf->download('Общий анализ крови.pdf');   
   }

//=общий биохимический анализ = //    

public function BiohimyStore(Request $request)  
   {   
      $data= $request->all(); 
      $biohimy = new Biohimy(); 
      $biohimy->fill($data);
      $biohimy->save();        
      $result=$biohimy->save();
      if($result){
         return redirect('analysis/list?analysisList=biohimy')->with(['msg'=>"Результат анализа 'Общий биохимический анализ' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }
public function Biohimyshow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= Biohimy::find($id);
      return view('Analysis.Biohimy.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }  
   public function BiohimyPDF($id) 
   {                  
      $biohimy= Biohimy::find($id);  
      PDF::setOptions(['isRemoteEnabled' => TRUE]);
      $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"];         
     $pdf = PDF::loadView('Analysis.Biohimy.PDF', compact('biohimy', 'path'))->setPaper('a4', 'portrait');
     return $pdf->download('Биохимический анализ крови.pdf');      
   }
   //=Анализ крови на содержание глюкозы = //   
   public function GlukozaStore(Request $request)  
   {         
      $data= $request->all(); 
      $glukoza = new Glukoza(); 
      $glukoza->fill($data);
      $glukoza->save();        
      $result=$glukoza->save();
      
      if($result){
         return redirect('analysis/list?analysisList=glukoza')->with(['msg'=>"Результат анализа 'Анализ крови на содержание глюкозы' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }
   public function GlukozaShow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= Glukoza::find($id);
      return view('Analysis.Glukoza.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   } 
   
   public function GlukozaPDF($id) 
   {                  
      $glukoza= Glukoza::find($id);  
      PDF::setOptions(['isRemoteEnabled' => TRUE]);
      $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"];      
      $pdf = PDF::loadView('Analysis.Glukoza.PDF', compact('glukoza', 'path'))->setPaper('a4', 'portrait');    
      return $pdf->download('Анализ крови на содержание глюкозы.pdf');   
   } 

//=показатели системы свертывания крови = //   

public function CoagulationStore(Request $request)  
   {       
      $data= $request->all(); 
      $coagulation = new Coagulation(); 
      $coagulation->fill($data);
      $coagulation->save();        
      $result=$coagulation->save();
      
      if($result){
         return redirect('analysis/list?analysisList=coagulation')->with(['msg'=>"Результат анализа 'Показатели системы свертывания крови' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }
   public function CoagulationShow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= Coagulation::find($id);
      return view('Analysis.Coagulation.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   } 
   
   public function CoagulationPDF($id) 
   {                  
      $Coagulation= Coagulation::find($id);  
      $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
      $pdf = PDF::loadView('Analysis.Coagulation.PDF', compact('Coagulation', 'path'))->setPaper('a4', 'portrait');    
      return $pdf->download('Показатели системы свертывания крови.pdf');   
   } 
   //=гликозилированный гемоглобин = //   
   public function GlgemStore(Request $request)  
   {       
      $data= $request->all(); 
      $glgem = new Glgem(); 
      $glgem->fill($data);
      $glgem->save();        
      $result=$glgem->save();
      
      if($result){
         return redirect('analysis/list?analysisList=glgem')->with(['msg'=>"Результат анализа 'Гликозилированный гемоглобин' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }

   public function GlgemShow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= Glgem::find($id);
      return view('Analysis.Glgem.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   } 
   public function GlgemPDF($id) 
   {                  
      $Glgem= Glgem::find($id);  
      $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
      $pdf = PDF::loadView('Analysis.Glgem.PDF', compact('Glgem', 'path' ))->setPaper('a4', 'portrait');    
      return $pdf->download('Гликозилированный гемоглобин.pdf');   
   } 
  //= Анализ крови на содержание половых гормонов= // 
  public function SexHormonesStore(Request $request)  
   {  $data= $request->all(); 
      $SexHormone = new SexHormone(); 
      $SexHormone->fill($data);
      $SexHormone->save();        
      $result=$SexHormone->save();      
      if($result){
         return redirect('analysis/list?analysisList=sex_hormones')->with(['msg'=>"Результат анализа 'Анализ крови на содержание половых гормонов' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }
   public function SexHormonesShow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= SexHormone::find($id);
      return view('Analysis.SexHormones.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   } 
   public function SexHormonesPDF($id) 
   {                  
      $SexHormones= SexHormone::find($id);  
      $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
      $pdf = PDF::loadView('Analysis.SexHormones.PDF', compact('SexHormones', 'path' ))->setPaper('a4', 'portrait');    
      return $pdf->download('Анализ крови на содержание половых гормонов.pdf');   
   } 
  //= Определение уровня онкомаркеров= //  
  public function OMStore(Request $request)  
   {       
      $data= $request->all();       
      $OM = new OM(); 
      $OM->fill($data);
      $OM->save();        
      $result=$OM->save();
      
      if($result){
         return redirect('analysis/list?analysisList=om')->with(['msg'=>"Результат анализа 'Определение уровня онкомаркеров' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
                }
         else       
                {
         return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
               }
   }

   public function OMShow($id) 
   {                  
      $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
      $result= OM::find($id);
      return view('Analysis.OM.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   } 

   public function OMPDF($id) 
{                  
   $OM= OM::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.OM.PDF', compact('OM', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Определение уровня онкомаркеров.pdf');   
} 

 //= Анализ крови на опреление инсулина= //  
 public function InsulineStore(Request $request)  
 {       
    $data= $request->all();         
    $Insuline = new Insuline(); 
    $Insuline->fill($data);
    $Insuline->save();        
    $result=$Insuline->save();
    
    if($result){
       return redirect('analysis/list?analysisList=insuline')->with(['msg'=>"Результат анализа 'Определение уровня инсулина в крови' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
              }
       else       
              {
       return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
             }
 }

 public function InsulineShow($id) 
 {                  
    $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
    $result= Insuline::find($id);
    return view('Analysis.Insuline.Show')->with(['result' => $result, 'patientList'=>$patientList]);
 } 
 public function InsulinePDF($id) 
 {                  
    $Insuline= Insuline::find($id);  
    $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
    $pdf = PDF::loadView('Analysis.Insuline.PDF', compact('Insuline', 'path' ))->setPaper('a4', 'portrait');    
    return $pdf->download('Анализ крови на опреление инсулина.pdf');   
 } 
//=Анализ крови на определение уровня ПСА  = //    
 public function PSAStore(Request $request)  
 {       
    $data= $request->all();  
    $PSA = new PSA(); 
    $PSA->fill($data);
    $PSA->save();        
    $result= $PSA->save();
    
    if($result){
       return redirect('analysis/list?analysisList=psa')->with(['msg'=>"Результат анализа 'Определение уровня ПСА в крови' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
              }
       else       
              {
       return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
             }
 }

 public function PSAShow($id) 
 {                  
    $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
    $result=  PSA::find($id);
    return view('Analysis.PSA.Show')->with(['result' => $result, 'patientList'=>$patientList]);
 } 
 public function PSAPDF($id) 
 {                  
    $PSA= PSA::find($id);  
    $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
    $pdf = PDF::loadView('Analysis.PSA.PDF', compact('PSA', 'path' ))->setPaper('a4', 'portrait');    
    return $pdf->download('Анализ крови на определение уровня ПСА.pdf');   
 }
//=Анемическая панель  = //    
public function FolkislotaStore(Request $request)  
{       
   $data= $request->all();  
   $Folkislota = new Folkislota(); 
   $Folkislota->fill($data);
   $Folkislota->save();        
   $result= $Folkislota->save();
   
   if($result){
      return redirect('analysis/list?analysisList=folkislota')->with(['msg'=>"Результат анализа 'Анемическая панель' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function FolkislotaShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  Folkislota::find($id);
   return view('Analysis.Folkislota.Show')->with(['result' => $result, 'patientList'=>$patientList]);
} 
public function FolkislotaPDF($id) 
{                  
   $Folkislota= Folkislota::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Folkislota.PDF', compact('Folkislota', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на фолиевую кислоту.pdf');   
}

//=Гормон щитовидной железы = // 
public function SerumStore(Request $request)  
{       
   $data= $request->all();     
   $Serum = new Serum();    
   $Serum->fill($data);
   $Serum->save();        
   $result= $Serum->save();
   
   if($result){
      return redirect('analysis/list?analysisList=serum')->with(['msg'=>"Результат анализа 'Гормон щитовидной железы' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function SerumShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  Serum::find($id);
   return view('Analysis.Serum.Show')->with(['result' => $result, 'patientList'=>$patientList]);
} 

public function SerumPDF($id) 
{                  
   $Serum= Serum::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Serum.PDF', compact('Serum', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Гормон щитовидной железы.pdf');   
} 

//=Анализ крови на маркеры вирусных гепатитов = // 
public function GepatiteStore(Request $request)  
{       
   $data= $request->all();  
   $Gepatite = new Gepatite();    
   $Gepatite->fill($data);
   $Gepatite->save();        
   $result= $Gepatite->save();
   
   if($result){
      return redirect('analysis/list?analysisList=gepatite')->with(['msg'=>"Результат анализа 'Анализ крови на маркеры вирусных гепатитов' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}


public function GepatiteShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  Gepatite::find($id);
   return view('Analysis.Gepatite.Show')->with(['result' => $result, 'patientList'=>$patientList]);
} 
public function GepatitePDF($id) 
{                  
   $Gepatite= Gepatite::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Gepatite.PDF', compact('Gepatite', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на маркеры вирусных гепатитов.pdf');   
} 
//=Анализ крови на кортизол = // 
public function KortizolStore(Request $request)  
{       
   $data= $request->all();  
   $Kortizol = new Kortizol();    
   $Kortizol->fill($data);
   $Kortizol->save();        
   $result= $Kortizol->save();
   
   if($result){
      return redirect('analysis/list?analysisList=kortizol')->with(['msg'=>"Результат анализа 'Анализ крови на гормоны надпочечников' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function KortizolShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  Kortizol::find($id);
   return view('Analysis.Kortizol.Show')->with(['result' => $result, 'patientList'=>$patientList]);
} 
public function KortizolPDF($id) 
{                  
   $Kortizol= Kortizol::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Kortizol.PDF', compact('Kortizol', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на гормоны надпочечников.pdf');   
} 

//=Анализ крови на h.pylori = // 
public function HpyloriStore(Request $request)  
{       
   $data= $request->all();  
   $Hpylori = new Hpylory();    
   $Hpylori->fill($data);
   $Hpylori->save();        
   $result= $Hpylori->save();
   
   if($result){
      return redirect('analysis/list?analysisList=hpylori')->with(['msg'=>"Результат анализа 'Анализ на H.pylori' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function HpyloriShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  Hpylory::find($id);
   return view('Analysis.Hpylori.Show')->with(['result' => $result, 'patientList'=>$patientList]);
} 
public function HpyloriPDF($id) 
{                  
   $Hpylori= Hpylory::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Hpylori.PDF', compact('Hpylori', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на h.pylori.pdf');   
} 
//=Анализ крови на антитела к рецепторам ТТГ = // 
public function TTGStore(Request $request)  
{       
   $data= $request->all();  
   $TTG = new TTG();    
   $TTG->fill($data);
   $TTG->save();        
   $result= $TTG->save();
   
   if($result){
      return redirect('analysis/list?analysisList=ttg')->with(['msg'=>"Результат анализа 'Анализ крови на антитела к рецепторам ТТГ' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function TTGShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result=  TTG::find($id);
   if($result)
   {
   return view('Analysis.TTG.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function TTGPDF($id) 
{                  
   $TTG= TTG::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.TTG.PDF', compact('TTG', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на антитела к рецепторам ТТГ.pdf');   
} 
//=Анализ крови на антитела к глиадину = // 
public function GliadinStore(Request $request)  
{       
   $data= $request->all();  
   $Gliadin = new Gleadin();    
   $Gliadin->fill($data);
   $Gliadin->save();        
   $result= $Gliadin->save();
   
   if($result){
      return redirect('analysis/list?analysisList=gliadin')->with(['msg'=>"Результат анализа 'Анализ крови на антитела к глиадину' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function GliadinShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Gleadin::find($id);
   if($result)
   {
   return view('Analysis.Gliadin.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function GliadinPDF($id) 
{                  
   $Gliadin= Gleadin::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Gliadin.PDF', compact('Gliadin', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на антитела к глиадину.pdf');   
} 

//=Определение иммуноглобина = // 
public function ImunoglobinStore(Request $request)  
{       
   $data= $request->all();  
   $Imunoglobin = new Imunoglobine();    
   $Imunoglobin->fill($data);
   $Imunoglobin->save();        
   $result= $Imunoglobin->save();
   
   if($result){
      return redirect('analysis/list?analysisList=imunoglobin')->with(['msg'=>"Результат анализа 'Определение иммуноглобина' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function ImunoglobinShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Imunoglobine::find($id);
   if($result)
   {
   return view('Analysis.Imunoglobin.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function ImunoglobinPDF($id) 
{                  
   $Imunoglobin= Imunoglobine::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Imunoglobin.PDF', compact('Imunoglobin', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Определение иммуноглобина.pdf');   
} 

//=Анализ крови на антифосфолипид = // 
public function AntifosfolipidStore(Request $request)  
{       
   $data= $request->all();  
   $Antifosfolipid = new Antifosfolipid();    
   $Antifosfolipid->fill($data);
   $Antifosfolipid->save();        
   $result= $Antifosfolipid->save();
   
   if($result){
      return redirect('analysis/list?analysisList=antifosfolipid')->with(['msg'=>"Результат анализа 'Антифосфолипидный скрининг' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function AntifosfolipidShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Antifosfolipid::find($id);
   if($result)
   {
   return view('Analysis.Antifosfolipid.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function AntifosfolipidPDF($id) 
{                  
   $Antifosfolipid= Antifosfolipid::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Antifosfolipid.PDF', compact('Antifosfolipid', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ крови на антифосфолипид.pdf');   
} 
//= Анализ на антитела к циклическому цитруллиновому пептиду = // 
public function PeptidStore(Request $request)  
{       
   $data= $request->all();  
   $Peptid = new Peptid();    
   $Peptid->fill($data);
   $Peptid->save();        
   $result= $Peptid->save();
   
   if($result){
      return redirect('analysis/list?analysisList=peptid')->with(['msg'=>"Результат анализа 'Пептиды' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function PeptidShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Peptid::find($id);
   if($result)
   {
   return view('Analysis.Peptid.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function PeptidPDF($id) 
{                  
   $Peptid= Peptid::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Peptid.PDF', compact('Peptid', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Пептиды.pdf');   
} 
//=Анализ на урогенитальную инфекцию = // 
public function UrogenitalStore(Request $request)  
{       
   $data= $request->all();  
   $Urogenital = new Urogenital();    
   $Urogenital->fill($data);
   $Urogenital->save();        
   $result= $Urogenital->save();
   
   if($result){
      return redirect('analysis/list?analysisList=urogenital')->with(['msg'=>"Результат анализа 'Анализ на урогенитальную инфекцию' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function UrogenitalShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Urogenital::find($id);
   if($result)
   {
   return view('Analysis.Urogenital.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function UrogenitalPDF($id) 
{                  
   $Urogenital= Urogenital::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Urogenital.PDF', compact('Urogenital', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ на урогенитальную инфекцию.pdf');   
} 
//=Исследование крови на пробу Кумбса = // 
public function KumbsaStore(Request $request)  
{       
   $data= $request->all();  
   $Kumbsa = new Kumbsa();    
   $Kumbsa->fill($data);
   $Kumbsa->save();        
   $result= $Kumbsa->save();
   
   if($result){
      return redirect('analysis/list?analysisList=kumbsa')->with(['msg'=>"Результат анализа 'Исследование крови на пробу Кумбса' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function KumbsaShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Kumbsa::find($id);
   if($result)
   {
   return view('Analysis.Kumbsa.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 

public function KumbsaPDF($id) 
{                  
   $Kumbsa= Kumbsa::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Kumbsa.PDF', compact('Kumbsa', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Исследование крови на пробу Кумбса.pdf');   
} 
//=Иммуногематологический анализ крови = // 
public function ImunogemStore(Request $request)  
{       
   $data= $request->all();  
   $Imunogem = new Imunogem();    
   $Imunogem->fill($data);
   $Imunogem->save();        
   $result= $Imunogem->save();
   
   if($result){
      return redirect('analysis/list?analysisList=imunogem')->with(['msg'=>"Результат анализа 'Иммуногематологический анализ крови' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function ImunogemShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Imunogem::find($id);
   if($result)
   {
   return view('Analysis.Imunogem.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function ImunogemPDF($id) 
{                  
   $Imunogem= Imunogem::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Imunogem.PDF', compact('Imunogem', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Иммуногематологический анализ крови.pdf');   
} 

//=Инфекции (ВПГ, ЦМВ) = // 
public function InfekciiStore(Request $request)  
{       
   $data= $request->all();  
   $Infekcii = new Infekcii();    
   $Infekcii->fill($data);
   $Infekcii->save();        
   $result= $Infekcii->save();
   
   if($result){
      return redirect('analysis/list?analysisList=infekcii')->with(['msg'=>"Результат анализа 'Инфекции (ВПГ, ЦМВ)' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function InfekciiShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Infekcii::find($id);
   if($result)
   {
   return view('Analysis.Infekcii.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function InfekciiPDF($id) 
{                  
   $Infekcii= Infekcii::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Infekcii.PDF', compact('Infekcii', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Инфекции (ВПГ, ЦМВ).pdf');   
} 

//=Анализ на содержание кортизола в моче = //   
public function UkortizolStore(Request $request)  
{       
   $data= $request->all();  
   $Ukortizol = new Ukartizol();    
   $Ukortizol->fill($data);
   $Ukortizol->save();        
   $result= $Ukortizol->save();
   
   if($result){
      return redirect('analysis/list?analysisList=ukortizol')->with(['msg'=>"Результат анализа 'Анализ на содержание кортизола в моче' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function UkortizolShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Ukartizol::find($id);
   if($result)
   {
   return view('Analysis.Ukortizol.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function UkortizolPDF($id) 
{                  
   $Ukortizol= Ukartizol::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Ukortizol.PDF', compact('Ukortizol', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ на содержание кортизола в моче.pdf');   
} 

//=Инфекции(токсоплазма) = //   
public function ToxoStore(Request $request)  
{       
   $data= $request->all();  
   $Toxo = new Toxo();    
   $Toxo->fill($data);
   $Toxo->save();        
   $result= $Toxo->save();
   
   if($result){
      return redirect('analysis/list?analysisList=toxo')->with(['msg'=>"Результат анализа 'Инфекции(токсоплазма)' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function ToxoShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Toxo::find($id);
   if($result)
   {
   return view('Analysis.Toxo.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function ToxoPDF($id) 
{                  
   $Toxo= Toxo::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Toxo.PDF', compact('Toxo', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Инфекции(токсоплазма).pdf');   
} 


//=Половые гормоны и онкомаркеры = //   
public function SgomStore(Request $request)  
{       
   $data= $request->all();  
   $Sgom = new Sgom();    
   $Sgom->fill($data);
   $Sgom->save();        
   $result= $Sgom->save();
   
   if($result){
      return redirect('analysis/list?analysisList=sgom')->with(['msg'=>"Результат анализа 'Половые гормоны и онкомаркеры ' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function SgomShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Sgom::find($id);
   if($result)
   {
   return view('Analysis.Sgom.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function SgomPDF($id) 
{                  
   $Sgom= Sgom::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Sgom.PDF', compact('Sgom', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Половые гормоны и онкомаркеры.pdf');   
} 


//=Анализ кала = //   
public function FecesStore(Request $request)  
{       
   $data= $request->all();  
   $Feces = new Feces();    
   $Feces->fill($data);
   $Feces->save();        
   $result= $Feces->save();
   
   if($result){
      return redirect('analysis/list?analysisList=feces')->with(['msg'=>"Результат анализа 'Анализ кала' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function FecesShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Feces::find($id);
   if($result)
   {
   return view('Analysis.Feces.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function FecesPDF($id) 
{                  
   $Feces= Feces::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Feces.PDF', compact('Feces', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ кала.pdf');   
} 

//=Глюкоза мочи = //   
public function GlmStore(Request $request)  
{       
   $data= $request->all();  
   $Glm = new Glm();    
   $Glm->fill($data);
   $Glm->save();        
   $result= $Glm->save();
   
   if($result){
      return redirect('analysis/list?analysisList=glm')->with(['msg'=>"Результат анализа 'Глюкоза мочи' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function GlmShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Glm::find($id);
   if($result)
   {
   return view('Analysis.Glm.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function GlmPDF($id) 
{                  
   $Glm= Glm::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Glm.PDF', compact('Glm', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Глюкоза мочи.pdf');   
} 

//=Анализ мочи Бенс Джонса = //   
public function MbdjStore(Request $request)  
{       
   $data= $request->all();  
   $Mbdj = new Mbdj();    
   $Mbdj->fill($data);
   $Mbdj->save();        
   $result= $Mbdj->save();
   
   if($result){
      return redirect('analysis/list?analysisList=mbdj')->with(['msg'=>"Результат анализа 'Анализ мочи Бенс Джонса ' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function MbdjShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Mbdj::find($id);
   if($result)
   {
   return view('Analysis.Mbdj.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function MbdjPDF($id) 
{                  
   $Mbdj= Mbdj::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Mbdj.PDF', compact('Mbdj', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ мочи Бенс Джонса.pdf');   
} 

//=Анализ суточной мочи на белок = //   
public function MbelokStore(Request $request)  
{       
   $data= $request->all();  
   $Mbelok = new Mbelok();    
   $Mbelok->fill($data);
   $Mbelok->save();        
   $result= $Mbelok->save();
   
   if($result){
      return redirect('analysis/list?analysisList=mbelok')->with(['msg'=>"Результат анализа 'Анализ суточной мочи на белок' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function MbelokShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Mbelok::find($id);
   if($result)
   {
   return view('Analysis.Mbelok.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function MbelokPDF($id) 
{                  
   $Mbelok= Mbelok::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Mbelok.PDF', compact('Mbelok', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ суточной мочи на белок.pdf');   
} 


//=Определение количества форменных элементов мочи= //   
public function FormelmStore(Request $request)  
{       
   $data= $request->all();  
   $Formelm = new Formelm();    
   $Formelm->fill($data);
   $Formelm->save();        
   $result= $Formelm->save();
   
   if($result){
      return redirect('analysis/list?analysisList=formelm')->with(['msg'=>"Результат анализа 'Определение количества форменных элементов мочи' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function FormelmShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Formelm::find($id);
   if($result)
   {
   return view('Analysis.Formelm.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function FormelmPDF($id) 
{                  
   $Formelm= Formelm::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Formelm.PDF', compact('Formelm', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Определение количества форменных элементов мочи.pdf');   
} 

//=Анализ мочи= //   
public function AnalismochiStore(Request $request)  
{       
   $data= $request->all();  
   $Analismochi = new Analismochi();    
   $Analismochi->fill($data);
   $Analismochi->save();        
   $result= $Analismochi->save();
   
   if($result){
      return redirect('analysis/list?analysisList=analismochi')->with(['msg'=>"Результат анализа 'Анализ мочи' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function AnalismochiShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Analismochi::find($id);
   if($result)
   {
   return view('Analysis.Analismochi.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function AnalismochiPDF($id) 
{                  
   $Analismochi= Analismochi::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Analismochi.PDF', compact('Analismochi', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ мочи.pdf');   
} 

//=Анализ мочи по Зимницкому= //   
public function ZimnickyStore(Request $request)  
{       
   $data= $request->all();  
   $Zimnicky = new Zimnicky();    
   $Zimnicky->fill($data);
   $Zimnicky->save();        
   $result= $Zimnicky->save();
   
   if($result){
      return redirect('analysis/list?analysisList=zimnicky')->with(['msg'=>"Результат анализа 'Анализ мочи по Зимницкому' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function ZimnickyShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Zimnicky::find($id);
   if($result)
   {
   return view('Analysis.Zimnicky.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function ZimnickyPDF($id) 
{                  
   $Zimnicky= Zimnicky::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Zimnicky.PDF', compact('Zimnicky', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ мочи по Зимницкому.pdf');   
} 

//=Анализ кала на яйца гельминтов= //   
public function GelmintyStore(Request $request)  
{       
   $data= $request->all();  
   $Gelminty = new Gelminty();    
   $Gelminty->fill($data);
   $Gelminty->save();        
   $result= $Gelminty->save();
   
   if($result){
      return redirect('analysis/list?analysisList=gelminty')->with(['msg'=>"Результат анализа 'Анализ кала на яйца гельминтов' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function GelmintyShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= Gelminty::find($id);
   if($result)
   {
   return view('Analysis.Gelminty.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function GelmintyPDF($id) 
{                  
   $Gelminty= Gelminty::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.Gelminty.PDF', compact('Gelminty', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ кала на яйца гельминтов.pdf');   
} 


//=Анализ антистрептолизин-О= //   
public function ASLOStore(Request $request)  
{       
   $data= $request->all();  
   $ASLO = new ASLO();    
   $ASLO->fill($data);
   $ASLO->save();        
   $result= $ASLO->save();
   
   if($result){
      return redirect('analysis/list?analysisList=aslo')->with(['msg'=>"Результат анализа 'Анализ антистрептолизин-О' для договора №".$request->contract_number." успешно добавлен в базу данных."]); 
             }
      else       
             {
      return back()->withErrors(['msg'=> "Ошибка сохранения"])->withInput();
            }
}

public function ASLOShow($id) 
{                  
   $patientList= Pacient::select(['id','name', 'lastname', 'patronymic'])->get(); 
   $result= ASLO::find($id);
   if($result)
   {
   return view('Analysis.ASLO.Show')->with(['result' => $result, 'patientList'=>$patientList]);
   }
   else
   {
      return back()->withErrors(['msg'=> "В базе данных нет записей по этому типу анализа"]);
   }
} 
public function ASLOPDF($id) 
{                  
   $ASLO= ASLO::find($id);  
   $path=["logo"=>"img/rkb.jpg", "info"=>"img/info.png"]; 
   $pdf = PDF::loadView('Analysis.ASLO.PDF', compact('ASLO', 'path' ))->setPaper('a4', 'portrait');    
   return $pdf->download('Анализ антистрептолизин-О.pdf');   
} 



}
