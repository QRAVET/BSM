var locationName = location.pathname.split("/");
var pageName = locationName[locationName.length - 1];
var selectedLi = pageName.split(".")[0];
var li = document.getElementsByClassName(selectedLi);

for(var i=0; i < li.length; i++) {
  console.log(li);
  li[i].classList.add("active-nav");
}

console.log(locationName);
console.log(pageName);
console.log(selectedLi);