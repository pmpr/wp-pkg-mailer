<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630faf770d42             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Google\Service\Gmail; use WP_Error; class OAuth extends Common { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (!empty($this->client)) { goto usqgaogkqgemuima; } $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\x68\164\x74\160\163\72\57\57\x6d\141\x69\154\x2e\147\x6f\x6f\x67\x6c\145\56\x63\x6f\x6d\57"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\157\146\146\x6c\x69\156\145"); usqgaogkqgemuima: return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (!is_wp_error($eeaukqkuswaqwayu)) { goto mswsoaimesegiiic; } $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->oaumimwssciwumys("\x4d\x61\x69\x6c\145\x72\72\40\103\x61\156\x20\156\157\x74\x20\141\165\x74\x68\x65\156\x74\x69\x63\x61\164\145\x2c\x20\x6c\x65\164\x73\x20\x67\x6f\40\164\x6f\x20\x61\x75\x74\150\157\x72\151\x7a\x65", [$coewqcmgkkmawigm]); return [self::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; mswsoaimesegiiic: return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!(!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu))) { goto kecwuwwcwokuksyq; } if (!(isset($eeaukqkuswaqwayu["\x65\162\162\x6f\162"]) || isset($eeaukqkuswaqwayu["\x65\162\162\157\x72\x5f\144\145\163\143\162\151\x70\x74\151\157\x6e"]))) { goto egasokooagakisiy; } $this->oaumimwssciwumys("\115\x61\151\154\x65\x72\72\x20\x45\x72\x72\157\162\x20\x6f\156\x20\x66\x65\164\x63\150\40\141\143\x63\x65\x73\163\x20\164\x6f\x6b\145\156", $eeaukqkuswaqwayu); echo "\74\x64\151\x76\x20\151\x64\x3d\x22\x6d\x65\163\163\x61\x67\145\x22\x20\x63\154\x61\x73\x73\75\42\x65\162\x72\x6f\x72\x22\x3e\x3c\160\x3e\x3c\163\164\x72\157\x6e\x67\76"; esc_html_e("\105\x72\162\x6f\162\x3a\40" . $eeaukqkuswaqwayu["\x65\x72\162\x6f\162"] . "\x2c\x20\x45\x72\162\x6f\162\x20\x44\x65\x73\x63\x72\x69\160\x74\x69\157\x6e\72\x20" . $eeaukqkuswaqwayu["\x65\x72\162\157\x72\x5f\144\145\x73\x63\162\151\160\x74\x69\x6f\x6e"], PR__MDL__MAILER); echo "\74\x2f\163\x74\x72\x6f\156\x67\x3e\x3c\57\160\x3e\x3c\x2f\x64\151\x76\x3e"; return false; egasokooagakisiy: $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; kecwuwwcwokuksyq: return false; } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (!is_wp_error($sogksuscggsicmac)) { goto qgegkeomwscwwiuw; } return false; qgegkeomwscwwiuw: if (!($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu())) { goto qmiwsequckckoaei; } $this->oaumimwssciwumys("\115\x61\x69\154\x65\x72\72\x20\x4f\x66\x66\154\151\x6e\x65\40\164\x6f\x6b\145\x6e\x20\147\145\156\x65\x72\x61\164\145\x64\x3a\40{$sswycsgkqaiomeem}"); return base64_encode("\x75\x73\145\162\x3d{$this->oauthUserEmail}\1\x61\x75\164\150\75\102\x65\141\x72\x65\x72\x20{$sswycsgkqaiomeem}\1\x1"); qmiwsequckckoaei: return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\150\164\x74\x70\x73\72\x2f\x2f\141\143\143\x6f\165\x6e\x74\163\56\x67\157\157\147\154\145\x2e\x63\x6f\x6d\x2f\157\x2f\157\141\165\x74\150\62\x2f\x74\157\x6b\145\x6e", [self::cikssaguawsukusm => ["\147\x72\141\x6e\x74\x5f\164\171\x70\145" => Setting::siumwmyaoyeyggeo, "\x63\154\151\145\156\x74\x5f\151\144" => $this->oauthClientId, "\x63\154\151\145\156\x74\137\x73\x65\x63\x72\x65\x74" => $this->oauthClientSecret, "\162\145\146\x72\x65\x73\150\137\164\x6f\153\145\x6e" => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->oaumimwssciwumys("\x4d\x61\x69\x6c\x65\x72\x3a\x20\x4f\x66\x66\x6c\x69\156\x65\x20\164\x6f\x6b\145\x6e\40\162\145\x73\165\154\164\56", $sogksuscggsicmac); return $sogksuscggsicmac["\141\x63\x63\x65\x73\x73\137\164\x6f\153\145\156"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->kmuweyayaqoeqiyw()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee); if (!empty($eeaukqkuswaqwayu)) { goto goeoymmqqqeeoime; } return new WP_Error(); goeoymmqqqeeoime: $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if (!$qcakkkwickkwyuck->isAccessTokenExpired()) { goto eiawsoasmscmqswa; } $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->oaumimwssciwumys("\115\141\151\x6c\x65\x72\72\x20\116\x65\167\40\101\x63\143\145\x73\x73\x20\x54\157\x6b\145\x6e\x20\x66\145\164\x63\150\x65\144\x20\141\156\x64\x20\x73\x61\x76\145\144\56", $eeaukqkuswaqwayu); eiawsoasmscmqswa: return $eeaukqkuswaqwayu; } }
