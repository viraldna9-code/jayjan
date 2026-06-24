# ViralDNA — Discussion Notes

## 2026-06-24
- Created "jayjan" centralized memory repo
- Migrated all memory from Hermes local to git repo
- Hermes memory reduced to 2 pointer entries

## Key Architectural Decisions
- Memory stored in git, not Hermes local storage
- Auto-commit every 15 minutes
- Session recovery every 3 hours from git
