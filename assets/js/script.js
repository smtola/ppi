
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

const text1 = document.querySelector(".text1");
const text2 = document.querySelector(".text2");
const text3 = document.querySelector(".text3");
const text4 = document.querySelector(".text4");
const load = () =>{
  setTimeout(() => {
    text1.textContent = "អនុបណ្ឌិត (២ឆ្នាំ)";
    text2.textContent = "អនុបណ្ឌិត (២ឆ្នាំ)";
    text3.textContent = "អនុបណ្ឌិត (២ឆ្នាំ)";
    text4.textContent = "អនុបណ្ឌិត (២ឆ្នាំ)";
  }, 0);
  setTimeout(() => {
    text1.textContent = " ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)";
    text2.textContent = " ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)";
    text3.textContent = " ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)";
    text4.textContent = " ថ្នាក់បរិញ្ញាប័ត្រ(៤.៥ ឆ្នាំ)";
  }, 2000);
  setTimeout(() => {
    text1.textContent = " ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)";
    text2.textContent = " ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)";
    text3.textContent = " ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)";
    text4.textContent = " ថ្នាក់បរិញ្ញាប័ត្ររង(២ ឆ្នាំ)";
  }, 4000);
  setTimeout(() => {
    text1.textContent = "ថ្នាក់សិក្សាបង់ថ្លៃ";
    text2.textContent = "ថ្នាក់សិក្សាបង់ថ្លៃ";
    text3.textContent = "ថ្នាក់សិក្សាបង់ថ្លៃ";
    text4.textContent = "ថ្នាក់សិក្សាបង់ថ្លៃ";
  }, 6000);
}
load();
setInterval(load,12000);

