# ViralDNA Memory

## Project Overview
- Autonomous Telugu newsroom pipeline
- 73+ Python modules
- Current version: v96.0 (3.0 pipeline)
- GCP Project: theviraldna
- GitHub: viraldna9-code/ViralDNA
- Local: /home/jay/ViralDNA/

## Production Policy
- Once videos published to YouTube: NEVER delete (permanent no-delete policy)
- Upload enabled on explicit request (VIRALDNA_UPLOAD_ENABLED=true flag)
- Videos go to /home/jay/ViralDNA/video_output/ after pipeline run

## YouTube
- Channel: "The ViralDNA" (UCkW7fqkJiaej2PeNcP4PejQ)
- Handle: @TheViralDNA
- Subscribe: https://youtube.com/@TheViralDNA?sub_confirmation=1
- Category: 25 (News & Politics)
- Privacy: private
- OAUTH: Manual terminal flow only (PKCE challenge binds URL+code to same process)

## theviraldna.mbitebyte.com (Blog — Phase 1 COMPLETE)
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
- SEO: keyword_research.py module — dynamic Google Trends + YouTube autocomplete
  research, applied to blog H1 (`{title} | {keyword}`) and YouTube title
- Status: ALL 2026-06-29 SEO fixes deployed (Errors #8, #9, #10 complete)

## Thumbnail Pipeline (v22.1)
- NewsPayload strips " - Source Name" from Google News RSS titles (35+ known sources)
- Category " ai " has spaces to avoid matching Indian names

## Cron Jobs
- Morning Publish: 9AM IST (30 1 * * * UTC)
- Evening Publish: 7PM IST (30 11 * * * UTC)
- Channel Health Monitor: every 2h
- Daily Analytics: 6AM IST
- **Weekly CSV Download**: Mon 10AM IST (cron 08f2e0ae8960) → download 3 Studio reports (Video Performance, Traffic Sources, Engagement) → run `python3 scripts/ingest_studio_csv.py`. Started Jun 29 2026.
- Weekly Analytics: Sun 6AM

## Key Files
- /home/jay/ViralDNA/docs/PRODUCTION.md
- /home/jay/ViralDNA/docs/PRODUCTION_HANDOFF.md
- /home/jay/ViralDNA/docs/CRON_REGISTRY.md
- /home/jay/ViralDNA/CHANGELOG.md
- /tmp/vdna-seo-v120.php — latest plugin source
- /tmp/vdna-home-new.html — latest home template
