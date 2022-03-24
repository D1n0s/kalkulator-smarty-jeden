<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

$raty = 0;

//pobranie parametrów
function getParams(&$form,&$def){
	$def['x'] = isset($_REQUEST['kw']) ? $_REQUEST['kw'] : 1000;
	$def['y'] = isset($_REQUEST['rt']) ? $_REQUEST['rt'] : 3;
	$def['op'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : 5;
	$form['x'] = isset($_REQUEST['kw']) ? $_REQUEST['kw'] : null;
	$form['y'] = isset($_REQUEST['rt']) ? $_REQUEST['rt'] : null;
	$form['op'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;

}


//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['op']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['x'] == "") $msgs [] = 'Nie podano liczby 1';
	if ( $form['y'] == "") $msgs [] = 'Nie podano liczby 2';
	if ( $form['op'] == "") $msgs [] = 'Nie podano liczby 3';
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['x'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['y'] )) $msgs [] = 'Druga wartość nie jest liczbą';
		if (! is_numeric( $form['op'] )) $msgs [] = 'Trzecia wartość nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result,&$wynik){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['op'] = floatval($form['op']);


	$proc = $form['op'];
	$kwota = $form['x']; 
    $raty = $form['y'];
	//wykonanie operacji
	$procend = $proc / 100;
	$wynik['prowizja'] = $kwota * $procend;
  $wynik['kwotaend'] = $kwota +  $wynik['prowizja'];
  $result = $wynik['kwotaend']/ $raty;
$result = round($result,2);


}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$wynik = array();


getParams($form,$def);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result,$wynik);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Uś bank');
$smarty->assign('page_description','Już teraz pożycz na warunek i studiuj dalej ;)');
$smarty->assign('page_header','Kalkulator rat ');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);
$smarty->assign('wynik',$wynik);
$smarty->assign('def',$def);



// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');