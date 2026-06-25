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

## church.mbitebyte.com (Ministry Subdomain - Church of Christ)
- **Live**: https://church.mbitebyte.com/
- **Hosting**: MilesWeb shared hosting (LiteSpeed)
- **Vhost doc root**: `/var/www/6ea78814-8fbb-4422-9393-740e7ea2b07b/church.mbitebyte.com/`
- **MySQL**: DB=torque_520_cHyV, User=torque_520_ZxRg, Pass=[REDACTED] prefix=wp_
- **WP Admin**: https://church.mbitebyte.com/wp-login.php (admin / Ln6}Fz4.Fi4_=*)
- **Theme**: faithful-messenger (custom WP theme, local backup at /home/jay/faithful-messenger-theme/)
- **FTP**: church@mbitebyte.com / `hj8NZwq6#q$c` / port 21
- **Pages**: Home, About, Teachings, Services, Events, Ministries, Give, Prayer, Contact
- **Custom PTs**: Prayer Requests, Sermons/Teachings, Events
- **Lesson**: LiteSpeed server cache must be purged via mPanel (not just plugin deactivation)
- **Lesson**: functions.php parse error fixed (`<?php selected()` → `echo selected(..., false)`)


## VDNA 3.0 (2026-06-25)

- **Growth Readiness**: Options A/B/C/E COMPLETE — pipeline ready for next execution
- **Option D** (Social Media): PENDING — requires Twitter API ($100+/mo)
- **Growth Feedback Bus**: Active — shared state across Phases 0/1/3/5/9
- **12 Growth Modules Wired**: spike_detector, content_calendar, edge_scorer, editorial_scorer, growth_alignment, growth_observer, primetime_scheduler, retention_analyzer, retention_curve_analyzer, thumbnail_ab_tester, competitor_intel, content_quality
- **Pruned Modules**: community_poster, ad_friendly_check, blog_companion (→.pruned backup)
- **86/86 modules compile**, all ad-hoc verification passed
- **Changelog**: `projects/vdna3/changelog.md`
- **Session**: `sessions/2026-06-25-vdna3-growth-readiness.md`

## Status

- VDNA upload: DISABLED (manual review)
- MBite Pulse: Active, syncing from YouTube RSS
- Google Search Console: Configured for mbitebyte.com
- church.mbitebyte.com: LIVE with Faithful Messenger theme + placeholder content
