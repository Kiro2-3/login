document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarClose = document.getElementById('sidebarClose');
  
    // Function to close sidebar
    function closeSidebar() {
      sidebar.classList.remove('active');
    }
  
    // Event listener for closing the sidebar
    sidebarClose.addEventListener('click', function() {
      closeSidebar();
    });
  
    // Close sidebar when clicking outside of it
    window.addEventListener('click', function(event) {
      if (!event.target.matches('#sidebar') && !event.target.closest('.button')) {
        closeSidebar();
      }
    });
  });
  