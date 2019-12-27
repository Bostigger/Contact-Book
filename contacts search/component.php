<?php
function inputElement(){
  $ele = "
  <div class="py-2">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text bg-warning">@</div>
      </div>
        <input type="text" class="form-control" id="inlineFormInputGroup"
        name="" placeholder="username">
    </div>
  </div>



  ";
  echo $ele;
}
