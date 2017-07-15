// // select element jq way
// function $(item) {return document.querySelectorAll(item)}
//
// // set multi-attirbutes
// function setAttributes(element, options) {
//    Object.keys(options).forEach(function(attribute){
//       element.setAttribute(attribute, options[attribute]);
//    })
// }
//
// // select the li element
// // var li = $('.navbar .navbar-collapse .menu-item');
//
// // fix bootstrap li styles
// function mainNavbar(classes) {
//    for (var i = 0; i < li.length; i++) {
//       // add bootstrap classes for li
//       li[i].classList = 'nav-item';
//       // add bootstrap classes for a
//       li[i].children[0].classList = 'nav-link';
//    }
//    // add active class for the first li item
//    li[0].classList.add('active');
// }
//
// function subNavbar() {
//    for (var i = 0; i < li.length; i++) {
//       if(li[i].children[1]) {
//          // select the <a> tag of this li
//          var dropdown    = li[i].children[0],
//             dropdownText = dropdown.innerText.replace(' ', '-');
//          // add dropdown toggle and attributes to the <a>
//          dropdown.classList.add('dropdown-toggle');
//          setAttributes(dropdown, {
//             'id': dropdownText,
//             'data-toggle': 'dropdown',
//             'aria-haspopup': 'true',
//             'aria-expanded': 'false'
//          });
//          // make the ul semelar to bootstrap classes
//          var ul = li[i].children[1];
//          setAttributes(ul, {
//             'class': 'dropdown-menu',
//             'aria-labelledby': dropdownText
//          });
//       }
//    }
// }
// function menu(classes) {
//    li = $(classes);
//    mainNavbar(classes);
//    subNavbar();
// }
//
// menu('.navbar .navbar-collapse .menu-item');
