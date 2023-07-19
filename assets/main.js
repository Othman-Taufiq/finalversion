
// Toggle for USER ICON
document.getElementById("toggle-icon").addEventListener("click", function() {
    let userOptions = document.getElementById("user-options");
    userOptions.style.display = (userOptions.style.display === "none") ? "flex" : "none";
  });

  document.addEventListener("click", function(event) {
    let userOptions = document.getElementById("user-options");
    let toggleIcon = document.getElementById("toggle-icon");
  
    if (!userOptions.contains(event.target) && event.target !== toggleIcon) {
      userOptions.style.display = "none";
    }
  });