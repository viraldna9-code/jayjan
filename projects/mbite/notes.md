# MBite — General Notes

## Theme Files
- functions.php: Main theme functions (sitemap, chatbot, nav, hybrid AI)
- header.php: Header with branded animated favicon + SEO per-page meta
- page-pulse.php: **Technical showcase** (NOT YouTube RSS — restructured Jun 28)
  - Located at THEME ROOT (not templates/)
  - 450 lines: hero stats, featured deep-dive, 3 expandable insight posts, pipeline diagram, CTA
- main.js: Chatbot JS (bbai* identifiers)
- style.css: Styles with .blink animation + interactivity CSS
- interactions.js: Site-wide interactivity (ripple, tilt, magnetic, scroll progress)
- interactions.css: Companion styles for interactions

## Server
- LiteSpeed web server
- WordPress root = server root
- Theme at wp-content/themes/mbitebyte/

## Deploy
- FTP: church@mbitebyte.com @ 45.199.139.16:21
- Deploy script: scripts/deploy.py (run from /home/jay/mbite/)
- IMPORTANT: page-pulse.php deploys from THEME ROOT, not templates/
- Usage: MBITE_FTP_PASS='mOninishchal@1' python3 scripts/deploy.py <file>

## YouTube Integration (Blog Only — NOT Pulse)
- theviraldna.mbitebyte.com: blog posts for SEO/channel growth
- Pulse page is now standalone technical content (no YouTube dependency)
