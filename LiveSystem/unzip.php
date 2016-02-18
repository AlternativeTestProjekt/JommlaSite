<?php
// Bitte .zip Datei in den gleichen Ordner wie Skript hochladen
$file = 'Joomla_3.4.4-Stable-Full_Package.zip'; //Dateiname entsprechend �ndern

$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  $zip->extractTo($path);
  $zip->close();
  echo "Gl�ckwunsch! $file wurde erfolgreich nach $path exportiert.";
} else {
  echo "Die Datei $file konnte nicht gefunden/ge�ffnet werden.";
}
?>