<?php
declare(strict_types=1);

/*
 * Vindora Smart Business Card — Mohammed Ismail
 * Upload this file to your website root as mohammed.php.
 * Add the rewrite rule from .htaccess-snippet.txt to enable /mohammed.
 */
$phone = '+201287115027';
$phoneDigits = '201287115027';
$email = 'mohhammedismail96@gmail.com';
$facebook = 'https://facebook.com/qf9.6x';
$instagram = 'https://instagram.com/qf9.6';
$website = 'https://vindora.whf.bz/';
$profileUrl = 'https://vindora.whf.bz/mohammed';
$qrPath = __DIR__ . '/mohammed-qr.png';
$qrData = is_file($qrPath) ? 'data:image/png;base64,' . base64_encode((string)file_get_contents($qrPath)) : '';
$vcf = "BEGIN:VCARD\r\nVERSION:3.0\r\nN:Ismail;Mohammed;;;\r\nFN:Mohammed Ismail\r\nORG:Vindora\r\nTITLE:Founder of Vindora\r\nTEL;TYPE=CELL,VOICE:+201287115027\r\nEMAIL;TYPE=INTERNET:mohhammedismail96@gmail.com\r\nURL:https://vindora.whf.bz/\r\nURL:https://facebook.com/qf9.6x\r\nURL:https://instagram.com/qf9.6\r\nEND:VCARD\r\n";
if (isset($_GET['contact']) && $_GET['contact'] === '1') {
    header('Content-Type: text/vcard; charset=utf-8');
    header('Content-Disposition: attachment; filename="Mohammed-Ismail.vcf"');
    echo $vcf;
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#111A32">
<meta name="description" content="Mohammed Ismail — Founder of Vindora. Save contact details and connect.">
<meta property="og:title" content="Mohammed Ismail | Founder of Vindora">
<meta property="og:description" content="Connect with Mohammed Ismail, Founder of Vindora.">
<meta property="og:url" content="<?= htmlspecialchars($profileUrl, ENT_QUOTES, 'UTF-8') ?>">
<title>Mohammed Ismail | Founder of Vindora</title>
<style>
:root{--navy:#111A32;--purple:#7040F5;--white:#fff;--muted:#aeb6ca}
*{box-sizing:border-box}body{margin:0;min-height:100vh;background:radial-gradient(ellipse at 50% -10%,#30205f 0%,var(--navy) 48%,#090f20 100%);color:var(--white);font-family:Inter,Arial,sans-serif;display:flex;align-items:center;justify-content:center;padding:28px 16px}
.card{width:100%;max-width:440px;border:1px solid rgba(255,255,255,.13);border-radius:28px;background:linear-gradient(155deg,rgba(255,255,255,.10),rgba(255,255,255,.035));box-shadow:0 24px 80px rgba(0,0,0,.38);padding:32px 25px;text-align:center;backdrop-filter:blur(14px)}
.brand{display:inline-flex;align-items:center;gap:9px;font-size:20px;font-weight:800;letter-spacing:.2px;margin-bottom:28px}.brand-mark{width:12px;height:12px;background:var(--purple);display:inline-block;border-radius:2px}
.monogram{width:76px;height:76px;margin:0 auto 18px;border-radius:22px;background:linear-gradient(135deg,var(--purple),#4b26bd);display:grid;place-items:center;font-size:27px;font-weight:800;box-shadow:0 10px 30px rgba(112,64,245,.28)}
h1{font-size:27px;margin:0 0 8px;letter-spacing:.2px}.role{color:#c6cce0;font-size:14px;margin-bottom:26px}.rule{height:1px;background:rgba(255,255,255,.12);margin:0 0 22px}
.links{display:grid;gap:11px}.link{min-height:50px;border-radius:14px;padding:14px 16px;text-decoration:none;color:white;background:rgba(255,255,255,.075);border:1px solid rgba(255,255,255,.08);font-size:14px;font-weight:650;display:flex;align-items:center;justify-content:center;transition:.2s}.link.primary{background:var(--purple);border-color:var(--purple)}.link:hover{transform:translateY(-2px);filter:brightness(1.08)}
.social{display:grid;grid-template-columns:1fr 1fr;gap:11px}.social .link{font-size:13px}
.qr{margin:25px auto 0;padding:12px;background:white;border-radius:16px;width:148px;height:148px}.qr img{width:100%;height:100%;object-fit:contain}.qr-note{font-size:11px;color:var(--muted);margin-top:9px}
.footer{margin-top:25px;color:#909bb5;font-size:11px}.footer a{color:#c9baff;text-decoration:none}
@media(max-width:360px){.card{padding:27px 18px}h1{font-size:24px}}
</style>
</head>
<body>
<main class="card">
  <div class="brand">Vindora <span class="brand-mark"></span></div>
  <div class="monogram" aria-hidden="true">MI</div>
  <h1>Mohammed Ismail</h1>
  <div class="role">Founder of Vindora</div>
  <div class="rule"></div>
  <div class="links">
    <a class="link primary" href="<?= htmlspecialchars($website, ENT_QUOTES, 'UTF-8') ?>">Visit Vindora Website</a>
    <a class="link" href="tel:<?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?>">Call <?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?></a>
    <a class="link" href="https://wa.me/<?= $phoneDigits ?>">WhatsApp</a>
    <a class="link" href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">Email</a>
    <div class="social">
      <a class="link" href="<?= htmlspecialchars($facebook, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">Facebook</a>
      <a class="link" href="<?= htmlspecialchars($instagram, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">Instagram</a>
    </div>
    <a class="link" href="?contact=1">Save Contact</a>
  </div>
  <?php if ($qrData !== ''): ?>
  <div class="qr"><img src="<?= $qrData ?>" alt="QR code for Mohammed Ismail's digital business card"></div>
  <div class="qr-note">Scan to open this digital business card</div>
  <?php endif; ?>
  <div class="footer">Your Partner in Digital Commerce Success<br><a href="<?= htmlspecialchars($website, ENT_QUOTES, 'UTF-8') ?>">vindora.whf.bz</a></div>
</main>
</body>
</html>
