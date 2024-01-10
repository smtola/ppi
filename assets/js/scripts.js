
function onDropdown(){
  document.getElementById('myDropdown').classList.toggle("show");
}
function onBtnMenu(){
   document.getElementById('listItems').classList.toggle("show-1");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropdown-btn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// navbar theme
window.onscroll = function () { 
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200  ) {
      navbar.classList.add("changeThemeNav");
    } 
    else {
      navbar.classList.remove("changeThemeNav");
    }
};

