<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-20 01:47:48              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace Pixup; use Pixup\Auth; use Pixup\Pix; use Dotenv\Dotenv; class Pixup { public $auth; public $pix; public function __construct(array $SGH2Y = array()) { goto JdpAS; JdpAS: if (!file_exists(__DIR__ . "\57\56\56\57\x2e\145\156\166")) { goto H3U7n; } goto V1VDV; L3OSP: H3U7n: goto Gihk_; Gihk_: $this->auth = new Auth($SGH2Y); goto Bmb3z; Bmb3z: $this->pix = new Pix($this->auth); goto LS88m; btO46: $USiS9->load(); goto L3OSP; V1VDV: $USiS9 = \Dotenv\Dotenv::iM9br(__DIR__ . "\57\x2e\56\x2f"); goto btO46; LS88m: } }
