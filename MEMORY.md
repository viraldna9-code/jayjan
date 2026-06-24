# Consolidated Project Memory

## ViralDNA (VDNA)
- **GitHub**: viraldna9-code/ViralDNA
- **Local**: /home/jay/ViralDNA/
- **Channel**: The ViralDNA (UCkW7fqkJiaej2PeNcP4PejQ)
- **Purpose**: Autonomous Telugu newsroom, video generation pipeline
- **Current version**: v83.0
- **Upload**: DISABLED (manual review mode)
- **Key modules**: 100+ Python modules (trend discovery, script gen, voiceover, video assembly, thumbnail, analytics, notifications, SEO)
- **Cron jobs**: Morning Publish (9AM IST), Evening Publish (7PM IST), Channel Health Monitor (every 2h), Daily Analytics (6AM IST), Weekly Analytics (Sun 6AM)

## MBite
- **Local**: /home/jay/mbite/
- **Live**: https://mbitebyte.com
- **Hosting**: MilesWeb shared hosting (LiteSpeed), 45.199.139.16
- **Theme**: wp-content/themes/mbitebyte/
- **Purpose**: Corporate website with Pulse page (YouTube RSS sync), chatbot
- **Rebrand**: "MBiteByte" → "M Bite - Byte"
- **Key features**: YouTube RSS feed sync (hourly), chatbot (Hermes-powered), Google Search Console integrated

## Key Decisions

- Memory storage: Git repo (jayjan) — NOT Hermes local memory
- Hermes memory: Only 2 pointer entries
- All changes: Committed to jayjan repo
- Session recovery: Read from jayjan repo

## Status

- VDNA upload: DISABLED (manual review)
- MBite Pulse: Active, syncing from YouTube RSS
- Google Search Console: Configured for mbitebyte.com
