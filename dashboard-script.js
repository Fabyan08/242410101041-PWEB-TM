// Script Dashboard
lucide.createIcons();

const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const sidebar = document.getElementById("sidebar");
const sidebarOverlay = document.getElementById("sidebarOverlay");
let isSidebarOpen = false;

function toggleSidebar() {
  isSidebarOpen = !isSidebarOpen;
  if (isSidebarOpen) {
    sidebar.classList.remove("-translate-x-full");
    sidebarOverlay.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  } else {
    sidebar.classList.add("-translate-x-full");
    sidebarOverlay.classList.add("hidden");
    document.body.style.overflow = "";
  }
}

mobileMenuBtn.addEventListener("click", toggleSidebar);
sidebarOverlay.addEventListener("click", toggleSidebar);
