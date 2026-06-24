# ViralDNA Memory

## Project Overview
- Autonomous Telugu newsroom pipeline
- 73+ Python modules
- Current version: v83.0
- GCP Project: theviraldna
- GitHub: viraldna9-code/ViralDNA
- Local: /home/jay/ViralDNA/

## Production Policy
- Once videos published to YouTube: NEVER delete (permanent no-delete policy)
- Upload currently DISABLED (manual review mode)
- Videos go to /home/jay/ViralDNA/videos/ after pipeline run

## YouTube
- Channel: "The ViralDNA" (UCkW7fqkJiaej2PeNcP4PejQ)
- Category: 25 (News & Politics)
- Privacy: private
- OAUTH: Manual terminal flow only (PKCE challenge binds URL+code to same process)

## Thumbnail Pipeline (v22.1)
- NewsPayload strips " - Source Name" from Google News RSS titles (35+ known sources)
- Category " ai " has spaces to avoid matching Indian names

## Cron Jobs
- Morning Publish: 9AM IST (30 1 * * * UTC)
- Evening Publish: 7PM IST (30 11 * * * UTC)
- Channel Health Monitor: every 2h
- Daily Analytics: 6AM IST
- Weekly Analytics: Sun 6AM

## Person-Image Fix (v82.4)
- 3-layer defense: text check → keyword overlap → Gemini Vision
- Text-first to avoid burning API quota
- Fail-closed on 429 rate limit
- Keyword overlap < 10% rejects unrelated images

## Serper Keys
- Primary + backup in ~/.env
- 40-char format with X-API-KEY header

## Key Files
- /home/jay/ViralDNA/docs/PRODUCTION.md
- /home/jay/ViralDNA/docs/PRODUCTION_HANDOFF.md
- /home/jay/ViralDNA/docs/CRON_REGISTRY.md
- /home/jay/ViralDNA/CHANGELOG.md
