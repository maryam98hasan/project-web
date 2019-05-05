 <script>
 var locales = document.getElementById('scrolling-list'),
listItems = locales.children,
allLnks = new Array();
for (var i = 0;i<listItems.length;i++) { allLnks[i] = listItems[i].firstElementChild;} 
locales.addEventListener('keydown', function(e) {
var focusedElement = document.activeElement,
index = allLnks.indexOf(focusedElement);
if (index >= 0) {
  if (e.keyCode == 40 || e.keyCode == 39) {
    if (focusedElement.parentNode.nextElementSibling) {
      var nextNode = focusedElement.parentNode.nextElementSibling.firstElementChild;
nextNode.focus(); 
    } else { listItems[0].firstElementChild.focus(); }
  }
if (e.keyCode == 38 || e.keyCode == 37) {
  if (focusedElement.parentNode.previousElementSibling) {
    var previousNode = focusedElement.parentNode.previousElementSibling.firstElementChild;
previousNode.focus(); 
  } else { 
    locales.lastElementChild.firstElementChild.focus(); }
}}});
 </script>
 