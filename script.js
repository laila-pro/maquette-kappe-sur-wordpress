var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  // options
});

function openNav() {
  document.getElementById("menu-menu1").style.width = "250px";
}

function closeNav() {
  document.getElementById("menu-menu1").style.width = "0";
}
