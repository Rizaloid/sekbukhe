<?php

function reff($reff,$sgbcode,$sgbsecret) {
	
	 $body = 'sgbcode='.$sgbcode.'&sgbsecret='.$sgbsecret.'&reff='.$reff.'';
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL, 'https://asw-crew-siptruk.c9users.io/cash.php');
	 curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	 curl_setopt($ch, CURLOPT_POST, 1);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 $result = curl_exec($ch);
	return $result;
}
echo "SGB CODE : ";
$sgbcode = trim(fgets(STDIN));
echo "SGB SECRET : ";
$sgbsecret = trim(fgets(STDIN));
echo "REFFLU : ";
$reff = trim(fgets(STDIN));
echo "JUMLAH : ";
$jum = trim(fgets(STDIN));
for($a=0;$a<$jum;$a++){
	$bhh = reff($reff,$sgbcode,$sgbsecret,$a);
echo "".$bhh."\n";
}
?>
