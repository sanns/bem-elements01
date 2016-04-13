<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title></title>
	<link rel="icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="<? echo $prefix; ?>css/popup_intext.css" />
	
	
</head>
<body id="body">
	




    <div class="site">
        
        
        <button></button>
        
        <div class="reviews">
            <div class="reviews__indoor"></div>
            <div class="reviews__main">
                <img src="img/close2.png" class="reviews__main__close">
                <div class="reviews__main__wrapper">
                    <img src="img/pop1.jpg">
                    <p class="reviews__main__wrapper__title">Беззвучное звучание</p>
                    <p class="reviews__main__wrapper__info">Этот уникальный механизм оснащён стоп-планкой – молоточки пианино/рояля останавливаются прежде, чем они соприкоснуться со струнами. Она монтируется таким образом, чтобы вы имели возможность использовать музыкальный инструмент в обычном режиме. Также система оснащена сенсорной панелью управления — 88 клавишных сенсора измеряют силу и частоту движения каждой отдельной клавиши и преобразуют их в MIDI-файлы</p>
                    <div class="button_site2 submit  noselect btn" onclick="popup('callback');">узнать подробнее</div>
                </div>
            </div>
        </div>
        
        <div class="reviews active">
            <div class="reviews__indoor"></div>
            <div class="reviews__main">
                <img src="img/close2.png" class="reviews__main__close">
                <div class="reviews__main__wrapper">
                    <img src="img/pop1.jpg">
                    <p class="reviews__main__wrapper__title">Беззвучное звучание</p>
                    <p class="reviews__main__wrapper__info">Этот уникальный механизм оснащён стоп-планкой – молоточки пианино/рояля останавливаются прежде, чем они соприкоснуться со струнами. Она монтируется таким образом, чтобы вы имели возможность использовать музыкальный инструмент в обычном режиме. Также система оснащена сенсорной панелью управления — 88 клавишных сенсора измеряют силу и частоту движения каждой отдельной клавиши и преобразуют их в MIDI-файлы</p>
                    <div class="button_site2 submit  noselect btn" onclick="popup('callback');">узнать подробнее</div>
                </div>
            </div>
        </div>
        
        
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