# MBite — Discussion Notes

## 2026-06-25 (church.mbitebyte.com fix)
- Fixed broken navigation menu on church subdomain
- Root cause: WordPress menu was configured with CPT permalink URLs (/teachings/) that 404'd because the theme is a single-page app with #anchor sections
- Fix: Replaced menu items with custom nav_menu items using #anchor links (#home, #about, #teachings, #services, #events, #ministries, #give, #prayer, #contact)
- Also flushed rewrite rules so /teachings/ CPT archive works (fm_sermon CPT → /teachings/ archive page)
- All 9 pages now return HTTP 200
- Theme: faithful-messenger (custom theme, not a third-party theme)
- Server: MilesWeb LiteSpeed, PHP 8.2.31
- DB: torque_520_cHyV / torque_520_ZxRg
- FTP: church@mbitebyte.com (port 21) — works with lftp, no SSH access
- No SSH access available — fixes done via PHP scripts uploaded via FTP

## 2026-06-24
- Created "jayjan" centralized memory repo
- Migrated all memory from Hermes local to git repo

## Key Architectural Decisions
- Pulse page uses YouTube RSS feed, NOT VDNA pipeline
- generate-pulse-feed.php made no-op (safety measure)
- Standalone cron-refresh-pulse.php for server-level cron
- Old mbitebyte_refresh_pulse WP-Cron event removed from DB
