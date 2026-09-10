{{--
  Account Verification / Email Verification Blade template.

  Tries hard to render on every major mail client:
   - Outlook 2010–2019 (Word rendering engine): table layout, no flexbox, no <style> body rules (head @media only).
   - Gmail / GSuite (web + app): no external CSS, all styles inline; button as bulletproof VML+table.
   - Apple Mail (macOS/iOS): respects @media (max-width: ...) in <head> for fluid mobile.
   - Thunderbird, Yahoo, Hey, Protonmail: same rules apply.

  Expected variables (all are injected by the Mailable/Notification; fallbacks provided):
    $user              -> App\Models\User or any Arrayable with ->name / ->email
    $url               -> verification URL (string). Also accepted as $verificationUrl / $actionUrl.
    $appName           -> defaults to config('app.name')  (APP_NAME in .env)
    $appUrl            -> defaults to config('app.url')   (APP_URL  in .env)
    $count             -> optional, # of minutes before the link expires.  Omit = no expiry line.
    $logoUrl           -> optional. Omit = uses default home1/logo.png under APP_URL.
    $supportEmail      -> optional. Omit = "support@" + APP_URL host parse.
--}}
@php
  // ---- Variable normalization ----------------------------------------------------
  // Keeps the template tolerant to whatever the caller passes.
  $appName  = $appName  ?? config('app.name',  'Bike Parts');
  $appUrl   = $appUrl   ?? rtrim(config('app.url', 'http://localhost'), '/');
  $name     = $name     ?? (is_object($user ?? null) ? (($user->name ?? $user->first_name) ?: null) : null) ?? 'there';
  $email    = $email    ?? (is_object($user ?? null) ? ($user->email ?? null) : null) ?? '';
  $url      = $url      ?? $verificationUrl ?? $actionUrl ?? '';
  $count    = $count    ?? $expiresInMinutes ?? null;
  $logoUrl  = $logoUrl  ?? $appUrl . '/store/image/home1/logo.png';
  if (! isset($supportEmail) || $supportEmail === '') {
    $host = parse_url($appUrl, PHP_URL_HOST);
    if (! $host) $host = 'example.com';
    $supportEmail = 'support@' . $host;
  }
  // Colors used repeatedly below (kept in one place so you only tweak here).
  $primary   = '#e74c3c';  // red-orange CTA — matches the bike-parts store hero colors.
  $primaryHi = '#c0392b';  // darker hover shade (for clients that do :hover inline).
  $text      = '#1f2937';
  $muted     = '#6b7280';
  $bgBody    = '#f3f4f6';
  $bgCard    = '#ffffff';
  $border    = '#e5e7eb';
  $buttonTextColor = '#ffffff';
  $linkColor = $primary;
@endphp
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="color-scheme" content="light" />
  <meta name="supported-color-schemes" content="light" />
  <title>{{ $appName }} – Verify Your Account</title>
  {{--
    Responsive rules — only executed by capable clients (Apple Mail, Gmail web modern, etc.).
    Outlook/old clients simply ignore the whole <style> block, which is fine because the
    inline styles render the fixed-600px layout correctly even without this.
  --}}
  <style type="text/css">
    @media only screen and (max-width: 600px) {
      table.container                { width: 100% !important; }
      td.pad-outer                   { padding: 16px !important; }
      td.pad-card                    { padding: 24px !important; }
      td.logo-cell img               { width: 140px !important; height: auto !important; }
      td.cta-btn a                   { display: block !important; width: auto !important; }
      h1.heading                     { font-size: 22px !important; line-height: 1.3 !important; }
    }
    a[x-apple-data-detectors],
    .unstyle-auto-detected-links a,
    .aBn { border-bottom: 0 !important; cursor: default !important; color: inherit !important;
           text-decoration: none !important; font-size: inherit !important; font-family: inherit !important;
           font-weight: inherit !important; line-height: inherit !important; }
    button-link:hover, button-link:visited { background-color: {{ $primaryHi }} !important; }
  </style>
  {{--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]--}}
</head>
<body style="margin: 0; padding: 0; background-color: {{ $bgBody }}; min-width: 100%; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', Arial, sans-serif; color: {{ $text }}; font-size: 16px; line-height: 1.5;">
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="background-color: {{ $bgBody }}; margin: 0; padding: 0;">
    <tr>
      <td align="center" style="padding: 32px 0 32px 0;" class="pad-outer">
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="width: 600px; max-width: 600px; margin: 0 auto;" class="container">

          {{-- PRE-HEADER / PREVIEW TEXT — the 1-line "preview" next to subject in inboxes.  --}}
          <tr>
            <td style="display: none; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: {{ $bgBody }};">
              Verify your account to continue using {{ $appName }}. The link is only valid for a limited time.
              &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
              &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
            </td>
          </tr>

          {{-- HEADER / LOGO  ------------------------------------------------------------- --}}
          <tr>
            <td align="center" style="padding: 0 0 20px 0;">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
                <tr>
                  <td align="center" class="logo-cell" style="padding: 0;">
                    <a href="{{ $appUrl }}" target="_blank" style="text-decoration: none; display: inline-block;">
                      <img src="{{ $logoUrl }}" alt="{{ $appName }}" width="160" style="display: block; width: 160px; height: auto; max-height: 64px; line-height: 64px; font-size: 22px; color: {{ $text }}; font-weight: 700; text-decoration: none; border: 0; outline: none;" />
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- CARD ----------------------------------------------------------------------- --}}
          <tr>
            <td align="center" style="padding: 0;">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="background-color: {{ $bgCard }}; border: 1px solid {{ $border }}; border-radius: 8px; -webkit-border-radius: 8px; mso-border-alt: 1px solid {{ $border }};">
                <tr>
                  <td align="left" style="padding: 40px 48px 40px 48px; background-color: {{ $bgCard }}; border-radius: 8px; -webkit-border-radius: 8px;" class="pad-card">

                    {{-- Heading --}}
                    <h1 class="heading" style="margin: 0 0 16px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', Arial, sans-serif; font-size: 26px; font-weight: 700; line-height: 1.25; color: {{ $text }};">
                      Verify your account
                    </h1>

                    {{-- Salutation --}}
                    <p style="margin: 0 0 20px 0; font-size: 16px; line-height: 1.6; color: {{ $text }};">
                      Hi {{ $name }},
                    </p>

                    <p style="margin: 0 0 20px 0; font-size: 16px; line-height: 1.6; color: {{ $text }};">
                      We received a request to verify your account for your {{ $appName }} account
                      @if ($email)
                        (<span style="color: {{ $muted }};">{{ $email }}</span>)
                      @endif.
                      Click the button below to confirm this action.
                    </p>

                    {{-- BULLETPROOF CTA BUTTON — VML block for Outlook WordHTML + table/a for everyone else. --}}
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="left" style="margin: 8px 0 28px 0;">
                      <tr>
                        <td align="left" class="cta-btn"
                            style="border-radius: 6px; -webkit-border-radius: 6px; background-color: {{ $primary }};">
                          <!--[if mso]>
                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word"
                            href="{{ $url }}" style="height:48px;v-text-anchor:middle;width:280px;" arcsize="12%"
                            strokec="{{ $primary }}" fillcolor="{{ $primary }}">
                            <w:anchorlock/>
                            <center style="color:{{ $buttonTextColor }};font-family:Arial, sans-serif;font-size:16px;font-weight:600;">
                              Verify Account
                            </center>
                          </v:roundrect>
                          <![endif]-->
                          <!--[if !mso]><!-- -->
                          <a href="{{ $url }}" target="_blank"
                             style="background-color: {{ $primary }}; border: 1px solid {{ $primary }}; border-radius: 6px; -webkit-border-radius: 6px; color: {{ $buttonTextColor }}; display: inline-block; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: 600; line-height: 48px; text-align: center; text-decoration: none; width: 280px; mso-padding-alt: 0px; -webkit-text-size-adjust: none;"
                             class="button-link">
                            Verify Account
                          </a>
                          <!--<![endif]-->
                        </td>
                      </tr>
                    </table>
                    <div style="clear: both;"></div>

                    {{-- Plain link fallback (for users who can't click the styled button) --}}
                    <p style="margin: 0 0 8px 0; font-size: 14px; line-height: 1.6; color: {{ $muted }}; word-break: break-word;">
                      If the button doesn't work, copy and paste this URL into your browser:
                    </p>
                    <p style="margin: 0 0 28px 0; font-size: 14px; line-height: 1.6;">
                      <a href="{{ $url }}" target="_blank" style="color: {{ $linkColor }}; text-decoration: underline; word-break: break-all;">{{ $url }}</a>
                    </p>

                    @if (is_numeric($count))
                    <table role="presentation" cellspacing="0" cellpadding="12" border="0" width="100%" style="background-color: #fff7ed; border: 1px solid #fed7aa; border-radius: 6px; -webkit-border-radius: 6px; mso-border-alt: 1px solid #fed7aa;">
                      <tr>
                        <td style="padding: 12px 16px; font-size: 14px; line-height: 1.5; color: #9a3412;">
                          <strong style="font-weight: 700; color: #9a3412;">Security note:</strong>
                          This verification link will expire in {{ $count }} {{ \Illuminate\Support\Str::plural('minute', (int) $count) }}.
                          If you did not request this, you can safely ignore this email — your account will remain unchanged.
                        </td>
                      </tr>
                    </table>
                    @else
                    <p style="margin: 0 0 0 0; font-size: 14px; line-height: 1.6; color: {{ $muted }};">
                      If you did not request a account verification, you can safely ignore this email — your account is secure.
                    </p>
                    @endif

                  </td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- FOOTER --------------------------------------------------------------------- --}}
          <tr>
            <td align="center" style="padding: 28px 0 0 0; color: {{ $muted }}; font-size: 13px; line-height: 1.5;">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
                <tr>
                  <td align="center" style="padding: 0 0 8px 0; color: {{ $muted }}; font-size: 13px; line-height: 1.5;">
                    &copy; {{ date('Y') }} {{ $appName }}. All rights reserved.
                  </td>
                </tr>
                <tr>
                  <td align="center" style="padding: 0; color: {{ $muted }}; font-size: 13px; line-height: 1.5;">
                    <a href="{{ $appUrl }}" target="_blank" style="color: {{ $linkColor }}; text-decoration: underline;">Visit our website</a>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    <a href="mailto:{{ $supportEmail }}" style="color: {{ $linkColor }}; text-decoration: underline;">Contact support</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
