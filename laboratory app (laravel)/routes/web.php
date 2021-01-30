<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

//роутер главной страницы приложения
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
//-------------------------------маршруты для работы с анализами-----------------------------------------------//
//общие роутеры для лабораторных анализов
Route::get('/analysis/add', 'AnalysisController@AnalysisStart');
Route::post('/analysis/route', 'AnalysisController@AnalysisRoute')->name('analisysRoute');
Route::get('/analysis/list', 'AnalysisController@analysisList')->name('analisysList');
//роутер для обработки общего анализа крови
Route::post('/analysis/OAK/store', 'AnalysisController@OAKstore')->name('OAKstore');
Route::get('/analysis/OAK/show/{id}', 'AnalysisController@OAKShow')->name('OAKShow');
Route::get('/download/OAK/PDF/{id}','AnalysisController@OAKPDF')->name('saveOAKPDF');
//роутер для обработки общего биохимического анализа
Route::post('/analysis/Biohimy/store', 'AnalysisController@BiohimyStore')->name('BiohimyStore');
Route::get('/analysis/Biohimy/show/{id}', 'AnalysisController@BiohimyShow')->name('BiohimyShow');
Route::post('/download/Biohimy/PDF/{id}','AnalysisController@BiohimyPDF')->name('BiohimyPDF');
//=Анализ крови на содержание глюкозы = //     
Route::post('/analysis/Glukoza/store', 'AnalysisController@GlukozaStore')->name('GlukozaStore');
Route::get('/analysis/Glukoza/show/{id}', 'AnalysisController@GlukozaShow')->name('GlukozaShow');
Route::post('/download/Glukoza/PDF/{id}','AnalysisController@GlukozaPDF')->name('GlukozaPDF');
//=показатели системы свертывания крови = //     
Route::post('/analysis/Coagulation/store', 'AnalysisController@CoagulationStore')->name('CoagulationStore');
Route::get('/analysis/Coagulation/show/{id}', 'AnalysisController@CoagulationShow')->name('CoagulationShow');
Route::post('/download/Coagulation/PDF/{id}','AnalysisController@CoagulationPDF')->name('CoagulationPDF');
//=гликозилированный гемоглобин = //     
Route::post('/analysis/Glgem/store', 'AnalysisController@GlgemStore')->name('GlgemStore');
Route::get('/analysis/Glgem/show/{id}', 'AnalysisController@GlgemShow')->name('GlgemShow');
Route::post('/download/Glgem/PDF/{id}','AnalysisController@GlgemPDF')->name('GlgemPDF');
//=Анализ крови на содержание половых гормонов = //     
Route::post('/analysis/SexHormones/store', 'AnalysisController@SexHormonesStore')->name('SexHormonesStore');
Route::get('/analysis/SexHormones/show/{id}', 'AnalysisController@SexHormonesShow')->name('SexHormonesShow');
Route::post('/download/SexHormones/PDF/{id}','AnalysisController@SexHormonesPDF')->name('SexHormonesPDF');
//=Анализ крови на определение уровня онкомаркеров (ОМ) = //     
Route::post('/analysis/OM/store', 'AnalysisController@OMStore')->name('OMStore');
Route::get('/analysis/OM/show/{id}', 'AnalysisController@OMShow')->name('OMShow');
Route::post('/download/OM/PDF/{id}','AnalysisController@OMPDF')->name('OMPDF');
//=Анализ крови на определение инсулина = //     
Route::post('/analysis/Insuline/store', 'AnalysisController@InsulineStore')->name('InsulineStore');
Route::get('/analysis/Insuline/show/{id}', 'AnalysisController@InsulineShow')->name('InsulineShow');
Route::post('/download/Insuline/PDF/{id}','AnalysisController@InsulinePDF')->name('InsulinePDF');
//=Анализ крови на определение уровня ПСА  = //    
Route::post('/analysis/PSA/store', 'AnalysisController@PSAStore')->name('PSAStore');
Route::get('/analysis/PSA/show/{id}', 'AnalysisController@PSAShow')->name('PSAShow');
Route::post('/download/PSA/PDF/{id}','AnalysisController@PSAPDF')->name('PSAPDF');
//=Анализ крови на фолиевую кислоту  = //    
Route::post('/analysis/Folkislota/store', 'AnalysisController@FolkislotaStore')->name('FolkislotaStore');
Route::get('/analysis/Folkislota/show/{id}', 'AnalysisController@FolkislotaShow')->name('FolkislotaShow');
Route::post('/download/Folkislota/PDF/{id}','AnalysisController@FolkislotaPDF')->name('FolkislotaPDF');
//=Гормон щитовидной железы = //    
Route::post('/analysis/Serum/store', 'AnalysisController@SerumStore')->name('SerumStore');
Route::get('/analysis/Serum/show/{id}', 'AnalysisController@SerumShow')->name('SerumShow');
Route::post('/download/Serum/PDF/{id}','AnalysisController@SerumPDF')->name('SerumPDF');
//=Анализ крови на маркеры вирусных гепатитов  = //    
Route::post('/analysis/Gepatite/store', 'AnalysisController@GepatiteStore')->name('GepatiteStore');
Route::get('/analysis/Gepatite/show/{id}', 'AnalysisController@GepatiteShow')->name('GepatiteShow');
Route::post('/download/Gepatite/PDF/{id}','AnalysisController@GepatitePDF')->name('GepatitePDF');
//=Анализ крови на кортизол  = //    
Route::post('/analysis/kortizol/store', 'AnalysisController@kortizolStore')->name('KortizolStore');
Route::get('/analysis/kortizol/show/{id}', 'AnalysisController@kortizolShow')->name('KortizolShow');
Route::post('/download/kortizol/PDF/{id}','AnalysisController@kortizolPDF')->name('KortizolPDF');
//=Анализ крови на h.pylori  = //    
Route::post('/analysis/Hpylori/store', 'AnalysisController@HpyloriStore')->name('HpyloriStore');
Route::get('/analysis/Hpylori/show/{id}', 'AnalysisController@HpyloriShow')->name('HpyloriShow');
Route::post('/download/Hpylori/PDF/{id}','AnalysisController@HpyloriPDF')->name('HpyloriPDF');
//=Анализ крови на антитела к рецепторам ТТГ  = //    
Route::post('/analysis/TTG/store', 'AnalysisController@TTGStore')->name('TTGStore');
Route::get('/analysis/TTG/show/{id}', 'AnalysisController@TTGShow')->name('TTGShow');
Route::post('/download/TTG/PDF/{id}','AnalysisController@TTGPDF')->name('TTGPDF');
//=Анализ крови на антитела к глиадину = //    
Route::post('/analysis/Gliadin/store', 'AnalysisController@GliadinStore')->name('GliadinStore');
Route::get('/analysis/Gliadin/show/{id}', 'AnalysisController@GliadinShow')->name('GliadinShow');
Route::post('/download/Gliadin/PDF/{id}','AnalysisController@GliadinPDF')->name('GliadinPDF');
//=Определение иммуноглобина = //    
Route::post('/analysis/Imunoglobin/store', 'AnalysisController@ImunoglobinStore')->name('ImunoglobinStore');
Route::get('/analysis/Imunoglobin/show/{id}', 'AnalysisController@ImunoglobinShow')->name('ImunoglobinShow');
Route::post('/download/Imunoglobin/PDF/{id}','AnalysisController@ImunoglobinPDF')->name('ImunoglobinPDF');
//=Анализ крови на антифосфолипид = //    
Route::post('/analysis/Antifosfolipid/store', 'AnalysisController@AntifosfolipidStore')->name('AntifosfolipidStore');
Route::get('/analysis/Antifosfolipid/show/{id}', 'AnalysisController@AntifosfolipidShow')->name('AntifosfolipidShow');
Route::post('/download/Antifosfolipid/PDF/{id}','AnalysisController@AntifosfolipidPDF')->name('AntifosfolipidPDF');
//=Анализ на антитела к циклическому цитруллиновому пептиду = //    
Route::post('/analysis/Peptid/store', 'AnalysisController@PeptidStore')->name('PeptidStore');
Route::get('/analysis/Peptid/show/{id}', 'AnalysisController@PeptidShow')->name('PeptidShow');
Route::post('/download/Peptid/PDF/{id}','AnalysisController@PeptidPDF')->name('PeptidPDF');
//=Анализ на урогенитальную инфекцию = //    
Route::post('/analysis/Urogenital/store', 'AnalysisController@UrogenitalStore')->name('UrogenitalStore');
Route::get('/analysis/Urogenital/show/{id}', 'AnalysisController@UrogenitalShow')->name('UrogenitalShow');
Route::post('/download/Urogenital/PDF/{id}','AnalysisController@UrogenitalPDF')->name('UrogenitalPDF');
//=Исследование крови на пробу Кумбса = //    
Route::post('/analysis/Kumbsa/store', 'AnalysisController@KumbsaStore')->name('KumbsaStore');
Route::get('/analysis/Kumbsa/show/{id}', 'AnalysisController@KumbsaShow')->name('KumbsaShow');
Route::post('/download/Kumbsa/PDF/{id}','AnalysisController@KumbsaPDF')->name('KumbsaPDF');
//=Иммуногематологический анализ крови = //    
Route::post('/analysis/Imunogem/store', 'AnalysisController@ImunogemStore')->name('ImunogemStore');
Route::get('/analysis/Imunogem/show/{id}', 'AnalysisController@ImunogemShow')->name('ImunogemShow');
Route::post('/download/Imunogem/PDF/{id}','AnalysisController@ImunogemPDF')->name('ImunogemPDF');
//=Инфекции (ВПГ, ЦМВ) = //    
Route::post('/analysis/Infekcii/store', 'AnalysisController@InfekciiStore')->name('InfekciiStore');
Route::get('/analysis/Infekcii/show/{id}', 'AnalysisController@InfekciiShow')->name('InfekciiShow');
Route::post('/download/Infekcii/PDF/{id}','AnalysisController@InfekciiPDF')->name('InfekciiPDF');
//=Анализ на содержание кортизола в моче = //    
Route::post('/analysis/Ukortizol/store', 'AnalysisController@UkortizolStore')->name('UkortizolStore');
Route::get('/analysis/Ukortizol/show/{id}', 'AnalysisController@UkortizolShow')->name('UkortizolShow');
Route::post('/download/Ukortizol/PDF/{id}','AnalysisController@UkortizolPDF')->name('UkortizolPDF');
//=Инфекции(токсоплазма) = //    
Route::post('/analysis/Toxo/store', 'AnalysisController@ToxoStore')->name('ToxoStore');
Route::get('/analysis/Toxo/show/{id}', 'AnalysisController@ToxoShow')->name('ToxoShow');
Route::post('/download/Toxo/PDF/{id}','AnalysisController@ToxoPDF')->name('ToxoPDF');
//= Анализ крови на половые гормоны и онкомаркеры = //    
Route::post('/analysis/Sgom/store', 'AnalysisController@SgomStore')->name('SgomStore');
Route::get('/analysis/Sgom/show/{id}', 'AnalysisController@SgomShow')->name('SgomShow');
Route::post('/download/Sgom/PDF/{id}','AnalysisController@SgomPDF')->name('SgomPDF');
//= Анализ кала = //    
Route::post('/analysis/Feces/store', 'AnalysisController@FecesStore')->name('FecesStore');
Route::get('/analysis/Feces/show/{id}', 'AnalysisController@FecesShow')->name('FecesShow');
Route::post('/download/Feces/PDF/{id}','AnalysisController@FecesPDF')->name('FecesPDF');
//= Глюкоза мочи = //    
Route::post('/analysis/Glm/store', 'AnalysisController@GlmStore')->name('GlmStore');
Route::get('/analysis/Glm/show/{id}', 'AnalysisController@GlmShow')->name('GlmShow');
Route::post('/download/Glm/PDF/{id}','AnalysisController@GlmPDF')->name('GlmPDF');
//= Анализ мочи Бенс Джонса = //    
Route::post('/analysis/Mbdj/store', 'AnalysisController@MbdjStore')->name('MbdjStore');
Route::get('/analysis/Mbdj/show/{id}', 'AnalysisController@MbdjShow')->name('MbdjShow');
Route::post('/download/Mbdj/PDF/{id}','AnalysisController@MbdjPDF')->name('MbdjPDF');
//= Анализ суточной мочи на белок = //    
Route::post('/analysis/Mbelok/store', 'AnalysisController@MbelokStore')->name('MbelokStore');
Route::get('/analysis/Mbelok/show/{id}', 'AnalysisController@MbelokShow')->name('MbelokShow');
Route::post('/download/Mbelok/PDF/{id}','AnalysisController@MbelokPDF')->name('MbelokPDF');
//= Определение количества форменных элементов мочи = //    
Route::post('/analysis/Formelm/store', 'AnalysisController@FormelmStore')->name('FormelmStore');
Route::get('/analysis/Formelm/show/{id}', 'AnalysisController@FormelmShow')->name('FormelmShow');
Route::post('/download/Formelm/PDF/{id}','AnalysisController@FormelmPDF')->name('FormelmPDF');
//= Анализ мочи = //    
Route::post('/analysis/Analismochi/store', 'AnalysisController@AnalismochiStore')->name('AnalismochiStore');
Route::get('/analysis/Analismochi/show/{id}', 'AnalysisController@AnalismochiShow')->name('AnalismochiShow');
Route::post('/download/Analismochi/PDF/{id}','AnalysisController@AnalismochiPDF')->name('AnalismochiPDF');
//= Анализ мочи по Зимницкому = //    
Route::post('/analysis/Zimnicky/store', 'AnalysisController@ZimnickyStore')->name('ZimnickyStore');
Route::get('/analysis/Zimnicky/show/{id}', 'AnalysisController@ZimnickyShow')->name('ZimnickyShow');
Route::post('/download/Zimnicky/PDF/{id}','AnalysisController@ZimnickyPDF')->name('ZimnickyPDF');
//= Анализ кала на яйца гельминтов = //    
Route::post('/analysis/Gelminty/store', 'AnalysisController@GelmintyStore')->name('GelmintyStore');
Route::get('/analysis/Gelminty/show/{id}', 'AnalysisController@GelmintyShow')->name('GelmintyShow');
Route::post('/download/Gelminty/PDF/{id}','AnalysisController@GelmintyPDF')->name('GelmintyPDF');
//= Анализ антистрептолизин - О = //    
Route::post('/analysis/ASLO/store', 'AnalysisController@ASLOStore')->name('ASLOStore');
Route::get('/analysis/ASLO/show/{id}', 'AnalysisController@ASLOShow')->name('ASLOShow');
Route::post('/download/ASLO/PDF/{id}','AnalysisController@ASLOPDF')->name('ASLOPDF');
//Сложные белки//


//-----------------------------------стартовые маршруты -------------------Formelm---------------------------//
//роутер для страницы админки (перебрасывает после авторизации)
Route::get('/home', 'HomeController@index')->name('home');
//роутер для страницы админки (перебрасывает после авторизации)
Route::get('/', 'HomeController@index');

//-----------------------------------маршруты для работы с пациентом ----------------------------------------------//
//роутер для страницы с формой добавления пацинта
Route::get('/patient/add', 'PatientController@patientAdd');
//роутер для сохранения пациента после добавления
Route::post('/patient/add', 'PatientController@patientStore')->name('patientStore');
//роутер для страницы отображения списка пациентов
Route::get('/patient/list', 'PatientController@patientList');
//роутер для страницы отображения отдельного пациента
Route::get('/patient/show/{id}', 'PatientController@patientShow')->name('patientShow');
//роутер для страницы удаления пациента
Route::delete('/patient/delete/{patient}', function(\App\Pacient $patient){
   // $patient_name = \App\Pacient::where('id', $patient)->get();
    $patient->delete();    
   return redirect('/patient/list')->with(['msg'=>"Успешно удалено."]);
})->name('patientDelete');
//роутер для страницы редактирования пациента
Route::post('/patient/edit/{id}', 'PatientController@patientEdit')->name('patientEdit');
//роутер для страницы обновления информации пациента
Route::post('/patient/update/{id}', 'PatientController@patientUpdate')->name('patientUpdate');

//-------------------------------маршруты для работы с договором-----------------------------------------------//
//роутер для страницы с формой добавления договора
Route::get('/contract/add', 'ContractController@contractAdd');
//роутер для сохранения пациента после добавления
Route::post('/contract/add', 'ContractController@contractStore')->name('contractStore');
//роутер для страницы отображения отдельного договора
Route::get('/contract/show/{id}', 'ContractController@contractShow')->name('contractShow');
//роутер для страницы редактирования договора
Route::post('/contract/edit/{id}', 'ContractController@ContractEdit')->name('contractEdit');
//роутер для страницы удаления договора
Route::delete('/contract/delete/{contract}', function(\App\Contract $contract){
    // $patient_name = \App\Pacient::where('id', $patient)->get();
     $contract->delete();    
    return redirect('/patient/list')->with(['msg'=>"Успешно удалено."]);
 })->name('contractDelete');
 //роутер для страницы обновления договора
Route::post('/contract/update/{id}', 'ContractController@contractUpdate')->name('contractUpdate');
//маршрут для формирования PDF
Route::get('/downloadPDF/{id}','ContractController@downloadPDF')->name('saveContractPDF');


