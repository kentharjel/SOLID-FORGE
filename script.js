
function showSidebar() {
    document.querySelector(".sidebar").classList.add("active");
    document.body.classList.add("sidebar-open");
}

function hideSidebar() {
    document.querySelector(".sidebar").classList.remove("active");
    document.body.classList.remove("sidebar-open");
}

//detect sa click gawas sa sidebar
document.addEventListener("click", function(event) {
    const sidebar = document.querySelector(".sidebar");
    const menuButton = document.querySelector(".menu");
//if true mo hide
    if (!sidebar.contains(event.target) && !menuButton.contains(event.target)) {
        hideSidebar();
    }
});

function showpost() {
    var x = document.getElementById("post");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
    }
  }

  function hidepost() {
    var x = document.getElementById("post");
    if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  }