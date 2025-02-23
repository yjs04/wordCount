<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>wordCount</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=list" />
        <!-- /Styles -->

        <!-- js -->
         <script src="{{ asset('assets/js/app.js') }}"></script>
         <!-- js -->
    </head>
    <body>
        <div id="warp">
            <header>

            </header>
            <div id="board">
                <div class="board_item">
                    <p class="board_title">글자수 세기</p>
                    <div class="board_context">
                        <p class="board_text" id="space_txt_cnt">공백포함 : <span class="len">0</span>자 (<span class="byte">0</span>byte)</p>
                        <p class="board_text" id="noSpace_txt_cnt">공백제외 : <span class="len">0</span>자 (<span class="byte">0</span>byte)</p>
                    </div>
                </div>
                <div class="board_item">
                    <p class="board_title">맞춤법 검사</p>
                    <div class="board_context">
                        <div>
                            <p class="board_text"><span class="circle back_red"></span>맞춤법 : <span class="color_red">0</span>개</p>
                            <p class="board_text"><span class="circle back_green"></span>띄어쓰기 : <span class="color_green">0</span>개</p>
                        </div>
                        <div>
                            <p class="board_text"><span class="circle back_yellow"></span>의미 : <span class="color_yellow">0</span>개</p>
                            <p class="board_text"><span class="circle back_purple"></span>문법오류 : <span class="color_purple">0</span>개</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="context">
                <textarea name="context_input" id="context_input" cols="30" rows="10" placeholder="텍스트를 입력하세요."></textarea>
            </div>
            <div class="right_menu">
                <div id="right_menu_head">
                    <p class="board_title"></p>
                    <button id="word_list_btn"><span class="material-symbols-outlined">list</span></button>
                </div>
                <div class="board_context">
                검사 시작을 눌러주세요.<br>
                최대 <span class="color_blue">4000</span>자까지 검사 가능합니다.
                </div>
                <button id="check_btn">검사하기</button>
            </div>
        </div>
    </body>
</html>