// Add this JavaScript code to handle the sidebar toggle, e.g., in `public/assets/js/main.js`
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('visible');
}

document.getElementById("logoutLink").addEventListener("click", function(event) {
    event.preventDefault();
    var userConfirmed = confirm("Apakah anda yakin ingin logout?");
    if (userConfirmed) {
        document.getElementById("logoutForm").submit();
    } else {
        alert("Logout dibatalkan");
    }
}