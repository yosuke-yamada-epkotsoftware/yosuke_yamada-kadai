const quiz = [
  {
    question: '任天堂の最新ゲームハードの名前は？',
    answers: [
      'PlayStation 5',
      'Nintendo Swich',
      'Xbox series X',
      'ドリームキャスト'
    ],
    correct: 'Nintendo Swich'
  },

  {
    question: 'PlayStation 5の定価(税抜)は？',
    answers: [
      '49980円',
      '59980円',
      '44980円',
      '54980円'
    ],
    correct: '49980円'
  },

  {
    question: 'ニュージーランドの首都は？',
    answers: [
      'オークランド',
      'ウェリントン',
      'クライストチャーチ',
      'クイーンズタウン'
    ],
    correct: 'ウェリントン'
  },
  {
    question: '調味料「さしすせそ」の「せ」の調味料に当てはまるのは次のうちどれ？',
    answers: [
      'セージ粉末',
      'セロリ粉末',
      '塩',
      '醤油'
    ],
    correct: '醤油'
  }

];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setupQuiz = () => {
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while(buttonIndex < buttonLength ){
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}
setupQuiz();

const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解！');
    score++;
  } else {
    window.alert('不正解！');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    //問題数があれば実行
    setupQuiz();
  } else {
    //問題数がなければ実行
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'でした！');
  }
};


//クリックしたら正誤判定
let handlerIndex =0;

while(handlerIndex < buttonLength){
  $button[handlerIndex].addEventListener('click', (e)=> {
    clickHandler(e);
  });
  handlerIndex++;
}
