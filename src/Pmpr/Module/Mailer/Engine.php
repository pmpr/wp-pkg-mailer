<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d7732930d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use WP_Error; class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\x69\156\151\x74", [$this, "\x79\145\x79\151\x67\x75\171\x65\147\155\155\171\x75\163\x65\x61"])->qcsmikeggeemccuu("\160\150\160\x6d\x61\x69\154\145\162\x5f\151\x6e\x69\x74", [$this, "\145\x75\x67\x77\x73\153\x77\143\161\165\x75\x79\171\x61\x79\151"])->qcsmikeggeemccuu("\167\x70\137\x6d\x61\x69\x6c\x5f\x66\141\x69\x6c\x65\144", [$this, "\x6b\161\x73\157\x67\161\141\x61\x61\x69\161\x67\x69\x63\x75\x6d"]); } public function yeyiguyegmmyusea() { if ($this->omimwscgequgiaue()) { goto kuicqywysciceggs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\145\x74\164\151\156\x67", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->cimaucgayqyyccoc(sprintf(__("\x53\x4d\124\x50\40\115\x61\151\154\x65\x72\40\143\141\x6e\x6e\157\x74\x20\163\145\x6e\144\40\145\155\x61\151\154\40\165\x6e\x74\x69\x6c\x20\x79\x6f\x75\40\x65\x6e\x74\x65\x72\40\x79\157\165\x72\x20\143\162\145\x64\x65\x6e\x74\x69\x61\154\x73\x20\151\156\40\x74\x68\x65\40\x25\163\x2e", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\154\154\x2d\x6d\141\151\154\x65\162\55\143\x72\145\144\145\156\x74\x69\141\x6c\163", self::imkacwmiuiykyuim); kuicqywysciceggs: } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if (!($ockoeumsksqeoiyo instanceof PHPMailer && $this->omimwscgequgiaue())) { goto yowsmsiyimmimemc; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->SetFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!("\x6e\x6f\156\x65" !== $eckgoogkykaiwqyi)) { goto mkwskuycuyguqqok; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; mkwskuycuyguqqok: $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto eqkauqciwewmgeoi; } $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::geykwwgimueicgig); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto sciwggaeogcoesiu; } $ockoeumsksqeoiyo->Username = $yewiaiaauukwsgku; $ockoeumsksqeoiyo->Password = $qqwegysogaocgeww; sciwggaeogcoesiu: eqkauqciwewmgeoi: $ockoeumsksqeoiyo->Timeout = 10; if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto kwagwqyusyiyoaqs; } $ockoeumsksqeoiyo->SMTPDebug = 2; kwagwqyusyiyoaqs: $ockoeumsksqeoiyo->SMTPAutoTLS = false; } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } yowsmsiyimmimemc: } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!$iswcokucwmiosiaq instanceof WP_Error) { goto iomcaiwewsawiamu; } if (!($iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\160\137\155\141\151\154\x5f\146\x61\x69\x6c\145\144"]) && is_array($iswcokucwmiosiaq->errors["\x77\x70\137\x6d\x61\x69\154\x5f\146\x61\151\154\145\144"]))) { goto kiqogmwcgcamwiig; } $this->ciyuwccsawgygkie(implode("\40\174\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); kiqogmwcgcamwiig: iomcaiwewsawiamu: } private function omimwscgequgiaue() : bool { return $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu) && $this->weysguygiseoukqw(Setting::emawkokeeikckeym) && $this->weysguygiseoukqw(Setting::geykwwgimueicgig) && $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); } }