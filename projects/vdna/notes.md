# ViralDNA — General Notes

## Pipeline Architecture
- 73+ Python modules
- Trend discovery → Script generation → Voiceover → Video assembly → Thumbnail → Upload
- Analytics pipeline separate from generation pipeline
- Cron-based scheduling (IST timezone)

## Upload Status
- UPLOAD_ENABLED = false (manual review mode)
- Videos saved to /home/jay/ViralDNA/videos/
- Manual agent uploads allowed when Jay explicitly requests

## Safety Rules
- RVC VOICE SAFETY: Never blindly modify RVC voice system
- YouTube no-delete: Permanent policy after publication
- Thumbnail pipeline: Category " ai " has spaces to avoid matching Indian names
