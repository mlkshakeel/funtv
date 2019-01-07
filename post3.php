

<?php





// jSON URL which should be requested
$json_url = 'http://119.160.95.242/jazztv/index.php/services/index/singleProgram';

// jSON String for request
$json_string = 'slug=hasb-e-haal&user_id=';

// Initializing curl
$ch = curl_init( $json_url );

// Configuring curl options
$options = array(
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('token: 394a71988caa6cc445512e43f5b6569d52cd7f6df') ,
CURLOPT_POSTFIELDS => $json_string
);

// Setting curl options
curl_setopt_array( $ch, $options );

// Getting results
$result = curl_exec($ch); // Getting jSON result string


$result = str_replace('":"SUCCESS","message":"","data":{"vod":','',$result);
$result = str_replace('],"relatedPrograms',']cutHere2 ',$result);
$result = str_replace('timestamp]"}}',' cutHere2',$result);

$result = str_replace('{"status',' cutHere1',$result);
$result = "cutHere1 $result";

$start2 = 'cutHere2';
$end2 = 'cutHere2';

$start1 = 'cutHere1';
$end1 = 'cutHere1';

$result = preg_replace('#'.$start2.'.*?'.$end2.'#s', '$1$3', $result);
$result = preg_replace('#'.$start1.'.*?'.$end1.'#s', '$1$3', $result);

$result = str_replace("\\",'',$result);


$obj = json_decode($result);



$vodName0 = str_replace("Dunya News",'',$obj[0]->vodName);
$vodName1 = str_replace("Dunya News",'',$obj[1]->vodName);
$vodName2 = str_replace("Dunya News",'',$obj[2]->vodName);
$vodName3 = str_replace("Dunya News",'',$obj[3]->vodName);
$vodName4 = str_replace("Dunya News",'',$obj[4]->vodName);
$vodName5 = str_replace("Dunya News",'',$obj[5]->vodName);
$vodName6 = str_replace("Dunya News",'',$obj[6]->vodName);
$vodName7 = str_replace("Dunya News",'',$obj[7]->vodName);
$vodName8 = str_replace("Dunya News",'',$obj[8]->vodName);
$vodName9 = str_replace("Dunya News",'',$obj[9]->vodName);
$vodName10 = str_replace("Dunya News",'',$obj[10]->vodName);
$vodName11 = str_replace("Dunya News",'',$obj[11]->vodName);
$vodName12 = str_replace("Dunya News",'',$obj[12]->vodName);
$vodName13 = str_replace("Dunya News",'',$obj[13]->vodName);
$vodName14 = str_replace("Dunya News",'',$obj[14]->vodName);
$vodName15 = str_replace("Dunya News",'',$obj[15]->vodName);
$vodName16 = str_replace("Dunya News",'',$obj[16]->vodName);
$vodName17 = str_replace("Dunya News",'',$obj[17]->vodName);
$vodName18 = str_replace("Dunya News",'',$obj[18]->vodName);
$vodName19 = str_replace("Dunya News",'',$obj[19]->vodName);
$vodName20 = str_replace("Dunya News",'',$obj[20]->vodName);
$vodName21 = str_replace("Dunya News",'',$obj[21]->vodName);
$vodName22 = str_replace("Dunya News",'',$obj[22]->vodName);
$vodName23 = str_replace("Dunya News",'',$obj[23]->vodName);
$vodName24 = str_replace("Dunya News",'',$obj[24]->vodName);
$vodName25 = str_replace("Dunya News",'',$obj[25]->vodName);
$vodName26 = str_replace("Dunya News",'',$obj[26]->vodName);
$vodName27 = str_replace("Dunya News",'',$obj[27]->vodName);
$vodName28 = str_replace("Dunya News",'',$obj[28]->vodName);
$vodName29 = str_replace("Dunya News",'',$obj[29]->vodName);
$vodName30 = str_replace("Dunya News",'',$obj[30]->vodName);
$vodName31 = str_replace("Dunya News",'',$obj[31]->vodName);
$vodName32 = str_replace("Dunya News",'',$obj[32]->vodName);
$vodName33 = str_replace("Dunya News",'',$obj[33]->vodName);
$vodName34 = str_replace("Dunya News",'',$obj[34]->vodName);
$vodName35 = str_replace("Dunya News",'',$obj[35]->vodName);
$vodName36 = str_replace("Dunya News",'',$obj[36]->vodName);
$vodName37 = str_replace("Dunya News",'',$obj[37]->vodName);
$vodName38 = str_replace("Dunya News",'',$obj[38]->vodName);
$vodName39 = str_replace("Dunya News",'',$obj[39]->vodName);
$vodName40 = str_replace("Dunya News",'',$obj[40]->vodName);
$vodName41 = str_replace("Dunya News",'',$obj[41]->vodName);
$vodName42 = str_replace("Dunya News",'',$obj[42]->vodName);
$vodName43 = str_replace("Dunya News",'',$obj[43]->vodName);
$vodName44 = str_replace("Dunya News",'',$obj[44]->vodName);
$vodName45 = str_replace("Dunya News",'',$obj[45]->vodName);
$vodName46 = str_replace("Dunya News",'',$obj[46]->vodName);
$vodName47 = str_replace("Dunya News",'',$obj[47]->vodName);
$vodName48 = str_replace("Dunya News",'',$obj[48]->vodName);
$vodName49 = str_replace("Dunya News",'',$obj[49]->vodName);
$vodName50 = str_replace("Dunya News",'',$obj[50]->vodName);
$vodName51 = str_replace("Dunya News",'',$obj[51]->vodName);
$vodName52 = str_replace("Dunya News",'',$obj[52]->vodName);
$vodName53 = str_replace("Dunya News",'',$obj[53]->vodName);
$vodName54 = str_replace("Dunya News",'',$obj[54]->vodName);
$vodName55 = str_replace("Dunya News",'',$obj[55]->vodName);
$vodName56 = str_replace("Dunya News",'',$obj[56]->vodName);
$vodName57 = str_replace("Dunya News",'',$obj[57]->vodName);
$vodName58 = str_replace("Dunya News",'',$obj[58]->vodName);
$vodName59 = str_replace("Dunya News",'',$obj[59]->vodName);
$vodName60 = str_replace("Dunya News",'',$obj[60]->vodName);
$vodName61 = str_replace("Dunya News",'',$obj[61]->vodName);
$vodName62 = str_replace("Dunya News",'',$obj[62]->vodName);
$vodName63 = str_replace("Dunya News",'',$obj[63]->vodName);
$vodName64 = str_replace("Dunya News",'',$obj[64]->vodName);
$vodName65 = str_replace("Dunya News",'',$obj[65]->vodName);
$vodName66 = str_replace("Dunya News",'',$obj[66]->vodName);
$vodName67 = str_replace("Dunya News",'',$obj[67]->vodName);
$vodName68 = str_replace("Dunya News",'',$obj[68]->vodName);
$vodName69 = str_replace("Dunya News",'',$obj[69]->vodName);
$vodName70 = str_replace("Dunya News",'',$obj[70]->vodName);
$vodName71 = str_replace("Dunya News",'',$obj[71]->vodName);
$vodName72 = str_replace("Dunya News",'',$obj[72]->vodName);
$vodName73 = str_replace("Dunya News",'',$obj[73]->vodName);
$vodName74 = str_replace("Dunya News",'',$obj[74]->vodName);
$vodName75 = str_replace("Dunya News",'',$obj[75]->vodName);
$vodName76 = str_replace("Dunya News",'',$obj[76]->vodName);
$vodName77 = str_replace("Dunya News",'',$obj[77]->vodName);
$vodName78 = str_replace("Dunya News",'',$obj[78]->vodName);
$vodName79 = str_replace("Dunya News",'',$obj[79]->vodName);
$vodName80 = str_replace("Dunya News",'',$obj[80]->vodName);
$vodName81 = str_replace("Dunya News",'',$obj[81]->vodName);
$vodName82 = str_replace("Dunya News",'',$obj[82]->vodName);
$vodName83 = str_replace("Dunya News",'',$obj[83]->vodName);
$vodName84 = str_replace("Dunya News",'',$obj[84]->vodName);
$vodName85 = str_replace("Dunya News",'',$obj[85]->vodName);
$vodName86 = str_replace("Dunya News",'',$obj[86]->vodName);
$vodName87 = str_replace("Dunya News",'',$obj[87]->vodName);
$vodName88 = str_replace("Dunya News",'',$obj[88]->vodName);
$vodName89 = str_replace("Dunya News",'',$obj[89]->vodName);
$vodName90 = str_replace("Dunya News",'',$obj[90]->vodName);
$vodName91 = str_replace("Dunya News",'',$obj[91]->vodName);
$vodName92 = str_replace("Dunya News",'',$obj[92]->vodName);
$vodName93 = str_replace("Dunya News",'',$obj[93]->vodName);
$vodName94 = str_replace("Dunya News",'',$obj[94]->vodName);
$vodName95 = str_replace("Dunya News",'',$obj[95]->vodName);
$vodName96 = str_replace("Dunya News",'',$obj[96]->vodName);
$vodName97 = str_replace("Dunya News",'',$obj[97]->vodName);
$vodName98 = str_replace("Dunya News",'',$obj[98]->vodName);
$vodName99 = str_replace("Dunya News",'',$obj[99]->vodName);
$vodName100 = str_replace("Dunya News",'',$obj[100]->vodName);





$vodUrl0 = $obj[0]->vodUrl;
$vodUrl1 = $obj[1]->vodUrl;
$vodUrl2 = $obj[2]->vodUrl;
$vodUrl3 = $obj[3]->vodUrl;
$vodUrl4 = $obj[4]->vodUrl;
$vodUrl5 = $obj[5]->vodUrl;
$vodUrl6 = $obj[6]->vodUrl;
$vodUrl7 = $obj[7]->vodUrl;
$vodUrl8 = $obj[8]->vodUrl;
$vodUrl9 = $obj[9]->vodUrl;
$vodUrl10 = $obj[10]->vodUrl;
$vodUrl11 = $obj[11]->vodUrl;
$vodUrl12 = $obj[12]->vodUrl;
$vodUrl13 = $obj[13]->vodUrl;
$vodUrl14 = $obj[14]->vodUrl;
$vodUrl15 = $obj[15]->vodUrl;
$vodUrl16 = $obj[16]->vodUrl;
$vodUrl17 = $obj[17]->vodUrl;
$vodUrl18 = $obj[18]->vodUrl;
$vodUrl19 = $obj[19]->vodUrl;
$vodUrl20 = $obj[20]->vodUrl;
$vodUrl21 = $obj[21]->vodUrl;
$vodUrl22 = $obj[22]->vodUrl;
$vodUrl23 = $obj[23]->vodUrl;
$vodUrl24 = $obj[24]->vodUrl;
$vodUrl25 = $obj[25]->vodUrl;
$vodUrl26 = $obj[26]->vodUrl;
$vodUrl27 = $obj[27]->vodUrl;
$vodUrl28 = $obj[28]->vodUrl;
$vodUrl29 = $obj[29]->vodUrl;
$vodUrl30 = $obj[30]->vodUrl;
$vodUrl31 = $obj[31]->vodUrl;
$vodUrl32 = $obj[32]->vodUrl;
$vodUrl33 = $obj[33]->vodUrl;
$vodUrl34 = $obj[34]->vodUrl;
$vodUrl35 = $obj[35]->vodUrl;
$vodUrl36 = $obj[36]->vodUrl;
$vodUrl37 = $obj[37]->vodUrl;
$vodUrl38 = $obj[38]->vodUrl;
$vodUrl39 = $obj[39]->vodUrl;
$vodUrl40 = $obj[40]->vodUrl;
$vodUrl41 = $obj[41]->vodUrl;
$vodUrl42 = $obj[42]->vodUrl;
$vodUrl43 = $obj[43]->vodUrl;
$vodUrl44 = $obj[44]->vodUrl;
$vodUrl45 = $obj[45]->vodUrl;
$vodUrl46 = $obj[46]->vodUrl;
$vodUrl47 = $obj[47]->vodUrl;
$vodUrl48 = $obj[48]->vodUrl;
$vodUrl49 = $obj[49]->vodUrl;
$vodUrl50 = $obj[50]->vodUrl;
$vodUrl51 = $obj[51]->vodUrl;
$vodUrl52 = $obj[52]->vodUrl;
$vodUrl53 = $obj[53]->vodUrl;
$vodUrl54 = $obj[54]->vodUrl;
$vodUrl55 = $obj[55]->vodUrl;
$vodUrl56 = $obj[56]->vodUrl;
$vodUrl57 = $obj[57]->vodUrl;
$vodUrl58 = $obj[58]->vodUrl;
$vodUrl59 = $obj[59]->vodUrl;
$vodUrl60 = $obj[60]->vodUrl;
$vodUrl61 = $obj[61]->vodUrl;
$vodUrl62 = $obj[62]->vodUrl;
$vodUrl63 = $obj[63]->vodUrl;
$vodUrl64 = $obj[64]->vodUrl;
$vodUrl65 = $obj[65]->vodUrl;
$vodUrl66 = $obj[66]->vodUrl;
$vodUrl67 = $obj[67]->vodUrl;
$vodUrl68 = $obj[68]->vodUrl;
$vodUrl69 = $obj[69]->vodUrl;
$vodUrl70 = $obj[70]->vodUrl;
$vodUrl71 = $obj[71]->vodUrl;
$vodUrl72 = $obj[72]->vodUrl;
$vodUrl73 = $obj[73]->vodUrl;
$vodUrl74 = $obj[74]->vodUrl;
$vodUrl75 = $obj[75]->vodUrl;
$vodUrl76 = $obj[76]->vodUrl;
$vodUrl77 = $obj[77]->vodUrl;
$vodUrl78 = $obj[78]->vodUrl;
$vodUrl79 = $obj[79]->vodUrl;
$vodUrl80 = $obj[80]->vodUrl;
$vodUrl81 = $obj[81]->vodUrl;
$vodUrl82 = $obj[82]->vodUrl;
$vodUrl83 = $obj[83]->vodUrl;
$vodUrl84 = $obj[84]->vodUrl;
$vodUrl85 = $obj[85]->vodUrl;
$vodUrl86 = $obj[86]->vodUrl;
$vodUrl87 = $obj[87]->vodUrl;
$vodUrl88 = $obj[88]->vodUrl;
$vodUrl89 = $obj[89]->vodUrl;
$vodUrl90 = $obj[90]->vodUrl;
$vodUrl91 = $obj[91]->vodUrl;
$vodUrl92 = $obj[92]->vodUrl;
$vodUrl93 = $obj[93]->vodUrl;
$vodUrl94 = $obj[94]->vodUrl;
$vodUrl95 = $obj[95]->vodUrl;
$vodUrl96 = $obj[96]->vodUrl;
$vodUrl97 = $obj[97]->vodUrl;
$vodUrl98 = $obj[98]->vodUrl;
$vodUrl99 = $obj[99]->vodUrl;
$vodUrl100 = $obj[100]->vodUrl;






$string = str_replace("/",' ',$vodUrl0);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster0 = $results[0];
$poster0 = "http://jazztv.pk/jazztv/uploads/episodes/$poster0";

$string = str_replace("/",' ',$vodUrl1);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster1 = $results[0];
$poster1 = "http://jazztv.pk/jazztv/uploads/episodes/$poster1";

$string = str_replace("/",' ',$vodUrl2);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster2 = $results[0];
$poster2 = "http://jazztv.pk/jazztv/uploads/episodes/$poster2";

$string = str_replace("/",' ',$vodUrl3);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster3 = $results[0];
$poster3 = "http://jazztv.pk/jazztv/uploads/episodes/$poster3";

$string = str_replace("/",' ',$vodUrl4);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster4 = $results[0];
$poster4 = "http://jazztv.pk/jazztv/uploads/episodes/$poster4";

$string = str_replace("/",' ',$vodUrl5);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster5 = $results[0];
$poster5 = "http://jazztv.pk/jazztv/uploads/episodes/$poster5";

$string = str_replace("/",' ',$vodUrl6);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster6 = $results[0];
$poster6 = "http://jazztv.pk/jazztv/uploads/episodes/$poster6";

$string = str_replace("/",' ',$vodUrl7);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster7 = $results[0];
$poster7 = "http://jazztv.pk/jazztv/uploads/episodes/$poster7";

$string = str_replace("/",' ',$vodUrl8);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster8 = $results[0];
$poster8 = "http://jazztv.pk/jazztv/uploads/episodes/$poster8";

$string = str_replace("/",' ',$vodUrl9);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster9 = $results[0];
$poster9 = "http://jazztv.pk/jazztv/uploads/episodes/$poster9";

$string = str_replace("/",' ',$vodUrl10);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster10 = $results[0];
$poster10 = "http://jazztv.pk/jazztv/uploads/episodes/$poster10";

$string = str_replace("/",' ',$vodUrl11);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster11 = $results[0];
$poster11 = "http://jazztv.pk/jazztv/uploads/episodes/$poster11";

$string = str_replace("/",' ',$vodUrl12);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster12 = $results[0];
$poster12 = "http://jazztv.pk/jazztv/uploads/episodes/$poster12";

$string = str_replace("/",' ',$vodUrl13);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster13 = $results[0];
$poster13 = "http://jazztv.pk/jazztv/uploads/episodes/$poster13";

$string = str_replace("/",' ',$vodUrl14);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster14 = $results[0];
$poster14 = "http://jazztv.pk/jazztv/uploads/episodes/$poster14";

$string = str_replace("/",' ',$vodUrl15);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster15 = $results[0];
$poster15 = "http://jazztv.pk/jazztv/uploads/episodes/$poster15";

$string = str_replace("/",' ',$vodUrl16);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster16 = $results[0];
$poster16 = "http://jazztv.pk/jazztv/uploads/episodes/$poster16";

$string = str_replace("/",' ',$vodUrl17);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster17 = $results[0];
$poster17 = "http://jazztv.pk/jazztv/uploads/episodes/$poster17";

$string = str_replace("/",' ',$vodUrl18);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster18 = $results[0];
$poster18 = "http://jazztv.pk/jazztv/uploads/episodes/$poster18";

$string = str_replace("/",' ',$vodUrl19);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster19 = $results[0];
$poster19 = "http://jazztv.pk/jazztv/uploads/episodes/$poster19";

$string = str_replace("/",' ',$vodUrl20);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster20 = $results[0];
$poster20 = "http://jazztv.pk/jazztv/uploads/episodes/$poster20";

$string = str_replace("/",' ',$vodUrl21);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster21 = $results[0];
$poster21 = "http://jazztv.pk/jazztv/uploads/episodes/$poster21";

$string = str_replace("/",' ',$vodUrl22);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster22 = $results[0];
$poster22 = "http://jazztv.pk/jazztv/uploads/episodes/$poster22";

$string = str_replace("/",' ',$vodUrl23);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster23 = $results[0];
$poster23 = "http://jazztv.pk/jazztv/uploads/episodes/$poster23";

$string = str_replace("/",' ',$vodUrl24);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster24 = $results[0];
$poster24 = "http://jazztv.pk/jazztv/uploads/episodes/$poster24";

$string = str_replace("/",' ',$vodUrl25);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster25 = $results[0];
$poster25 = "http://jazztv.pk/jazztv/uploads/episodes/$poster25";

$string = str_replace("/",' ',$vodUrl26);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster26 = $results[0];
$poster26 = "http://jazztv.pk/jazztv/uploads/episodes/$poster26";

$string = str_replace("/",' ',$vodUrl27);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster27 = $results[0];
$poster27 = "http://jazztv.pk/jazztv/uploads/episodes/$poster27";

$string = str_replace("/",' ',$vodUrl28);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster28 = $results[0];
$poster28 = "http://jazztv.pk/jazztv/uploads/episodes/$poster28";

$string = str_replace("/",' ',$vodUrl29);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster29 = $results[0];
$poster29 = "http://jazztv.pk/jazztv/uploads/episodes/$poster29";

$string = str_replace("/",' ',$vodUrl30);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster30 = $results[0];
$poster30 = "http://jazztv.pk/jazztv/uploads/episodes/$poster30";

$string = str_replace("/",' ',$vodUrl31);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster31 = $results[0];
$poster31 = "http://jazztv.pk/jazztv/uploads/episodes/$poster31";

$string = str_replace("/",' ',$vodUrl32);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster32 = $results[0];
$poster32 = "http://jazztv.pk/jazztv/uploads/episodes/$poster32";

$string = str_replace("/",' ',$vodUrl33);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster33 = $results[0];
$poster33 = "http://jazztv.pk/jazztv/uploads/episodes/$poster33";

$string = str_replace("/",' ',$vodUrl34);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster34 = $results[0];
$poster34 = "http://jazztv.pk/jazztv/uploads/episodes/$poster34";

$string = str_replace("/",' ',$vodUrl35);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster35 = $results[0];
$poster35 = "http://jazztv.pk/jazztv/uploads/episodes/$poster35";

$string = str_replace("/",' ',$vodUrl36);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster36 = $results[0];
$poster36 = "http://jazztv.pk/jazztv/uploads/episodes/$poster36";

$string = str_replace("/",' ',$vodUrl37);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster37 = $results[0];
$poster37 = "http://jazztv.pk/jazztv/uploads/episodes/$poster37";

$string = str_replace("/",' ',$vodUrl38);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster38 = $results[0];
$poster38 = "http://jazztv.pk/jazztv/uploads/episodes/$poster38";

$string = str_replace("/",' ',$vodUrl39);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster39 = $results[0];
$poster39 = "http://jazztv.pk/jazztv/uploads/episodes/$poster39";

$string = str_replace("/",' ',$vodUrl40);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster40 = $results[0];
$poster40 = "http://jazztv.pk/jazztv/uploads/episodes/$poster40";

$string = str_replace("/",' ',$vodUrl41);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster41 = $results[0];
$poster41 = "http://jazztv.pk/jazztv/uploads/episodes/$poster41";

$string = str_replace("/",' ',$vodUrl42);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster42 = $results[0];
$poster42 = "http://jazztv.pk/jazztv/uploads/episodes/$poster42";

$string = str_replace("/",' ',$vodUrl43);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster43 = $results[0];
$poster43 = "http://jazztv.pk/jazztv/uploads/episodes/$poster43";

$string = str_replace("/",' ',$vodUrl44);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster44 = $results[0];
$poster44 = "http://jazztv.pk/jazztv/uploads/episodes/$poster44";

$string = str_replace("/",' ',$vodUrl45);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster45 = $results[0];
$poster45 = "http://jazztv.pk/jazztv/uploads/episodes/$poster45";

$string = str_replace("/",' ',$vodUrl46);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster46 = $results[0];
$poster46 = "http://jazztv.pk/jazztv/uploads/episodes/$poster46";

$string = str_replace("/",' ',$vodUrl47);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster47 = $results[0];
$poster47 = "http://jazztv.pk/jazztv/uploads/episodes/$poster47";

$string = str_replace("/",' ',$vodUrl48);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster48 = $results[0];
$poster48 = "http://jazztv.pk/jazztv/uploads/episodes/$poster48";

$string = str_replace("/",' ',$vodUrl49);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster49 = $results[0];
$poster49 = "http://jazztv.pk/jazztv/uploads/episodes/$poster49";

$string = str_replace("/",' ',$vodUrl50);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster50 = $results[0];
$poster50 = "http://jazztv.pk/jazztv/uploads/episodes/$poster50";

$string = str_replace("/",' ',$vodUrl51);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster51 = $results[0];
$poster51 = "http://jazztv.pk/jazztv/uploads/episodes/$poster51";

$string = str_replace("/",' ',$vodUrl52);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster52 = $results[0];
$poster52 = "http://jazztv.pk/jazztv/uploads/episodes/$poster52";

$string = str_replace("/",' ',$vodUrl53);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster53 = $results[0];
$poster53 = "http://jazztv.pk/jazztv/uploads/episodes/$poster53";

$string = str_replace("/",' ',$vodUrl54);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster54 = $results[0];
$poster54 = "http://jazztv.pk/jazztv/uploads/episodes/$poster54";

$string = str_replace("/",' ',$vodUrl55);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster55 = $results[0];
$poster55 = "http://jazztv.pk/jazztv/uploads/episodes/$poster55";

$string = str_replace("/",' ',$vodUrl56);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster56 = $results[0];
$poster56 = "http://jazztv.pk/jazztv/uploads/episodes/$poster56";

$string = str_replace("/",' ',$vodUrl57);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster57 = $results[0];
$poster57 = "http://jazztv.pk/jazztv/uploads/episodes/$poster57";

$string = str_replace("/",' ',$vodUrl58);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster58 = $results[0];
$poster58 = "http://jazztv.pk/jazztv/uploads/episodes/$poster58";

$string = str_replace("/",' ',$vodUrl59);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster59 = $results[0];
$poster59 = "http://jazztv.pk/jazztv/uploads/episodes/$poster59";

$string = str_replace("/",' ',$vodUrl60);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster60 = $results[0];
$poster60 = "http://jazztv.pk/jazztv/uploads/episodes/$poster60";

$string = str_replace("/",' ',$vodUrl61);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster61 = $results[0];
$poster61 = "http://jazztv.pk/jazztv/uploads/episodes/$poster61";

$string = str_replace("/",' ',$vodUrl62);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster62 = $results[0];
$poster62 = "http://jazztv.pk/jazztv/uploads/episodes/$poster62";

$string = str_replace("/",' ',$vodUrl63);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster63 = $results[0];
$poster63 = "http://jazztv.pk/jazztv/uploads/episodes/$poster63";

$string = str_replace("/",' ',$vodUrl64);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster64 = $results[0];
$poster64 = "http://jazztv.pk/jazztv/uploads/episodes/$poster64";

$string = str_replace("/",' ',$vodUrl65);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster65 = $results[0];
$poster65 = "http://jazztv.pk/jazztv/uploads/episodes/$poster65";

$string = str_replace("/",' ',$vodUrl66);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster66 = $results[0];
$poster66 = "http://jazztv.pk/jazztv/uploads/episodes/$poster66";

$string = str_replace("/",' ',$vodUrl67);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster67 = $results[0];
$poster67 = "http://jazztv.pk/jazztv/uploads/episodes/$poster67";

$string = str_replace("/",' ',$vodUrl68);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster68 = $results[0];
$poster68 = "http://jazztv.pk/jazztv/uploads/episodes/$poster68";

$string = str_replace("/",' ',$vodUrl69);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster69 = $results[0];
$poster69 = "http://jazztv.pk/jazztv/uploads/episodes/$poster69";

$string = str_replace("/",' ',$vodUrl70);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster70 = $results[0];
$poster70 = "http://jazztv.pk/jazztv/uploads/episodes/$poster70";

$string = str_replace("/",' ',$vodUrl71);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster71 = $results[0];
$poster71 = "http://jazztv.pk/jazztv/uploads/episodes/$poster71";

$string = str_replace("/",' ',$vodUrl72);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster72 = $results[0];
$poster72 = "http://jazztv.pk/jazztv/uploads/episodes/$poster72";

$string = str_replace("/",' ',$vodUrl73);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster73 = $results[0];
$poster73 = "http://jazztv.pk/jazztv/uploads/episodes/$poster73";

$string = str_replace("/",' ',$vodUrl74);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster74 = $results[0];
$poster74 = "http://jazztv.pk/jazztv/uploads/episodes/$poster74";

$string = str_replace("/",' ',$vodUrl75);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster75 = $results[0];
$poster75 = "http://jazztv.pk/jazztv/uploads/episodes/$poster75";

$string = str_replace("/",' ',$vodUrl76);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster76 = $results[0];
$poster76 = "http://jazztv.pk/jazztv/uploads/episodes/$poster76";

$string = str_replace("/",' ',$vodUrl77);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster77 = $results[0];
$poster77 = "http://jazztv.pk/jazztv/uploads/episodes/$poster77";

$string = str_replace("/",' ',$vodUrl78);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster78 = $results[0];
$poster78 = "http://jazztv.pk/jazztv/uploads/episodes/$poster78";

$string = str_replace("/",' ',$vodUrl79);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster79 = $results[0];
$poster79 = "http://jazztv.pk/jazztv/uploads/episodes/$poster79";

$string = str_replace("/",' ',$vodUrl80);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster80 = $results[0];
$poster80 = "http://jazztv.pk/jazztv/uploads/episodes/$poster80";

$string = str_replace("/",' ',$vodUrl81);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster81 = $results[0];
$poster81 = "http://jazztv.pk/jazztv/uploads/episodes/$poster81";

$string = str_replace("/",' ',$vodUrl82);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster82 = $results[0];
$poster82 = "http://jazztv.pk/jazztv/uploads/episodes/$poster82";

$string = str_replace("/",' ',$vodUrl83);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster83 = $results[0];
$poster83 = "http://jazztv.pk/jazztv/uploads/episodes/$poster83";

$string = str_replace("/",' ',$vodUrl84);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster84 = $results[0];
$poster84 = "http://jazztv.pk/jazztv/uploads/episodes/$poster84";

$string = str_replace("/",' ',$vodUrl85);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster85 = $results[0];
$poster85 = "http://jazztv.pk/jazztv/uploads/episodes/$poster85";

$string = str_replace("/",' ',$vodUrl86);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster86 = $results[0];
$poster86 = "http://jazztv.pk/jazztv/uploads/episodes/$poster86";

$string = str_replace("/",' ',$vodUrl87);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster87 = $results[0];
$poster87 = "http://jazztv.pk/jazztv/uploads/episodes/$poster87";

$string = str_replace("/",' ',$vodUrl88);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster88 = $results[0];
$poster88 = "http://jazztv.pk/jazztv/uploads/episodes/$poster88";

$string = str_replace("/",' ',$vodUrl89);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster89 = $results[0];
$poster89 = "http://jazztv.pk/jazztv/uploads/episodes/$poster89";

$string = str_replace("/",' ',$vodUrl90);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster90 = $results[0];
$poster90 = "http://jazztv.pk/jazztv/uploads/episodes/$poster90";

$string = str_replace("/",' ',$vodUrl91);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster91 = $results[0];
$poster91 = "http://jazztv.pk/jazztv/uploads/episodes/$poster91";

$string = str_replace("/",' ',$vodUrl92);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster92 = $results[0];
$poster92 = "http://jazztv.pk/jazztv/uploads/episodes/$poster92";

$string = str_replace("/",' ',$vodUrl93);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster93 = $results[0];
$poster93 = "http://jazztv.pk/jazztv/uploads/episodes/$poster93";

$string = str_replace("/",' ',$vodUrl94);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster94 = $results[0];
$poster94 = "http://jazztv.pk/jazztv/uploads/episodes/$poster94";

$string = str_replace("/",' ',$vodUrl95);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster95 = $results[0];
$poster95 = "http://jazztv.pk/jazztv/uploads/episodes/$poster95";

$string = str_replace("/",' ',$vodUrl96);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster96 = $results[0];
$poster96 = "http://jazztv.pk/jazztv/uploads/episodes/$poster96";

$string = str_replace("/",' ',$vodUrl97);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster97 = $results[0];
$poster97 = "http://jazztv.pk/jazztv/uploads/episodes/$poster97";

$string = str_replace("/",' ',$vodUrl98);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster98 = $results[0];
$poster98 = "http://jazztv.pk/jazztv/uploads/episodes/$poster98";

$string = str_replace("/",' ',$vodUrl99);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster99 = $results[0];
$poster99 = "http://jazztv.pk/jazztv/uploads/episodes/$poster99";

$string = str_replace("/",' ',$vodUrl100);
$string = str_replace(" index.m3u8",'.jpg',$string);
preg_match('/[^ ]*$/', $string, $results);
$poster100 = $results[0];
$poster100 = "http://jazztv.pk/jazztv/uploads/episodes/$poster100";












if($_GET[p]=="0") {
$vodUrl = $vodUrl0; }
elseif($_GET[p]=="1") {
$vodUrl = $vodUrl1; }
elseif($_GET[p]=="2") {
$vodUrl = $vodUrl2; }
elseif($_GET[p]=="3") {
$vodUrl = $vodUrl3; }
elseif($_GET[p]=="4") {
$vodUrl = $vodUrl4; }
elseif($_GET[p]=="5") {
$vodUrl = $vodUrl5; }
elseif($_GET[p]=="6") {
$vodUrl = $vodUrl6; }
elseif($_GET[p]=="7") {
$vodUrl = $vodUrl7; }
elseif($_GET[p]=="8") {
$vodUrl = $vodUrl8; }
elseif($_GET[p]=="9") {
$vodUrl = $vodUrl9; }
elseif($_GET[p]=="10") {
$vodUrl = $vodUrl10; }
elseif($_GET[p]=="11") {
$vodUrl = $vodUrl11; }
elseif($_GET[p]=="12") {
$vodUrl = $vodUrl12; }
elseif($_GET[p]=="13") {
$vodUrl = $vodUrl13; }
elseif($_GET[p]=="14") {
$vodUrl = $vodUrl14; }
elseif($_GET[p]=="15") {
$vodUrl = $vodUrl15; }
elseif($_GET[p]=="16") {
$vodUrl = $vodUrl16; }
elseif($_GET[p]=="17") {
$vodUrl = $vodUrl17; }
elseif($_GET[p]=="18") {
$vodUrl = $vodUrl18; }
elseif($_GET[p]=="19") {
$vodUrl = $vodUrl19; }
elseif($_GET[p]=="20") {
$vodUrl = $vodUrl20; }
elseif($_GET[p]=="21") {
$vodUrl = $vodUrl21; }
elseif($_GET[p]=="22") {
$vodUrl = $vodUrl22; }
elseif($_GET[p]=="23") {
$vodUrl = $vodUrl23; }
elseif($_GET[p]=="24") {
$vodUrl = $vodUrl24; }
elseif($_GET[p]=="25") {
$vodUrl = $vodUrl25; }
elseif($_GET[p]=="26") {
$vodUrl = $vodUrl26; }
elseif($_GET[p]=="27") {
$vodUrl = $vodUrl27; }
elseif($_GET[p]=="28") {
$vodUrl = $vodUrl28; }
elseif($_GET[p]=="29") {
$vodUrl = $vodUrl29; }
elseif($_GET[p]=="30") {
$vodUrl = $vodUrl30; }
elseif($_GET[p]=="31") {
$vodUrl = $vodUrl31; }
elseif($_GET[p]=="32") {
$vodUrl = $vodUrl32; }
elseif($_GET[p]=="33") {
$vodUrl = $vodUrl33; }
elseif($_GET[p]=="34") {
$vodUrl = $vodUrl34; }
elseif($_GET[p]=="35") {
$vodUrl = $vodUrl35; }
elseif($_GET[p]=="36") {
$vodUrl = $vodUrl36; }
elseif($_GET[p]=="37") {
$vodUrl = $vodUrl37; }
elseif($_GET[p]=="38") {
$vodUrl = $vodUrl38; }
elseif($_GET[p]=="39") {
$vodUrl = $vodUrl39; }
elseif($_GET[p]=="40") {
$vodUrl = $vodUrl40; }
elseif($_GET[p]=="41") {
$vodUrl = $vodUrl41; }
elseif($_GET[p]=="42") {
$vodUrl = $vodUrl42; }
elseif($_GET[p]=="43") {
$vodUrl = $vodUrl43; }
elseif($_GET[p]=="44") {
$vodUrl = $vodUrl44; }
elseif($_GET[p]=="45") {
$vodUrl = $vodUrl45; }
elseif($_GET[p]=="46") {
$vodUrl = $vodUrl46; }
elseif($_GET[p]=="47") {
$vodUrl = $vodUrl47; }
elseif($_GET[p]=="48") {
$vodUrl = $vodUrl48; }
elseif($_GET[p]=="49") {
$vodUrl = $vodUrl49; }
elseif($_GET[p]=="50") {
$vodUrl = $vodUrl50; }
elseif($_GET[p]=="51") {
$vodUrl = $vodUrl51; }
elseif($_GET[p]=="52") {
$vodUrl = $vodUrl52; }
elseif($_GET[p]=="53") {
$vodUrl = $vodUrl53; }
elseif($_GET[p]=="54") {
$vodUrl = $vodUrl54; }
elseif($_GET[p]=="55") {
$vodUrl = $vodUrl55; }
elseif($_GET[p]=="56") {
$vodUrl = $vodUrl56; }
elseif($_GET[p]=="57") {
$vodUrl = $vodUrl57; }
elseif($_GET[p]=="58") {
$vodUrl = $vodUrl58; }
elseif($_GET[p]=="59") {
$vodUrl = $vodUrl59; }
elseif($_GET[p]=="60") {
$vodUrl = $vodUrl60; }
elseif($_GET[p]=="61") {
$vodUrl = $vodUrl61; }
elseif($_GET[p]=="62") {
$vodUrl = $vodUrl62; }
elseif($_GET[p]=="63") {
$vodUrl = $vodUrl63; }
elseif($_GET[p]=="64") {
$vodUrl = $vodUrl64; }
elseif($_GET[p]=="65") {
$vodUrl = $vodUrl65; }
elseif($_GET[p]=="66") {
$vodUrl = $vodUrl66; }
elseif($_GET[p]=="67") {
$vodUrl = $vodUrl67; }
elseif($_GET[p]=="68") {
$vodUrl = $vodUrl68; }
elseif($_GET[p]=="69") {
$vodUrl = $vodUrl69; }
elseif($_GET[p]=="70") {
$vodUrl = $vodUrl70; }
elseif($_GET[p]=="71") {
$vodUrl = $vodUrl71; }
elseif($_GET[p]=="72") {
$vodUrl = $vodUrl72; }
elseif($_GET[p]=="73") {
$vodUrl = $vodUrl73; }
elseif($_GET[p]=="74") {
$vodUrl = $vodUrl74; }
elseif($_GET[p]=="75") {
$vodUrl = $vodUrl75; }
elseif($_GET[p]=="76") {
$vodUrl = $vodUrl76; }
elseif($_GET[p]=="77") {
$vodUrl = $vodUrl77; }
elseif($_GET[p]=="78") {
$vodUrl = $vodUrl78; }
elseif($_GET[p]=="79") {
$vodUrl = $vodUrl79; }
elseif($_GET[p]=="80") {
$vodUrl = $vodUrl80; }
elseif($_GET[p]=="81") {
$vodUrl = $vodUrl81; }
elseif($_GET[p]=="82") {
$vodUrl = $vodUrl82; }
elseif($_GET[p]=="83") {
$vodUrl = $vodUrl83; }
elseif($_GET[p]=="84") {
$vodUrl = $vodUrl84; }
elseif($_GET[p]=="85") {
$vodUrl = $vodUrl85; }
elseif($_GET[p]=="86") {
$vodUrl = $vodUrl86; }
elseif($_GET[p]=="87") {
$vodUrl = $vodUrl87; }
elseif($_GET[p]=="88") {
$vodUrl = $vodUrl88; }
elseif($_GET[p]=="89") {
$vodUrl = $vodUrl89; }
elseif($_GET[p]=="90") {
$vodUrl = $vodUrl90; }
elseif($_GET[p]=="91") {
$vodUrl = $vodUrl91; }
elseif($_GET[p]=="92") {
$vodUrl = $vodUrl92; }
elseif($_GET[p]=="93") {
$vodUrl = $vodUrl93; }
elseif($_GET[p]=="94") {
$vodUrl = $vodUrl94; }
elseif($_GET[p]=="95") {
$vodUrl = $vodUrl95; }
elseif($_GET[p]=="96") {
$vodUrl = $vodUrl96; }
elseif($_GET[p]=="97") {
$vodUrl = $vodUrl97; }
elseif($_GET[p]=="98") {
$vodUrl = $vodUrl98; }
elseif($_GET[p]=="99") {
$vodUrl = $vodUrl99; }
elseif($_GET[p]=="100") {
$vodUrl = $vodUrl100; }
else
{
// Nothing
}



if($vodUrl0!=Null) {
$disp0 = "inline-block"; } else {
$disp0 = "none"; }

if($vodUrl1!=Null) {
$disp1 = "inline-block"; } else {
$disp1 = "none"; }

if($vodUrl2!=Null) {
$disp2 = "inline-block"; } else {
$disp2 = "none"; }

if($vodUrl3!=Null) {
$disp3 = "inline-block"; } else {
$disp3 = "none"; }

if($vodUrl4!=Null) {
$disp4 = "inline-block"; } else {
$disp4 = "none"; }

if($vodUrl5!=Null) {
$disp5 = "inline-block"; } else {
$disp5 = "none"; }

if($vodUrl6!=Null) {
$disp6 = "inline-block"; } else {
$disp6 = "none"; }

if($vodUrl7!=Null) {
$disp7 = "inline-block"; } else {
$disp7 = "none"; }

if($vodUrl8!=Null) {
$disp8 = "inline-block"; } else {
$disp8 = "none"; }

if($vodUrl9!=Null) {
$disp9 = "inline-block"; } else {
$disp9 = "none"; }

if($vodUrl10!=Null) {
$disp10 = "inline-block"; } else {
$disp10 = "none"; }

if($vodUrl11!=Null) {
$disp11 = "inline-block"; } else {
$disp11 = "none"; }

if($vodUrl12!=Null) {
$disp12 = "inline-block"; } else {
$disp12 = "none"; }

if($vodUrl13!=Null) {
$disp13 = "inline-block"; } else {
$disp13 = "none"; }

if($vodUrl14!=Null) {
$disp14 = "inline-block"; } else {
$disp14 = "none"; }

if($vodUrl15!=Null) {
$disp15 = "inline-block"; } else {
$disp15 = "none"; }

if($vodUrl16!=Null) {
$disp16 = "inline-block"; } else {
$disp16 = "none"; }

if($vodUrl17!=Null) {
$disp17 = "inline-block"; } else {
$disp17 = "none"; }

if($vodUrl18!=Null) {
$disp18 = "inline-block"; } else {
$disp18 = "none"; }

if($vodUrl19!=Null) {
$disp19 = "inline-block"; } else {
$disp19 = "none"; }

if($vodUrl20!=Null) {
$disp20 = "inline-block"; } else {
$disp20 = "none"; }

if($vodUrl21!=Null) {
$disp21 = "inline-block"; } else {
$disp21 = "none"; }

if($vodUrl22!=Null) {
$disp22 = "inline-block"; } else {
$disp22 = "none"; }

if($vodUrl23!=Null) {
$disp23 = "inline-block"; } else {
$disp23 = "none"; }

if($vodUrl24!=Null) {
$disp24 = "inline-block"; } else {
$disp24 = "none"; }

if($vodUrl25!=Null) {
$disp25 = "inline-block"; } else {
$disp25 = "none"; }

if($vodUrl26!=Null) {
$disp26 = "inline-block"; } else {
$disp26 = "none"; }

if($vodUrl27!=Null) {
$disp27 = "inline-block"; } else {
$disp27 = "none"; }

if($vodUrl28!=Null) {
$disp28 = "inline-block"; } else {
$disp28 = "none"; }

if($vodUrl29!=Null) {
$disp29 = "inline-block"; } else {
$disp29 = "none"; }

if($vodUrl30!=Null) {
$disp30 = "inline-block"; } else {
$disp30 = "none"; }

if($vodUrl31!=Null) {
$disp31 = "inline-block"; } else {
$disp31 = "none"; }

if($vodUrl32!=Null) {
$disp32 = "inline-block"; } else {
$disp32 = "none"; }

if($vodUrl33!=Null) {
$disp33 = "inline-block"; } else {
$disp33 = "none"; }

if($vodUrl34!=Null) {
$disp34 = "inline-block"; } else {
$disp34 = "none"; }

if($vodUrl35!=Null) {
$disp35 = "inline-block"; } else {
$disp35 = "none"; }

if($vodUrl36!=Null) {
$disp36 = "inline-block"; } else {
$disp36 = "none"; }

if($vodUrl37!=Null) {
$disp37 = "inline-block"; } else {
$disp37 = "none"; }

if($vodUrl38!=Null) {
$disp38 = "inline-block"; } else {
$disp38 = "none"; }

if($vodUrl39!=Null) {
$disp39 = "inline-block"; } else {
$disp39 = "none"; }

if($vodUrl40!=Null) {
$disp40 = "inline-block"; } else {
$disp40 = "none"; }

if($vodUrl41!=Null) {
$disp41 = "inline-block"; } else {
$disp41 = "none"; }

if($vodUrl42!=Null) {
$disp42 = "inline-block"; } else {
$disp42 = "none"; }

if($vodUrl43!=Null) {
$disp43 = "inline-block"; } else {
$disp43 = "none"; }

if($vodUrl44!=Null) {
$disp44 = "inline-block"; } else {
$disp44 = "none"; }

if($vodUrl45!=Null) {
$disp45 = "inline-block"; } else {
$disp45 = "none"; }

if($vodUrl46!=Null) {
$disp46 = "inline-block"; } else {
$disp46 = "none"; }

if($vodUrl47!=Null) {
$disp47 = "inline-block"; } else {
$disp47 = "none"; }

if($vodUrl48!=Null) {
$disp48 = "inline-block"; } else {
$disp48 = "none"; }

if($vodUrl49!=Null) {
$disp49 = "inline-block"; } else {
$disp49 = "none"; }

if($vodUrl50!=Null) {
$disp50 = "inline-block"; } else {
$disp50 = "none"; }

if($vodUrl51!=Null) {
$disp51 = "inline-block"; } else {
$disp51 = "none"; }

if($vodUrl52!=Null) {
$disp52 = "inline-block"; } else {
$disp52 = "none"; }

if($vodUrl53!=Null) {
$disp53 = "inline-block"; } else {
$disp53 = "none"; }

if($vodUrl54!=Null) {
$disp54 = "inline-block"; } else {
$disp54 = "none"; }

if($vodUrl55!=Null) {
$disp55 = "inline-block"; } else {
$disp55 = "none"; }

if($vodUrl56!=Null) {
$disp56 = "inline-block"; } else {
$disp56 = "none"; }

if($vodUrl57!=Null) {
$disp57 = "inline-block"; } else {
$disp57 = "none"; }

if($vodUrl58!=Null) {
$disp58 = "inline-block"; } else {
$disp58 = "none"; }

if($vodUrl59!=Null) {
$disp59 = "inline-block"; } else {
$disp59 = "none"; }

if($vodUrl60!=Null) {
$disp60 = "inline-block"; } else {
$disp60 = "none"; }

if($vodUrl61!=Null) {
$disp61 = "inline-block"; } else {
$disp61 = "none"; }

if($vodUrl62!=Null) {
$disp62 = "inline-block"; } else {
$disp62 = "none"; }

if($vodUrl63!=Null) {
$disp63 = "inline-block"; } else {
$disp63 = "none"; }

if($vodUrl64!=Null) {
$disp64 = "inline-block"; } else {
$disp64 = "none"; }

if($vodUrl65!=Null) {
$disp65 = "inline-block"; } else {
$disp65 = "none"; }

if($vodUrl66!=Null) {
$disp66 = "inline-block"; } else {
$disp66 = "none"; }

if($vodUrl67!=Null) {
$disp67 = "inline-block"; } else {
$disp67 = "none"; }

if($vodUrl68!=Null) {
$disp68 = "inline-block"; } else {
$disp68 = "none"; }

if($vodUrl69!=Null) {
$disp69 = "inline-block"; } else {
$disp69 = "none"; }

if($vodUrl70!=Null) {
$disp70 = "inline-block"; } else {
$disp70 = "none"; }

if($vodUrl71!=Null) {
$disp71 = "inline-block"; } else {
$disp71 = "none"; }

if($vodUrl72!=Null) {
$disp72 = "inline-block"; } else {
$disp72 = "none"; }

if($vodUrl73!=Null) {
$disp73 = "inline-block"; } else {
$disp73 = "none"; }

if($vodUrl74!=Null) {
$disp74 = "inline-block"; } else {
$disp74 = "none"; }

if($vodUrl75!=Null) {
$disp75 = "inline-block"; } else {
$disp75 = "none"; }

if($vodUrl76!=Null) {
$disp76 = "inline-block"; } else {
$disp76 = "none"; }

if($vodUrl77!=Null) {
$disp77 = "inline-block"; } else {
$disp77 = "none"; }

if($vodUrl78!=Null) {
$disp78 = "inline-block"; } else {
$disp78 = "none"; }

if($vodUrl79!=Null) {
$disp79 = "inline-block"; } else {
$disp79 = "none"; }

if($vodUrl80!=Null) {
$disp80 = "inline-block"; } else {
$disp80 = "none"; }

if($vodUrl81!=Null) {
$disp81 = "inline-block"; } else {
$disp81 = "none"; }

if($vodUrl82!=Null) {
$disp82 = "inline-block"; } else {
$disp82 = "none"; }

if($vodUrl83!=Null) {
$disp83 = "inline-block"; } else {
$disp83 = "none"; }

if($vodUrl84!=Null) {
$disp84 = "inline-block"; } else {
$disp84 = "none"; }

if($vodUrl85!=Null) {
$disp85 = "inline-block"; } else {
$disp85 = "none"; }

if($vodUrl86!=Null) {
$disp86 = "inline-block"; } else {
$disp86 = "none"; }

if($vodUrl87!=Null) {
$disp87 = "inline-block"; } else {
$disp87 = "none"; }

if($vodUrl88!=Null) {
$disp88 = "inline-block"; } else {
$disp88 = "none"; }

if($vodUrl89!=Null) {
$disp89 = "inline-block"; } else {
$disp89 = "none"; }

if($vodUrl90!=Null) {
$disp90 = "inline-block"; } else {
$disp90 = "none"; }

if($vodUrl91!=Null) {
$disp91 = "inline-block"; } else {
$disp91 = "none"; }

if($vodUrl92!=Null) {
$disp92 = "inline-block"; } else {
$disp92 = "none"; }

if($vodUrl93!=Null) {
$disp93 = "inline-block"; } else {
$disp93 = "none"; }

if($vodUrl94!=Null) {
$disp94 = "inline-block"; } else {
$disp94 = "none"; }

if($vodUrl95!=Null) {
$disp95 = "inline-block"; } else {
$disp95 = "none"; }

if($vodUrl96!=Null) {
$disp96 = "inline-block"; } else {
$disp96 = "none"; }

if($vodUrl97!=Null) {
$disp97 = "inline-block"; } else {
$disp97 = "none"; }

if($vodUrl98!=Null) {
$disp98 = "inline-block"; } else {
$disp98 = "none"; }

if($vodUrl99!=Null) {
$disp99 = "inline-block"; } else {
$disp99 = "none"; }

if($vodUrl100!=Null) {
$disp100 = "inline-block"; } else {
$disp100 = "none"; }




if($_GET[p]==Null)
{
  


echo "<body style='background:#FFF8DC;'>
<div style='position: relative; top: 80px'>

<div style='display: $disp0' class='target'>
<a href='?p=0'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster0' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName0</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp1' class='target'>
<a href='?p=1'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster1' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName1</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp2' class='target'>
<a href='?p=2'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster2' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName2</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp3' class='target'>
<a href='?p=3'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster3' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName3</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp4' class='target'>
<a href='?p=4'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster4' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName4</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp5' class='target'>
<a href='?p=5'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster5' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName5</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp6' class='target'>
<a href='?p=6'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster6' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName6</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp7' class='target'>
<a href='?p=7'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster7' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName7</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp8' class='target'>
<a href='?p=8'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster8' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName8</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp9' class='target'>
<a href='?p=9'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster9' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName9</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp10' class='target'>
<a href='?p=10'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster10' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName10</font>
</td>
</tr>
</table></a>
</div>



<div style='display: $disp11' class='target'>
<a href='?p=11'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster11' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName11</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp12' class='target'>
<a href='?p=12'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster12' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName12</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp13' class='target'>
<a href='?p=13'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster13' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName13</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp14' class='target'>
<a href='?p=14'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster14' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName14</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp15' class='target'>
<a href='?p=15'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster15' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName15</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp16' class='target'>
<a href='?p=16'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster16' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName16</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp17' class='target'>
<a href='?p=17'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster17' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName17</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp18' class='target'>
<a href='?p=18'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster18' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName18</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp19' class='target'>
<a href='?p=19'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster19' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName19</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp20' class='target'>
<a href='?p=20'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster20' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName20</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp21' class='target'>
<a href='?p=21'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster21' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName21</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp22' class='target'>
<a href='?p=22'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster22' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName22</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp23' class='target'>
<a href='?p=23'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster23' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName23</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp24' class='target'>
<a href='?p=24'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster24' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName24</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp25' class='target'>
<a href='?p=25'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster25' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName25</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp26' class='target'>
<a href='?p=26'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster26' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName26</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp27' class='target'>
<a href='?p=27'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster27' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName27</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp28' class='target'>
<a href='?p=28'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster28' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName28</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp29' class='target'>
<a href='?p=29'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster29' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName29</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp30' class='target'>
<a href='?p=30'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster30' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName30</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp31' class='target'>
<a href='?p=31'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster31' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName31</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp32' class='target'>
<a href='?p=32'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster32' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName32</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp33' class='target'>
<a href='?p=33'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster33' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName33</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp34' class='target'>
<a href='?p=34'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster34' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName34</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp35' class='target'>
<a href='?p=35'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster35' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName35</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp36' class='target'>
<a href='?p=36'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster36' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName36</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp37' class='target'>
<a href='?p=37'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster37' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName37</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp38' class='target'>
<a href='?p=38'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster38' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName38</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp39' class='target'>
<a href='?p=39'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster39' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName39</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp40' class='target'>
<a href='?p=40'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster40' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName40</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp41' class='target'>
<a href='?p=41'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster41' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName41</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp42' class='target'>
<a href='?p=42'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster42' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName42</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp43' class='target'>
<a href='?p=43'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster43' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName43</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp44' class='target'>
<a href='?p=44'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster44' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName44</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp45' class='target'>
<a href='?p=45'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster45' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName45</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp46' class='target'>
<a href='?p=46'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster46' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName46</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp47' class='target'>
<a href='?p=47'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster47' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName47</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp48' class='target'>
<a href='?p=48'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster48' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName48</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp49' class='target'>
<a href='?p=49'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster49' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName49</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp50' class='target'>
<a href='?p=50'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster50' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName50</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp51' class='target'>
<a href='?p=51'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster51' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName51</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp52' class='target'>
<a href='?p=52'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster52' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName52</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp53' class='target'>
<a href='?p=53'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster53' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName53</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp54' class='target'>
<a href='?p=54'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster54' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName54</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp55' class='target'>
<a href='?p=55'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster55' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName55</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp56' class='target'>
<a href='?p=56'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster56' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName56</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp57' class='target'>
<a href='?p=57'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster57' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName57</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp58' class='target'>
<a href='?p=58'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster58' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName58</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp59' class='target'>
<a href='?p=59'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster59' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName59</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp60' class='target'>
<a href='?p=60'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster60' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName60</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp61' class='target'>
<a href='?p=61'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster61' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName61</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp62' class='target'>
<a href='?p=62'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster62' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName62</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp63' class='target'>
<a href='?p=63'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster63' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName63</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp64' class='target'>
<a href='?p=64'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster64' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName64</font>
</td>
</tr>
</table></a>
</div>

<div style='display: none' class='target'>
<a href='?p=65'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster65' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName65</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp66' class='target'>
<a href='?p=66'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster66' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName66</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp67' class='target'>
<a href='?p=67'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster67' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName67</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp68' class='target'>
<a href='?p=68'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster68' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName68</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp69' class='target'>
<a href='?p=69'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster69' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName69</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp70' class='target'>
<a href='?p=70'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster70' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName70</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp71' class='target'>
<a href='?p=71'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster71' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName71</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp72' class='target'>
<a href='?p=72'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster72' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName72</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp73' class='target'>
<a href='?p=73'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster73' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName73</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp74' class='target'>
<a href='?p=74'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster74' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName74</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp75' class='target'>
<a href='?p=75'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster75' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName75</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp76' class='target'>
<a href='?p=76'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster76' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName76</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp77' class='target'>
<a href='?p=77'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster77' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName77</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp78' class='target'>
<a href='?p=78'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster78' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName78</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp79' class='target'>
<a href='?p=79'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster79' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName79</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp80' class='target'>
<a href='?p=80'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster80' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName80</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp81' class='target'>
<a href='?p=81'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster81' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName81</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp82' class='target'>
<a href='?p=82'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster82' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName82</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp83' class='target'>
<a href='?p=83'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster83' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName83</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp84' class='target'>
<a href='?p=84'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster84' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName84</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp85' class='target'>
<a href='?p=85'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster85' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName85</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp86' class='target'>
<a href='?p=86'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster86' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName86</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp87' class='target'>
<a href='?p=87'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster87' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName87</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp88' class='target'>
<a href='?p=88'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster88' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName88</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp89' class='target'>
<a href='?p=89'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster89' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName89</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp90' class='target'>
<a href='?p=90'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster90' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName90</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp91' class='target'>
<a href='?p=91'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster91' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName91</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp92' class='target'>
<a href='?p=92'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster92' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName92</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp93' class='target'>
<a href='?p=93'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster93' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName93</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp94' class='target'>
<a href='?p=94'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster94' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName94</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp95' class='target'>
<a href='?p=95'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster95' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName95</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp96' class='target'>
<a href='?p=96'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster96' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName96</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp97' class='target'>
<a href='?p=97'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster97' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName97</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp98' class='target'>
<a href='?p=98'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster98' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName98</font>
</td>
</tr>
</table></a>
</div>


<div style='display: $disp99' class='target'>
<a href='?p=99'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster99' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName99</font>
</td>
</tr>
</table></a>
</div>

<div style='display: $disp100' class='target'>
<a href='?p=100'><table border='0' cellpadding='1'>
<tr>
<td align='center' valign='center'>
<img src='$poster100' width='320' height='380' /></img>
</td><td>
<font size='7' color='black'>$vodName100</font>
</td>
</tr>
</table></a>
</div>
</div>


<div style='position: fixed; top: 0px; text-align: center; left: 20%; right: 20%'>
  <table width='20%'>
  <tr>
    <td>
      <input style='font-size: 40px' type='text' id='Search' onkeyup='myFunction()' placeholder='Enter a video name for search..' title='Type in a name'>
    </td>
  </tr>
</table>
</div>

";




}
else
{













echo "<body style='background:#696969;'>



<div style='display: inline-block; position: fixed; top: 720px; width:100%'>

<center><img style='opacity: 0.2; filter: alpha(opacity=10); width: 600; height: 590' src='http://jazztv.pk/jazztv/uploads/categories/b88dd065282970fc9e80f710a800f4c6.png'></img></center></div>


<div id='div2' style='display: inline-block; position: fixed; top: 0px; width:100%'>
<center>
<div style='background-color: black'>
<video onpause='onPause()' onplay='onPlay()' onplaying='onPlaying()' ontimeupdate='myFunction(this)' id='video1ok' width='100%' controlsList='nodownload' controls style='height: 530; background: none; background-color: black' preload='auto'>
  <source src='$vodUrl'>
  Your browser does not support HTML5 video.
</video>
<br>

<center>
<button id='b1' style='width:120px' onclick='rwd30svideo1ok()' type='button'><font size='20'>|<</font></button> &nbsp;

<button id='b2' style='width:120px' onclick='rwd10svideo1ok()' type='button'><font size='20'><</font></button> &nbsp;

<button id='b3' style='width:160px' onclick='playPausevideo1ok()' type='button'><font size='20'>Play</font></button> &nbsp;

<button id='b4' style='width:160px' onclick='toggleFullScreenvideo1ok()' type='button'><font size='20'>Full</font></button> &nbsp;

<button id='b5' style='width:120px' onclick='fwd10svideo1ok()' type='button'><font size='20'>></font></button> &nbsp;

<button id='b6' style='width:120px' onclick='fwd30svideo1ok()' type='button'><font size='20'>>|</font></button>

</center>

</div>

</div>";


echo "<div id='loader' style='position: fixed; display: none; top: 200px; width:100%'>
<center>
  <font color='white' size='7'><span style='background-color: #000000' id='status'><img src='http://jazztube.jazz.com.pk/mobile/p/common/img/loading.gif'></img><br>Loading Video...</span></font> 
 </center></div>";



echo "
<div style='display: block; background-color: none; font-size: 100px; position: fixed; bottom: 5px; right: 5px; width:100%'>

<center><button id='b3' style='width:160px' onclick='jump()' type='button'><font size='20'>Play</font></button> &nbsp;<a href='javascript:location.reload(true)'><button style='width:250px'><font size='20'>Refresh</font></button></a></center>

<font color='white' size='6'><p dir='rtl'><b>
نوٹ: فل سکرین کے لیے پہلے موبائل کا Auto Rotate آن کریں، پھر  Full پر کلک کر کے موبائل کو گھمائیں۔
</b></p></font></div>";



echo "<div style='position: fixed; top: 20px'>

<center><img style='opacity: 0.2; filter: alpha(opacity=10); width: 100; height: 80' src='http://jazztv.pk/jazztv/uploads/categories/e620e5e428408bfddaef745e018aa1b9.png'></img></center></div>";


}



?>


    <script>

var video1ok = document.getElementById("video1ok");

function onPlaying() {

document.getElementById('loader').style.display='none';
document.getElementById('video1ok').style.height='auto';
     }


function onPlay() {

document.getElementById('loader').style.display='block';
document.getElementById("b3").innerHTML = "<font size='20'>Stop</font>";  
}

function onPause() {
document.getElementById("b3").innerHTML = "<font size='20'>Play</font>";
}



    function playPausevideo1ok() {
    if (video1ok.paused)
        video1ok.play();
    else
        video1ok.pause();
}


function rwd10svideo1ok() { 
    video1ok.currentTime=video1ok.currentTime - 10; }
function fwd10svideo1ok() { 
    video1ok.currentTime=video1ok.currentTime + 10; }
function rwd30svideo1ok() { 
    video1ok.currentTime=video1ok.currentTime - 30; }
function fwd30svideo1ok() { 
    video1ok.currentTime=video1ok.currentTime + 30; }


function toggleFullScreenvideo1ok(){
	if(video1ok.requestFullScreen){
		video1ok.requestFullScreen();
	} else if(video1ok.webkitRequestFullScreen){
		video1ok.webkitRequestFullScreen();
	} else if(video1ok.mozRequestFullScreen){
		video1ok.mozRequestFullScreen();
	}
}



function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('target');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}



</script>





