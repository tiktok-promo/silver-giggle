const time = 500; //ms
const step = 789;

function outNum(num, elem) {
    let l = document.querySelector('#' + elem);
    n = 6903;
    // ?step == 0 ? step = 1 : step = step;
    let t = Math.round(time / (num / step));
    let interval = setInterval(() => {
        n = n + step;
        if (n ==num) {
            clearInterval(interval);
        }
        l.innerHTML = n;
    },
        t);
}

outNum(500, 'out-1');
