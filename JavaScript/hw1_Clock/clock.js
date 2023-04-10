let input = prompt('Please, type your name.');
let name = document.getElementById('myName');

name.innerHTML = input;

function showTime(){
  let clock = document.getElementById('myClock');

  let now = new Date();
  let day = now.getDate();
  let month = now.getMonth()+1;
  let year = now.getFullYear();
  let weekDay = now.getDay();

  const DAYS = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']

  let hour = now.getHours();
  let min = now.getMinutes();
  let sec = now.getSeconds();

  let time = `
    ${day}.${month}.${year} ${DAYS[weekDay]}, 
    ${hour}:${min}:${sec}
  `;
  clock.innerHTML = time;

  setTimeout(showTime, 1000);
}

showTime();