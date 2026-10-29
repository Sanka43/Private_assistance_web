# RuXt AI Introduction Video

Place your product introduction video here:
- **Filename**: `intro.mp4` (or configure a custom URL/path in `assets/js/main.js` via `SIGN_IN_CONFIG.videoSrc`)
- **Recommended format**: MP4 (H.264 + AAC)
- **Aspect ratio**: 16:9 (1920x1080 or 1280x720)
- **Behavior**:
  - The video is presented in the Sign In Introduction Gateway modal and on `signin.html`.
  - An auto-redirect timer counts down (default: 10s or upon video completion).
  - During the delay, the skip button remains strictly locked. Once the delay completes, users can click **"Proceed to Sign In"** (or auto-route) to navigate to the target URL (`https://app.ruxt.org/`).
