# 8-Queens CSP Visualizer — backtracking, forward checking, MRV

**Live:** https://kiranvk.me/ai/8queens/  ·  free, no login

An interactive constraint-satisfaction visualizer for the 8-Queens problem: plain backtracking, forward checking
and MRV, with step-by-step domain displays and scoring (PECST522 Artificial Intelligence, KTU).

## Files
| File | Role |
|---|---|
| `game.html` | The whole app (HTML + CSS + JS, no build step) |
| `index.php` | Serves `game.html` with no-cache headers |

## Run it locally
```bash
git clone https://github.com/kvk-code/kiranvk-8queens-csp.git && cd kiranvk-8queens-csp
php -S localhost:8000        # then open http://localhost:8000/
```
No dependencies: opening `game.html` directly in a browser also works.

## AI features and secrets
This lab has no AI or server features.
No key, password or log file is in this repository. Server-side settings live in a config directory **outside the web root** and are never published.

## Relationship to the website
This repo is an exact mirror of https://kiranvk.me/ai/8queens/. Every deploy of the site publishes the same files here (`sync:` commits).
Community pull requests are reviewed, merged into the site source, deployed, and then come back here with the next sync.

## Licence
Code: MIT (see `LICENSE`). Third-party components and data: see `THIRD_PARTY.md` where present.
Built by **Kiran V K**, Assistant Professor, Dept. of CSE, NSS College of Engineering, Palakkad, for KTU students. Live: https://kiranvk.me/ai/8queens/
