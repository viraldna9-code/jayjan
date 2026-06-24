# MBite — Discussion Notes

## 2026-06-24
- Created "jayjan" centralized memory repo
- Migrated all memory from Hermes local to git repo

## Key Architectural Decisions
- Pulse page uses YouTube RSS feed, NOT VDNA pipeline
- generate-pulse-feed.php made no-op (safety measure)
- Standalone cron-refresh-pulse.php for server-level cron
- Old mbitebyte_refresh_pulse WP-Cron event removed from DB
