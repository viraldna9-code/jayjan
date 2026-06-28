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

## theviraldna.mbitebyte.com (Blog)
- Live: https://theviraldna.mbitebyte.com/
- Theme: Twenty Twenty-Five (block theme)
- Home template: custom 2-column layout (home.html)
- Pages: About (6), Contact (11), Privacy (3)
- Posts: 6 live (IDs 26, 48, 49, 50, 51 + default)
- Plugin: vdna-seo.php v1.2.0 (SEO, meta tags, footer JS, sidebar, CSS)
- OG image: wp-content/uploads/2026/06/viraldna-og-default.jpg
- GSC: verified + sitemap submitted
- FTP: church@mbitebyte.com @ 45.199.139.16:21 (old, working)
- NEW FTP FAILING: theviraldna@mbitebyte.com (530 error)
- Auth: wordpress_publisher.py uses cookie + nonce (Basic auth returns 444)

## Thumbnail Pipeline (v22.1)
- NewsPayload strips " - Source Name" from Google News RSS titles (35+ known sources)
- Category " ai " has spaces to avoid matching Indian names

## Cron Jobs
- Morning Publish: 9AM IST (30 1 * * * UTC)
- Evening Publish: 7PM IST (30 11 * * * UTC)
- Channel Health Monitor: every 2h
- Daily Analytics: 6AM IST
- Weekly Analytics: Sun 6AM

## Key Files
- /home/jay/ViralDNA/docs/PRODUCTION.md
- /home/jay/ViralDNA/docs/PRODUCTION_HANDOFF.md
- /home/jay/ViralDNA/docs/CRON_REGISTRY.md
- /home/jay/ViralDNA/CHANGELOG.md
- /tmp/vdna-seo-v120.php — latest plugin source
- /tmp/vdna-home-new.html — latest home template
