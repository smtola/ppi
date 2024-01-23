 <!-- Modal -->
 <div id="editModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
         <div class="header">
             <h3 style="text-align: center;margin:10px 0;color:#868e96;">Edits Images</h3>
         </div>
         <hr>
         <div class="body">
             <div class="form-control">
                 <form action="addPictures.php" method="post" enctype="multipart/form-data">
                     <div class="input_form">
                         <label for="img">Image</label>
                         <img src="./assets/images/img.png" id="img">
                         <input type="file" id="files" name="anyfile">
                     </div>
                     <hr>
                     <div class="footer">
                         <div class="btnGroup" style="float: right;">
                             <button type="submit" name="btnSubmit">Save</button>
                             <a href="./pictures.php">Cancel</a>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 </div>
 <!-- End Modal -->