<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663336a4245b2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Generic; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine as BaseClass; class Engine extends BaseClass { public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if (!$ockoeumsksqeoiyo->SMTPAuth) { goto mqccmesakuemceqi; } $ockoeumsksqeoiyo->Username = $this->weysguygiseoukqw(Setting::geykwwgimueicgig); $ockoeumsksqeoiyo->Password = $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); mqccmesakuemceqi: return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } }
