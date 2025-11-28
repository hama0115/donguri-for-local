/* 開発中
// 「どんぐりロゴ」をアニメーションさせる
const element = document.querySelector('.donguri-logo');
element.animate(
  {
    transform: [
      'translateX(0px) rotate(0deg)', // 開始値
      'translateX(200px) rotate(1440deg)' // 終了値
    ]
  },
  {
    duration: 5000, // ミリ秒指定
    iterations: Infinity, // 繰り返し回数
    direction: 'alternate', // 繰り返し挙動
    easing: 'linear' // 加減速種類
  }
);

// ランダムで色を変更する
const colors = ['#8B4513', '#A0522D', '#D2691E', '#CD853F', '#ffd700'];
const getRandomColor = () => colors[Math.floor(Math.random() * colors.length)];

setInterval(() => {
  element.style.color = getRandomColor();
}, 10000);
*/