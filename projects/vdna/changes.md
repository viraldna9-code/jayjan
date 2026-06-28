# ViralDNA — Changes Log

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
