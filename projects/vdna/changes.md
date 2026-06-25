# ViralDNA — Changes Log

## v96.0 / 3.0 Pipeline (2026-06-25)
- Fixed PublishDecision checkpoint serialization crash in upload phase
  - Root cause: json.dumps(val, default=str) in _save_state_checkpoint converted
    PublishDecision dataclass to string representation. Upload phase resume from
    checkpoint tried .num_shorts on string → AttributeError
  - Fix 1 (vdna2_director.py): dataclasses.asdict() before JSON serialization
  - Fix 2 (youtube_uploader.py): Handle publish_decision as object, dict, or string
    (regex fallback for legacy broken checkpoints)
- Pipeline run 20260625_0548: 3 videos produced + uploaded successfully
  - Main: https://youtube.com/watch?v=Xn2rISx9FF0
  - Short1: https://youtube.com/watch?v=tz1UX_1ITcI
  - Short2: https://youtube.com/watch?v=movILCDxMSA
- Note: Pinned comments fail (403 permissions) — known issue, non-blocking

## v83.0 (Previous)
- Person-image fix complete (3-layer defense)
- Edge scoring system designed
- Scheduled publisher implemented
- Channel health reports fixed
- Cron timezone corrected to IST

## v82.4
- Person-image verification: text-first + keyword overlap + Gemini Vision
- Serper keys updated (40-char format)
- Fail-closed on 429 rate limit

## Earlier Versions
- See /home/jay/ViralDNA/CHANGELOG.md for full history
