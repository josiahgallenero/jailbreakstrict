const serverLinks = [
    "https://www.roblox.com/games/606849621?privateServerLinkCode=93874275618191471892137882586943",
    "https://www.roblox.com/games/606849621?privateServerLinkCode=33385895997359174842227374166775",
    "https://www.roblox.com/games/606849621?privateServerLinkCode=03479670375881225795876028978312",
    "https://www.roblox.com/share?code=9d8043d1e2cd734d985c83ba60e2b4d1&type=Server",
    "https://www.roblox.com/share?code=ecad61f7ef36794eb4fa606ea479c1e3&type=Server",
    "https://www.roblox.com/share?code=aa92d372417b9f4e9d6a2326604362d2&type=Server",
    "https://www.roblox.com/share?code=62e189f32a59c745ae7153afaeefe0a2&type=Server",
    "https://www.roblox.com/share?code=fa0d708dc46b08488522077ea07614a0&type=Server",
    "https://www.roblox.com/share?code=23ba3a8ba5b61b4aa1d5e51ea729d4b6&type=Server",
    "https://www.roblox.com/share?code=62e445d4e9b3e14f8f7afbd5f883799b&type=Server",
    "https://www.roblox.com/share?code=952b598ada0be540b1a93e0974491437&type=Server",
    "https://www.roblox.com/share?code=65191bcfd1ee8745baf02e45a2d4776c&type=Server"
  ];
  
  function joinServer(serverNumber) {
    window.open(serverLinks[serverNumber - 1], "_blank");
  }
  
  function copyLink(serverNumber) {
    const linkInput = document.createElement("input");
    linkInput.value = serverLinks[serverNumber - 1];
    document.body.appendChild(linkInput);
    linkInput.select();
    document.execCommand("copy");
    document.body.removeChild(linkInput);
    alert("Link copied to clipboard!");
  }

  function switchToBloxfruitServer() {
    window.location.href = "bloxfruit.html";
  }

  function switchToJailbreakServer() {
    window.location.href = "index.html";
  }
