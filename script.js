if (navigator.getAutoplayPolicy("audio") === "allowed") {
  // will autoplay audio
} else if (navigator.getAutoplayPolicy("audio") === "allowed-muted") {
  // Mute audio
  video.muted = true;