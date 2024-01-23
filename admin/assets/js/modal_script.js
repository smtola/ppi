
const image = document.querySelector("#img"),
input = document.querySelector("#files");


// form
input.addEventListener('change',()=>{
  image.src = URL.createObjectURL(input.files[0]);
  console.log(image);
})  
// Get the modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
// edit modal
var editModal = document.getElementById("editModal");
var btnEdit = document.getElementById("onEdit");

btn.onclick = function() {
  modal.style.display = "block";
}


btnEdit.onclick = function () {
  editModal.style.display = "block";
};
