<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="utf-8">
  <title>css framework</title>
  <link rel="stylesheet" href="master.css">
</head>
<script src="js/select.js"></script>
<body>
  <div class="container">
    <br><br>
    <h3>Inputs</h3>
    <label name="test1" class="input-label">Username</label>
    <input type="text" class="input" name="test1"><br><br>
    <input type="text" class="input input-user"><br><br>
    <div class="input-group">
      <input type="text" class="input input-pass input-block input-error">
      <div class="input-error-text">Doslo je do greske</div>
    </div>
    <div class="input-group">
      <div class="input-group-icon">
        <img src="icons/user.png">
      </div>
      <input type="text" class="input">
    </div>
    <br>
    <input type="text" class="input input-user input-underline"><br><br>
    <h5>Radio</h5><br>
    <label class="check-group"> Radio
      <input class="input-radio" type="radio" name="test">
      <span class="checkmark"></span>
    </label>
    <label class="check-group"> Radio
      <input class="input-radio" type="radio" name="test">
      <span class="checkmark"></span>
    </label>
    <br>
    <h5>Check</h5><br>
    <label class="check-group"> Checkbox
      <input class="input-check" type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="check-group"> Checkbox
      <input class="input-check" type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="check-group"> Checkbox
      <input class="input-check" type="checkbox">
      <span class="checkmark"></span>
    </label>
    <br>
    <label class="switch">
      <input type="checkbox">
      <span class="slider round"></span>
    </label><br>
    <label class="switch">
      <input type="checkbox">
      <span class="slider"></span>
    </label><br><br>
    <h5>Select</h5><br>
    <div class="input-select" style="width:200px;">
      <select>
        <option value="0">Select:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <br>
    <h5>Textarea</h5><br>
    <label class="input-label">Textarea</label>
    <textarea class="input-textarea"></textarea>
    <br>
    <hr>
    <br>
    <h3>Buttons</h3><br>
    <a class="btn blue f
              <br>at" href="#">Test button</a><br><br>
    <a class="btn green bold" href="#">Test button</a><br><br>
    <a class="btn sea btn-block light" href="#">Test button</a><br><br>
    <a class="btn red" href="#">Test button</a><br><br>
    <a class="btn gray" href="#">Test button</a><br><br>
    <a class="btn orange" href="#">Test button</a><br><br>
    <a class="btn" href="#">Test button</a><br><br>

    <h3>Text props</h3>
    <h1>Test Heading 1</h1>
    <h2>Test Heading 2</h2>
    <h3>Test Heading 3</h3>
    <h4>Test Heading 4</h4>
    <h5>Test Heading 5</h5>
    <h6>Test Heading 6</h6>
    <p>
      The viewport meta element lets you control the the width and scale of the viewport on mobile browsers. Since you're building a responsive website, you want the width to be equal to the device's native width. Add this into your page's.
    </p>
  </div>
</body>
<script src="js/select.js"></script>
</html>