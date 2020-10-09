var chosenCards = [];   // Keeps track of cards clicked on (maxCards=2)
var chosen = [];        // Keeps track of values of cards clicked on
var cards = [];         // Keeps track of all cards on board
var score = 0;
var maxCards = 2;       // Max amnt of cards that can be clicked at a time
var maxSelect = 3;      // Max amnt of checkboxes that can be selected
var kana = ['a', 'あ', 'i', 'い', 'u', 'う', 'e', 'え', 'o', 'お']
var studyTab = $('#studyTab');

// Initializes objects containing hiragana and associated romaji
var aHiragana =     ['a', 'あ', 'i', 'い', 'u', 'う', 'e', 'え', 'o', 'お']
var kaHiragana =    ['ka', 'か', 'ki', 'き', 'ku', 'く', 'ke', 'け', 'ko', 'こ']
var saHiragana =    ['sa', 'さ', 'shi', 'し', 'su', 'す', 'se', 'せ', 'so', 'そ']
var taHiragana =    ['ta', 'た', 'chi', 'ち', 'tsu', 'つ', 'te', 'て', 'to', 'と']
var naHiragana =    ['na', 'な', 'ni', 'に', 'nu', 'ぬ', 'ne', 'ね', 'no', 'の'];
var haHiragana =    ['ha', 'は', 'hi', 'ひ', 'fu', 'ふ', 'he', 'へ', 'ho', 'ほ']
var maHiragana =    ['ma', 'ま', 'mi', 'み', 'mu', 'む', 'me', 'め', 'mo', 'も']
var yaHiragana =    ['ya', 'や', 'yu', 'ゆ', 'yo', 'よ']
var raHiragana =    ['ra', 'ら', 'ri', 'り', 'ru', 'る', 're', 'れ', 'ro', 'ろ']
var waHiragana =    ['wa', 'わ',  'o', 'を']
var nHiragana =     ['n', 'ん']
var gaHiragana =    ['ga', 'が', 'gi', 'ぎ', 'gu', 'ぐ', 'ge', 'げ', 'go', 'ご']
var zaHiragana =    ['za', 'ざ', 'ji', 'じ', 'zu', 'ず', 'ze', 'ぜ', 'zo', 'ぞ']
var daHiragana =    ['da', 'だ', 'ji', 'ぢ', 'du', 'づ', 'de', 'で', 'do', 'ど']
var baHiragana =    ['ba', 'ば', 'bi', 'び', 'bu', 'ぶ', 'be', 'べ', 'bo', 'ぼ']
var paHiragana =    ['pa', 'ぱ', 'pi', 'ぴ', 'pu', 'ぷ', 'pe', 'ぺ', 'po', 'ぽ']

// Initializes objects containing hiragana and associated romaji
var aKatakana =     ['a', 'ア', 'i', 'イ', 'u', 'ウ', 'e', 'エ', 'o', 'オ']
var kaKatakana =    ['ka', 'カ', 'ki', 'キ', 'ku', 'ク', 'ke', 'ケ', 'ko', 'コ']
var saKatakana =    ['sa', 'サ', 'shi', 'シ', 'su', 'ス', 'se', 'セ', 'so', 'ソ']
var taKatakana =    ['ta', 'タ', 'chi', 'チ', 'tsu', 'ツ', 'te', 'テ', 'to', 'ト']
var naKatakana =    ['na', 'ナ', 'ni', 'ニ', 'nu', 'ヌ', 'ne', 'ネ', 'no', 'ノ'];
var haKatakana =    ['ha', 'ハ', 'hi', 'ヒ', 'fu', 'フ', 'he', 'ヘ', 'ho', 'ホ']
var maKatakana =    ['ma', 'マ', 'mi', 'ミ', 'mu', 'ム', 'me', 'メ', 'mo', 'モ']
var yaKatakana =    ['ya', 'ヤ', 'yu', 'ユ', 'yo', 'ヨ']
var raKatakana =    ['ra', 'ラ', 'ri', 'リ', 'ru', 'ル', 're', 'レ', 'ro', 'ロ']
var waKatakana =    ['wa', 'ワ',  'o', 'ヲ']
var nKatakana =     ['n', 'ン']
var gaKatakana =    ['ga', 'ガ', 'gi', 'ギ', 'gu', 'グ', 'ge', 'ゲ', 'go', 'ゴ']
var zaKatakana =    ['za', 'ザ', 'ji', 'ジ', 'zu', 'ズ', 'ze', 'ゼ', 'zo', 'ゾ']
var daKatakana =    ['da', 'ダ', 'ji', 'ヂ', 'du', 'ヅ', 'de', 'デ', 'do', 'ド']
var baKatakana =    ['ba', 'バ', 'bi', 'ビ', 'bu', 'ブ', 'be', 'ベ', 'bo', 'ボ']
var paKatakana =    ['pa', 'パ', 'pi', 'ピ', 'pu', 'プ', 'pe', 'ペ', 'po', 'ポ']

// Setup "click" Listeners
// Info Page - "Hiragana" Button
$('#hBtn').click(function(){
    $('#infoTab').removeClass("active");
    $('#hiraganaTab').addClass("active");
})

// Info Page - "Katakana" Button
$('#kBtn').click(function(){
    $('#infoTab').removeClass("active");
    $('#katakanaTab').addClass("active");
})

// Info Page - "Study" Button
$('#studyBtn').click(function(){
    $('#infoTab').removeClass("active");
    $('#studyTab').addClass("active");
    console.log(kana);
    console.log(kana.length);
    resetBoard();
    
})

// Hiragana Page - "Submit" Button
$("#studyHiragana").click(function(){
    // Change active tab
    $('#hiraganaTab').removeClass("active");
    $('#studyTab').addClass("active");
    kana = [];
    checkHiragana();
    console.log(kana);
    console.log(kana.length);
    resetBoard();
});

// Katakana Page - "Submit" Button
$("#studyKatakana").click(function(){
    // Change active tab
    $('#katakanaTab').removeClass("active");
    $('#studyTab').addClass("active");
    kana = [];
    checkKatakana();
    console.log(kana);
    console.log(kana.length);
    resetBoard();
});

// Navbar - "Study" Tab
studyTab.click(function(){
    resetBoard();
})

// Removes .active from current tab when switching tabs
$(".nav-tabs li.nav-item a.nav-link").click(function() {
    $(".nav-tabs li.nav-item a.nav-link").removeClass('active');
});

// Study - "Play Again" btn
$('#againBtn').click(function(){
    resetBoard();
})

// Limits the number of checkboxes that can be selected to 4
$('.form-check-input').click(function(){
    if ($(".hCheckbox:checked").length > maxSelect){
        $(this).prop('checked', false);
        alert("allowed only 3");
    }
})

// Adds selected hiragana
function checkHiragana(){
    $(".hCheckbox:checked").each(function(i){
        // Add chosen kana labels to array
        switch($(this).attr('id')){
            case "aHiragana":
                pushElements(aHiragana);
                console.log(kana.length)
                break;
            case "kaHiragana":
                pushElements(kaHiragana);
                break;
            case "saHiragana":
                pushElements(saHiragana);
                break;
            case "taHiragana":
                pushElements(taHiragana);
                break;
            case "naHiragana":
                pushElements(naHiragana);
                break;
            case "haHiragana":
                pushElements(haHiragana);
                break;
            case "maHiragana":
                pushElements(maHiragana);
                break;
            case "yaHiragana":
                pushElements(yaHiragana);
                break;
            case "raHiragana":
                pushElements(raHiragana);
                break;
            case "waHiragana":
                pushElements(waHiragana);
                break;
            case "nHiragana":
                pushElements(nHiragana);
                break;
            case "gaHiragana":
                pushElements(gaHiragana);
                break;
            case "zaHiragana":
                pushElements(zaHiragana);
                break;
            case "daHiragana":
                pushElements(daHiragana);
                break;
            case "baHiragana":
                pushElements(baHiragana);
                break;
            case "paHiragana":
                pushElements(paHiragana);
                break;
        }
    });
}

// Adds selected hiragana
function checkKatakana(){
    $(".kCheckbox:checked").each(function(i){
        // Add chosen kana labels to array
        switch($(this).attr('id')){
            case "aKatakana":
                pushElements(aKatakana);
                break;
            case "kaKatakana":
                pushElements(kaKatakana);
                break;
            case "saKatakana":
                pushElements(saKatakana);
                break;
            case "taKatakana":
                pushElements(taKatakana);
                break;
            case "naKatakana":
                pushElements(naKatakana);
                break;
            case "haKatakana":
                pushElements(haKatakana);
                break;
            case "maKatakana":
                pushElements(maKatakana);
                break;
            case "yaKatakana":
                pushElements(yaKatakana);
                break;
            case "raKatakana":
                pushElements(raKatakana);
                break;
            case "waKatakana":
                pushElements(waKatakana);
                break;
            case "nKatakana":
                pushElements(nKatakana);
                break;
            case "gaKatakana":
                pushElements(gaKatakana);
                break;
            case "zaKatakana":
                pushElements(zaKatakana);
                break;
            case "daKatakana":
                pushElements(daKatakana);
                break;
            case "baKatakana":
                pushElements(baKatakana);
                break;
            case "paKatakana":
                pushElements(paKatakana);
                break;
        }
    });
}

// Pushes all elements in array into kana
function pushElements(arr){
    for (var i = 0; i < arr.length; i++){
        kana.push(arr[i]);
    }
}

// Add cards to the board = to # of kana chosen
function addCards(){
    for (var i = 0; i < kana.length; i++){
        $(".card-container").append('<div class="card cardBack"></div>');
    }
    cards = $(".card");
}

function assignkana(){
    // Assign characters to cards
    var shuffled = shuffleKana();
    for (var i = 0; i < shuffled.length; i++) {
        cards[i].textContent = shuffled[i];
        cards[i].value = shuffled[i];
    }
}

// Checks if str contains letters (a-z or A-Z)
function isLetter(str){
    return(/[a-zA-Z]/).test(str);
}

// Sets click listeners for cards
function setCardListeners(){
    for (var i = 0; i < cards.length; i++){
        // Add click listeners
        cards[i].addEventListener("click", function(){
            if (chosen.length >= 0 && chosen.length < maxCards) {
                // Reveal Card
                revealCard(this);
                // Save card
                chosenCards.push(this)
                // Save card value
                chosen.push(this.value);
                console.log(this.value + " " + typeof(this.value))
                if (chosen.length > 1){
                    // Check if two chosen cards match
                    setTimeout(checkMatch, 1000, chosen);
                }    
            }
        })
    }
}

// Reveals cards after the user clicks on them
function revealCard(card){
    card.classList.remove("cardBack");
}

// Hides the values of all cards on the board
function hideCards(){
    for (var i = 0; i < cards.length; i++) {
        cards[i].classList.add("cardBack"); 
    }
}

// Remove cards that have been successfully matched
function removeCards(arr) {
    for (var i = 0; i < arr.length; i++) {
        arr[i].classList.add("removed"); 
    }
}

// Check if cards match
function checkMatch(arr){
    if (compare(arr[0], arr[1])) {
        updateScore();
        removeCards(chosenCards);
    }
    resetTurn();
}

// Gets the the index of the val within kana[]
function getIndex(val){
    for (var i = 0; i < kana.length; i++){
        if (kana[i] === val){
            return i;
        }
        false;
    }
}

// Compares the values of two card choices
function compare(a, b) {
    // Check if letter
    if (isLetter(a)){ 
        // Check if kana character comes after its associated romaji
        return (getIndex(a) === (getIndex(b)-1));
    }
    else if (isLetter(b)){
        return (getIndex(b) === (getIndex(a)-1));
    }
    false;
}

// Shuffles the array of kana characters and romaji
function shuffleKana(){
    arr = [];
    for (var i = 0; i < kana.length; i++)
    {
        arr.push(kana[i]);
    }
    for (let i = arr.length - 1; i >= 0; i--){
        const j = Math.floor(Math.random() * i);
        const temp = arr[i];
        arr[i] = arr[j];
        arr[j] = temp;
    }
    return arr;
}

// Updates the score and adds a point
function updateScore(){
    score += 1;
    $("#score").text("Score: " + score);
}

// Clears the board of all cards
function clearBoard(){
    $(".card-container").empty();
}

// Resets turn and update boards to currently selecteed kana
function resetTurn() {
    chosen = [];
    chosenCards = [];
    hideCards();
}

// Resets turn and update boards to currently selected kana
function resetBoard() {
    score = 0;
    clearBoard();
    addCards();
    assignkana();
    setCardListeners();
    console.log(kana);
}