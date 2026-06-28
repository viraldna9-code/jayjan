# ViralDNA — Changes Log

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
