<?php
$connect = new mysqli('localhost', 'root', '2v7!wGxrQAv!', 'galen');
$sql_g = "select entity from jsonf where category='$speciality_link' and entity <> '' and entity not like '%dummy%' and entity not like '%consult%' and entity not like '%$speciality_link%' order by rand() limit 10";
$result = mysqli_query($connect, $sql_g);
if (mysqli_num_rows($result) > 0) {
    $symptoms .= "You can consult for any of the following symptoms: <b>";
    while ($row = mysqli_fetch_assoc($result)) {
        $symptoms .= ucfirst(strtolower(array_shift(explode(',', $row["entity"])))) . ", ";
    }
    $symptoms .= '</b> and so on. ';
}
$terms = $symptoms;
?>

<?php 
if (($id != 5053) && ($id != 5166)) {
	echo '<p>' . $terms . '</p><br>';
} 
?>

<?php 
$custom_symptoms = 'You can consult for any of the following symptoms: Naturally approach for prevention and management of <b>prostate cancer, BPH, male infertility, Erectile dysfunction, kidney stone, interstitial cystitis, recurrent urinary infections, renal and bladder cancer, and urogenital malformations.</b>';
if ($terms != '') {
    
	if(($id == 5053))echo '<p>' . $custom_symptoms . '</p><br>';
} 
?>

<?php 
$custom_symptoms1 = 'You can consult for any of the following symptoms: <b>weight gain, weight management, weight loss, obesity, overweight, prevention of chronic diseases, lifestyle modification, lifestyle management.</b>';
if ($terms != '') {
	
	if(($id == 5166))echo '<p>' . $custom_symptoms1 . '</p><br>';
} 
?>
