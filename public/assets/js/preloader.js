document.addEventListener("DOMContentLoaded", () => {
  let linesData = [];

    const currentPage = window.location.pathname;

    console.log(currentPage)

    if (currentPage === "/") {
      linesData = [
        "Initializing portfolio...",
        "Loading projects...",
        // "Compiling creativity...",
        "Access Granted!"
      ];
    } else if (currentPage.includes("about")) {
      linesData = [
        "Opening About Section...",
        "Fetching biography...",
        "Warming up experience...",
        "Access Granted!"
      ];
    } else if (currentPage.includes("contact")) {
      linesData = [
        "Loading contact module...",
        "Connecting to servers...",
        // "Almost ready...",
        "Access Granted!"
      ];
    } else {
      // Default fallback
      linesData = [
        "Loading content...",
        "Access Granted!"
      ];
    }

    const terminal = document.querySelector(".terminal");
    linesData.forEach(line => {
      const p = document.createElement("p");
      p.classList.add("line");
      p.textContent = line;
      terminal.appendChild(p);
    });

    // Typing animation
    const lines = document.querySelectorAll(".line");
    let index = 0;

    function showLine() {
      if (index < lines.length) {
        const line = lines[index];
        line.style.display = "block";

        let text = line.textContent;
        let i = 0;

        const typing = setInterval(() => {
          line.textContent = text.slice(0, i) + "|";
          i++;
          if (i > text.length) {
            clearInterval(typing);
            setTimeout(() => {
              line.style.display = "none";
              index++;
              showLine();
            }, 800);
          }
        }, 50);
      } else {
        const preloader = document.getElementById("preloader");
        preloader.style.transition = "opacity 1s";
        preloader.style.opacity = "0";

        setTimeout(() => {
          preloader.style.display = "none";
          document.getElementById("main-content").classList.remove("hidden");
        }, 1000);
      }
    }

    showLine();
});
