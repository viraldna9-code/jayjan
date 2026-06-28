# MBite — Changes Log

## v1.4.3 (Jun 28, 2026)
- Pulse page restructured from YouTube RSS auto-sync to **client-facing technical showcase**
- page-pulse.php: complete rewrite (450 lines, 31.8KB) — Hero stats, Featured Deep-Dive, 3 expandable insight posts (Architecture, Voice AI, End-to-End), 10-Phase Pipeline diagram, CTA
- Technical deep-dives embedded as inline PHP functions (not separate WP posts):
  - Architecture: checkpoint/resume, weighting algorithm, fault isolation, stack overview
  - Voice AI: RVC cloning, Fish Speech, fallback chain, why generic TTS fails
  - End-to-End: all 10 phases with real timing data (40 min total)
- header.php: Pulse SEO title → "Pulse — AI Pipeline Technical Showcase | M Bite - Byte"
- Deploy script fixed: page-pulse.php path corrected from templates/ to root
- Stale templates/page-pulse.php removed
- FTP upload unblocked — direct deploy.py working again

## v1.4.2 (Jun 24, 2026)
- Activated MBiteByte v2.0.0 theme (replaced broken faithful-messenger)
- Removed church.mbitebyte.com WordPress install
- Deleted leftover test/deploy scripts from server root

## v1.4.1 (Jun 22, 2026)
- Sitemap fix: XML validation + video thumbnails
- HTML entity decoding for video descriptions

## v1.4.0 (Jun 17, 2026)
- Work page: client showcase with 10 case studies
- Home page: "Proof, Not Promises" section
- Chatbot: Work page context responses

## Earlier Versions
- See /home/jay/mbite/CHANGELOG.md for full history
