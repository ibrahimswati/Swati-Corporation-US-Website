
    function m1() {
        document.getElementById("myDropdown1").classList.toggle("show1");
      }
      // Close the dropdown if the user clicks outside of it
      window.onclick = function (e) {
        if (!e.target.matches('.dropbtn1')) {
          var myDropdown = document.getElementById("myDropdown1");
          if (myDropdown.classList.contains('show1')) {
            myDropdown.classList.remove('show1');
          }
        }
      }