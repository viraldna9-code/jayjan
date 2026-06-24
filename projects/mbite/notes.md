# MBite — General Notes

## Theme Files
- functions.php: Main theme functions (sitemap, chatbot, YouTube RSS feed)
- header.php: Header with branded animated favicon
- page-pulse.php: Pulse page (YouTube RSS sync)
- main.js: Chatbot JS
- style.css: Styles with .blink animation

## Server
- LiteSpeed web server
- WordPress root = server root
- Theme at wp-content/themes/mbitebyte/

## YouTube Integration
- Pulse page syncs from The ViralDNA channel RSS feed
- Hourly refresh via WP-Cron + standalone cron script
- Never mix VDNA pipeline with Pulse page
