# ViralDNA — Changes Log

## 2026-06-29 — Data Guard + Weekly CSV Pipeline

### New Module: modules/data_guard.py
- Prevents LLM from fabricating analytics statistics
- Questions blocked when data unavailable: traffic_sources, search_terms, audience_demographics, best_posting_time, shorts_sweet_spot, browse_feature_growth
- Questions allowed from real data: ctr_per_video, subscriber_conversion, engagement_ratios, avg_view_duration, growth_forecast (with estimate caveat)
- Every blocked response says "DO NOT FABRICATE" with Studio download instructions

### New Cron Job (08f2e0ae8960)
- Every Monday 10AM IST → reminds to download 3 YouTube Studio reports
- Reports: Video Performance, Traffic Sources, Engagement
- After download: run `python3 scripts/ingest_studio_csv.py`
- Delivers to Telegram

## 2026-06-29 — Keyword Research Module (SEO Error #10 Fix)

### New Module: modules/keyword_research.py
- Dynamic keyword research replacing static HIGH_SEARCH_KEYWORDS dict
- Sources: Google Trends India (live traffic scores via RSS) + YouTube autocomplete
- 3 query strategies: full title, compound (top 3 keywords), longest named entity
- Scoring: keyword overlap ratio + traffic volume; strict filter rejects unrelated trends
- 6-hour disk cache to avoid rate limits
- Graceful fallback if APIs unavailable

### Pipeline Integration
- script_generator.py: `_inject_search_keywords()` now calls `research_keywords_for_topic()`
- vdna2_director.py: Runs keyword research before blog publish, applies to blog H1 title
- Blog title format: `{title} | {keyword}` — H1 targets search-optimized phrase
- wordpress_publisher.py: Stores `_vdna_target_keyword` post meta alongside `youtube_url`

### SEO Errors Status
- #8 OG tags: COMPLETE (full set verified live)
- #9 Related Articles: COMPLETE (render_block filter, same-category + recent fallback)
- #10 Keyword Research: COMPLETE (dynamic research, blog H1 + YouTube title optimization)

### Git Commits
- cca417e: feat: Dynamic keyword research module (Error #10 fix)
- 9c7174c: fix: Apply keyword research to blog post title (H1 SEO)

## 2026-06-28 — Publish Scheduling + Thumbnail Centering + Upload

### Publish Schedule Rule
- Main video: +1 hour after upload, Shorts: +30 minutes after upload
- config.py: main_publish_delay_minutes=60, shorts_publish_gap_minutes=30, static times=None
- youtube_uploader.py: fixed shorts fallback (was now+60min, corrected to now+30min)
- vdna2_director.py: logs schedule rule during upload phase

### Thumbnail: Large Centered Text
- headline_max_size: 56→80px, min_size: 36→52px
- _calc_text_position: center vertically (was bottom-anchored)
- Horizontal centering (was left-aligned)
- _get_adaptive_font_size: larger breakpoints (25→80, 40→72, 60→64, 80→58, 100→54, else→52)
- Content coverage: ~20%→62% of frame, text center at y=359 (frame center=360)
- local_image_pack.py warnings silenced (os.path.exists guard, file doesn't exist)

### Upload (Ketan Agarwal murder case)
- Main: S5f7vBgfmf8 — scheduled 12:35 IST
- Short1: N4s742JUTWg — scheduled 12:05 IST
- Short2: YjxlusvHaaw — scheduled 12:05 IST
- Custom thumbnails uploaded for all 3 videos
- Pinned comments failed (403 scope — non-critical)

### Git Commit
- 614ca88: feat: publish scheduling + centered thumbnail text

## 2026-06-26 — theviraldna.mbitebyte.com SEO + Layout Fixes

### SEO Plugin (vdna-seo.php v1.2.0)
- Added twitter:site (@TheViralDNA) meta tag
- Added og:see_also (YouTube channel URL) meta tag
- Added security headers via .htaccess (X-Frame-Options, X-Content-Type-Options, Referrer-Policy, Permissions-Policy, Strict-Transport-Security)
- Fixed sitemap `<lastmod>` for categories, tags, and users via WP 7.0 filters
- Added default OG image (1280x720 branded, viraldna-og-default.jpg)
- Footer JS replacement: hides default TT25 nav, adds custom links (Home, Blog, About, Contact, YouTube, Privacy), replaces "Twenty Twenty-Five" with ViralDNA copyright
- Sidebar with recent posts on single post pages via wp_footer hook
- CSS fixes: hide "Blog" h1 on homepage, word-break/overflow-wrap for text wrapping, responsive iframes

### Homepage Layout (2-column)
- Replaced full post blocks with compact list (title + date + excerpt + Read More)
- Added 75%/25% 2-column layout (Latest News left, Recent Posts right)
- Sidebar: recent post titles + Subscribe on YouTube button
- Sticky sidebar with scrollable overflow
- Both columns aligned at same vertical position (headings at y=140)

### Page Fixes
- About (ID 6): changed content h1→h2 to fix duplicate "About About"
- Contact (ID 11): changed content h1→h2 to fix duplicate "Contact Contact"
- Privacy Policy (ID 3): changed content h1→h2 to fix duplicate "Privacy Policy Privacy Policy"
- About page: populated with full YouTube channel description
- Contact page: corrected email to viraldna9@gmail.com, fixed YouTube link

### Blog Backfill
- Backfilled 4 missing YouTube videos as WordPress posts (IDs 48, 49, 50, 51)
- Fixed post 49: removed `<p>` wrapper from YouTube URL for WordPress auto-embed
- Total: 6 posts live (1 original + 4 backfilled + 1 default "Hello world!")

### Google Search Console
- Property verified via HTML file (google34ff05241351935f.html)
- Sitemap submitted: https://theviraldna.mbitebyte.com/wp-sitemap.xml
- Sitemap showing success (6 post URLs with lastmod)

### FTP Status
- NEW FTP (theviraldna@mbitebyte.com / b7qNRCsG93b!) — FAILED 530 (cPanel issue)
- OLD FTP (church@mbitebyte.com / hj8NZwq6#q$c @ 45.199.139.16:21) — WORKING

## v96.0 / 3.0 Pipeline (2026-06-25)
- Fixed PublishDecision checkpoint serialization crash in upload phase
- Pipeline run 20260625_0548: 3 videos produced + uploaded successfully

## Earlier Versions
- See /home/jay/ViralDNA/CHANGELOG.md for full history

## 2026-06-29 — Blog + VDNA 3.0 Bidirectional Integration

### What changed
Blog posts and YouTube videos are now fully integrated as a single "content unit":
- Shared content_id (MD5 of title, 12 chars) links video + blog at the data level
- Video description includes "📖 Read the full article: {blog_url}" (bidirectional)
- Every blog post has CTA box at bottom promoting the matching video
- When video not yet uploaded, blog shows "🎬 Video coming soon, subscribe" placeholder
- YouTube embed moved into article body (was duplicated in create_post)
- content_registry.py tracks each topic's performance across both platforms
- Synergy report: % of content units with both video+blog

### New file: modules/content_registry.py
- ContentRegistry class: register, update metrics, query top-performing, synergy report
- Convenience function register_from_pipeline() for one-liner integration
