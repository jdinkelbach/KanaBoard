<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kana Board</title>
    <link rel="icon" type="image/png" href="img/iconimg.png" />
    <!--Bootstrap CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css"
        integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div id="game">
        <header>
            <div id="brand-circle">
                <a class="brand text-center" href="#info">Kana Board</a>
            </div>
        </header>
        <nav class="navbar navbar-expand-md">
            <div id="mobile-nav" class="container">
                <a class="brand text-center" href="#info">Kana<img id="brand-logo" src="img/brand-logo.png"></img> Board</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container justify-content-center">
                    <ul class="navbar-nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="infoTab" href="#info" data-toggle="tab" role="tab">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hiraganaTab" href="#hiragana" data-toggle="tab" role="tab">Hiragana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="katakanaTab" href="#katakana" data-toggle="tab" role="tab">Katakana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="studyTab" href="#study" data-toggle="tab" role="tab">Study</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container active" id="info" role="tabpanel" aria-labelledby="info-tab">
                <div class="instructions">
                    <h2>How to Play</h2>
                    <p">Choose up to three groups of <a data-toggle="tab" href="#hiragana" id="hBtn"
                            class="btn btn rounded btn-dark btn-sm ml-3"></span> HIRAGANA あ</a> or
                        <a data-toggle="tab" href="#hiragana" id="kBtn" class="btn btn rounded btn-dark btn-sm ml-3"></span>
                            Katakana ア</a> and choose which characters you would like to study. Then click
                        <a data-toggle="tab" href="#study" id="studyBtn" class="redBtn btn rounded btn-sm ml-3">Study</a>
                        and match the character with its romaji equivalent. <br> (e.g. 'a' = 'あ') </p>
                        <div class="container">
                            <div class="exampleCard">a</div>
                            <i class="fas fa-equals"></i>
                            <div class="exampleCard">あ</div>
                        </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="study" role="tabpanel" aria-labelledby="study-tab">
                <div class="container" id="playInfo">
                    <span id="score"></span>
                </div>
                <div class="card-container"></div>
                <a id="againBtn" class="redBtn btn rounded btn-sm">Play Again</a>
            </div>
            <div class="tab-pane fade container" id="hiragana" role="tabpanel" aria-labelledby="Hiragana-tab">
                <form>
                    <div class="container container-scroll">
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">あ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">か</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">さ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">た</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">な</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">は</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ま</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">や</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ら</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">わ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">が</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ざ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">だ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ば</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぱ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">a</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ka</span>
                            </div>
                            <div class="col">
                                <span class="romaji">sa</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ta</span>
                            </div>
                            <div class="col">
                                <span class="romaji">na</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ha</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ma</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ya</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ra</span>
                            </div>
                            <div class="col">
                                <span class="romaji">wa</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ga</span>
                            </div>
                            <div class="col">
                                <span class="romaji">za</span>
                            </div>
                            <div class="col">
                                <span class="romaji">da</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ba</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pa</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">い</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">き</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">し</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ち</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">に</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ひ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">み</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">り</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぎ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">じ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">じ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">び</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぴ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">i</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ki</span>
                            </div>
                            <div class="col">
                                <span class="romaji">shi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">chi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ni</span>
                            </div>
                            <div class="col">
                                <span class="romaji">hi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mi</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ri</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">gi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ji</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ji</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pi</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">う</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">く</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">す</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">つ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぬ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ふ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">む</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ゆ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">る</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぐ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ず</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">づ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぶ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぷ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">u</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ku</span>
                            </div>
                            <div class="col">
                                <span class="romaji">su</span>
                            </div>
                            <div class="col">
                                <span class="romaji">tsu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">nu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">fu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">yu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ru</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">gu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pu</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">え</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">け</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">せ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">て</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ね</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">へ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">め</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">れ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">げ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぜ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">で</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">べ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぺ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">e</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ke</span>
                            </div>
                            <div class="col">
                                <span class="romaji">se</span>
                            </div>
                            <div class="col">
                                <span class="romaji">te</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ne</span>
                            </div>
                            <div class="col">
                                <span class="romaji">he</span>
                            </div>
                            <div class="col">
                                <span class="romaji">me</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">re</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ge</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ze</span>
                            </div>
                            <div class="col">
                                <span class="romaji">de</span>
                            </div>
                            <div class="col">
                                <span class="romaji">be</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pe</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">お</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">こ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">そ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">と</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">の</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ほ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">も</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">よ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ろ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">を</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ん</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ご</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぞ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ど</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぼ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ぽ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">o</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ko</span>
                            </div>
                            <div class="col">
                                <span class="romaji">so</span>
                            </div>
                            <div class="col">
                                <span class="romaji">to</span>
                            </div>
                            <div class="col">
                                <span class="romaji">no</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ho</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">yo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ro</span>
                            </div>
                            <div class="col">
                                <span class="romaji">o</span>
                            </div>
                            <div class="col">
                                <span class="romaji">n</span>
                            </div>
                            <div class="col">
                                <span class="romaji">go</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">do</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">po</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="aHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="kaHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="saHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="taHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="naHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="haHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="maHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="yaHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="raHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="waHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="nHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="gaHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="zaHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="daHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="baHiragana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input hCheckbox" id="paHiragana">
                            </div>
                        </div>
                    </div>
                    <div class="instructions">Choose up to three groups of <strong>hiragana</strong>, then click<a
                            type="submit" data-toggle="tab" href="#study" class="redBtn btn rounded btn-primary btn-sm ml-3"
                            id="studyHiragana">Study</a></div>
                </form>
            </div>
            <div class="tab-pane fade container" id="katakana" role="tabpanel" aria-labelledby="katakana-tab">
                <form>
                    <div class="container container-scroll">
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">ア</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">カ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">サ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">タ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ナ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ハ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">マ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヤ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ラ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ワ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ガ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ザ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ダ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">バ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">パ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">a</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ka</span>
                            </div>
                            <div class="col">
                                <span class="romaji">sa</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ta</span>
                            </div>
                            <div class="col">
                                <span class="romaji">na</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ha</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ma</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ya</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ra</span>
                            </div>
                            <div class="col">
                                <span class="romaji">wa</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ga</span>
                            </div>
                            <div class="col">
                                <span class="romaji">za</span>
                            </div>
                            <div class="col">
                                <span class="romaji">da</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ba</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pa</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">イ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">キ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">シ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">チ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ニ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヒ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ミ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">リ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ギ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ジ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヂ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ビ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ピ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">i</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ki</span>
                            </div>
                            <div class="col">
                                <span class="romaji">shi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">chi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ni</span>
                            </div>
                            <div class="col">
                                <span class="romaji">hi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mi</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ri</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">gi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ji</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ji</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bi</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pi</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">ウ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ク</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ス</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ツ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヌ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">フ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ム</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ユ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ル</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">グ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ズ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヅ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ブ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">プ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">u</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ku</span>
                            </div>
                            <div class="col">
                                <span class="romaji">su</span>
                            </div>
                            <div class="col">
                                <span class="romaji">tsu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">nu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">fu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">yu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ru</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">gu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bu</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pu</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">エ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ケ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">セ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">テ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ネ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヘ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">メ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">レ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character"></span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ゲ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ゼ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">デ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ベ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ペ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">e</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ke</span>
                            </div>
                            <div class="col">
                                <span class="romaji">se</span>
                            </div>
                            <div class="col">
                                <span class="romaji">te</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ne</span>
                            </div>
                            <div class="col">
                                <span class="romaji">he</span>
                            </div>
                            <div class="col">
                                <span class="romaji">me</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">re</span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji"></span>
                            </div>
                            <div class="col">
                                <span class="romaji">ge</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ze</span>
                            </div>
                            <div class="col">
                                <span class="romaji">de</span>
                            </div>
                            <div class="col">
                                <span class="romaji">be</span>
                            </div>
                            <div class="col">
                                <span class="romaji">pe</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span class="kana-character">オ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">コ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ソ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ト</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ノ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ホ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">モ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヨ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ロ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ヲ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ン</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ゴ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ゾ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ド</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ボ</span>
                            </div>
                            <div class="col">
                                <span class="kana-character">ポ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <span class="romaji">o</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ko</span>
                            </div>
                            <div class="col">
                                <span class="romaji">so</span>
                            </div>
                            <div class="col">
                                <span class="romaji">to</span>
                            </div>
                            <div class="col">
                                <span class="romaji">no</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ho</span>
                            </div>
                            <div class="col">
                                <span class="romaji">mo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">yo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">ro</span>
                            </div>
                            <div class="col">
                                <span class="romaji">o</span>
                            </div>
                            <div class="col">
                                <span class="romaji">n</span>
                            </div>
                            <div class="col">
                                <span class="romaji">go</span>
                            </div>
                            <div class="col">
                                <span class="romaji">zo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">do</span>
                            </div>
                            <div class="col">
                                <span class="romaji">bo</span>
                            </div>
                            <div class="col">
                                <span class="romaji">po</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="aKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="kaKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="saKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="taKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="naKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="haKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="maKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="yaKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="raKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="waKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="nKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="gaKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="zaKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="daKatakana">
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="baKatakana"> 
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input kCheckbox" id="paKatakana"> 
                            </div>
                        </div>
                    </div>
                    <div class="instructions">Choose up to three groups of <strong>katakana</strong>, then click<a
                            type="submit" data-toggle="tab" href="#study" class="redBtn btn rounded btn-primary btn-sm ml-3"
                            id="studyKatakana">Study</a></div>
                </form>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small pt-5">&copy; Justin Dinkelbach 2020</footer>
    <!--Jquery, Boostrap, JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="kanaBoard.js"></script>
</body>
</html>