# MEMORY.md — Consolidated Project Memory

## Active Projects

### ViralDNA (VDNA 3.0)
- Pipeline: v96.0, 73+ modules, 86/86 compile
- YouTube: @TheViralDNA (UCkW7fqkJiaej2PeNcP4PejQ)
- Videos: 88 files on disk (29 mains + 58 shorts), 16 YouTube published
- **Production policy**: NO DELETE after YouTube publish
- Upload: manual agent (VIRALDNA_UPLOAD_ENABLED=false)
- Changelog: `projects/vdna/changes.md`

### theviraldna.mbitebyte.com (Blog — Phase 1 COMPLETE)
- Live: https://theviraldna.mbitebyte.com/
- Theme: Twenty Twenty-Five (block theme)
- FTP: church@mbitebyte.com / hj8NZwq6#q$c @ 45.199.139.16:21
- WP Admin: theviraldna_admin / b7qNRCsG93b!
- Plugin: vdna-seo.php v1.2.0 (SEO, meta, footer JS, sidebar, CSS fixes)
- Home: 2-column layout (75% posts + 25% sidebar), compact post list
- Pages: About(6), Contact(11), Privacy(3) — all fixed (h1→h2, content populated)
- Posts: 6 live (backfilled 4 from YouTube)
- GSC: verified + sitemap submitted (success)
- .htaccess: security headers added
- Default OG: viraldna-og-default.jpg
- Layout fixes applied: "Blog" h1 hidden, text-wrap CSS, overflow-x hidden, h1→h2 dedup
- Publisher: wordpress_publisher.py (cookie + nonce auth, NOT basic auth)
- Status: ALL 2026-06-26 fixes deployed

### church.mbitebyte.com
- Faithful Messenger WP theme
- FTP same server (church@mbitebyte.com)
- Theme: wp-content/themes/faithful-messenger/

### mbitebyte.com (MBite Corporate)
- Pulse page syncing from YouTube RSS
- GSC verified, sitemap active

## Key Environment
- Hosting: MilesWeb shared (LiteSpeed), IP 45.199.139.16
- WSL: /home/jay working directory
- Git: /home/jay/jayjan (all memory here)
- Hermes profile: default

## Important Rules
- RVC voice: NEVER modify system, halt on any crash
- YouTube: manual OAUTH in WSL terminal only
- WP REST API: cookie + nonce (basic auth = 444)
- LiteSpeed cache purge: admin-ajax.php?action=litespeed_purge_all
- File editor broken — use FTP (lftp) for all WP file changes
