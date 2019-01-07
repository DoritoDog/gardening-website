var dropdown = document.getElementsByClassName("sidebar-dropdown-button");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

var isSidebarCollapsed = false;
function collapseSidebar() {
    var sidebar = document.getElementById('sidebar');
    if (isSidebarCollapsed) {
        $('.sidebar h3').hide();
        $('.sidebar-link, .sidebar-dropdown-button').hide();

        sidebar.style.width = '20px';
    } else {
        $('.sidebar h3').show();
        $('.sidebar-link, .sidebar-dropdown-button').show();
        sidebar.style.width = '340px';
    }

    isSidebarCollapsed = !isSidebarCollapsed;
}

collapseSidebar();

var media = window.matchMedia("(max-width: 600px)");
if (media.matches) collapseSidebar();
media.addListener((x) => { if (x.matches) collapseSidebar(); });