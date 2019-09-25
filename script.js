// var elem = document.querySelector('.grid');
// var msnry = new Masonry( elem, {
//   // options
//   itemSelector: '.grid-item',
//   columnWidth: 200
// });
//
// // element argument can be a selector string
// //   for an individual element
// var msnry = new Masonry( '.grid', {
//   // options
// });


$('.grid').isotope({
  itemSelector: '.grid-item',
  masonry: {
    columnWidth: 20
  }
});

function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}

// function openInfo() {
//   console.log('clic');
//   document.getElementById("myPopup").className += " show";
// }


$(".popup").click(function(){
  alert('bouh')
  $("#myPopup").addClass("show");
});
$(".popup").hover("",function(){
  $("#myPopup").removeClass("show");
});

$(".but-all").click(function() {
  $(".grid-item").css("display", "flex");
  $('.grid').isotope({
    itemSelector: '.grid-item'
  });
});
