<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663038660df5c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; class Gmail extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\151\x6e\151\x74"]); } public function mameiwsayuyquoeq() { if (!("\147\155\141\x69\x6c" === Setting::symcgieuakksimmu()->guseqygmqcgeyigi())) { goto sciwggaeogcoesiu; } Engine::symcgieuakksimmu(); sciwggaeogcoesiu: } public function init() { if (!($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() && Setting::symcgieuakksimmu()->euuuueemkqgqkqae())) { goto eequksumcoogyoem; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); switch ($eiicaiwgqkgsekce->gkwaaeusmsaywikg(self::uqgcmmosieyimiku)) { case self::yckkaiueuoiicisc: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); if (!($ymacoouqwcqwwagu = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(self::vswoiouoaykswgym, '', true))) { goto iomcaiwewsawiamu; } $eeaukqkuswaqwayu = $aswseewakkcwywqa->ceeskwyicggwsows($ymacoouqwcqwwagu); if (!empty($eeaukqkuswaqwayu)) { goto yowsmsiyimmimemc; } $this->cimaucgayqyyccoc(__("\101\143\143\145\x73\163\40\143\x6f\x75\154\144\40\156\157\164\40\x62\x65\x20\147\x72\141\x6e\164\x65\144\x21", PR__MDL__MAILER), "\x6d\141\151\x6c\x65\x72\x5f\147\162\141\156\164"); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $this->cimaucgayqyyccoc(__("\x41\x63\x63\145\x73\163\40\147\162\x61\x6e\x74\x65\x64\40\163\165\x63\x63\x65\x73\x73\146\x75\154\x6c\171\x21", PR__MDL__MAILER), "\x6d\141\151\154\x65\162\137\x67\162\141\156\164", self::ckcawaoawwioqecq); kiqogmwcgcamwiig: iomcaiwewsawiamu: goto eqkauqciwewmgeoi; case self::oiugqmossekuqeia: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); $sogksuscggsicmac = $aswseewakkcwywqa->usmqosmqgoscmckk(); if (!isset($sogksuscggsicmac[self::ewmyoqeiikakqqmk])) { goto sqiciiuwmykocycc; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom(esc_url_raw($sogksuscggsicmac[self::ewmyoqeiikakqqmk])); sqiciiuwmykocycc: goto eqkauqciwewmgeoi; } kwagwqyusyiyoaqs: eqkauqciwewmgeoi: eequksumcoogyoem: } }