function start(){
    hide_all();
}
//hide all work samples
function hide_all(){
    document.getElementById('ws1').style.display = 'none';
    document.getElementById('ws2').style.display = 'none';
    document.getElementById('ws3').style.display = 'none';
}
//work sample 1
function open1(){
    document.getElementById('ws1').style.display = '';
    document.getElementById('ws2').style.display = 'none';
    document.getElementById('ws3').style.display = 'none';
}
//work sample 2
function open2(){
    document.getElementById('ws1').style.display = 'none';
    document.getElementById('ws2').style.display = '';
    document.getElementById('ws3').style.display = 'none';
}
//work sample 3
function open3(){
    document.getElementById('ws1').style.display = 'none';
    document.getElementById('ws2').style.display = 'none';
    document.getElementById('ws3').style.display = '';
}