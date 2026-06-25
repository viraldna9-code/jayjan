# ViralDNA — General Notes

## Pipeline Architecture
- 73+ Python modules
- Trend discovery → Script generation → Voiceover → Video assembly → Thumbnail → Upload
- Analytics pipeline separate from generation pipeline
- Cron-based scheduling (IST timezone)
- Entrypoint: /home/jay/ViralDNA/run_vdna3.py (runs vdna2_director.py internally)

## Upload Status
- VIRALDNA_UPLOAD_ENABLED = true (agent can upload when Jay explicitly requests)
- Videos saved to /home/jay/ViralDNA/video_output/ (note: NOT /videos/)
- Manual uploads allowed; auto-upload flag controlled at runtime

## Checkpoint Serialization Lesson (2026-06-25)
- When saving state objects to JSON checkpoints, ALWAYS convert dataclasses to dicts first
- Bug: json.dumps(val, default=str) silently converts non-serializable objects to strings
- Fix pattern: if hasattr(val, '__dataclass_fields__'): val = dataclasses.asdict(val)
- Defensive loading: handle object, dict, AND string formats for backward compat

## Safety Rules
- RVC VOICE SAFETY: Never blindly modify RVC voice system
- YouTube no-delete: Permanent policy after publication
- Thumbnail pipeline: Category " ai " has spaces to avoid matching Indian names
