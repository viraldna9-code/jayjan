# MEMORY.md — Consolidated Project Memory

## Active Projects

### ViralDNA (VDNA 4.0 — current as of 2026-06-30)
- Entry: `python3 run_vdna4.py` (STRICT mode default)
- Director: `modules/vdna4_director.py` (class `VDNA4Director`)
- 11 phases (0-10) + 6 validation sub-phases, no skipping allowed
- Fixed VDNA 3.0 bugs: 29 duplicate skills keys, 8 duplicate imports, class name mismatch
- Skills: 19 modules loaded (each key EXACTLY ONCE — no dedup bugs)
- YouTube: @TheViralDNA (UCkW7fqkJiaej2PeNcP4PejQ)
- Videos: 88 files on disk (29 mains + 58 shorts), 16 YouTube published
- **Production policy**: NO DELETE after YouTube publish
- Upload: manual agent (VIRALDNA_UPLOAD_ENABLED=false)
- **Weekly CSV download**: Every Monday 10AM IST → download 3 YouTube Studio reports → `scripts/ingest_studio_csv.py`. Cron ID: 08f2e0ae8960
- **Analytics**: data_guard.py blocks fabrication — only answers from real data
- **Publish schedule**: main +1hr, shorts +30min after upload (relative timing)
- **Thumbnails**: large centered text (80px max), vertically+horizontally centered
- VDNA 3.0 kept for reference: `run_vdna3.py` + `modules/vdna2_director.py`
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
- SEO: keyword_research.py — dynamic Google Trends + YouTube autocomplete
  research, applied to blog H1 (`{title} | {keyword}`) and YouTube title
- Status: ALL 2026-06-29 SEO fixes deployed (Errors #8, #9, #10 complete)

### church.mbitebyte.com
- Faithful Messenger WP theme
- FTP same server (church@mbitebyte.com)
- Theme: wp-content/themes/faithful-messenger/

### mbitebyte.com (MBite Corporate)
- **Pulse page = client-facing technical showcase** (NOT YouTube RSS feed as of Jun 28)
  - 3 inline deep-dives: Architecture, Voice AI, End-to-End Pipeline
  - 10-phase pipeline diagram, hero stats, CTA
  - Template at theme root: page-pulse.php (450 lines)
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
