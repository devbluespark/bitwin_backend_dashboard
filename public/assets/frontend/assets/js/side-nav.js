window.onload = function () {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";

    if ($(window).width() < 992) {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("sideNavToggleBtn").style.transition = "0.3s";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("mySidenav").style.height = $(document).height() + "px";
    }

}

function navToggle() {

    if (document.getElementById("mySidenav").style.width === "300px" || document.getElementById("mySidenav").style.width === "200px") {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";

        if ($(window).width() < 992) {
            document.getElementById("sideNavToggleBtn").style.marginLeft = "6px";
            document.getElementById("overlay").style.display = "none";
        }

    } else {
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("main").style.marginLeft = "300px";

        if ($(window).width() < 992) {

            document.getElementById("sideNavToggleBtn").style.marginLeft = "306px";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("overlay").style.display = "block";
            document.getElementById("overlay").style.marginLeft = "300px";
            document.getElementById("mySidenav").style.height = $(document).height() + "px";
        }

        if ($(window).width() < 370) {
            document.getElementById("mySidenav").style.width = "200px";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("sideNavToggleBtn").style.marginLeft = "206px";
            document.getElementById("overlay").style.display = "block";
            document.getElementById("overlay").style.marginLeft = "200px";
            document.getElementById("mySidenav").style.height = $(document).height() + "px";
            var all = document.getElementsByClassName('left-nav-link');
            for (var i = 0; i < all.length; i++) {
                all[i].style.paddingLeft = '8px';
            }
        }
    }

}