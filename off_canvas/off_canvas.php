<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title></title>
	<link rel="icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="<? echo $prefix; ?>css/off_canvas.css" />
	<link rel="stylesheet" href="<? echo $prefix; ?>css/menu_fulls.css" />
	
	
</head>
<body id="body">
	




    <div class="site">
        
        
        
        <div id="off_canvas2" class="off_canvas2 opened">
        </div>
        
        <div id="off_canvas" class="off_canvas ">
            <div id="menu_button" onclick="">
                <div class="stick" id="top_stick"></div>
                <div class="stick" id="center_stick"></div>
                <div class="stick" id="bottom_stick"></div>
		    </div>
            <ul>
                <li><a href="#c1" class="scrollto"><span>Наши работы</span></a></li>
                <li><a href="#c3" class="scrollto"><span>Варианты росписи</span></a></li>
                <li><a href="#c4" class="scrollto"><span>Сервис</span></a></li>
                <li><a href="#c5" class="scrollto"><span>Эксклюзивное предложение</span></a></li>
                <li><a href="#c7" class="scrollto"><span>Бесплатная концепция</span></a></li>
                <li><a href="#c8" class="scrollto"><span>Выполненные проекты</span></a></li>
                <li><a href="#c9" class="scrollto"><span>Дополнительные услуги</span></a></li>
                <li><a href="#c11" class="scrollto"><span>Подписка</span></a></li>
                <li><a href="#c12" class="scrollto"><span>Контакты</span></a></li>
            </ul>
        </div>
        
        
        
		
        
        
        
		<div class="menu">
			<div class="menu2_close"></div>
			
			<br><a href="#terms" class="mn1">Услуги</a>
			<br><a href="#types" class="mn2">Что мы делаем для вас</a>
			<br><a href="#actions" class="mn3">Сервис</a>
			<br><a href="#contacts" class="mn4">Акция</a>
			<br><a href="#contacts" class="mn4">Комиссия</a>
			<br><a href="#contacts" class="mn4">Наши проекты</a>
			<br><a href="#c10" class="mn4">Команда</a>
			<br><a href="#contacts" class="mn4">Контакты</a>
		</div>
        
       
        
      
        <section class="c1">
            
            <div class="menu_button2">
                <div class="hamb menu2_open"></div>
                <svg 
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="67px" height="94px" class="menu_rumb_svg menu2_open">
                    <a xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#" class="click_menu_button" >
                        <path fill-rule="evenodd"   d="M33.507,0.899 C33.507,0.899 66.309,47.301 66.309,47.301 C66.309,47.301 33.507,93.703 33.507,93.703 C33.507,93.703 0.704,47.301 0.704,47.301 C0.704,47.301 33.507,0.899 33.507,0.899 Z"/>
                    </a>
                </svg>

            </div>
        </section>
        
        <div class="test_block" id="c1"></div>
        <div class="test_block" id="c2"></div>
        <div class="test_block" id="c3"></div>
        <div class="test_block" id="c4"></div>
        <div class="test_block" id="c5"></div>
        
        
     
        
        <section class="c13" id="map-block">
            
            <div class="wrapp">
                
            </div>
            <div class="map-abs">
                <div id="map"></div>
            </div>
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=eigMOU3G6c65s9uzabUDoRuTWY0OjonN&width=100%&height=522&lang=ru_RU&sourceType=constructor"></script>
            
        </section>



            
    </div><!--site-->
    


	<input type="hidden" name="prefix" class="prefix" value="<? echo $prefix; ?>">
	<input type="hidden" name="phone_format" class="phone_format" value="<? echo $phone_format; ?>">
	<input type="hidden" name="referer" value="<? echo $_SERVER['HTTP_REFERER'] ?>">
	<input type="hidden" name="ref_url" value="<? echo $_SERVER['QUERY_STRING'] ?>">
	<input type="hidden" class="formname" name="formname" value="">
	<input type="hidden" class="sitename" name="sitename" value="<? echo $sitename; ?>">
	<input type="hidden" class="emailsarr" name="emailsarr" value="<? echo $emailsArr; ?>">
	
	<script type="text/javascript" src="<? echo $prefix; ?>js/plugins.js"></script>
	
	
	
	<!-- Перед закрывающим тегом </body> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/map.js"></script>
    
    
    
</body>
</html>