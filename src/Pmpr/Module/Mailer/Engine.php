<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d8214aef01             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use WP_Error; class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\x79\x65\171\x69\147\165\x79\x65\x67\155\x6d\x79\165\x73\145\141"])->qcsmikeggeemccuu("\x70\x68\x70\x6d\141\x69\154\145\162\137\x69\156\x69\164", [$this, "\x65\165\x67\167\x73\x6b\x77\143\161\x75\165\171\x79\x61\x79\x69"])->qcsmikeggeemccuu("\x77\x70\137\x6d\141\x69\x6c\137\x66\141\x69\x6c\145\144", [$this, "\153\x71\163\x6f\x67\161\141\141\x61\x69\161\147\x69\143\x75\155"]); } public function yeyiguyegmmyusea() { if ($this->omimwscgequgiaue()) { goto kuicqywysciceggs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\x65\x74\164\x69\156\147", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->cimaucgayqyyccoc(sprintf(__("\x53\x4d\124\120\x20\115\x61\151\x6c\x65\x72\x20\143\x61\156\156\157\x74\x20\x73\145\x6e\x64\40\x65\155\x61\x69\x6c\40\x75\156\x74\x69\154\x20\171\157\165\40\x65\x6e\x74\x65\162\40\x79\x6f\165\x72\40\143\x72\145\x64\x65\x6e\x74\x69\141\x6c\163\40\151\156\x20\x74\x68\145\40\45\x73\x2e", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\154\154\x2d\155\x61\151\154\x65\x72\x2d\143\162\x65\x64\x65\156\164\x69\x61\x6c\163", self::imkacwmiuiykyuim); kuicqywysciceggs: } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!($ockoeumsksqeoiyo instanceof PHPMailer && $this->omimwscgequgiaue())) { goto yowsmsiyimmimemc; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->SetFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!("\156\x6f\156\x65" !== $eckgoogkykaiwqyi)) { goto mkwskuycuyguqqok; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; mkwskuycuyguqqok: $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto eqkauqciwewmgeoi; } $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::geykwwgimueicgig); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto sciwggaeogcoesiu; } $ockoeumsksqeoiyo->Username = $yewiaiaauukwsgku; $ockoeumsksqeoiyo->Password = $qqwegysogaocgeww; sciwggaeogcoesiu: eqkauqciwewmgeoi: $ockoeumsksqeoiyo->Timeout = 10; if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto kwagwqyusyiyoaqs; } $ockoeumsksqeoiyo->SMTPDebug = 2; kwagwqyusyiyoaqs: $ockoeumsksqeoiyo->SMTPAutoTLS = false; } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } yowsmsiyimmimemc: } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!$iswcokucwmiosiaq instanceof WP_Error) { goto iomcaiwewsawiamu; } if (!($iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\x77\160\x5f\x6d\x61\151\154\137\x66\141\x69\x6c\145\144"]) && is_array($iswcokucwmiosiaq->errors["\167\160\137\x6d\141\151\x6c\x5f\146\141\x69\154\145\144"]))) { goto kiqogmwcgcamwiig; } $this->ciyuwccsawgygkie(implode("\x20\x7c\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); kiqogmwcgcamwiig: iomcaiwewsawiamu: } private function omimwscgequgiaue() : bool { return $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu) && $this->weysguygiseoukqw(Setting::emawkokeeikckeym) && $this->weysguygiseoukqw(Setting::geykwwgimueicgig) && $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); } }
