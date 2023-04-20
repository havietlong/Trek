<?php
foreach ($description as $description){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head>
  <style>
   .editor {
  border: 1px solid #ccc;
  padding: 10px;
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #202124;
}

.toolbar {
  border-bottom: 1px solid #dadce0;
  display: flex;
  flex-wrap: wrap;
  padding: 8px 0;
}

.toolbar button {
  border: none;
  background-color: transparent;
  color: #5f6368;
  font-size: 18px;
  padding: 8px;
  margin-right: 12px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

.toolbar button:hover {
  background-color: #f1f3f4;
  border-radius: 50%;
}

.contenteditable {
  border: none;
  min-height: 400px;
  padding: 16px;
  outline: none;
  word-wrap: break-word;
  overflow-wrap: break-word;
  white-space: pre-wrap;
  overflow-y: auto;
}
.container {
  display: flex;
  flex-wrap: wrap;
  width: 500px;
  margin: 0 auto;
}

.item {
  width: 100px;
  height: 100px;
  margin: 10px;
  background-color: #eee;
  border-radius: 5px;
  text-align: center;
  line-height: 100px;
  cursor: pointer;
}

.context-menu {
  position: absolute;
  display: none;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
  z-index: 1;
}

.context-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.context-menu li {
  padding: 10px;
  cursor: pointer;
}

.context-menu li:hover {
  background-color: #f2f2f2;
}

  </style>
  <body>
    
    <div class="editor">
      <div class="toolbar">
        <button class="btn btn-light"><i class="fas fa-bold" title="Bold"></i></button>
        <button class="btn btn-light"><i class="fas fa-italic" title="Italic"></i></button>
        <button class="btn btn-light"><i class="fas fa-strikethrough" title="Strikethrough"></i></button>
        <button class="btn btn-light"><i class="fas fa-underline" title="Underline"></i></button>
        <button class="btn btn-light"><i class="fas fa-palette" title="Color"></i></button>
        <button id="insert-table-btn" class="btn btn-light"><i class="fa-solid fa-table"></i></button>
        <button class="btn btn-light"><i class="fas fa-text-height" title="Font size"></i></button>
        <button class="btn btn-light"><i class="fas fa-align-left" title="Align left"></i></button>
        <button class="btn btn-light"><i class="fas fa-align-center" title="Align center"></i></button>
        <button class="btn btn-light"><i class="fas fa-align-right" title="Align right"></i></button>
        <button class="btn btn-light"><i class="fas fa-link" title="Link"></i></button>
        <button class="btn btn-light"><i class="fas fa-image" title="Image"></i></button>
        <button class="btn btn-light" id="save-btn"><i class="fas fa-save" title="Save"></i></button>
        <input type="text" id="document-title" placeholder="Enter document title" value="<?= $description['name_description'] ?>" />

      </div>
      <div id="contenteditable" class="contenteditable" contenteditable="true">
      </div>
    </div>
    
    <script>
      const boldBtn = document.querySelector('.fa-bold').parentNode;
boldBtn.addEventListener('click', () => {
  document.execCommand('bold', false, null);
});

const italicBtn = document.querySelector('.fa-italic').parentNode;
italicBtn.addEventListener('click', () => {
  document.execCommand('italic', false, null);
});

const underlineBtn = document.querySelector('.fa-underline').parentNode;
underlineBtn.addEventListener('click', () => {
  document.execCommand('underline', false, null);
});

const colorBtn = document.querySelector('.fa-palette').parentNode;
colorBtn.addEventListener('click', () => {
  const color = prompt('Enter a color:', '');
  document.execCommand('forecolor', false, color);
});

const sizeBtn = document.querySelector('.fa-text-height').parentNode;
sizeBtn.addEventListener('click', () => {
  const size = prompt('Enter a font size (1-7):', '');
  document.execCommand('fontsize', false, size);
});

const alignLeftBtn = document.querySelector('.fa-align-left').parentNode;
alignLeftBtn.addEventListener('click', () => {
  document.execCommand('justifyLeft', false, null);
});

const alignCenterBtn = document.querySelector('.fa-align-center').parentNode;
alignCenterBtn.addEventListener('click', () => {
  document.execCommand('justifyCenter', false, null);
});

const alignRightBtn = document.querySelector('.fa-align-right').parentNode;
alignRightBtn.addEventListener('click', () => {
  document.execCommand('justifyRight', false, null);
});

const linkBtn = document.querySelector('.fa-link').parentNode;
linkBtn.addEventListener('click', () => {
  const url = prompt('Enter a URL:', '');
  document.execCommand('createLink', false, url);
});

<?php $id_product = $_GET['id_product']; ?>
  var id_product = "<?php echo $id_product; ?>";

const saveButton = document.getElementById('save-btn');
saveButton.addEventListener('click', () => {
  <?php $id_product = $_GET['id_product']; ?>
  var id_product = "<?php echo $id_product; ?>";
  console.log(id_product);
  const title = document.querySelector('#document-title').value;
  const elements = document.querySelectorAll('.contenteditable');
  elements.forEach(element => {
    const content = element.innerHTML;
    
    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Define the callback function to handle the response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };

    // Open a new POST request to your PHP script
    xhr.open('POST', 'views/staff/save.php');

    // Set the request headers
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Send the request with the content data and the document title as the POST body
    xhr.send(`title=${encodeURIComponent(title)}&content=${encodeURIComponent(content)}&id_product=${encodeURIComponent(id_product)}`);
  });
  window.location.href = "http://localhost/src/index.php?role=staff";
});


const imageBtn = document.querySelector('.fa-image').parentNode;
imageBtn.addEventListener('click', () => {
  const url = prompt('Enter the image URL:', '');
  document.execCommand('insertImage', false, url);
});

const strikethroughBtn = document.querySelector('.fa-strikethrough').parentNode;
strikethroughBtn.addEventListener('click', () => {
  document.execCommand('strikethrough', false, null);
});




const insertTableBtn = document.getElementById('insert-table-btn');

insertTableBtn.addEventListener('click', function() {
  var rows = prompt("Enter the number of rows for the table:");
  var cols = prompt("Enter the number of columns for the table:");
  
  // Create the HTML for the table
  var tableHTML = "<table style='border-collapse: collapse;'>";
  for (var i = 0; i < rows; i++) {
    tableHTML += "<tr style='border: 1px solid black;'>";
    for (var j = 0; j < cols; j++) {
      tableHTML += "<td style='border-left: 1px solid black;' >input</td>";
    }
    tableHTML += "</tr>";
  }
  tableHTML += "</table>";
  
  // Insert the table into the contenteditable element
  var element = document.getElementById("contenteditable");
  if (element) {
    var range = document.getSelection().getRangeAt(0);
    var table = document.createElement("div");
    table.innerHTML = tableHTML;
    range.insertNode(table);
  }
});





    </script>
  </body>
</html>
<?php } ?>