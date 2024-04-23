

function chkClick() {
    document.querySelector('.status').textContent = "Cunts " + clicks;
    clicks++;
}

let clicks = 0;
document.querySelector('.btn').addEventListener('click', chkClick);

