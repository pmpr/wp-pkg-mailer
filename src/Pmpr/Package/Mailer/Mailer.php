<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f1581e61d52             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\SMTP; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Notice; use WP_Error; class Mailer extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto cuykwgmswkskqkyi; } parent::__construct(); $this->iemaakgqgqosiecm(); cuykwgmswkskqkyi: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\151\x6e\x69\164", [$this, "\x79\145\x79\151\147\x75\x79\x65\x67\x6d\155\x79\x75\x73\x65\141"])->qcsmikeggeemccuu("\x70\150\160\x6d\141\x69\x6c\x65\x72\137\151\156\x69\x74", [$this, "\145\x75\147\x77\x73\153\x77\143\x71\165\165\171\171\x61\171\151"])->qcsmikeggeemccuu("\167\x70\x5f\x6d\141\151\x6c\x5f\x66\141\x69\x6c\145\x64", [$this, "\153\161\x73\157\147\161\141\141\x61\151\x71\x67\151\143\165\x6d"]); } public function iemaakgqgqosiecm() { if (!is_admin()) { goto kuicqywysciceggs; } Ajax::symcgieuakksimmu(); Asset::symcgieuakksimmu(); kuicqywysciceggs: } public function yeyiguyegmmyusea() { if ($this->omimwscgequgiaue()) { goto mkwskuycuyguqqok; } $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\146" => $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()], __("\123\x65\x74\x74\151\156\147", PR__PKG__MAILER)); Notice::iswcokucwmiosiaq(sprintf(__("\123\115\x54\x50\x20\x4d\x61\x69\x6c\x65\x72\40\143\141\x6e\x6e\157\x74\x20\163\145\156\x64\40\x65\x6d\141\151\154\x20\165\x6e\164\x69\154\40\171\157\x75\x20\145\156\164\145\x72\40\x79\x6f\x75\x72\40\x63\x72\145\144\x65\x6e\x74\151\x61\154\x73\x20\x69\156\40\164\150\x65\x20\45\163\56", PR__PKG__MAILER), $iwywmkygwewiamwm), "\155\141\x69\154\145\x72\55\156\157\x74\151\143\x65"); mkwskuycuyguqqok: } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if (!$iswcokucwmiosiaq instanceof WP_Error) { goto eqkauqciwewmgeoi; } if (!($iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\160\x5f\155\x61\151\154\137\x66\x61\151\154\x65\144"]) && is_array($iswcokucwmiosiaq->errors["\167\x70\x5f\x6d\141\151\x6c\137\146\x61\151\x6c\145\144"]))) { goto sciwggaeogcoesiu; } $this->ciyuwccsawgygkie(implode("\x20\174\40", $this->wsmkmgikcacikiwe($iswcokucwmiosiaq))); sciwggaeogcoesiu: eqkauqciwewmgeoi: } public function owwcwsecusswscak(&$ockoeumsksqeoiyo) { if (!($ockoeumsksqeoiyo instanceof PHPMailer && $this->omimwscgequgiaue())) { goto sqiciiuwmykocycc; } try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->SetFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (!("\x6e\x6f\x6e\x65" !== $eckgoogkykaiwqyi)) { goto kwagwqyusyiyoaqs; } $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; kwagwqyusyiyoaqs: $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto kiqogmwcgcamwiig; } $yewiaiaauukwsgku = $this->amcquiasoqygoyuc(); $qqwegysogaocgeww = $this->iuqugigaawguosig(); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto yowsmsiyimmimemc; } $ockoeumsksqeoiyo->Username = $yewiaiaauukwsgku; $ockoeumsksqeoiyo->Password = $qqwegysogaocgeww; yowsmsiyimmimemc: kiqogmwcgcamwiig: $ockoeumsksqeoiyo->Timeout = 10; if (!ManipulateSetting::esoowymaimwcuecq()) { goto iomcaiwewsawiamu; } $ockoeumsksqeoiyo->SMTPDebug = SMTP::sgqyeicymcsmiaai; iomcaiwewsawiamu: $ockoeumsksqeoiyo->SMTPAutoTLS = false; } catch (Exception $wgaoewqkwgomoaai) { $this->saqqeqmcyyoeqici($this->kyacickkomkioeyu($wgaoewqkwgomoaai)); } sqiciiuwmykocycc: } }
