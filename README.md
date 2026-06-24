# jayjan

Centralized memory and project notes for Jay's workspace.

## What This Is

Single source of truth for ALL project memory, notes, changes, discussions, and skills.
Contains all projects within it — vdna, mbite, ministry.

## Structure

```
jayjan/
├── MEMORY.md              # Consolidated memory across all projects
├── USER.md                # User profile and preferences
├── projects/
│   ├── vdna/              # ViralDNA — notes, changes, discussion, memory
│   │   ├── changes.md
│   │   ├── discussion.md
│   │   ├── notes.md
│   │   └── memory.md
│   ├── mbite/             # MBite — notes, changes, discussion, memory
│   │   ├── changes.md
│   │   ├── discussion.md
│   │   ├── notes.md
│   │   └── memory.md
│   └── ministry/          # Ministry project — notes, changes, discussion
│       ├── notes.md
│       └── changes.md
├── skills/                # Skill-related notes
└── sessions/              # Session recovery context (auto-updated)
```

## Rule (MANDATORY)

- ALL memory/notes/changes/discussion → this git repo — NOT in Hermes memory
- Hermes memory contains ONLY 2 pointer entries pointing to this repo
- When resuming session → ALWAYS read from this repo
- Auto-commit every 15 minutes (silent)
- Session recovery every 3 hours
- Git handles large files without limits
