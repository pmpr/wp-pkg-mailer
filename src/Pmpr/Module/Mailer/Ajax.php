<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660695df535c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; class Ajax extends Container { const ykiigwasoeagkiuq = "\x6d\x61\x69\x6c\x65\x72\x5f\x73\145\x6e\x64\x5f\x74\x65\163\x74\137\x65\x6d\x61\x69\154\x5f\x61\x63\x74\x69\157\x6e"; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ykiigwasoeagkiuq, [$this, "\141\x75\x71\161\167\x6b\x79\x65\x79\x67\x65\x65\x73\x71\x6f\x61"]); } public function auqqwkyeygeesqoa() { $kigowwqauiumummw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto csscmcacoikwsecs; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $acuayeeoiwokyomo = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Setting::gqyoceciecuaiwqa, '', true); if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($acuayeeoiwokyomo)) { goto myoicgcuugciueis; } $uamcoiueqaamsqma = sprintf(__("\45\x73\40\x69\163\x20\156\157\x74\40\x61\x20\x76\x61\154\151\144\x20\x65\155\141\x69\x6c\x20\x61\x64\x64\162\x65\163\163", PR__MDL__MAILER), $swqimwqeweekeusq->ciuuiyckmsygceis($acuayeeoiwokyomo)); goto asmecuqiyyswueqe; myoicgcuugciueis: $kuukgsmqkagwaciu = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Setting::simyeuciiqmwocuu, '', true); $iosuwkkwwioumeqg = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Setting::wucqagwssusieeaa, '', true); if ($acuayeeoiwokyomo && $iosuwkkwwioumeqg && $kuukgsmqkagwaciu) { goto qgoiooayqmqqsiok; } $uamcoiueqaamsqma = __("\122\145\161\x75\151\162\145\40\160\141\x72\x61\155\x65\x74\x65\x72\40\151\163\40\x6d\151\163\163\151\x6e\x67", PR__MDL__MAILER); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: try { ob_start(); if (wp_mail($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $kuukgsmqkagwaciu)) { goto cecuyayqoioasumi; } $uamcoiueqaamsqma = __("\x53\157\x6d\x65\164\x68\151\156\147\40\167\x72\x6f\x6e\147\40\x6f\156\x20\x73\145\x6e\x64\151\156\x67\40\155\x61\151\x6c\54\x20\143\x68\x65\x63\x6b\40\x6c\x6f\147\x20\x66\x69\154\145\x73\56", PR__MDL__MAILER); goto qiaqsassksqiuyae; cecuyayqoioasumi: $kigowwqauiumummw = true; $uamcoiueqaamsqma = sprintf(__("\124\x65\163\164\x20\155\x65\163\163\x61\x67\145\40\x73\x65\156\x74\40\x73\165\143\x63\x65\x73\x73\146\165\x6c\154\171\x20\164\x6f\40\45\x73", PR__MDL__MAILER), $swqimwqeweekeusq->ciuuiyckmsygceis($acuayeeoiwokyomo)); qiaqsassksqiuyae: $iswcokucwmiosiaq = ob_get_clean(); if (!(!$kigowwqauiumummw && $iswcokucwmiosiaq)) { goto qogqewiwmwiwskgm; } $uamcoiueqaamsqma = sprintf("\45\163\74\x62\162\x2f\x3e\x25\163", $uamcoiueqaamsqma, $iswcokucwmiosiaq); qogqewiwmwiwskgm: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } qwigomakwmyiwkgo: asmecuqiyyswueqe: csscmcacoikwsecs: $this->uaggqsoeugksgooc($kigowwqauiumummw, $uamcoiueqaamsqma); } }
