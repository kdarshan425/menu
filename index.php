<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kiro:Menu</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: 'Spartan', sans-serif;}

        .w3-xxlarge {
            font-size: 18px!important;
            color: white;
        }

        .w3-text-grey, .w3-hover-text-grey:hover, .w3-text-gray, .w3-hover-text-gray:hover {
            color: #bcaa73!important;
            font-size: 14px;
        }

        .menu-head{
            color:white;
            font-size: 20px;
        }

        .w3-tag {
            background-color: #06101b;
            color: #fff;
            display: inline-block;
            padding-left: 8px;
            padding-right: 8px;
            text-align: center;
            font-size:23px !important;
        }

        .green{
            color:#00ff00c7;
            font-size:13px !important;
        }

        .red{
            color:red;
            font-size:13px !important;
        }

        .sticky {
            /* box-shadow: 0px 0px 20px 0px rgb(73 93 207 / 20%); */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 90;
            background: #00000000;
            transition: ease-in-out all 0.4s;
            border-bottom:none;
        }
        .topnav {
            padding-top: 1px;
            background-color: #00000000;
            /* box-shadow: 0px 0px 20px 0px rgb(73 93 207 / 20%); */
            width: 100%;
            position: fixed;
            color: white;
            overflow: hidden;
            height: 60px;
            top: 0;
            z-index: 100;
        }
        .item{
            margin-right: 15px;
            margin-left: 1px;
            padding-left: 0px;
            box-shadow: 0px 10px 20px -5px rgb(73 93 207 / 20%);
        }

        @media (max-width: 508px){
        .item {
            height: auto;
            width: 99%;
            background: white;
            padding-left: 0px;
        }}
        .animate-left {
            position: fixed;
            -webkit-animation: animateleft 0.4s;
            animation: animateleft 0.4s;
        }
        @-webkit-keyframes animateleft {
            from {
                left: -300px;
                opacity: 0;
            }
            to {
                left: 0;
                opacity: 1;
            }
        }
        @keyframes animateleft {
            from {
                left: -300px;
                opacity: 0;
            }
            to {
                left: 0;
                opacity: 1;
            }
        }

        </style>
    </head>
<body>
    <nav style="background: white">
        <div class="topnav" id="myTopnav">
            <a href="#home" style="float:left;font-weight: 900;"></a>
            <a style="height: 60px;"></a>                    
            
            <a href="javascript:void(0);" style="background:transparent;" class="icon"  onclick="dk_open()">                
                <button><h5 style="background:black;color:white;border: #bcaa73 solid 1px;padding:5px 10px 5px 10px;">Menu</h5></button>
            </a>
        
        </div>
    </nav>


    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="sidebar animate-left" style="display:none;box-shadow: rgb(0 0 0 / 32%) 1px 20px 40px 20px;" id="mySidebar">
        <a href="javascript:void(0)" onclick="dk_close()" style="padding-top: 30px;font-size: 20px;">Close ??</a>
        <a href="#soup" onclick="dk_close()" >Soup</a>
        <a href="#bar" onclick="dk_close()" >Bar Munchies</a>
        <a href="#small" onclick="dk_close()">Small Plates</a>
        <a href="#sushi" onclick="dk_close()" >Sushi</a>
        <a href="#pizza" onclick="dk_close()">Pizza</a>
        <a href="#pasta" onclick="dk_close()">Pasta</a>      
        <a href="#risotto" onclick="dk_close()">Risotto</a>
        <a href="#burg" onclick="dk_close()">Burgers</a>               
        <a href="#large" onclick="dk_close()">Large Plates</a>
        <a href="#curry" onclick="dk_close()" >Curries</a>
        <a href="#dal" onclick="dk_close()">Dal</a>
        <a href="#rice" onclick="dk_close()" >Rice</a>
        <a href="#bread" onclick="dk_close()">Bread</a>
        <a href="#pacurries" onclick="dk_close()">Pan Asian Curries</a>      
        <a href="#noodles" onclick="dk_close()">Noodles</a>
        <a href="#ramen" onclick="dk_close()">Ramen</a>               
        <a href="#seafood" onclick="dk_close()">Seafood</a>
        <a href="#dessart" onclick="dk_close()">Desserts</a>
    </nav>
<!-- Start Content -->
<div id="home" >


<!-- Menu -->
<div id="menu" style="background:#06101b !important" class="w3-container  w3-xxlarge w3-padding-64">

    <h1 onclick="dk_open()" style="font-size:30px;font-weight: bolder;" class="w3-center w3-padding-32">THE MENU </h1>    
    <!-- <div class="w3-row w3-center w3-border w3-border-dark-grey">
    <a href="#pizza"><div class="w3-third w3-padding-large w3-red">Pizza</div></a>
    <a href="#pasta"><div class="w3-third w3-padding-large w3-hover-red">Pasta</div></a>
    <a href="#starters"><div class="w3-third w3-padding-large w3-hover-red">Starters</div></a>
</div> -->
    <div id="soup" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>
                    <h1 style="font-size:27px;"><b>Soup and salad</b></h1>
                </center>
            </div>        
        </div>
        <h1><b class="menu-head">Tomato Bloody Mary</b> <span class="w3-right w3-tag ">199</span></h1>
        <p class="w3-text-grey">Classic tomato soup. Tabasco, celery & Worcestershire. Vegetable and pasta. Parmesan</p>
        <hr>
        <h1><b class="menu-head">Sweet Corn </b> <span class="w3-right w3-tag ">199</span></h1>
        <p class="w3-text-grey">All time favourite, hint of vinegar</p>        
        <hr>
        <h1><b class="menu-head">Chicken Sweet Corn </b> <span class="w3-right w3-tag ">229</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey"></p>
        <hr>
        <h1><b class="menu-head">Mushroom Cappuccino</b> <span class="w3-right w3-tag ">209</span></h1>
        <p class="w3-text-grey">Button, shitake and oyster mushroom cream. Sour cream & porcini mushroom dust</p>
        <hr>
        <h1><b class="menu-head">Tom Kha </b> <span class="w3-right w3-tag ">239</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Aromatic chicken and coconut broth. Bird's eye chili and kaffir lime</p>
        <hr>
        <h1><b class="menu-head">Murgh Yakhani Shorba</b> <span class="w3-right w3-tag ">239</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Slow cooked chicken broth. Hand pulled chicken, brista and micro-Gs</p>
        <hr>
        <h1><b class="menu-head">Hot Tabasco Barley</b> <span class="w3-right w3-tag ">319</span></h1>
        <p class="w3-text-grey">Mixed lettuce. Mixed herbs and mixed microgreens. Wasabi peas. Mixed seeds</p>
        <hr>
        <h1><b class="menu-head">Salad Caesar</b> <span class="w3-right w3-tag ">319</span></h1>
        <p class="w3-text-grey">Our version. Mixed lettuce. Herbed crutons. Nuts and parmesan shavings. Sundried tomatoes</p>
        <hr>
        <h1><b class="menu-head">Chicken Salad Caesar</b> <span class="w3-right w3-tag ">369</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey"></p>
        <hr>
        <h1><b class="menu-head">Thai Chicken Lettuce Salad</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Spicy chicken strips. Chili and lime. Sesame and spring onion. Served in lettuce cups</p>
        <hr>
    </div>


    <div id="bar" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>
                    <h1 style="font-size:27px;"><b>Bar Munchies</b></h1>
                </center>
            </div>        
        </div>
        <h1><b class="menu-head">Masala Peanuts</b> <span class="w3-right w3-tag ">119</span></h1>
        <hr>
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9"><b class="menu-head">French Fries <br>(Salted / Peri peri / Masala / Cheese)</b>  </div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">119 / 139 / 139 / 159</span></div>
            </div>
        </div>
        <hr>
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9"><b class="menu-head">Kadak Roomali (Masala / Bhuna mutton kheema)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">119 / 249</span></div>
            </div>
        </div>
        <hr>        
    </div>

    <div id="small" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>
                    <h1 style="font-size:27px;"><b>Small Plates</b></h1>
                    <div style="paddint-top:20px;">
                        <h4>From Our Tandoor, Kadhai and Tava</h4>
                    </div>
                </center>
            </div>        
        </div>
        <h1><b class="menu-head">Achaari Mushroom Tikka</b> <span class="w3-right w3-tag ">319</span></h1>
        <p class="w3-text-grey">Feta and spinach stuffing. Panchranga pickle puree. Button mushrooms caps</p>
        <hr>
        <h1><b class="menu-head">Kolhapuri Paneer Tikka </b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Fiery. Green peppercorn and butter</p>        
        <hr>
        <h1><b class="menu-head">Paneer Kasuri Tikka </b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Teekha chutney marination, stuffed with cheese, parmesan crisps</p>
        <hr>
        <h1><b class="menu-head">Peeli Miri Paneer Tikka</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Yellow chili paneer tikka, served with chutney and laccha onion</p>
        <hr>        
        <h1><b class="menu-head">Malai Paneer Tikka Afghani</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Processed cheese. Cardamom. Fried onion. Almond crunch. Cranberry chutney</p>
        <hr>
        <h1><b class="menu-head">Mushroom Malai Kulcha</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Tandoori baby kulcha. Truffle mushroom yogurt. Hazelnut and lime</p>
        <hr>
        <h1><b class="menu-head">Mushroom Galawati kebab</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Button and shitake mushroom paste. Inhouse galawati masala. Crisp papadi. Mint chutney </p>
        <hr>
        <h1><b class="menu-head">Mohali Pind Tandoori Murgh</b> <span class="w3-right w3-tag ">299</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Chandigarh special. Half tandoori chicken, Inhouse ' bhatti masala' </p>
        <hr>
        <h1><b class="menu-head">Old Monk Ingipuli Lollypops</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Flavours from Kerala. Ginger, tamarind, green chili and jaggery. Spiked with Old Monk.</p>
        <hr>
        <h1><b class="menu-head">Chicken Lazeez Tikka</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Classic chicken tikka. Yogurt drops. All time favourite. </p>
        <hr>
        <h1><b class="menu-head">Nawabi Chicken Neza Kebab</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Spear shaped kebabs. Origins from Lucknow. Basil, mint and coriander marinade</p>
        <hr>
        <h1><b class="menu-head">Malai-Makhan Murgh Tikka</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Cheddar cheese and cream. Cardamom. Garam masala. Parmesan crust </p>
        <hr>
        <h1><b class="menu-head">KIRO BC Doughnuts</b> <span class="w3-right w3-tag ">399</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Creamy butter chicken stuffed crispy doughballs. Pickled baby beets. Mint mayo. Must try !!</p>
        <hr>
        <h1><b class="menu-head">Taka-Tak Goan Chicken</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Chicken thighs, Goan cafreal marinade, coriander and coconut and potato wedges </p>
        <hr>
        <h1><b class="menu-head">Purani Dilli Mutton Seekh</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Minced mutton skewers. Melted butter and cream. Chaat masala. Herbs. Chili garlic naan</p>
        <hr>

        <h1><b class="menu-head">Lucknowi Mutton Galouti</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Aromatic mutton paste. Inhouse galawati masala. Crisp papadi. Mint chutney  </p>
        <hr>
        <h1><b class="menu-head">Ajwaini Mahi Tikka</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Tandoori marinated Basa. Carrom seeds. Fresh chilies</p>
        <hr>
        <h1><b class="menu-head">Arabian Sea Prawn Tikka</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Tandoori prawns. Mango salsa. Micro-Gs </p>
        <hr>
        <h1><b class="menu-head">Tandoori Pomfret</b> <span class="w3-right w3-tag ">599</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Whole fish. Spicy marinate. Chargrilled</p>
        <hr>
    </div>


    <div  style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>From Our Pots, Pans and Griller</h4>
                    </div>
                </center>
            </div>        
        </div>
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Classic Hummus (Falafel / Chicken shish touk)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Chickpeas, garlic, tahini and olive oil</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">349 / 379</span></div>
            </div>
        </div>        
        <h1><b class="menu-head">Jalapeno Cheese Poppers</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Chili cheese mix. Chipotle seasoning. Ranch dip</p>        
        <hr>
        <h1><b class="menu-head">Piled Up Nachos</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">In house cheese sauce, fresh tomato salsa, guacamole and refried beans</p>
        <hr>
        <h1><b class="menu-head">Italian Arancini</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">With tomato and mushroom sauce. Fresh parmesan and pesto</p>
        <hr>        
        <h1><b class="menu-head">Taco Renello</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Whole bhavnagri chili, cheese, pico de gallo, sour cream and avocado</p>
        <hr>
        <h1><b class="menu-head">TexMex Crunchwrap</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Refined beans. Sour cream. Cheese sauce. Salsa and nachos.</p>
        <hr>
        <h1><b class="menu-head">Upside Down KIRO Fries</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Layers of fries. Mutton kheema. Cheese sauce. Served upside down</p>
        <hr>
        <h1><b class="menu-head">Kolkata Cabin Chicken & Chips</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Minced chicken cutlet. Fries. Kolkata kasundi. Ketchup </p>
        <hr>
        <h1><b class="menu-head">Burnt Chili Chicken Taco</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Spicy grilled chicken. Pico de galo. Corn. Sour cream</p>
        <hr>
        <h1><b class="menu-head">Fried Calamari</b> <span class="w3-right w3-tag ">459</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Panko crusted. Peri peri dust. Grilled orange. Hot sauce. Tartare </p>
        <hr>
        <h1><b class="menu-head">Kingfisher Beer Batter Fish and Chips</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Basa, fries, smoked ketchup, tartar sauce</p>
        <hr>
        <h1><b class="menu-head">Spanish Chili Garlic Prawns</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Garlic flakes. Crushed chilies. Olive oil and balsamic. Toasted bread </p>
        <hr>
    </div>

    <div  style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>From Our Wok</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Tempura Corn and Chestnut</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Light soy dip. Chili garlic dip.</p>        
        <hr>
        <h1><b class="menu-head">Crispy Naga Chili Lotus Stem</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Crisp lotus stem. Spicy Naga chili paste. White and black sesame seeds</p>
        <hr>
        <h1><b class="menu-head">Steamed Wontons (Veg / Chicken)</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Chili garlic. Light soy. Green onion</p>
        <hr>        
        <h1><b class="menu-head">Kungpao Baby corn</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Sweet. Sour. Tingle of heat. Nuts</p>
        <hr>
        <h1><b class="menu-head">Paneer Chili Basil</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Cottage cheese. Whole red chili. Chili paste. Basil and vinegar</p>
        <hr>
        <h1><b class="menu-head">Paneer Chili Dry</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="w3-text-grey">Classic</p>
        <hr>
        <h1><b class="menu-head">Hot Chicken Lollypop</b> <span class="w3-right w3-tag ">359</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Tangy. Spicy. Will go well with your alcohol</p>
        <hr>
        <h1><b class="menu-head">KIRO Chili Chicken</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Mathania chilies. Fried chicken. Soy. Vinegar</p>
        <hr>
        <h1><b class="menu-head">Asian Barbeque Chicken</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Sticky soy marinate. Oyster mushroom glaze. Toasted sesame </p>
        <hr>
        <h1><b class="menu-head">Double Pepper Chicken</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Crushed black pepper. Pickled green pepper corn. Green onion</p>
        <hr>
        <h1><b class="menu-head">Pot Roast Lamb Gochujang</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Sliced lamb. Twice cooked. Bell peppers. Scalions. Fermented Korean chili</p>
        <hr>
        <h1><b class="menu-head">Crispy Lamb Cumin Sesame</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Lamb fried crisp. Ground cumin seeds.  </p>
        <hr>
        <h1><b class="menu-head">Thailand Wok Tossed Fish</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Thai chili. Lemongrass. Thai basil</p>
        <hr>
        <h1><b class="menu-head">Red Thai Prawns</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Thai paste. Green and red chili. Fried garlic</p>
        <hr>
        <h1><b class="menu-head">Prawn Pepper Salt</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Crushed black pepper. Pickled green pepper. Soy and chilies  </p>
        <hr>
    </div>

    <div id="sushi" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>
                    <h1 style="font-size:27px;"><b>Sushi</b></h1>
                </center>
            </div>        
        </div>
        <h1><b class="menu-head">Corn and Edamame Gunkan</b> <span class="w3-right w3-tag ">489</span></h1>
        <hr>
        <h1><b class="menu-head">Mushroom and Oyster sauce Musubi </b> <span class="w3-right w3-tag ">489</span></h1>
        <hr>
        <h1><b class="menu-head">Crispy Prawn Uramaki</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <hr>
        <h1><b class="menu-head">Teriyaki Chicken and Avocado Uramaki</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <hr>
    </div>

    <div id="pizza" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h1 style="font-size:27px;"><b>Little Italy</b></h1>
                        <h4>Pizza (12 inch. Stone baked. Thin crust)</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Classic Caprese</b> <span class="w3-right w3-tag ">509</span></h1>
        <p class="w3-text-grey">Tomato. Cheese. Basil</p>        
        <hr>
        <h1><b class="menu-head">Greenwich</b> <span class="w3-right w3-tag ">559</span></h1>
        <p class="w3-text-grey">Bocconcini. Cherry tomatoes. Pesto. Parmesan shavings. Avocado and arugula</p>
        <hr>
        <h1><b class="menu-head">Hottest</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="w3-text-grey">Chili cheese mix. Sriracha paneer. Vegetables. Paprika and jalapenos</p>
        <hr>        
        <h1><b class="menu-head">Garlicky S'hrooms</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="w3-text-grey">Grilled shitake. Button mushrooms. Caramelized onion. Roasted garlic. Toasted almonds and rucola</p>
        <hr>
        <h1><b class="menu-head">Truly Indian</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="w3-text-grey">Paneer tikka. Onion. Capsicum. Cheese and coriander</p>
        <hr>
        <h1><b class="menu-head">4 Cheese</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="w3-text-grey">Mozzarella. Cheddar. Feta. Parmesan.</p>
        <hr>
        <h1><b class="menu-head">Ortalano</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="w3-text-grey">Onion. Tomato Mushroom. Corn. Jalapeno. Bell peppers and paprika</p>
        <hr>
        <h1><b class="menu-head">Burrata Salad Pizza</b> <span class="w3-right w3-tag ">559</span></h1>
        <p class="w3-text-grey">Burrata cheese. Arugula. Ice berg lettuce. Sundried tomatoes. Mixed nuts. Cranberry</p>
        <hr>
        <h1><b class="menu-head">Paprika Chicken</b> <span class="w3-right w3-tag ">559</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Pickled paprika. Roast chicken. American corn</p>
        <hr>
        <h1><b class="menu-head">Spicy Korean Chicken</b> <span class="w3-right w3-tag ">559</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Gochujang tossed chicken. Tomatoes. Onion. Bell peppers and spring onion greens</p>
        <hr>
        <h1><b class="menu-head">Chicken Supreme</b> <span class="w3-right w3-tag ">559</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Grilled sausages. Roast chicken. Chili chicken </p>
        <hr>
        <h1><b class="menu-head">Meat Mix</b> <span class="w3-right w3-tag ">599</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Chicken sausages. Mutton kheema. Gochujang chicken. Chicken pepperoni. Onion</p>
        <hr>
        <h1><b class="menu-head">Seafood Medley</b> <span class="w3-right w3-tag ">599</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Butter garlic squids. Grilled prawns. Grilled fish. Capers and parsley</p>
        <hr>
    </div>

    <div id="pasta" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Pasta</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Agli o lio</b> <span class="w3-right w3-tag ">399</span></h1>
        <p class="w3-text-grey">Spaghetti. Sundried tomato. Chili flakes, garlic, herbs and lemon</p>        
        <hr>
        <h1><b class="menu-head">Alfredo</b> <span class="w3-right w3-tag ">419</span></h1>
        <p class="w3-text-grey">Classic cheese sauce pasta</p>
        <hr>
        <h1><b class="menu-head">Penne Arrabiata</b> <span class="w3-right w3-tag ">419</span></h1>
        <p class="w3-text-grey">Spicy tomato sauce. Spiked with jalapeno. Flavoured with basil</p>
        <hr>        
        <h1><b class="menu-head">Baked Mac and Cheese</b> <span class="w3-right w3-tag ">429</span></h1>
        <p class="w3-text-grey">Corn and jalapeno. Breadcrumbs and baked. Served with a side salad</p>
        <hr>  
        <h1><b class="menu-head">Lasagne</b> <span class="w3-right w3-tag ">449</span></h1>
        <p class="w3-text-grey">3 layered veg lasagne. Parmesan tuilie. Fresh salad</p>
        <hr>        
        <h1><b class="menu-head">Grilled Chicken Agli o lio</b> <span class="w3-right w3-tag ">449</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Spaghetti. Grilled chicken. Sundried tomatoes. Chili flakes, garlic, herbs and lemon</p>
        <hr>
        <h1><b class="menu-head">Spaghetti Meatball and Sausage</b> <span class="w3-right w3-tag ">459</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Tomato sauce. Lamb meatballs. Grilled chicken sausage. Crushed chilies. Parsley and mint. Tomato sauce</p>
        <hr>
    </div>

    <div id="risotto" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Risotto</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">3 Mushroom Risotto</b> <span class="w3-right w3-tag ">429</span></h1>
        <p class="w3-text-grey">Porcini mushroom puree. Mushroom broth. Grilled shitake and button mushrooms. Thyme, garlic and butter</p>        
        <hr>
        <h1><b class="menu-head">Grilled Chicken Risotto</b> <span class="w3-right w3-tag ">469</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Chicken stock. Grilled chicken. Herbs and parmesan</p>
        <hr>
        <h1><b class="menu-head">Citrus Seafood Risotto</b> <span class="w3-right w3-tag ">489</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Grilled prawns. Squid rings. Fish. Lemon zest, capers, olives and saffron</p>
        <hr>
    </div>

    <div id="burg" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Not Just S'wiches and Burgs <br>Served with potato salli and slaw</h4>

                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Oven Roasted Vegetable Panini</b> <span class="w3-right w3-tag ">299</span></h1>
        <p class="w3-text-grey">Oven roasted tomatoes. Basil pesto. Pizza cheese.</p>        
        <hr>
        <h1><b class="menu-head">Chicken Salad Panini</b> <span class="w3-right w3-tag ">329</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Hawaiian chicken salad. Lettuce. Cheese</p>
        <hr>
        <h1><b class="menu-head">Baked Potato & Mushroom Burger</b> <span class="w3-right w3-tag ">379</span></h1>
        <p class="w3-text-grey">With spinach, corn and cheese</p>
        <hr>        
        <h1><b class="menu-head">Buttermilk Fried Chicken Burger</b> <span class="w3-right w3-tag ">399</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Crisp fried chicken. Barbeque mayo. Peri-peri dust. Pickles</p>
        <hr>  
        <h1><b class="menu-head">2 Egg Folded French Omelette</b> <span class="w3-right w3-tag "></span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Served with toast. Side salad. Grilled tomato and French fries</p>
               
        <h1><b class="menu-head">Plain</b> <span class="w3-right w3-tag ">149</span></h1>
        <h1><b class="menu-head">Masala</b> <span class="w3-right w3-tag ">149</span></h1>
        <h1><b class="menu-head">Cheese</b> <span class="w3-right w3-tag ">169</span></h1>
        <h1><b class="menu-head">Mushroom and cheese</b> <span class="w3-right w3-tag ">189</span></h1>
        
        
    </div>

    <div id="large" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Large Plates</h4>
                        <h4>Plated International Meals</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Russian Stroganoff (Mushroom / Chicken)</b> <span class="w3-right w3-tag ">439</span></h1>
        <p class="w3-text-grey">Sour cream gravy. Gherkins. Paprika and pasta</p>   
        <p class="green">Veg</p> 
        <p class="red">Non-veg</p>    
        <hr>
        <h1><b class="menu-head">Chicken Parmigiana</b> <span class="w3-right w3-tag ">489</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Crumbed chicken breast. Cherry tomato ragout. Bocconcini and spaghetti agli o lio.</p>
        <hr>
        <h1><b class="menu-head">Grilled Fish with Prawn Lemon Butter</b> <span class="w3-right w3-tag ">509</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Creamy garlic hummus. Grilled asparagus. Prawn-caper sauce. Cherry tomato confit </p>
        <hr>
    </div>


    <div id="curry" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h1 style="font-size:27px;"><b>Awesome India</b></h1>
                        <h4>Curries</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Rustic Aloo Bharta</b> <span class="w3-right w3-tag ">329</span></h1>
        <p class="w3-text-grey">Mashed potatoes. Mustard oil. Asafoetida. Chilies and green onion.</p>        
        <hr>
        <h1><b class="menu-head">Veg Kofta Kolhapuri</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Spicy onion and tomato curry. Crisp fried koftas</p>
        <hr>
        <h1><b class="menu-head">Lehsuni Palak Paneer</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Spicy spinach curry. Burnt garlic and dried chilies. Cream</p>
        <hr>     
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Dhaba Style Kadhai (Veg / Paneer/ Murgh)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Onion and tomato curry. Coarse kadhai masala. Capsicum and coriander</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">329 / 349 / 389</span></div>
            </div>
            <hr>   
        </div>  
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Purani Dilli Makhani (Paneer / Murgh)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Creamy tomato curry. Kasuri methi. Butter</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">349 / 389</span></div>
            </div>
            <hr>   
        </div>  
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Tikka Masala (Paneer / Murgh)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Kiro team favourite.</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">349 / 389</span></div>
            </div>
            <hr>   
        </div>      
        

        <h1><b class="menu-head">Village Chicken and Potato Curry</b> <span class="w3-right w3-tag ">389</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Cooked in an Eathern pot. Packed with flavour. Best with steamed rice</p>
        <hr>
        <h1><b class="menu-head">Murgh Lahori</b> <span class="w3-right w3-tag ">389</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Medium spicy. Almond paste. Indian spices</p>
        <hr>
        <h1><b class="menu-head">Nilgiri Gosht</b> <span class="w3-right w3-tag ">489</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Lamb on bone . Spinach, fenugreek and fresh coconut paste. Dried red chilies, garlic and spices</p>
        <hr>
        <h1><b class="menu-head">Garhwali Mutton Curry</b> <span class="w3-right w3-tag ">489</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Slow cooked lamb curry. Onion and tomatoes. Fresh coriander and lemon</p>
        <hr>
        <h1><b class="menu-head">Mutton Kheema Pav</b> <span class="w3-right w3-tag ">489</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Minced mutton. Brown onion. Freshly ground spices. In house Pao</p>
        <hr>
        
    </div>

    <div id="dal" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        
                        <h4>Dal</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Dal Tadka</b> <span class="w3-right w3-tag ">259</span></h1>
        <p class="w3-text-grey">Moong and Masoor. Cumin, curry leaf tadka</p>       
        <hr>
        <h1><b class="menu-head">KIRO Dal Makhani</b> <span class="w3-right w3-tag ">289</span></h1>
        
        <p class="w3-text-grey">24 X 7 cooked dal. Kasuri methi. Plum tomatoes and cream</p>
        <hr>
        
    </div>


    <div id="rice" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Dum Biryani and Rice</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Steamed rice</b> <span class="w3-right w3-tag ">179</span></h1>
        <hr>
        <h1><b class="menu-head">Jeera rice</b> <span class="w3-right w3-tag ">199</span></h1>
        <hr>
        <h1><b class="menu-head">Vegetable Pulao</b> <span class="w3-right w3-tag ">229</span></h1>
        <hr>        
        <h1>
            <b class="menu-head">Khichadi</b> </h1>
            <h1><b class="menu-head">Palak khichadi</b> <span class="w3-right w3-tag ">249</span></h1>
            <h1><b class="menu-head">Dal khichadi</b> <span class="w3-right w3-tag ">249</span></h1>
        <hr>  
        <h1><b class="menu-head">Veg Biryani</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Mixed vegetables. Paneer</p>
        <hr>        
        <h1><b class="menu-head">Murgh Biryani</b> <span class="w3-right w3-tag ">449</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Flavour pack chicken. Spices. Brista. Kewra and Rose</p>
        <hr>
        <h1><b class="menu-head">Yakhani Gosht Biryani</b> <span class="w3-right w3-tag ">525</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Yogurt. Fried onion. Ground spices. Kewra and Rose</p>
        <hr>
        <h1><b class="menu-head">Prawn Pulao</b> <span class="w3-right w3-tag ">545</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Masala rice. Fresh coriander. Lemon and chilies</p>
        <hr>
    </div>

    <div id="bread" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Indian Breads</h4>
                    </div>
                </center>
            </div>        
        </div>   
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Pao (plain / butter)</b></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">39 / 49</span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Roti (plain / butter)</b></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">39 / 49</span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Naan (plain / butter / garlic )</b></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">49 / 59 / 69</span></div>
            </div>
            <hr>  
        </div>      
        <h1><b class="menu-head">Tandoori laccha paratha</b> <span class="w3-right w3-tag ">59</span></h1>
        <hr>  
        <h1><b class="menu-head">Chili Cheese Stuffed Naan</b> <span class="w3-right w3-tag ">99</span></h1>
        <hr>  
        <h1><b class="menu-head">Roomali</b> <span class="w3-right w3-tag ">99</span></h1>
        <hr>  
    </div>

    <div id="pacurries" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h1 style="font-size:27px;"><b>Straight From Pan Asia</b></h1>
                        <h4>Pan Asian Curries</h4>
                    </div>
                </center>
            </div>        
        </div>          
        <h1><b class="menu-head">Schezwan potato</b> <span class="w3-right w3-tag ">329</span></h1>
        <p class="w3-text-grey">Fried potato. Schezwan. Green onion. Vinegar</p>        
        <hr>
        <h1><b class="menu-head">Stir Fried Vegetables</b> <span class="w3-right w3-tag ">329</span></h1>
        <p class="w3-text-grey">Mixed greens. Fried garlic. Butter garlic sauce</p>
        <hr>
        <h1><b class="menu-head">Black Bean Mushroom</b> <span class="w3-right w3-tag ">329</span></h1>
        <p class="w3-text-grey">Fermented black bean curry. Button mushrooms</p>
        <hr>     
        <h1><b class="menu-head">Schezwan Paneer</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">Classic</p>
        <hr>     
        <h1><b class="menu-head">Diced Kungpao Chicken</b> <span class="w3-right w3-tag ">389</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Nuts. Dried red chilies. Soy</p>
        <hr>
        <h1><b class="menu-head">Stir Fried Chicken And Bamboo Shoot</b> <span class="w3-right w3-tag ">389</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Pak choy. Mushrooms. Fried garlic. Butter garlic sauce</p>
        <hr>
        <h1><b class="menu-head">Fiery Basil Sliced Fish </b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Basa. Chili sauce. Vinegar and green onion</p>
        <hr>
        <h1><b class="menu-head">Steamed Fish</b> <span class="w3-right w3-tag ">479</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Ginger. Spring onion sauce</p>
        <hr>
        <h1><b class="menu-head">Seafood Stir-fry</b> <span class="w3-right w3-tag ">529</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Prawns. Squid. Clams and fish. Pak choy. Mushrooms. Garlic and butter</p>
        <hr>
        <h1><b class="menu-head">Prawns CG</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Inhouse chili paste. Fried garlic. Vinegar</p>
        <hr>
        <h1><b class="menu-head">Prawn and Pak choy</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Hot and sour chili prawns. Pak choy. Micro-Gs</p>
        <hr>
        <h1><b class="menu-head">Singapore Chili Crabs</b> <span class="w3-right w3-tag ">649</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Sweet. Sour. Spicy. Egg drop curry</p>
        <hr>
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Burmese Khowsuey (Vegetables / Chicken / Prawns)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Choice of rice or noodles, served with condiments </p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">429 / 449 / 549</span></div>
            </div>
        </div>  
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Thai Curry (Vegetables / Chicken / Prawns)</b> <br><p class="green">Veg</p><p class="red">Non-veg</p>
                    <p class="w3-text-grey">Served with Steamed Rice</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">429 / 449 / 549</span></div>
            </div>
        </div>  
         
    </div>

    <div id="noodles" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Noodles & Rice</h4>
                    </div>
                </center>
            </div>        
        </div>   
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Hawker Style Noodles (Veg / Egg / Chicken )</b><br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">299 / 329 / 349</span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Chili Garlic Veg Noodles</b><br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">319 </span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Asian BBQ Noodles (Veg / Egg / Chicken)</b><br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">319 / 349 / 369</span></div>
            </div>
            <hr>  
        </div>      
        <h1><b class="menu-head">Chili Oyster Chicken Noodles</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <hr>  
        <h1><b class="menu-head">Mixed Meat Noodles</b> <span class="w3-right w3-tag ">389</span></h1>
        <p class="red">Non-veg</p>
        <hr>  
        
        <div>            
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Wok Style Fried Rice (Veg / Egg / Chicken)</b><br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">299 / 329 / 349 </span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Edamame, Corn and Asparagus fried Rice (Veg / Egg / Chicken)</b><br><p class="green">Veg</p><p class="red">Non-veg</p></div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">319 / 349 / 369</span></div>
            </div>
            <hr>  
        </div>      
        <h1><b class="menu-head">BBQ Chicken and Mushroom Fried Rice</b> <span class="w3-right w3-tag ">369</span></h1>
        <p class="red">Non-veg</p>
        <hr>  
        <h1><b class="menu-head">Schezwan Chicken and Egg Rice</b> <span class="w3-right w3-tag ">369</span></h1>
        <p class="red">Non-veg</p>
        <hr>  
        
    </div>

    <div id="ramen" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        <h4>Ramen Bowls</h4>
                    </div>
                </center>
            </div>        
        </div>   
        <div>
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Sriracha and Cheese</b>
                    <p class="w3-text-grey">Sriracha broth. Sweet corn. Veggies. Noori strips. Cheese and Veg cutlet</p>
                </div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">329</span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Korean BBQ Chicken</b>
                    <p class="red">Non-veg</p>
                    <p class="w3-text-grey">Mushroom broth. Shitake mushroom. Broccoli. Sweet corn. Crumbed BBQ chicken</p>
                </div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">429</span></div>
            </div>
            <hr>  
            <div class="row">
                <div style="width:70%;align:left" class="col-xs-9">
                    <b class="menu-head">Surfer </b>
                    <p class="red">Non-veg</p>
                    <p class="w3-text-grey">Coconut broth. Clam. Prawns. Basa and Squid. Sweet corn. Shitake mushroom. Bean sprout. Pak choy</p>
                </div>
                <div style="width:30%;align:right" class="col-xs-3"><span style="font-size:15px !important" class="w3-right w3-tag ">529</span></div>
            </div>
            <hr>        
        
    </div>

    <div id="seafood" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        
                        <h4>Seafood special</h4>
                    </div>
                </center>
            </div>        
        </div>         
             
        <h1><b class="menu-head">Bombil Rawa Fry</b> <span class="w3-right w3-tag ">309</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Coriander and chili marination. Rawa coated. Masala Laccha Onion</p>
        <hr>
        <h1><b class="menu-head">Seafood Mango Curry (Fish / Prawns)</b> <span class="w3-right w3-tag ">549 / 569</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Raw mango and coconut. Tangy gravy</p>
        <hr>      
        <h1><b class="menu-head">Gaon Curry</b> <span class="w3-right w3-tag ">549 / 569</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Pomfret / Prawns</p>
        <hr>
        <h1><b class="menu-head">Malabari Fish curry (Fish / Prawns)</b> <span class="w3-right w3-tag ">549 / 569</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Medium spicy coconut curry</p>
        <hr>
        <h1><b class="menu-head">Meen Moilee</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Kerela speciality, surmai in a light flavourful coconut curry</p>
        <hr>
        <h1><b class="menu-head">Sri Lankan Prawn Curry</b> <span class="w3-right w3-tag ">549</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Rustic onion tomato curry cooked in clay pot</p>
        <hr>
        <h1><b class="menu-head">Sukka (Clams / Prawn) </b> <span class="w3-right w3-tag ">569 / 599</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Dried coconut masala. Freshly ground spice. Fresh coriander. Lemon</p>
        <hr>
        <h1><b class="menu-head">Surmai Tawa Fry </b> <span class="w3-right w3-tag "> 599</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Tempered with curry leaf and masalas</p>
        <hr>
        
         
    </div>

    <div id="dessart" style="background:#06101b;" class="w3-container w3-padding-32">
        <div class="container">
            <div style="padding:20px 20px 40px 20px;margin:auto;">
                <center>                    
                    <div style="paddint-top:20px;">
                        
                        <h4>Desserts</h4>
                    </div>
                </center>
            </div>        
        </div>         
             
        <h1><b class="menu-head">Choice Of Ice creams</b> <span class="w3-right w3-tag ">159</span></h1>        
        <p class="w3-text-grey">Check with your server for flavours</p>
        <hr>
        <h1><b class="menu-head">Black and White Whiskey Brownie</b> <span class="w3-right w3-tag ">349</span></h1>    
        <p class="w3-text-grey">Chocolate brownie. Whiskey chocolate sauce. Dulce de leche</p>
        <hr>      
        <h1><b class="menu-head">Lava Cake DBC</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Death By Chocolate. Magnum. Chocolate truffles. Peanut chocolate rocks</p>
        <hr>
        <h1><b class="menu-head">Baked Cheese Cake</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Cream cheese. Biscuit crumble. Fruit compote</p>
        <hr>
        <h1><b class="menu-head">Kiro Panna Cotta</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Vanilla pana cotta. Granola. Citrus sauce</p>
        <hr>
        <h1><b class="menu-head">Ras Malai Tres Lesches</b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="w3-text-grey">3 types of milk. Cardamom and saffron. Sponge cake</p>
        <hr>
        <h1><b class="menu-head">A Bowl Of Tiramisu </b> <span class="w3-right w3-tag ">349</span></h1>
        <p class="red">Non-veg</p>
        <p class="w3-text-grey">Mascarpone mousse. Old monk coffee decoction. Lady finger. Sabayon</p>
        <hr>
        <h1><b class="menu-head">Peach Melba French Toast</b> <span class="w3-right w3-tag "> 349</span></h1>
        <p class="w3-text-grey">Brioche toast. Grilled peaches. Raspberry sauce</p>
        <hr>
        
         
    </div>
<!-- 
<h1 id="pasta" class="w3-center w3-jumbo w3-padding-32">PASTA</h1>
<div class="w3-container w3-white w3-padding-32">
<h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span>
<span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
<p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
<hr>
<h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
<p class="w3-text-grey">Ravioli filled with cheese</p>
<hr>
<h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
<p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
</div>
<h1 id="starters" class="w3-center w3-jumbo w3-padding-32">STARTERS</h1>
<div class="w3-container w3-white w3-padding-32">
<h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span>
<span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
<p class="w3-text-grey">Ask the waiter</p>
<hr>
<h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
<p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
<hr>
<h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
<p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
</div> -->
</div>

<!-- End Content -->
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
