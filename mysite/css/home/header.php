<?php
header("content-type: text/css");
echo".html{
	background-color: rgb(0, 0, 0);
}
::-webkit-scrollbar {
    width: 12px !important;
	height: 12px !important;
    background:  #1a1a1b !important;        /* color of the tracking area */
/* width of the entire scrollbar */
}
::-webkit-scrollbar-track {
    background:  #343536 !important;        /* color of the tracking area */
    border-radius: 20px !important;       /* roundness of the scroll thumb */
}
::-webkit-scrollbar-thumb {
    background-color: #818384 !important;    /* color of the scroll thumb */
    border-radius: 20px !important;       /* roundness of the scroll thumb */
    border: 3px solid  #343536 !important;  /* creates padding around scroll thumb */
}
a:-webkit-any-link {
    color: #e3b735;
    cursor: pointer;
    text-decoration: underline;
	text-decoration-color: #ec691e;
}
a:-webkit-any-link:hover {
    color: #ec691e;
}
body{
	background-image: url(https://raw.githubusercontent.com/nate1989/Mysite/main/mysite/css/home/backgrounds/wood.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	width: 2558px;
	height: 1327px;
	max-width: 2558px;
	max-height: 1327px;
	display: block;
    margin: 0px
}
.contentflex,.gridflex{
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	list-style: none;
	-ms-box-orient: horizontal;
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -moz-flex;
	display: -webkit-flex;
	display: flex;
	-webkit-flex-flow: row wrap;
	sflex-flow: row wrap;
}
.gridflex{
	max-height: 1327px;
	overflow: auto;
}";
?>