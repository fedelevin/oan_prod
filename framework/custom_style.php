<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
global $theme_;
?>

/* 01 MAIN STYLES
****************************************************************************************************/
html,body {
	
	background-image:url(https://www.ambiente.gub.uy/oan/wp-content/uploads/2017/04/panel.png);
    
    /*
    background: url(images/panel.png);
	*/

	background-color:#ffffff;
}

.bar-sup {
    background: ;
    /*border-bottom: 1px solid ;*/
}

footer {	
	background-color:#f9f9f9;
}

.footer-down{
    /*background-color:#CCCCCC; */
	background-color: #162B4E;
	color: #FFF;
}

/*
.navbar .navbar-nav > li > a{
	color:#FFFFFF;
	 font-size: 16px; 
}
*/

.btn.btn-green-light {
    background: #25408D !important;
}


.nav--main li[class*="current-menu"] > a, .nav--main li:hover > a {
    //box-shadow: 0px 9px #aebe16 inset;
    color:#999 !important;
}


h2.title_line {
    /* border-bottom: 2px solid #25408D !important; */
}
h1.title_line {
    /* border-bottom: 2px solid #aebe16 !important; */
}

.box{
    /* border: 3px solid #162B4E; */    
}

#back-top {
    background-color: #25408D !important;
}

.owl-theme .owl-controls .owl-page span {
    background: #cececc !important;
}

.dropdown-menu {
    background-color: #162B4E;
}


.dropdown-menu > li > a, .dropdown-menu > li > a {
    color: #FFFFFF;
    background-color: #162B4E;
}

/*link hover*/
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #25408D;
  background-color: #162B4E;
}

/*link active*/
/*
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: ;
}
*/

/* COLOR FONDO SEARCH ***************************************************************/
.overlay {
    background: rgba(rgba(0,0,0,1))!important;
}


/* WIDTH MENU ***********************************************************************/
@media (max-width: 1265px) {    
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }	
	.navbar-collapse.collapse.in { 
        display: block!important;
    }
    .collapsing {
        overflow: hidden!important;
    }
}