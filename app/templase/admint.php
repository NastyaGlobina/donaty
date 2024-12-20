<!DOCTYPE html>
<html lang="uk">
<head>
    <!--<title>Електронний реєстр хворих сахарним діабетом</title>-->
    <meta charset="UTF-8">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../index_files/styles.fb966e9386e8aa2eeaea.css?ts=<?= time() ?> &quot;">
    <style>


        @media screen and (max-device-width: 480px) {
            .main[_ngcontent-c0] {
                margin-top: 30px;
            }

            .sidebar {
                margin-top: 30px;
            }

            /*Далее остальные стили*/
        }

        @media (min-width: 0px) {
            .main[_ngcontent-c0] {
                padding-left: 20px
            }
        }

        @media (min-width: 768px) {
            .main[_ngcontent-c0] {
                padding-left: 200px
            }
        }</style>
    <style></style>
    <style>.sidebar[_ngcontent-c2] {
            position: fixed;
            top: 3rem;
            bottom: 0;
            left: 0;
            z-index: 1021;
            min-width: 200px;
            width: 200px;
            padding: 20px 0;
            overflow-x: hidden;
            overflow-y: auto;
            border-right: 1px solid #eee;
            background-color: #f8f9fa
        }

        .sidebar-collapsed[_ngcontent-c2] {
            min-width: 3.5rem;
            width: 3.5rem
        }

        .sidebar[_ngcontent-c2] .nav[_ngcontent-c2] {
            margin-top: 20px;
            margin-bottom: 20px
        }

        .sidebar[_ngcontent-c2] .nav-item[_ngcontent-c2] {
            width: 100%
        }

        .btn-link[_ngcontent-c2] {
            display: block;
            padding: .5rem 1rem;
            cursor: pointer;
            white-space: pre-wrap;
            text-align: left
        }

        .toggler[_ngcontent-c2] {
            border-top: 1px solid #e5e5e5;
            width: 200px;
            margin-left: 0;
            height: 40px;
            background-color: #f8f9fa
        }

        .toggler-collapsed[_ngcontent-c2] {
            width: 50px
        }

        .toggler[_ngcontent-c2]:hover {
            background-color: #e5e5e5;
            cursor: pointer
        }

        .cb-active[_ngcontent-c2] {
            background-color: #e5e5e5;
            color: #2b5e93;
            border-left: 5px solid #2b5e93;
            border-top-left-radius: unset !important;
            border-bottom-left-radius: unset !important
        }

        .cb-sub-active[_ngcontent-c2] {
            border-left: none
        }

        .cb-sub-nav-link[_ngcontent-c2] {
            margin-left: 10px
        }

        .cb-expanded[_ngcontent-c2] {
            background-color: #e5e5e5
        }

        .cb-submenu[_ngcontent-c2] {
            position: fixed;
            background-color: #f8f9fa;
            border: 1px solid #eee;
            border-radius: 5px
        }

        .cb-submenu[_ngcontent-c2] ul[_ngcontent-c2] {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }</style>
    <style>.nav-link-ext[_ngcontent-c3] {
            cursor: pointer;
            color: #fff;
            border-radius: 5px
        }

        .nav-link-ext[_ngcontent-c3]:active, .nav-link-ext[_ngcontent-c3]:focus, .nav-link-ext[_ngcontent-c3]:hover {
            cursor: pointer;
            background-color: #527aa4;
            color: #fff
        }

        .cb-active[_ngcontent-c3] {
            background-color: #527aa4;
            color: #fff
        }
    </style>
    <style>.login-btn-index[_ngcontent-c4] {
            color: #fff;
            background-color: unset
        }

        .login-btn-index[_ngcontent-c4]:hover {
            color: #295b8e;
            background-color: #fff
        }</style>
    <style>.truncate[_ngcontent-c5] {
            width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }</style>
    <style type="text/css"></style>
    <style type="text/css">.pixelParallel-panel[data-v-54cb82b4] {
            position: fixed;
            right: 10px;
            bottom: 10px;
            z-index: 2147483647;
            width: 375px;
            height: 265px;
            transform: translate(0);
            background: #fff;
            transition: width .2s ease-out, height .2s ease-out;
            will-change: top, left, width, height, transform;
            opacity: 0
        }

        .pixelParallel-panel-inner[data-v-54cb82b4] {
            position: relative;
            overflow: hidden;
            height: 100%;
            border: 1px solid #dddedf;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
            box-sizing: border-box
        }

        .pixelParallel-panel-handle[data-v-54cb82b4] {
            position: absolute;
            top: -10px;
            right: -10px;
            z-index: 3;
            width: 20px;
            height: 20px;
            background: red;
            transform: rotate(45deg);
            background: linear-gradient(0deg, transparent, transparent 50%, #ccc 0, #ccc);
            background-size: 100% 2px;
            cursor: move
        }

        .pixelParallel-panel-isolator[data-v-54cb82b4] {
            border: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative
        }

        .pixelParallel-panel-dragging .pixelParallel-panel-inner[data-v-54cb82b4] {
            pointer-events: none
        }

        .pixelParallel-panel-minimized[data-v-54cb82b4] {
            width: 112px;
            height: 50px;
            transition: width .2s ease-out .15s, height .2s ease-out .15s
        }

        @media (max-width: 395px) {
            .pixelParallel-panel[data-v-54cb82b4] {
                right: 0;
                bottom: 0;
                width: 320px
            }

            .pixelParallel-panel-minimized[data-v-54cb82b4] {
                width: 112px
            }
        }
    </style>
    <style type="text/css">.pixelParallel-overlay {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: none
        }

        .pixelParallel-overlay-enabled {
            display: block
        }
    </style>
    <style type="text/css">.pixelParallel-image-outer {
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            max-width: 100vw;
            min-height: 100vh
        }

        .pixelParallel-image-inner {
            position: absolute;
            z-index: 2147483646;
            left: 50%;
            top: 0;
            cursor: move;
            transform: translateX(-50%);
            transition: opacity .15s
        }

        .pixelParallel-image-inner img {
            width: auto;
            height: auto;
            max-width: none;
            max-height: none;
            vertical-align: top;
            margin: 0;
            padding: 0;
            position: relative;
            transform-origin: 50% 0;
            top: -1px;
            border: 1px dashed #333
        }

        .pixelParallel-image-inner img:not([src]), .pixelParallel-image-inner img[src=""] {
            visibility: hidden
        }

        .pixelParallel-image-enabled {
            visibility: visible
        }

        .pixelParallel-image-difference {
            mix-blend-mode: difference
        }

        .pixelParallel-image-difference img {
            opacity: 1 !important
        }

        .pixelParallel-image-locked, .pixelParallel-image-no-image {
            pointer-events: none
        }

        .pixelParallel-image-locked .pixelParallel-image-inner img {
            top: 0;
            border: 0 none
        }

        .showPal, .onkoshow, .showProt, .showNoga, .showPrep, .showGolod, .showDeth {
            display: none;
        }

        .showDiabet {
            display: none;
        }
    </style>
    <style type="text/css">.pixelParallel-grids {
            position: relative;
            z-index: 2147483646;
            pointer-events: none
        }

        .pixelParallel-grid-horizontal, .pixelParallel-grid-vertical {
            position: fixed;
            z-index: 1;
            pointer-events: none;
            visibility: hidden
        }

        .pixelParallel-grid-horizontal {
            top: 50%;
            left: 50%;
            display: table;
            width: 100vw;
            height: 200vh;
            opacity: .5;
            table-layout: fixed;
            border-spacing: 30px;
            transform: translate(-50%, -50%)
        }

        .pixelParallel-grid-horizontal span {
            display: table-cell;
            background: red;
            height: 200vh
        }

        .pixelParallel-grid-vertical {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, transparent, transparent 90%, blue 0, blue);
            background-size: 100% 10px;
            opacity: .5
        }

        .pixelParallel-grid-horizontal-enabled, .pixelParallel-grid-vertical-enabled {
            visibility: visible
        }
    </style>
    <style type="text/css">.pixelParallel-rulers {
            position: relative;
            z-index: 2147483646
        }

        .pixelParallel-ruler-x, .pixelParallel-ruler-y {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
            background: cyan
        }

        .pixelParallel-ruler-x:after, .pixelParallel-ruler-y:after {
            content: "";
            position: absolute;
            top: -8px;
            left: -8px;
            right: 0;
            bottom: 0;
            padding: 10px
        }

        .pixelParallel-ruler-x {
            right: 0;
            height: 1px;
            cursor: row-resize
        }

        .pixelParallel-ruler-y {
            bottom: 0;
            width: 1px;
            cursor: col-resize
        }

        .pixelParallel-rulers-enabled .pixelParallel-ruler-x, .pixelParallel-rulers-enabled .pixelParallel-ruler-y {
            display: block
        }

        .hidd1 {
            display: none;
        }
        .d-none{
            margin-left: 20px;
        }
    </style>

    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>
<body>
<script type="application/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-73672141-1', 'auto');
</script>
<app-root _nghost-c0="" ng-version="7.2.10">
    <cb-header _ngcontent-c0="" _nghost-c1="">
        <div _ngcontent-c1="" >
            <div _ngcontent-c1="" class="cb-header">
                <div _ngcontent-c1="" class="d-flex align-items-center"><a _ngcontent-c1=""
                                                                           href="<?= Url::local('programm2?start=А') ?>">
                        <div _ngcontent-c1="" class="cb-text-header d-none d-md-block"><img _ngcontent-c1="" class="p-1"
                                                                                            src="../../index_files/new_logo1.png"><span
                                    _ngcontent-c1="">Облік та аналітика</span></div>
                        <div _ngcontent-c1="" class="cb-text-header d-block d-md-none"><img _ngcontent-c1="" class="p-1"
                                                                                            src="../../index_files/new_logo1.png">
                        </div>
                    </a>
                    <cb-header-menu _ngcontent-c1="" class="pb-1 d-flex flex-row" _nghost-c3="">
                        <div _ngcontent-c3="" class="d-block d-md-none">
                            <button _ngcontent-c3="" class="fa-2x navbar-toggler text-white" type="button"><i
                                        _ngcontent-c3="" aria-hidden="true" class="fa fa-bars"></i></button>
                        </div><!---->
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?= Url::local('analit') ?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Надходження</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?= Url::local('helpan') ?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Проекти</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?= Url::local('analitmain') ?>">
                               <span
                                        _ngcontent-c3="" class="nav-link-text">Аналітика</span></a></div>
                      
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?= Url::local('prognoz') ?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Прогнозування надходжень</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?= Url::local('prognozhelp') ?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Аналітик потреб</span></a></div>


                    </cb-header-menu>
                    <style>
                        .men {
                            min-width: 100px;
                            position: relative;
                            border-radius: 2px;
                            padding: 3px;
                            color: white;
                            margin-right: 10px;
                            display: block;
                        }

                        .men:hover {
                            cursor: pointer;
                            background: white;
                            color: #295b8e;
                        }

                        .pod_men {

                            width: 100px;
                            display: none;
                            position: absolute;
                            background: white;
                            padding: 5px;
                            text-align: left;
                        }

                        .pod_men a {

                            padding: 5px;

                            color: black;
                            text-decoration: none;
                        }
                    </style>
                    <script>
                        function show() {
                            document.getElementById('pod_men').style.display = 'block';
                        }

                        function hide() {
                            document.getElementById('pod_men').style.display = 'none';
                        }
                    </script>
                    <div _ngcontent-c1="" class="ml-auto p-2">
                        <cp-user-header _ngcontent-c1="" _nghost-c4=""><!---->
                            <? if (isset($_SESSION['user'])) {
                            echo "<div style='display: flex; width:400px; justify-content: flex-end;'>

<div><span onclick='show();' style='
    width: 100px; text-align: center; border:1px solid #5bc0de;' class='men'>" . $_SESSION['user'] . "  
</span>"; ?>
                            <div class="pod_men" id="pod_men" onmouseout="hide()" onmouseover="show()">

                                <a _ngcontent-c4=''
                                   type='button' tabindex='0' href='<?= Url::getAction('admin', 'logaut') ?>'>Вихід
                                </a></div>
                    </div>
                </div><?

                } else { ?>
                    <a _ngcontent-c4="" class="btn btn-header ng-star-inserted" href="<?= Url::local('admin') ?>"
                       routerlink="login"
                       type="button" tabindex="0">Вхід
                    </a><!---->
                <? } ?>
                </cp-user-header>
            </div>
        </div>
        </div>

        <?= $content ?>
        </div>
</app-root>
<script>
    function showPal(v) {
        if (v == 'Так') {
            document.getElementById('chastoPal').classList.remove('showPal');
            document.getElementById('kolPal').classList.remove('showPal');
        } else {
            document.getElementById('smoukkol').value = '';
            document.getElementById('smoukTime').value = '--';
            document.getElementById('chastoPal').classList.add('showPal');
            document.getElementById('kolPal').classList.add('showPal');
            var el = document.getElementById('smoukkol1');
            if (el) {
                document.getElementById('smoukkol1').value = '';
            }

        }
    }

    function showDeth(v) {
        if (v == 'Так') {
            document.getElementById('chastoDeth').classList.remove('showDeth');
            document.getElementById('sincD').classList.remove('showDeth');
        } else {
            document.getElementById('datedeth').value = '';
            document.getElementById('sincdeth').value = '';
            document.getElementById('chastoDeth').classList.add('showDeth');
            document.getElementById('sincD').classList.add('showDeth');
            var el = document.getElementById('datedeth1');
            if (el) {
                document.getElementById('datedeth1').value = '';
            }
        }
    }

    function ss4(el) {
        if (el.value == 'Так') {
            document.getElementById('h8').style.display = 'block';
            document.getElementById('h9').style.display = 'block';
        } else {
            document.getElementById('h8').style.display = 'none';
            document.getElementById('h9').style.display = 'none';
            document.getElementById('h9').value = '--';
        }
    }

    function showDiab(v) {
        if (v == '' || v == 'Не хворіє') {

            document.getElementById('yearD').value = '';
            document.getElementById('vekD').value = '';
            document.getElementById('longD').value = '';
            document.getElementById('yearD').removeAttribute('required');
            document.getElementById('vekD').removeAttribute('required');
            document.getElementById('longD').removeAttribute('required');
            var el1 = document.getElementById('yearD1');
            if (el1) {
                el1.value = '';
            }
            var el2 = document.getElementById('vekD1');
            if (el2) {
                el2.value = '';
            }
            var el3 = document.getElementById('longD1');
            if (el3) {
                el3.value = '';
            }
            document.getElementById('showDiabRik').classList.add('showDiabet');
            document.getElementById('showDiabVik').classList.add('showDiabet');
            document.getElementById('showDiabkol').classList.add('showDiabet');

        } else {
            document.getElementById('yearD').setAttribute('required', 'required');
            document.getElementById('yearD').setCustomValidity('Потрібно заповнити обов\'язкове поле: Рік постановки діагнозу');
            document.getElementById('vekD').setAttribute('required', 'required');
            document.getElementById('vekD').setCustomValidity('Потрібно заповнити обов\'язкове поле: Вік дебюту діабету (років)');
            document.getElementById('longD').setAttribute('required', 'required');
            document.getElementById('longD').setCustomValidity('Потрібно заповнити обов\'язкове поле: Тривалість діабету (років)');
            document.getElementById('showDiabRik').classList.remove('showDiabet');
            document.getElementById('showDiabVik').classList.remove('showDiabet');
            document.getElementById('showDiabkol').classList.remove('showDiabet');
        }
    }

    function onko(v) {
        if (v == '--' || v == 'Ні') {

            document.getElementById('vidOnko').value = '';
            document.getElementById('dateOnko').value = '';
            document.getElementById('onkoLek').value = '';
            var el1 = document.getElementById('vidOnko1');
            if (el1) {
                el1.value = '';
            }
            var el2 = document.getElementById('dateOnko1');
            if (el2) {
                el2.value = '';
            }
            var el3 = document.getElementById('onkoLek1');
            if (el3) {
                el3.value = '';
            }
            document.getElementById('likOnko').classList.add('onkoshow');
            document.getElementById('datOnko').classList.add('onkoshow');
            document.getElementById('vidOnkoz').classList.add('onkoshow');

        } else {
            document.getElementById('likOnko').classList.remove('onkoshow');
            document.getElementById('datOnko').classList.remove('onkoshow');
            document.getElementById('vidOnkoz').classList.remove('onkoshow');
        }
    }

    function protein(v) {
        if (v == '--' || v == 'Ні') {

            document.getElementById('posIzm').value = '';
            document.getElementById('datProtein').value = '';
            var el1 = document.getElementById('posIzm1');
            if (el1) {
                el1.value = '';
            }
            var el2 = document.getElementById('datProtein1');
            if (el2) {
                el2.value = '';
            }

            document.getElementById('prote').classList.add('showProt');
            document.getElementById('datprote').classList.add('showProt');
        } else {
            document.getElementById('prote').classList.remove('showProt');
            document.getElementById('datprote').classList.remove('showProt');
        }
    }

    function bolNoga(v) {
        if (v == '--' || v == 'Ні' || v == 'Ні, болю немає' || v == 'Ні, біль з одного боку') {

            document.getElementById('Boltwo').value = '';
            document.getElementById('BolInten').value = '';
            document.getElementById('Bolkak').value = '';
            var el1 = document.getElementById('Bolkak1');
            if (el1) {
                el1.value = '';
            }
            var el2 = document.getElementById('BolInten1');
            if (el2) {
                el2.value = '';
            }
            var el3 = document.getElementById('Boltwo1');
            if (el3) {
                el3.value = '';
            }
            document.getElementById('bolProjav').classList.add('showNoga');
            document.getElementById('bolIntens').classList.add('showNoga');
            document.getElementById('bolStopa').classList.add('showNoga');
        } else {
            document.getElementById('bolProjav').classList.remove('showNoga');
            document.getElementById('bolIntens').classList.remove('showNoga');
            document.getElementById('bolStopa').classList.remove('showNoga');
        }
    }

    function preparat(v) {
        if (v == '--' || v == 'Ні') {

            document.getElementById('PreparatKakie').value = '';
            var el1 = document.getElementById('PreparatKakie1');
            if (el1) {
                el1.value = '';
            }

            document.getElementById('whatPrep').classList.add('showPrep');


        } else {
            document.getElementById('whatPrep').classList.remove('showPrep');

        }
    }

    function ss677() {
        if (document.getElementById('golodsem123').value == 'Так') {
            if (document.getElementById("g1m").checked == false && document.getElementById("g2m").checked == false && document.getElementById("g3m").checked == false) {
                document.getElementById('g1m').setAttribute('required', 'required');
                document.getElementById('g1m').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Мати: роках)');
                document.getElementById('g2m').setAttribute('required', 'required');
                document.getElementById('g3m').setAttribute('required', 'required');
            }
        } else if (document.getElementById('golodsem123').value != 'Так') {
            if (document.getElementById("g1m").checked == false && document.getElementById("g2m").checked == false && document.getElementById("g3m").checked == false) {
                document.getElementById('g1m').removeAttribute('required');
                document.getElementById('g2m').removeAttribute('required');
                document.getElementById('g3m').removeAttribute('required');
            }
        } else if (document.getElementById("g1m").checked == true) {
            document.getElementById('g2m').setCustomValidity('');
            document.getElementById('g3m').setCustomValidity('');
            document.getElementById('g2m').removeAttribute('required');
            document.getElementById('g3m').removeAttribute('required');

        } else if (document.getElementById("g2m").checked == true) {

            document.getElementById('g1m').setCustomValidity('');
            document.getElementById('g3m').setCustomValidity('');
            document.getElementById('g1m').removeAttribute('required');
            document.getElementById('g3m').removeAttribute('required');

        } else if (document.getElementById("g3m").checked == true) {

            document.getElementById('g1m').setCustomValidity('');
            document.getElementById('g2m').setCustomValidity('');
            document.getElementById('g1m').removeAttribute('required');
            document.getElementById('g2m').removeAttribute('required');

        } else if (document.getElementById("g1m").checked == true && document.getElementById("g2m").checked == true) {


            document.getElementById('g3m').setCustomValidity('');
            document.getElementById('g3m').removeAttribute('required');

        } else if (document.getElementById("g3m").checked == true && document.getElementById("g2m").checked == true) {

            document.getElementById('g1m').setCustomValidity('');
            document.getElementById('g1m').removeAttribute('required');

        } else if (document.getElementById("g1m").checked == true && document.getElementById("g3m").checked == true) {

            document.getElementById('g2m').setCustomValidity('');
            document.getElementById('g2m').removeAttribute('required');

        }
    }

    function ss688() {
        if (document.getElementById('golodsem123').value == 'Так') {
            if (document.getElementById("g1o").checked == false && document.getElementById("g2o").checked == false && document.getElementById("g3o").checked == false) {
                document.getElementById('g1o').setAttribute('required', 'required');
                document.getElementById('g1o').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Батько: роках)');
                document.getElementById('g2o').setAttribute('required', 'required');
                document.getElementById('g3o').setAttribute('required', 'required');
            }
        } else if (document.getElementById('golodsem123').value != 'Так') {
            if (document.getElementById("g1o").checked == false && document.getElementById("g2o").checked == false && document.getElementById("g3o").checked == false) {
                document.getElementById('g1o').removeAttribute('required');
                document.getElementById('g2o').removeAttribute('required');
                document.getElementById('g3o').removeAttribute('required');
            }
        } else if (document.getElementById("g1o").checked == true) {

            document.getElementById('g2o').setCustomValidity('');
            document.getElementById('g3o').setCustomValidity('');
            document.getElementById('g2o').removeAttribute('required');
            document.getElementById('g3o').removeAttribute('required');

        } else if (document.getElementById("g2o").checked == true) {

            document.getElementById('g1o').setCustomValidity('');
            document.getElementById('g3o').setCustomValidity('');
            document.getElementById('g1o').removeAttribute('required');
            document.getElementById('g3o').removeAttribute('required');

        } else if (document.getElementById("g3o").checked == true) {

            document.getElementById('g1o').setCustomValidity('');
            document.getElementById('g2o').setCustomValidity('');
            document.getElementById('g1o').removeAttribute('required');
            document.getElementById('g2o').removeAttribute('required');

        } else if (document.getElementById("g1o").checked == true && document.getElementById("g2o").checked == true) {


            document.getElementById('g3o').setCustomValidity('');
            document.getElementById('g3o').removeAttribute('required');

        } else if (document.getElementById("g3o").checked == true && document.getElementById("g2o").checked == true) {

            document.getElementById('g1o').setCustomValidity('');
            document.getElementById('g1o').removeAttribute('required');

        } else if (document.getElementById("g1o").checked == true && document.getElementById("g3o").checked == true) {

            document.getElementById('g2o').setCustomValidity('');
            document.getElementById('g2o').removeAttribute('required');

        }
    }

    function addPrep2(el) {
        if (el == 'Ні' || el == '--') {

            var el = document.getElementById('datPrep2');
            var el1 = document.getElementById('datPrep2L');
            el.remove();
            el1.remove();
        } else {
            var el = document.getElementById('datPrep2');
            var el1 = document.getElementById('datPrep2L');
            if (el) {
                el.remove();
                el1.remove();
            }

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPrep2';
            inp1.id = 'datPrep2';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText = 'Дата постановки';
            lab.id = 'datPrep2L';
            var sp = document.getElementById('kiPrep12');
            var sp2 = document.getElementById('kiPrep22');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }

    function ss699() {
        if (document.getElementById('golodsem123').value == 'Так') {
            if (document.getElementById("g1s").checked == false && document.getElementById("g2s").checked == false && document.getElementById("g3s").checked == false) {
                document.getElementById('g1s').setAttribute('required', 'required');
                document.getElementById('g1s').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Рідні брати/сестри: роках)');
                document.getElementById('g2s').setAttribute('required', 'required');
                document.getElementById('g3s').setAttribute('required', 'required');

            }

        } else if (document.getElementById('golodsem123').value != 'Так') {
            if (document.getElementById("g1s").checked == false && document.getElementById("g2s").checked == false && document.getElementById("g3s").checked == false) {
                document.getElementById('g1s').removeAttribute('required');
                document.getElementById('g2s').removeAttribute('required');
                document.getElementById('g3s').removeAttribute('required');
            }
        } else if (document.getElementById("g1s").checked == true) {

            document.getElementById('g2s').setCustomValidity('');
            document.getElementById('g3s').setCustomValidity('');
            document.getElementById('g2s').removeAttribute('required');
            document.getElementById('g3s').removeAttribute('required');

        } else if (document.getElementById("g2s").checked == true) {

            document.getElementById('g1s').setCustomValidity('');
            document.getElementById('g3s').setCustomValidity('');
            document.getElementById('g1s').removeAttribute('required');
            document.getElementById('g3s').removeAttribute('required');

        } else if (document.getElementById("g3s").checked == true) {

            document.getElementById('g1s').setCustomValidity('');
            document.getElementById('g2s').setCustomValidity('');
            document.getElementById('g1s').removeAttribute('required');
            document.getElementById('g2s').removeAttribute('required');

        } else if (document.getElementById("g1s").checked == true && document.getElementById("g2s").checked == true) {


            document.getElementById('g3s').setCustomValidity('');
            document.getElementById('g3s').removeAttribute('required');

        } else if (document.getElementById("g3s").checked == true && document.getElementById("g2s").checked == true) {

            document.getElementById('g1s').setCustomValidity('');
            document.getElementById('g1s').removeAttribute('required');

        } else if (document.getElementById("g1s").checked == true && document.getElementById("g3s").checked == true) {

            document.getElementById('g2s').setCustomValidity('');
            document.getElementById('g2s').removeAttribute('required');

        }
    }

    function ss6(el) {

        if (el.value == 'Так') {
            document.getElementById('tabGolodO').classList.remove('showGolod');
            document.getElementById('tabGolodS').classList.remove('showGolod');
            document.getElementById('tabGolodM').classList.remove('showGolod');
            document.getElementById('mamGolod').classList.remove('showGolod');
            document.getElementById('papGolod').classList.remove('showGolod');
            document.getElementById('bratGolod').classList.remove('showGolod');

            document.getElementById('g1m').setAttribute('required', 'required');
            document.getElementById('g1m').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Мати: роках)');
            document.getElementById('g2m').setAttribute('required', 'required');
            document.getElementById('g3m').setAttribute('required', 'required');


            document.getElementById('g1o').setAttribute('required', 'required');
            document.getElementById('g1o').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Батько: роках)');
            document.getElementById('g2o').setAttribute('required', 'required');
            document.getElementById('g3o').setAttribute('required', 'required');

            document.getElementById('g1s').setAttribute('required', 'required');
            document.getElementById('g1s').setCustomValidity('Потрібно вибрати один із варіантів відповіді поле: (Рідні брати/сестри: роках)');
            document.getElementById('g2s').setAttribute('required', 'required');
            document.getElementById('g3s').setAttribute('required', 'required');
        } else {
            document.getElementById('g1m').removeAttribute('required');
            document.getElementById('g1m').setCustomValidity('');
            document.getElementById('g2m').removeAttribute('required');
            document.getElementById('g3m').removeAttribute('required');
            document.getElementById('g1o').removeAttribute('required');
            document.getElementById('g1o').setCustomValidity('');
            document.getElementById('g2o').removeAttribute('required');
            document.getElementById('g3o').removeAttribute('required');
            document.getElementById('g1s').removeAttribute('required');
            document.getElementById('g1s').setCustomValidity('');
            document.getElementById('g2s').removeAttribute('required');
            document.getElementById('g3s').removeAttribute('required');


            document.getElementById('g1m').checked = false;
            var el1 = document.getElementById('g1m1');
            if (el1) {
                el1.checked = false;
            }
            document.getElementById('g2m').checked = false;
            var el2 = document.getElementById('g2m1');
            if (el2) {
                el2.checked = false;
            }
            document.getElementById('g3m').checked = false;
            var el3 = document.getElementById('g3m1');
            if (el3) {
                el3.checked = false;
            }
            document.getElementById('g1o').checked = false;
            var el4 = document.getElementById('g1o1');
            if (el4) {
                el4.checked = false;
            }
            document.getElementById('g2o').checked = false;
            var el5 = document.getElementById('g2o1');
            if (el5) {
                el5.checked = false;
            }
            document.getElementById('g3o').checked = false;
            var el6 = document.getElementById('g3o1');
            if (el6) {
                el6.checked = false;
            }
            document.getElementById('g1s').checked = false;
            var el7 = document.getElementById('g1s1');
            if (el7) {
                el7.checked = false;
            }
            document.getElementById('g2s').checked = false;
            var el8 = document.getElementById('g2s1');
            if (el8) {
                el8.checked = false;
            }
            document.getElementById('g3s').checked = false;
            var el9 = document.getElementById('g3s1');
            if (el9) {
                el9.checked = false;
            }
            document.getElementById('tabGolodM').classList.add('showGolod');
            document.getElementById('tabGolodS').classList.add('showGolod');
            document.getElementById('tabGolodO').classList.add('showGolod');
            document.getElementById('mamGolod').classList.add('showGolod');
            document.getElementById('papGolod').classList.add('showGolod');
            document.getElementById('bratGolod').classList.add('showGolod');
        }
    }
</script>
</body>
</html>
