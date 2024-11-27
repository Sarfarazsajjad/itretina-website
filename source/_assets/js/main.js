$(document).ready(function () {
    if (jQuery) {
      // jQuery is loaded
      // ===== Scroll to Top ==== 
      $(window).scroll(function () {
        if ($(this).scrollTop() >= 150) {        // If page is scrolled more than 50px
          $('#return-to-top').show(1200);    // Fade in the arrow
        } else {
          $('#return-to-top').hide(1200);   // Else fade out the arrow
        }
      });
    } else {
      // jQuery is not loaded
    }  

  });


 
function openTab(tabName) {
    document.querySelectorAll('.mobile-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.mobile-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab(\'' + tabName + '\')"]').classList.add('active');
}

function openTab2(tabName2) {
    document.querySelectorAll('.desktop-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.desktop-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName2 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab2(\'' + tabName2 + '\')"]').classList.add('active');
}

function openTab3(tabName3) {
    document.querySelectorAll('.digital-media-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.digital-media-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName3 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab3(\'' + tabName3 + '\')"]').classList.add('active');
}

function openTab4(tabName4) {
    document.querySelectorAll('.Prowess-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.Prowess-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName4 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab4(\'' + tabName4 + '\')"]').classList.add('active');
}

function showNextTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex < tabs.length - 1) {
        openTab(section + (activeIndex + 1));
    }
}

function showPrevTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex > 0) {
        openTab(section + (activeIndex - 1));
    }
}

$(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 200) {
                $(".pixcile-header").addClass("white-header");
            } else {
                $(".pixcile-header").removeClass("white-header");
            }
        });
        
        const more_option = document.getElementById("nav-btn");
        const mega_option = document.querySelector(".header-nav");
        
        more_option.addEventListener("click", (e) => {
            e.preventDefault();
            mega_option.classList.toggle("open-menu");
            more_option.classList.toggle("nav-open");
        });
        
        
        more_option.addEventListener("click", (e) => {
            if (e.defaultPrevented) return;
            mega_option.classList.remove("open-menu");
            more_option.classList.remove("nav-open");
        }); 

 