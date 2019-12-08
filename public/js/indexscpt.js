var hambur = document.getElementById('nav-burger-menu');
var hamburClicked = document.getElementById('list-for-emp');
var hamburRespon = document.getElementById('respon-menu');
var hamburResponClicked = document.getElementById('responClicked');

function openmenuhambur() {
  if (hambur.style.display === 'none') {
    hambur.style.display = 'block';
  } else {
    hambur.style.display = 'none';
  }
}

function openResponHambur() {
  if (hamburRespon.style.display === 'none') {
    hamburRespon.style.display = 'grid';
  } else {
    hamburRespon.style.display = 'none';
  }
}

hamburClicked.addEventListener('click', openmenuhambur);
hamburResponClicked.addEventListener('click', openResponHambur);
