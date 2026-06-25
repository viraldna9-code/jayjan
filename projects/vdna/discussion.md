# ViralDNA — Discussion Notes

## 2026-06-25
- Fixed checkpoint serialization bug that broke upload phase on resume
- Root cause: dataclass → string conversion via json.dumps(default=str)
- Fixed in vdna2_director.py (asdict) + youtube_uploader.py (format-agnostic parsing)
- Verified: 3 videos uploaded successfully on full pipeline run
- GitHub push of code fix blocked — auth token in URL can't prompt in agent env
- Jay to manually push or update remote credentials

## 2026-06-24
- Created "jayjan" centralized memory repo
- Migrated all memory from Hermes local to git repo
- Hermes memory reduced to 2 pointer entries
