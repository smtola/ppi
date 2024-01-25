
// filter
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
    icon.classList.add("bi-fullscreen-exit");
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  } 
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
    icon.classList.remove("bi-fullscreen-exit");
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
// checking usertype
function checkUserType(file){
  var userType = document.querySelector("#usertype");
  if(userType.value == 'admin'){
    window.open(file, '_blank');
  }else if(userType.value == 'editor'){
    window.open(file, '_blank');
  }
  else{
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
      }
  });
  Toast.fire({
      icon: "error",
      title: "You are not management!"
  });
  }
}

const btnDropdown = document.querySelector(".dropbtn");
// dropdown menu items
function myFunction() {
   document.querySelector("#myDropdown").classList.toggle('show');
 }