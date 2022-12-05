<style>
body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color:#243447;
  color: white;
}
</style>
<div>
<body>

<button onclick="myFunction()">Switch theme</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</div>