<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #ccc;
    padding: 10px;
    text-align: center;
    font-size: 35px;
    color: #8E44AD;
    font-family: 'Fjalla One', sans-serif;
}

.navbar {
    overflow: hidden;
    background-color: #566573;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 135px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 135px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #2980B9;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #8E44AD;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 70%;
    height: 450px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
    margin-top: 10px;
    margin-bottom: 10px; 
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

/* Clear floats after the columns */
section:after {

    content: "";
    display: table;
    clear: both;
    width: 70%;   
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}


.buttonAdd {
    background-color: #F39C12;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position:relative; 
    left: 669px;
    top: 10px;
}


table.table1 {
    border: 1px solid black;
    border-collapse: collapse;
    width: 90%;
    margin-top: 20px;
}

table.table1, table.table1 td, table.table1 th {
    border: 1px solid black;
}



table.table2 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 30px;
}

table.table2 td, table.table2 th {
    border: 0px;
    text-align: left;
    padding: 8px;
}

table.table2 tr:nth-child(even) {
    background-color: #ccc;
}


article {
    float: right;
    padding: 40px;
    width: 20%;
    background-color: #2980B9  ;
    height: 440px; /* only for demonstration, should be removed */
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    padding-top: 10px;
    
}

.buttonPrint {
    background-color: #F39C12;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position:relative; 
    left: 830px; 
    bottom: 10px;
}

.buttonConfirm {
    background-color: #F39C12;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position:relative; 
    left: 840px;
    top:120px; 
    
}


.button {
    background-color: #F39C12;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
}



/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}
</style>
