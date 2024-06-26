<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasarım Kodlama</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
        }

        html{
            font-size:62.5%;/*1rem = 10px*/
        }

        body,h1,h2,ul{
            margin:0;
            padding:0;
            
        }
        ul{
            list-style: none;
        }

        /*******************/
        body{
            font-family: 'Nunito Sans', sans-serif;
        }
        .arkaplan{
            background-color: #25373D;
        }
        .kapsayici{
            width: 960px;
            margin:0 auto;
        }
        
        .ust{
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 200px;
        }

        .ust .logo{
            text-align: center;
            color:#fff;
        }
        .ust .logo h1{
            font-size:4rem;
            letter-spacing: .5rem;
        }

        .ust .logo h1::first-letter{
            color:#FCB941;
        }

        .ust .logo h1:hover::first-letter{
            background-color: #FCB941;
            color:#25373D;
        }

        .ust .logo h2{
            font-size:2.4rem;
        }

        

        

        .ust .menu ul{
            display: flex;
        }
        .ust .menu ul li{
            margin:0 1rem;
        }

        .ust .menu ul a{
            color:#fff;
            text-decoration: none;
            font-size:1.8rem;
            padding:0 2rem;
        }
        .ust .menu ul a:hover{
            color:#FCB941;
        }

        .orta .bolum1{
            margin-top:20px;
            border:10px solid #25373D;
            padding:20px;
        }

        .orta .bolum1 img{
            display: block;
            width: 100%;
        }

        .orta .bolum2{
            margin-top:20px;
            display: flex;
            justify-content: space-between;
        }
        .orta .bolum2 .kutu{
            flex-basis: 290px;
        }

        .orta .bolum2 .kutu h2{
            font-size: 2rem;
        }

        .orta .bolum2 .kutu p{
            font-size: 1.6rem;
        }

        .orta .bolum3{
            display: flex;
            justify-content: space-between;
            gap:20px;
        }

        .orta .bolum3 h1{
            font-size:2.5rem;
        }

        .orta .bolum3 p{
            font-size:1.6rem;
        }

        .alt{
            margin-top:20px;
            padding:20px 0;
            display: flex;
            gap:20px;
        }
        .alt .baglanti{
            flex-grow: 1;
        }

        .alt .baglanti ul li{
            border-bottom:dotted 1px #FCB941;
            margin:5px 0;
        }

        .alt .baglanti a{
            font-size:1.6rem;
            text-decoration: none;
            color:#FCB941;
        }


        .cizgi{
            border-top:dotted 1px #FCB941;
            margin:20px 0;
        }

        .alt-kenar-10{
            border-bottom:10px solid #FCB941;
        }
        
    </style>
</head>
<body>

    <!-- sayfa üstü-->
    <div class="arkaplan alt-kenar-10">
        <div class="ust kapsayici">
            <div class="logo">
                <h1>Web Tasarım</h1>
                <h2>www.tasarimkodlama.com</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Ana Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- sayfa ortası-->
    <div class="orta kapsayici">
        <div class="bolum1">
            <img src="https://picsum.photos/960/360" alt="Kapak resmi">
        </div>
        <div class="bolum2">
            <div class="kutu">
                <img src="https://picsum.photos/290/180" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit temporibus praesentium iure </p>
            </div>
            <div class="kutu">
                <img src="https://picsum.photos/290/180" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit temporibus praesentium iure </p>
            </div>
            <div class="kutu">
                <img src="https://picsum.photos/290/180" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit temporibus praesentium iure </p>
            </div>


        </div>
        <div class="cizgi"></div>
        <div class="bolum3">
            <div class="icerik">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum atque ullam provident, adipisci quaerat delectus repudiandae voluptatem quo odit consequuntur modi. Ipsa sint quam corrupti vitae dolorem dicta, quia corporis.</p>
                <p>Esse, nulla neque soluta ipsa, voluptates aliquid tempora sequi nisi mollitia quod porro ipsum ratione dolores, ad ullam. Culpa numquam animi dolor architecto maiores ad saepe soluta minima eum totam.</p>
            </div>
            <div class="gorsel">
                <img src="https://picsum.photos/450/250" alt="İlgili ürün bilgisi">
            </div>
        </div>
    </div>

    <!-- sayfa altı-->
    <div class="arkaplan">
        <div class="alt kapsayici">
            <div class="baglanti">
                <ul>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                </ul>
            </div>
            <div class="baglanti">
                <ul>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                </ul>
            </div>
            <div class="baglanti">
                <ul>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                </ul>
            </div>
            <div class="baglanti">
                <ul>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                    <li><a href="#">Sayfa</a></li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>
