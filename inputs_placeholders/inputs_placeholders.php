<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title></title>
	<link rel="icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<? echo $prefix; ?>img/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="<? echo $prefix; ?>css/inputs_placeholders.css" />
	
	
</head>
<body id="body">
	




    <div class="site">
        
        
        
     
        <form action="" class="color--1">
            <input type="text" placeholder="Mr. Placeholder">
            <input type="password" placeholder="Mr. Placeholder">
        </form>
        
        
        
        <div class="login_form" >
            <!--        <div class="popup_close noselect" onClick="popup_out();"><span>&nbsp;</span></div>-->
            <div class="square">
                <div class="popup_h1">Вход в систему</div>
                <!--
                <div class="popup_h2">
                    Оставьте заявку, и наш специалист свяжется<br>
                    с вами, чтобы ответить на ваши вопросы.
                </div>
                -->
                <form>
                    <label class="name required">
                        <input type="text" name="name" placeholder="Логин">
                    </label>
                    <label class="phone required"><input type="password"  name="password" placeholder="Пароль"></label>

                    <div data-name="callback" class=" noselect btn general-button ">Войти</div>
                    <label class="screen4__indoor__right__spec clearfix" >
                        <div class="screen4__indoor__right__spec__check">
                            <input type="checkbox">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17" xml:space="preserve">
                                <polyline class="st0" points="0.8,10.5 5.7,15.3 16.2,0.7 "></polyline>
                            </svg>
                        </div>
                        <p>Запомнить</p>
                    </label>
                </form>

                <div class="row ">
                    <a href="" class="blue_link fl_l">Зарегестрироваться</a>

                    <a href="" class="blue_link fl_r">Забыли пароль?</a>
                </div>
            </div>

            <div class="row gray_links">
                <a href="" class=" fl_l">Справка</a>

                <a href="" class=" fl_r">Правовая информация</a>
            </div>
        </div>
                
                
                
                
                    <form>
                        <label class="name required">
                            <input type="text" name="name" placeholder="Логин">
                        </label>
                        <label class="phone required"><input type="password"  name="password" placeholder="Пароль"></label>
            
                        <div data-name="callback" class=" noselect btn general-button ">Войти</div>
                        <label class="screen4__indoor__right__spec clearfix" >
                            <div class="screen4__indoor__right__spec__check">
                                <input type="checkbox">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17" xml:space="preserve">
                                    <polyline class="st0" points="0.8,10.5 5.7,15.3 16.2,0.7 "></polyline>
                                </svg>
                            </div>
                            <p>Запомнить</p>
                        </label>
                    </form>
                    
                    
                    
                    
                    
                <div class="row">
                    
                    <form action="">
                        <div class="col1 callback">
                            <h3>Заказ обратного звонка</h3>
                            
                            <label >Номер контактного телефона:
                                <input type="text" name="phone" placeholder="977 133 99 33">
                            </label>
                            
                            
                            <div class="buttn" onclick="popup('thx')">Оставить заявку</div>
                        </div>
                        <div class="col2 your_question">
                            
                            <h3 class="col4">Вопрос службе поддержки</h3>
                            
                            <div class="row">
                                <div class="col4">
                                    <label >
                                        Ваш вопрос:
                                        <textarea name="question" id="" cols="30" rows="10" placeholder="Вопрос"></textarea>
                                    </label>
                                </div>
                                <div class="col5">
                                    <label >Ваша почта:
                                        <input type="text" placeholder="ivanov@gmail.com">
                                    </label>
                                    
                                    <label >Регион:
                                        <select name="" id="" class="select">
                                            <option value="">Москва</option>
                                            <option value="">Серпухов</option>
                                        </select>
                                    </label>
                                   
                                    <div class="buttn">Отправить</div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    
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