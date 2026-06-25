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

## theviraldna.mbitebyte.com (Cross-Platform Blog — Phase 1)

- **Live**: https://theviraldna.mbitebyte.com/
- **Hosting**: MilesWeb shared hosting (LiteSpeed), 45.199.139.16
- **Theme**: Twenty Twenty-Five
- **WP Admin**: https://theviraldna.mbitebyte.com/wp-admin (theviraldna_admin / b7qNRCsG93b!)
- **FTP**: church@mbitebyte.com / hj8NZwq6#q$c / port 21
- **Rank Math SEO**: Installed and activated
- **Pages**: About (id=6), Contact (id=11), Privacy Policy (id=3) — all HTTP 200
- **Categories (8)**: Economy(9), Technology(8), World News(7), Viral Stories(6), Breaking News(5), News & Politics(4), Opinion(3), Uncategorized(1)
- **Publisher Script**: /home/jay/ViralDNA/modules/wordpress_publisher.py
- **Auth Method**: Cookie + X-WP-Nonce (Basic Auth blocked by security plugin)
- **Step 10.24**: Integrated in vdna2_director.py after Growth Observer, triggers on YouTube upload success
- **Publisher Status**: FULLY FUNCTIONAL ✅ (17/17 ad-hoc checks passed)
- **REST API**: Cookie auth works for reads AND writes (POST/DELETE) with X-WP-Nonce header
- **Note**: Frontend HTTP 444 for bot UA (LiteSpeed security) — posts still created/deleted fine via API
- **Note**: WordPress returns &amp; for & in names — must use html.unescape() for comparison
- **Note**: REST search for "News & Politics" returns 0 — must search first word only ("News") then filter

## Status

- VDNA upload: DISABLED (manual review)
- MBite Pulse: Active, syncing from YouTube RSS
- Google Search Console: Configured for mbitebyte.com
- church.mbitebyte.com: LIVE with Faithful Messenger theme + placeholder content
- theviraldna.mbitebyte.com: LIVE — WordPress blog operational with publisher integration
